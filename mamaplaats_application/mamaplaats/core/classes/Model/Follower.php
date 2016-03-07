<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Follower extends AutoModeler_ORM {

	protected $_table_name = 'followers';
	protected $_data = array(
		'id' => NULL,
		'follower_id' => NULL,
		'following_id' => NULL,
	);
	protected $_rules = array(
		'id' => array(
			array('digit'),
		),
		'follower_id' => array(
			array('digit'),
			array('not_empty'),
		),
		'following_id' => array(
			array('digit'),
			array('not_empty'),
		),
	);

	public function get_user_following($follower_id)
	{
		$following_info = $this->_get_following_info($follower_id);

		// Get the people following the follower
		$following_follower_ids = array();
		foreach ($following_info as $following)
		{
			if ($following['following_id'] == $follower_id)
			{
				$following_follower_ids[] = $following['follower_id'];
			}
		}

		$user_following = array();
		foreach ($following_info as $following)
		{
			if ($following['follower_id'] == $follower_id)
			{
				$user_following[] = array_merge($following, array(
					'following_back' => in_array($following['following_id'], $following_follower_ids)
				));
			}
		}

		return $user_following;
	}

	public function get_user_followers($following_id)
	{
		$following_info = $this->_get_following_info($following_id);

		// Get the people the user is following
		$following_ids = array();
		foreach ($following_info as $following)
		{
			if ($following['follower_id'] == $following_id)
			{
				$following_ids[] = $following['following_id'];
			}
		}

		$followers = array();
		foreach ($following_info as $following)
		{
			if ($following['following_id'] == $following_id)
			{
				$followers[] = array_merge($following, array(
					'following_back' => in_array($following['follower_id'], $following_ids)
				));
			}
		}

		return $followers;
	}

	public function get_follow_recommendations($user_id, $limit = 5)
	{
		// Get the user and children info
		$user = $this->_db->query(Database::SELECT, "SELECT pregnancy_due_date FROM wp_users WHERE wp_users.ID = ".$user_id)->current();
		$children = $this->_db->query(Database::SELECT, "SELECT id, birthdate FROM wp_user_children WHERE wp_user_children.wp_user_id = ".$user_id);

		// Combine the children year query
		$year_children = array();
		foreach ($children as $child)
		{
			$year = date('Y', strtotime($child['birthdate']));
			$year_children[] = "(wp_user_children.birthdate BETWEEN '".$year."-01-01' AND '".$year."-12-31')";
		}

		$year_children = ( ! empty($year_children)) ? 'AND ('.implode(' OR ', $year_children).')' : '';
		$pregnant = ($user['pregnancy_due_date'] >= date('Y-m-d')) ? "AND pregnancy_due_date >= '".date('Y-m-d')."'" : '';
		$count_children = (count($children) > 0) ? 'HAVING count_children = '.count($children) : '';

		$start_date = date('Y-m-d 00:00:00', strtotime('-1 month'));
		$end_date = date('Y-m-d 00:00:00');

		return $this->_db->query(Database::SELECT, "
			SELECT wp_users.ID, wp_users.user_nicename, wp_users.display_name, wp_users.biography, COUNT(wp_user_children.id) count_children
			FROM wp_users
			LEFT JOIN wp_user_children ON (wp_user_children.wp_user_id = wp_users.ID)
			WHERE (
				wp_users.ID IN (SELECT post_author FROM wp_posts WHERE post_date BETWEEN '".$start_date."' AND '".$end_date."')
				OR wp_users.ID IN (SELECT user_id FROM wp_comments WHERE comment_date BETWEEN '".$start_date."' AND '".$end_date."')
			)
			AND (wp_users.ID NOT IN (SELECT following_id FROM followers WHERE follower_id = ".$user_id."))
			AND wp_users.ID != ".$user_id."
			".
			$year_children.
			$pregnant."
			GROUP BY wp_users.ID
			".$count_children."
			LIMIT ".$limit
		)->as_array();
	}

	public function check_if_follower_is_following($follower_id, $following_id)
	{
		$query = DB::select()
			->where('follower_id', '=', $follower_id)
			->and_where('following_id', '=', $following_id);

		$this->load($query);
		if ($this->loaded())
		{
			return TRUE;
		}

		return FALSE;
	}

	public function toggle_follow($follower_id, $following_id)
	{
		// You can't follow yourself
		if ($follower_id == $following_id)
		{
			return FALSE;
		}

		// do to wordpress gmt bug we reset the timezone back to amsterdam
		date_default_timezone_set('Europe/Amsterdam');
		$trigger_model = new Model_Point_Trigger();

		$query = DB::select()
			->where('follower_id', '=', $follower_id)
			->and_where('following_id', '=', $following_id);

		$this->load($query);
		if ($this->loaded())
		{
			$this->delete();

			$trigger_model->trigger_save('stopped_follower', $following_id, 'user_'.$follower_id);

			return FALSE;
		}
		else
		{
			$this->follower_id = $follower_id;
			$this->following_id = $following_id;
			$this->save();

			$trigger_model->trigger_save('follower', $following_id, 'user_'.$follower_id);

			return TRUE;
		}
	}

	private function _get_following_info($follow_id)
	{
		$follow_id = $this->_db->escape($follow_id);

		return $this->_db->query(Database::SELECT, "
			SELECT
				follower.ID as follower_id,
				follower.user_nicename as follower_nicename,
				follower.display_name as follower_display_name,
				follower.biography as follower_biography,
				following.ID as following_id,
				following.user_nicename as following_nicename,
				following.display_name as following_display_name,
				following.biography as following_biography
			FROM followers
			JOIN wp_users as follower ON (follower.ID = followers.follower_id)
			JOIN wp_users as following ON (following.ID = followers.following_id)
			WHERE follower_id = ".$follow_id." OR following_id = ".$follow_id."
		")->as_array();
	}
}