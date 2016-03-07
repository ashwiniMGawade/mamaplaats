<?php

class Factory_Profile
{

    public static function render($request, $user, $view)
    {
        $core_config = Kohana::$config->load('core_config');
        $content = Kostache::factory()->render($view);

        $profile_progress_data = Factory_User::profile_progress()->stages_details($user->id);
        $unread_inbox_message_count = Factory_Repository::conversation()->get_unread_inbox_message_count($user->id);
        return new View_User_Profile($request, $user, $core_config, $content, $profile_progress_data, Request::current(), $unread_inbox_message_count[0]['unread_message_count']);
    }
}