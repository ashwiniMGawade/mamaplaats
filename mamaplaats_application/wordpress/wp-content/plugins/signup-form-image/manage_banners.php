<?php
function manage_banners()
{

	ob_start();
	global $wpdb;

	if (isset($_GET['action']) AND  $_GET['action'] == 'delete')
	{
		$id		= sanitize_text_field($_GET['bannerid']);
		if ( ! empty($id))
		{
			$wpdb->query("DELETE FROM signup_images WHERE `id` = '$id';");
			redirect(get_bloginfo('wpurl').'/wp-admin/admin.php?page=manage_banners');
		}
	}
	$sign_up_banners = $wpdb->get_results( "SELECT * FROM signup_images" );
	?>
	<div class="manage-banner-wrap">
		<ul>
			<li class="title">
				<div class="img-title">Title</div>
				<div class="img-title">Slug</div>
				<div class="action" class="img-action">Action</div>
			</li>
			<?php
			foreach ($sign_up_banners as $banner)
			{
				?>
				<li class="img-details">
					<div class="banner-title">
						<?php echo $banner->title;?>
					</div>
					<div class="banner-slug">
						<?php echo $banner->slug;?>
					</div>

					<div class="banner-action">
						<a href="?page=banner&bannerid=<?php echo $banner->id?>">Edit</a>
						<a href="?page=manage_banners&action=delete&bannerid=<?php echo $banner->id?>">Delete</a>
					</div>

				</li>
			<?php } ?>
		</ul>
	</div>
<?php
}
?>