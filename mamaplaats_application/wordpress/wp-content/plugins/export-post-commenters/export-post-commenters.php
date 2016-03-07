<?php
/*
Plugin Name: Export Post Commenter
Description: A test plugin to demonstrate wordpress functionality
Author: Team Web-Flight
Version: 0.1
*/
session_start();
add_action( 'post_submitbox_misc_actions', 'btn_export_users_to_mailchimp' );

function btn_export_users_to_mailchimp(){
	$post_id = '';
	if( ! empty($_GET['post']))
	{
		$post_id = $_GET['post'];
	}

	$export_url = get_bloginfo('wpurl').'/wp-admin/admin.php?page=mailchimp_subscription&post_id='.$post_id;

	$html  = '<div id="major-publishing-actions" style="overflow:hidden">';
	$html .= '<div id="publishing-action">';
	$html .= '<a href="'.$export_url.'" class="button button-primary button-large">Exporteer inschrijvingen</a>';
	$html .= '</div>';
	$html .= '</div>';
	echo $html;
}

function mailchimp_subscription()
{
	global $wpdb;

	if ( ! empty($_GET['post_id']))
	{
		$id	= sanitize_text_field($_GET['post_id']);
		$redirect_url = get_bloginfo('wpurl').'/wp-admin/post.php?post='.$id.'&action=edit';

		$query = "SELECT u.first_name, u.middle_name, u.last_name, u.gender, u.birthdate, u.pregnancy_due_date,
c.comment_author_email as user_email, c.comment_content, p.post_title
					FROM `wp_comments` as c
					LEFT JOIN wp_posts p ON c.comment_post_ID = p.ID
					LEFT JOIN wp_users u ON u.id = c.user_id
					WHERE p.ID = '$id'";
		$users = $wpdb->get_results( $query, ARRAY_A );

		include('MailchimpClass.php');

		if( ! empty($users))
		{
			if(empty($users[0]['post_title']))
			{
				$_SESSION['mailchimp_response'] = array('type'=>'error', 'message'=>'Invalid post title');
				redirect($redirect_url);
			}


			$mailchimp_config  = require_once("./../../application/config/mailchimp.php");
			$api_key = $mailchimp_config['api_key'];
			$list_id = $mailchimp_config['list_id'];

			$mail_chimp = new MailchimpClass($api_key);
			$result = $mail_chimp->processGroup($list_id, $users[0]['post_title']);

			if(isset($result['type']) AND $result['type']=='success')
			{
				$save_user_error = 0;
				foreach($users as $user)
				{
					if( ! $mail_chimp->addUsers($list_id, $result['grouping_name'], $result['groups'], $user))
					{
						$save_user_error = 1;
					}
				}

				$result = array();
				if($save_user_error == 0)
				{
					$result['type'] = 'success';
					$result['message'] = 'Users added successfully!';
				}
				else
				{
					$result['type'] = 'notice';
					$result['message'] = 'Users cannot be added completely';
				}
			}
		}
		else
		{
			$result['type'] = 'error';
			$result['message'] = 'No user to add';
		}

		$_SESSION['mailchimp_response'] = $result;

		redirect($redirect_url);
	}
}
add_action( 'init', 'mailchimp_subscription' );
function my_admin_error_notice() {
	$class = ($_SESSION['mailchimp_response']['type']=='success') ? 'updated' : 'error';
	$message = $_SESSION['mailchimp_response']['message'];
	echo"<div class=\"$class\"> <p>$message</p></div>";
	unset($_SESSION['mailchimp_response']);
}

if(isset($_SESSION['mailchimp_response']))
{
	add_action( 'admin_notices', 'my_admin_error_notice' );
}
?>