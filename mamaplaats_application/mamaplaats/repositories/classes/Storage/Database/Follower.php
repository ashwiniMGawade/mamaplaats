<?php

class Storage_Database_Follower extends Storage_Database implements Repository_Follower
{
	protected $_table_name = 'followers';
	protected $_entity_class = 'Entity_Follower';

	public function check_if_following($follower_id, $following_id)
	{
		return DB::query(Database::SELECT, "
			SELECT if(following_id = '".$following_id."', true, false) AS is_followed FROM followers
			WHERE follower_id = '".$follower_id."'
			AND following_id = '".$following_id."'
		")->execute()->get('is_followed');
	}

	public function add_following($user_id, $following_id)
	{
		return DB::query(Database::INSERT, "
			INSERT INTO followers (follower_id, following_id)
			VALUES ('".$user_id."', '".$following_id."')
		")->execute();
	}

	public function delete_following($user_id, $following_id)
	{
		return DB::query(Database::DELETE, "
			DELETE FROM followers
			WHERE following_id = '".$following_id."'
			AND follower_id = '".$user_id."'
		")->execute();
	}

	public function get_following($follower_id)
	{
		$query = $this->_database->query(Database::SELECT, "
			SELECT wp_users.*, wp_users.id,
			(SELECT count(*) FROM followers WHERE following_id = wp_users.id) AS followers_count,
			(SELECT count(*) FROM wp_comments WHERE user_id = wp_users.id) AS comments_count
			FROM wp_users
			INNER JOIN followers AS flr ON (wp_users.ID = following_id)
			WHERE follower_id = ".$follower_id);

		$users = array();
		foreach ($query as $user_array)
		{
			$user = $this->_user_array_to_entity($user_array);
			$user->followers_count = $user_array['followers_count'];
			$user->comments_count = $user_array['comments_count'];
			$users[] = $user;
		}

		return $users;
	}

	public function get_followers($following_id)
	{
		$query = $this->_database->query(Database::SELECT, "
			SELECT wp_users.*, flng.id AS following_back,
			(SELECT count(*) FROM followers WHERE following_id = wp_users.id) AS flr_follower_count,
			(SELECT count(*) FROM wp_comments WHERE user_id = wp_users.id) AS flr_comment_count
			FROM wp_users
			INNER JOIN followers AS flr ON (wp_users.ID = flr.follower_id)
			LEFT JOIN followers AS flng ON (flr.follower_id = flng.following_id AND flng.follower_id = $following_id)
			WHERE flr.following_id = ".$following_id);



		$users = array();
		foreach ($query as $user_array)
		{
			$user = $this->_user_array_to_entity($user_array);
			$user->following_back = $user_array['following_back'];
			$user->flr_follower_count = $user_array['flr_follower_count'];
			$user->flr_comment_count = $user_array['flr_comment_count'];

			$users[] = $user;
		}
		return $users;
	}

	public function get_follow_suggestions($follower_id, $is_pregnant, $child_amount, $child_start_date, $child_end_date, $limit = 10)
	{
		$pregnant_sql = '';
		if ($is_pregnant == TRUE)
		{
			$pregnant_sql = 'AND pregnancy_due_date >= '.$this->_database->escape(date('Y-m-d'));
		}

		$child_sql = '';
		$child_amount_sql = '';
		if ($child_amount > 0)
		{
			$child_start_date 	= $this->_database->escape(date('Y-01-01', strtotime($child_start_date)));
			$child_end_date 	= $this->_database->escape(date('Y-12-31', strtotime($child_end_date)));

			$child_sql 			= 'AND (wp_user_children.birthdate BETWEEN '.$child_start_date.' AND '.$child_end_date.')';
			$child_amount_sql 	= 'HAVING count_children = '.$child_amount;
		}

		$activity_start = date('Y-m-d 00:00:00', strtotime('-1 month'));

		$query = $this->_database->query(Database::SELECT, "
			SELECT wp_users.*, COUNT(wp_user_children.id) count_children,
			(SELECT count(*) FROM followers WHERE following_id = wp_users.id) AS followers_count,
			(SELECT count(*) FROM wp_comments WHERE user_id = wp_users.id) AS comments_count
			FROM wp_users
			LEFT JOIN wp_user_children ON (wp_user_children.user_id = wp_users.ID)
			WHERE (
				wp_users.ID IN (SELECT post_author FROM wp_posts WHERE post_date > '".$activity_start."')
				OR wp_users.ID IN (SELECT user_id FROM wp_comments WHERE comment_date > '".$activity_start."')
			)
			AND (wp_users.ID NOT IN (SELECT following_id FROM followers WHERE follower_id = ".$follower_id."))
			AND wp_users.ID != ".$follower_id."
			".$child_sql."
			".$pregnant_sql."
			GROUP BY wp_users.ID
			".$child_amount_sql."
			LIMIT ".$limit
		);

		$users = array();
		foreach ($query as $user_array)
		{
			$user = $this->_user_array_to_entity($user_array);
			$user->followers_count = $user_array['followers_count'];
			$user->comments_count = $user_array['comments_count'];
			$users[] = $user;
		}

		return $users;
	}

	private function _user_array_to_entity(array $user)
	{
		return new Entity_User(array_merge($user, array(
			'id' 	=> $user['ID'],
            'email' => $user['user_email'],
			'slug' 	=> $user['user_nicename'],
		)));
	}

	public function get_following_users($follower_id)
	{
		$query = $this->_database->query(Database::SELECT, "SELECT * FROM followers WHERE followers.follower_id = $follower_id");

		$users = array();
		foreach ($query as $user)
		{
			$users[] = $user['following_id'];
		}

		return $users;
	}
}