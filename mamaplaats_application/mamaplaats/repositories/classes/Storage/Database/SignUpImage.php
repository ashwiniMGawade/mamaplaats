<?php

class Storage_Database_SignUpImage extends Storage_Database_Translate implements Repository_SignUpImage
{

    protected $_table_name = 'signup_images';
    protected $_entity_class = 'Entity_SignUpImage';

    protected $_field_translate = array(
        'ID' => 'id',
        'title' => 'title',
        'page_title' => 'page_title',
        'image' => 'image',
        'slug' => 'slug',
        'double_opt' => 'double_opt',
        'double_opt_text' => 'double_opt_text',
        'mailchimp_group' => 'mailchimp_group',
        'phone_number' => 'phone_number',
        'phone_number_text' => 'phone_number_text',
        'advertiser_id' => 'advertiser_id',
    );

    public function load_object(array $parameters)
    {
        $image = parent::load_object($parameters);

        return $image;
    }

    public function get_group_list()
    {
        $query = $this->_database->query(Database::SELECT, "
			SELECT
			id, mailchimp_group
			FROM signup_images
		");

        $group_list = array();
        foreach ($query as $result) {
            if (!empty($result['mailchimp_group'])) {
                $group_list[] = $result['mailchimp_group'];
            }
        }

        return $group_list;
    }
} 