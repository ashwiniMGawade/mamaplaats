<?php
function banner_form()
{
    ob_start();
    global $wpdb;

    $id = '';
    $slug = '';
    $title = '';
    $page_title = '';
    $image = '';
    $error = '';
    $double_opt = '';
    $double_opt_text = '';
    $mailchimp_group = '';
    $phone_number = '';
    $phone_number_text = '';
    $advertiser_id = '';

    /*
     declare absolute path to load mailchimp repositories
     */
    $mailchimp_abosolute_path = "./../../";
    require_once($mailchimp_abosolute_path . "mamaplaats/repositories/vendor/Mailchimp/Mailchimp.php");
    $mailchimp_config = require_once($mailchimp_abosolute_path . "application/config/mailchimp.php");

    $api_key = $mailchimp_config['api_key'];
    $list_id = $mailchimp_config['list_id'];

    $mailchimp = new Mailchimp($api_key);
    $mailchimp_lists = $mailchimp->lists->interestGroupings($list_id);

    $mailchimp_groups = array();

    if (!empty($mailchimp_lists)) {
        foreach ($mailchimp_lists as $key => $grouping) {
            $list_name = $grouping['name'];

            if ($grouping['name'] != 'Doelgroep') {
                continue;
            }

            foreach ($grouping['groups'] as $group) {
                $group_name = $group['name'];
                $mailchimp_groups[$group_name] = $group_name;
            }
        }
    }

    $class_name = 'hide';
    $class_name_phone = 'hide';

    if (isset($_GET['bannerid'])) {
        $id = $wpdb->Escape($_GET['bannerid']);
        $banners = $wpdb->get_row("SELECT * FROM signup_images WHERE id = '$id' ");

        $id = $banners->id;
        $slug = $banners->slug;
        $title = $banners->title;
        $page_title = $banners->page_title;
        $image = $banners->image;
        $advertiser_id = $banners->advertiser_id;

        $double_opt = $banners->double_opt;
        if ($double_opt) {
            $class_name = 'show';
        }
        $double_opt_text = $banners->double_opt_text;

        $phone_number = $banners->phone_number;
        if ($phone_number) {
            $class_name_phone = 'show';
        }

        $phone_number_text = $banners->phone_number_text;

        $mailchimp_group = $banners->mailchimp_group;
    }

    if (!empty($_POST)) {
        $id = sanitize_text_field($_POST['id']);
        $slug = sanitize_text_field($_POST['slug']);
        $title = sanitize_text_field($_POST['title']);
        $page_title = sanitize_text_field($_POST['page_title']);
        $image = sanitize_text_field($_POST['image_name']);
        $advertiser_id = sanitize_text_field($_POST['advertiser_id']);

        $double_opt = sanitize_text_field($_POST['double_opt']);
        $double_opt_text = $_POST['double_opt_text'];

        $phone_number = sanitize_text_field($_POST['phone_number']);
        $phone_number_text = $_POST['phone_number_text'];

        $mailchimp_group = sanitize_text_field($_POST['mailchimp_group']);

        if (!function_exists('wp_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }

        if (strstr($_FILES['image']['type'], "jpeg")) {
            $file_type = "jpg";
        }

        if (strstr($_FILES['image']['type'], "png")) {
            $file_type = "png";
        }
        if (strstr($_FILES['image']['type'], "gif")) {
            $file_type = "gif";
        }

        $error = '';

        if (empty($title)) {
            $error .= '<p class="form-errors">Title should not be empty.</p>';
        } elseif (empty($file_type) AND !empty($_FILES['image'][tmp_name])) {
            $error .= '<p class="form-errors">Invalid file type!</p>';
        } elseif (empty($slug)) {
            $error .= '<p class="form-errors">Slug should not be empty</p>';
        }

        if ($double_opt == 1) {
            $class_name = 'show';
            if (empty($double_opt_text)) {
                $error .= '<p class="form-errors">Double opt in text should not be empty</p>';
            } elseif (empty($mailchimp_group)) {
                $error .= '<p class="form-errors">Select group should not be empty</p>';
            }
        }

        if ($phone_number == 1) {
            $class_name_phone = 'show';
            if (empty($phone_number_text)) {
                $error .= '<p class="form-errors">Phone number in text should not be empty</p>';
            }
        }

        if (!empty($advertiser_id) && !is_numeric($advertiser_id)) {
            $error .= '<p class="form-errors">Advertiser ID should be numeric.</p>';
        }

        if (empty($error)) {
            $banner_img = $_FILES['image'];
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($banner_img, $upload_overrides);

            if (!isset($movefile['error'])) {
                $existing_image_url = $movefile['url'];
            }

            if (empty($id)) {
                $wpdb->query("INSERT INTO signup_images(`title`, `page_title`, `slug`, `image`, `double_opt`, `double_opt_text`, `phone_number`, `phone_number_text`, `mailchimp_group`, `advertiser_id`) VALUES ('$title', '$page_title','$slug', '$existing_image_url', '$double_opt', '$double_opt_text', '$phone_number', '$phone_number_text', '$mailchimp_group', '$advertiser_id')");
            } else {
                if (empty($existing_image_url) AND !empty($banners->image)) {
                    $existing_image_url = $banners->image;
                }

                $wpdb->query("UPDATE signup_images SET `title` = '$title' , `page_title` = '$page_title' ,`slug` = '$slug', image = '$existing_image_url', `double_opt` = '$double_opt', `double_opt_text` = '$double_opt_text', `phone_number` = '$phone_number', `phone_number_text` = '$phone_number_text', `mailchimp_group` = '$mailchimp_group', `advertiser_id` = '$advertiser_id' WHERE `id` = '$id';");
            }

            redirect(get_bloginfo('wpurl') . '/wp-admin/admin.php?page=manage_banners');
        }
    }?>
    <div class="wrapper">
        <?= $error ?>
        <form name="signupimageform" method="post" action="" enctype="multipart/form-data">
            <h4>SignUp Banner Form</h4>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="image_name" value="<?php echo $image ?>">

            <div>
                <label>Page Header</label>
                <input type="text" name="page_title" placeholder="Page Header" value="<?php echo $page_title; ?>"
                       size="20">
            </div>
            <div>
                <label>Page Title</label>
                <input type="text" name="title" placeholder="Page Title" value="<?php echo $title; ?>" size="20">
            </div>
            <div>
                <label>Upload Image</label>
                <input type="file" name="image" value="<?php echo $image; ?>">
            <span class="preview-img">
               <img src="<?php echo $image ?>"/>
            </span>
            </div>
            <div>
                <label>Page Slug</label>
                <input type="text" name="slug" placeholder="Page Slug" value="<?php echo $slug; ?>" size="20">
            </div>
            <div>
                <label>Double opt in</label>
                <input type="checkbox" id="double_opt" name="double_opt" onclick="javascript: show();"
                       value="1" <?php echo ($double_opt == 1) ? 'checked' : ''; ?>  size="20">
                <textarea id="double_opt_text" name="double_opt_text" rows="5" cols="49" maxlength="250"
                          class="<?php echo $class_name; ?>"><?php echo $double_opt_text; ?></textarea>
            </div>

            <div id="mailchimp_group">
                <label>Select Group</label>
                <select name="mailchimp_group" style="margin-bottom: 20px;">
                    <option value=""> --Select Newsletter Group--</option>
                    <?php
                    $string = '';
                    foreach ($mailchimp_groups as $key => $value) {
                        $selected = '';

                        if ($key == $mailchimp_group) {
                            $selected = 'selected';
                        }

                        $string .= '<option value="' . $key . '" ' . $selected . '>' . $value . '</option>';
                    }

                    if (!empty($string)) echo $string; ?>
                </select>
            </div>
            <div>
                <label>Phone Number</label>
                <input type="checkbox" id="phone_number" name="phone_number" onclick="javascript: show_phone();"
                       value="1" <?php echo ($phone_number == 1) ? 'checked' : ''; ?>  size="20">
                <textarea id="phone_number_text" name="phone_number_text" placeholder="Phone Number" rows="5" cols="49"
                          maxlength="250"
                          class="<?php echo $class_name_phone; ?>"><?php echo $phone_number_text; ?></textarea>
            </div>
            <br/>

            <div>
                <label>Tracking Pixel</label>
                <input type="text" placeholder="Advertiser ID" name="advertiser_id"
                       value="<?php echo $advertiser_id; ?>" size="20">
            </div>

            <div class="submit">
                <input type="submit" name="Submit" value="Save" class="button"/>
            </div>
        </form>
    </div>
<?php
}

wp_enqueue_style('build-buy-signup-banner', plugins_url('/signup-form-image/css/style.css'));
wp_enqueue_script('build-buy-signup-banner', plugins_url('/signup-form-image/js/banner.js'));
?>
