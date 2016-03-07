<div class="clr"></div>
<div class="pt8px wapper">
<div>
<div>
<div class="fl headbg">
<a class="testimonials-link" href="<?php echo URL_TESTIMONIALS ?>" title="Testimonials Voordeelclub"></a>
<div class="arapad28px space-right">
<div class="hedarea">
<div class="whttxt30px fl"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/">MAMAPLAATS VOORDEEL CLUB</a></div>
<div class="shl"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/hoe-werkt-het/">Hoe werkt het?</a><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dot.gif" alt="" width="10" height="1" /> <a href="<?php echo URL_LOGIN ?>">inloggen</a></div>
<div class="clr"></div>

</div>
<div><a href="<?php echo URL_REGISTER_VDC ?>">
<div class="fl bghi">
<div class="fl bkghd22px width100">&euro; 300,- shoptegoed</div>
<div class="fl bkghd22px width40 ml85px">VIP deals</div>
<div class="fl bkghd22px width150 ml85px">honderden merken en webshops</div>
</div>
</a>
<div class="fl pl10px">
<div class="clr"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dot.gif" alt="" width="1" height="25" /></div>
<div class="clr"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dot.gif" alt="" width="1" height="5" /></div>
<div><a href="<?php echo URL_REGISTER_VDC ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dir_reg.png" alt="" width="212" height="59" /></a></div>

<div class="clr"><img src="<?php echo get_stylesheet_directory_uri() ?>/voordeelclub/images/dot.gif" alt="" width="1" height="37" /></div>
<div class="bkghd18px"></div>
<div class="clr"></div>

</div>
<div class="clr"></div>
</div>

</div>
<div class="clr"></div>
<div class="arapad20px">

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
<div class="fl hqarea hlink"><a href="<?php echo get_bloginfo('url') ?>/voordeelclub/hoe-werkt-het/">Hoe werkt het?</a></div>
<div class="clr"></div>
</div>

<div class="clr"></div>

</div>
<div class="clr"></div>
</div>