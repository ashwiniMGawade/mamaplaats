<?php

class Usecase_User_UpdatesFollowing
{

    /**
     * @var Repository_Follower
     */
    private $_repository_follower;

    /**
     * @var Repository_User
     */
    private $_repository_user;

    /**
     * @var $_message class
     */
    private $_message;

    public function __construct($repository_follower, $repository_user, $message)
    {
        $this->_repository_follower = $repository_follower;
        $this->_repository_user = $repository_user;
        $this->_message = $message;
    }

    public function execute(Entity_User $user, $following_id)
    {
        $following_users = $this->_repository_follower->get_following($user->id);

        foreach ($following_users as $following_user) {
            if ($following_user->id == $following_id) {
                $this->_repository_follower->delete_following($user->id, $following_id);
                return FALSE;
            }
        }

        $this->_repository_follower->add_following($user->id, $following_id);

        $this->_send_new_follower_notification_mail($user, $following_id);

        return TRUE;
    }

    private function _send_new_follower_notification_mail($user, $following_id)
    {
        $followed_user_details = $this->_repository_user->load_object(array(
            array('id', '=', $following_id)
        ));

        $this->_message->send(
            'SendNewFollowerNotification',
            array(
                'user' => $user,
                'subject' => ucwords($followed_user_details->display_name) . ', iemand volgt jou op Mamaplaats',
                'receiver' => $followed_user_details->email,
                'sender' => 'info@mamaplaats.nl',
            )
        );

    }

}