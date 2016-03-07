<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('photo_contest_list', 'fotowedstrijd(/<contest_id>)/bekijk')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'list',
));

Route::set('photo_contest_upload', 'fotowedstrijd(/<contest_id>)/meedoen')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'upload',
));

Route::set('photo_contest_terms', 'fotowedstrijd/<contest_id>/voorwaarden')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'terms',
));

Route::set('photo_contest_rewards', 'fotowedstrijd(/<contest_id>)/prijzen')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'rewards',
));

Route::set('photo_contest_closed', 'fotowedstrijd/geen-actief')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'closed',
));

Route::set('photo_contest_sponsor_list', 'fotowedstrijd/sponsors')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'sponsor',
	'action'     => 'list',
));

Route::set('photo_contest_winner_list', 'fotowedstrijd/winnaars')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'winner',
	'action'     => 'list',
));

Route::set('photo_contest_sponsor_index', 'fotowedstrijd(/<contest_id>)/sponsor')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'sponsor',
	'action'     => 'index',
));

Route::set('photo_contest_home', 'fotowedstrijd')
	->defaults(array(
	'directory' => 'Photo',
	'controller' => 'contest',
	'action'     => 'home',
));

Route::set('photo_contest_entry_index', 'fotowedstrijd/bekijk/foto/<entry_id>')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'entry',
	'action'     => 'index',
));

Route::set('photo_contest_entry_share', 'fotowedstrijd/deel/foto/<entry_id>')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'entry',
	'action'     => 'share',
));

Route::set('photo_contest_entry_vote', 'fotowedstrijd/stem/foto/<entry_id>')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'entry',
	'action'     => 'vote',
));

Route::set('photo_contest_entry_confirm', 'fotowedstrijd/confirmeer/foto/<entry_id>')
	->defaults(array(
	'directory' => 'Photo/Contest',
	'controller' => 'entry',
	'action'     => 'confirm',
));

Route::set('api_photo_contest', 'api/photo_contest(/<contest_id>)')
	->defaults(array(
	'directory' => 'Api/Photo',
	'controller' => 'contest',
	'action'     => 'request',
));

Route::set('api_photo_contest_file', 'api/photo_contest/<contest_id>/file/<type>')
	->defaults(array(
	'directory' => 'Api/Photo',
	'controller' => 'contest',
	'action'     => 'file',
));

Route::set('api_photo_contest_entries', 'api/photo_contest/<contest_id>/entries')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'entry',
	'action'     => 'request',
));

Route::set('api_photo_contest_rewards', 'api/photo_contest/<contest_id>/rewards')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'reward',
	'action'     => 'request',
));

Route::set('api_photo_contest_votes', 'api/photo_contest/<contest_id>/votes')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'vote',
	'action'     => 'request',
));

Route::set('api_photo_contest_reward_file', 'api/reward/<reward_id>/file')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'reward',
	'action'     => 'reward_file',
));

Route::set('api_photo_contest_entry', 'api/entry(/<entry_id>)')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'entry',
	'action'     => 'request',
));

Route::set('api_photo_contest_reward', 'api/reward(/<reward_id>)')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'reward',
	'action'     => 'request',
));

Route::set('api_photo_contest_vote', 'api/vote(/<vote_id>)')
	->defaults(array(
	'directory' => 'Api/Photo/Contest',
	'controller' => 'vote',
	'action'     => 'request',
));