<?php

class Usecase_Guest_GetsSearchAdviseList
{

    /**
     * @var Repository_Advise
     */
    private $_repository_advise;

    /**
     * @var Repository_Category
     */
    private $_repository_category;

    /**
     * @var Item_Nester
     */
    private $_item_nester;

    public function __construct($repository_advise, $repository_category, $item_nester)
    {
        $this->_repository_advise = $repository_advise;
        $this->_repository_category = $repository_category;
        $this->_item_nester = $item_nester;
    }

    public function execute($category_slug, $query = array('query' => ''), $limit, $offset = 0)
    {
        // Don't load more than 200
        $max_records = 200;
        if ($limit > $max_records) {
            $limit = $max_records;
        }

        if (!empty($category_slug)) {
            $search_items_list = $this->_get_categorywise_search_list($category_slug, $query, $limit, $offset);
        } else {
            $search_items_list = $this->_get_search_list($query, $limit, $offset);
        }
        return $search_items_list;
    }

    private function _get_categorywise_search_list($category_slug, $query, $limit, $offset)
    {
        $search_items_list = array();
        $parent = $this->_repository_category->load_object(array(array('slug', '=', $category_slug)));

        if (!empty($parent)) {
            $categories = $this->_repository_category->load_set(array());
            $category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);
            $search_items_list = $this->_repository_advise->load_advies_by_category_id(
                array(
                    array('advise.post_status', '=', 'publish'),
                    array('advise.post_title', 'like', '%' . html_entity_decode($query['query']) . '%'),
                ),
                $category_ids,
                $limit,
                $offset
            );
        }

        return $search_items_list;
    }

    private function _get_search_list($query, $limit, $offset)
    {
        $search_items_list = array();
        $search_items_list = $this->_repository_advise->load_set_advanced(
            array(
                array('advise.post_status', '=', 'publish'),
                array('advise.post_title', 'like', '%' . html_entity_decode($query['query']) . '%'),
            ),
            null,
            'ASC',
            $limit,
            $offset
        );
        return $search_items_list;
    }

}