<div class="main">

<div class="tbg">
<div class="wapper">
<div class="fl"><a id="logo" href="<?php echo get_bloginfo('url') ?>">Mamaplaats</a></div>

<div class="fl tnavarea">
<div>
<div class="fl navarea">
<div class="nav">
<?php wp_nav_menu(array('theme_location'  => 'main_menu', 'menu_class' => 'mainnav', 'container' => false, 'depth' => 1)); ?>
<?php echo load_second_level_menu('main_menu', 'subnav') ?>
</div>
</div>
<div class="fl nsarea">
<div class="fl"><a id="win" href="<?php echo URL_WIN; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/win.png" alt="Win" width="63" height="39" border="0" /></a></div>
<div class="fr"><a id="shop" href="<?php echo URL_SHOP; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/shop_icon.png" alt="" width="67" height="42" border="0" /></a></div>
<div class="clr"></div>

</div>
<div class="clr"></div>

</div>

</div>
<div class="fl trarea">
<div class="tposarea">
<div class="tpara2">

<?php global $user_ID, $user_identity, $user_level, $wpmem_regchk ?>
<?php if ( $user_ID ) : ?>
<div class="pt10px whttxt13px"><a href="<?php bloginfo('url') ?>/gebruiker/">Mijn Profiel</a> | <a href="<?php echo wp_logout_url( get_permalink() ); ?>&redirect_to=/">Log uit</a></div>
<?php else : ?>
<div class="pt10px whttxt13px"><a href="<?php echo URL_LOGIN; ?>">Inloggen</a> of <a href="<?php echo URL_REGISTER_VDC ?>">direct registreren!</a></div>
<?php endif  ?>
<div class="clr pt10px"></div>
<div class="whttxt20px"><a href="<?php echo URL_VOORDEEL; ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/vip.png" alt="" width="166" height="38" /></a></div>

</div>
</div>
</div>
<div class="clr"></div>

</div>
</div>