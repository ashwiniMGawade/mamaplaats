<?php

class Activity_Converter {

	public function user_published_blog(Entity_User $user, Entity_Blog $blog)
	{
		$activity = new Entity_Activity;

		$activity->user_id	= $user->id;
		$activity->path		= 'blog/'.$blog->slug;
		$activity->title	= $user->first_name.' heeft een nieuw blogbericht geplaatst.';
		$activity->content	= $user->first_name.' heeft een nieuw blogbericht geplaatst.';
		$activity->date		= $blog->modified;

		return $activity;
	}
}