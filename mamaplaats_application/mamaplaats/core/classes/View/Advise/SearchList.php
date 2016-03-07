<?php

class View_Advise_SearchList extends View_Advise_Items
{

    use View_Helper_ImagePath;

    public $advise_list = '';

    public function __construct($advise_list)
    {
        $this->advise_list = $advise_list;
    }

    public function render()
    {
        $search_items = array();
        foreach ($this->advise_list as $search_item) {
            $media = $search_item['media'];
            $advise = $search_item['advise'];
            $user = $search_item['user'];

            $search_items[] = array(
                'val' => $advise->title,
                'image' => $this->get_image_legacy($media->path, 80, 55),
                'title' => $advise->title,
                'url' => '/advies/' . $advise->slug,
                'author' => $user->full_name(),
            );
        }

        return json_encode($search_items);
    }
}