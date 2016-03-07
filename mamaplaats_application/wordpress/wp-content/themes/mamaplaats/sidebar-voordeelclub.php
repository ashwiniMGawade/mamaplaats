<?php
    global $current_user;
     /* echo 'Username: ' . $current_user->user_login . "\n";
      echo 'User email: ' . $current_user->user_email . "\n";
      echo 'User first name: ' . $current_user->user_firstname . "\n";
      echo 'User last name: ' . $current_user->user_lastname . "\n";
      echo 'User display name: ' . $current_user->display_name . "\n";
      echo 'User ID: ' . $current_user->ID . "\n";*/
    
?>

<?php $counters = check_status(); ?>
<div class="clr"></div>
<div class="pt8px wapper">
<div>
<div>
<div class="fl"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/t1.jpg" alt="" width="18" height="108" /></div>
<div class="fl tmbg">
    
<div class="pt20px">
<div class="fl">
    <div class="whttxt30px"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/">MAMAPLAATS VOORDEEL CLUB</a></div>
    <div class="clr"></div>

    <div class="grytxt23px grytxtmrt18px">WELKOM <?php print_r(strtoupper($current_user->display_name)); ?></div>
    <div class="clr"></div>

</div>
<div class="fr tparea">
    <div class="fr shl mtm3px"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/hoe-werkt-het/">Hoe werkt het?</a></div>
<div class="clr"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dot.gif" alt="" width="1" height="18" /></div>
<div>
<div class="fl asharea pr10px">
<div class="s1">
<div class="bpad5px">
<div class="fl pnkhd18px">SHOPTEGOED</div>
<div class="fr bkghd18px">&euro; <?php echo round($counters['price']); ?></div>
<div class="clr"></div>
</div>

</div>
</div>
<div class="fl charea pr10px">
<div class="s2">
<div class="bpad5px">
<div class="fl pnkhd18px"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/">OPENSTAANDE CHEQUES</a></div>
<div class="fr bkghd18px"><?php echo $counters['count_cheques']; ?></div>
<div class="clr"></div>
</div>

</div>
</div>
<div class="fl charea">
<div class="s2">
<div class="bpad5px">
<div class="fl pnkhd18px">INGEWISSELDE CHEQUES </div>
<div class="fr bkghd18px"><?php echo $counters['count_used_cheques']; ?></div>
<div class="clr"></div>
</div>

</div>

</div>
<div class="clr"></div>
</div>

</div>
<div class="clr"></div>


</div>
</div>
<div class="fl"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/t2.jpg" alt="" width="14" height="108" /></div>
<div class="clr"></div>

<div class="arapad8pxb">
	
<div class="grytxt2px fl">
    <dl id="coupons" class="dropdown coupon">
        <dt><a href="#"><span>Voordeel coupons</span></a></dt>
        <dd>
            <ul>

			<?php

				global $wpdb;

				$querystr= "SELECT DISTINCT (`name`) , (`url`), `id` FROM wp_a4y_groups WHERE `is` = 1 ORDER BY  `orderby` ASC  " ;
				$list = $wpdb->get_results($querystr, OBJECT);
				$url = get_bloginfo('url').'/voordeelclub/';

				foreach ($list as $value) {
					echo '<li><a href="'.$url.$value->url.'">'.$value->name.'</a></li>';
				}
			?>
                <li><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/">Toon alles</a></li>
            </ul>
        </dd>
    </dl>

</div>


<div class="grytxt2px fl ml10px">
    <dl id="vip" class="dropdown vip">
        <dt><a href="#"><span>VIP Deals</span></a></dt>
        <dd>
            <ul>
                <li><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/nu">Actief</a></li>
                <li><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/verwacht">Verwacht</a></li>
                <li><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/afgelopen">Afgelopen</a></li>
            </ul>
        </dd>
    </dl>

</div>
<div class="grytxt2px fl ml10px">
	<dl id="free" class="dropdown free">
		<dt><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/gratis"><span>Gratis Deals</span></a></dt>
	</dl>

</div>
<div class="clr"></div>
</div>

</div>
<div class="clr"></div>