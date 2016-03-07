<div id="rightcolumn">
    <ul class="rightcolumn">
		<?php global $user_ID, $user_identity, $user_level, $wpmem_regchk ?>
		<?php if ( $user_ID ) : ?>
		<li>
			<div class="smallbox">
				<div class="smallfill">
					<h3 class="padding">Welkom <?php echo $user_identity ?> &nbsp;&nbsp; <span><?php echo get_user_level_html($user_ID) ?></span></h3>
					<div class="login">
						<!--<ul class="login">
							<li><a href="<?php bloginfo('url') ?>/gebruiker/">Mijn Profiel</a></li>
							<?php if ( $user_level >= 1 ) : ?>
							<li><a target="_newpost" href="<?php bloginfo('url') ?>/gebruiker/?a=my_blogs">Mijn Blogs</a></li>
							<li><a target="_newpost" href="<?php bloginfo('url') ?>/gebruiker/?a=edit_blog">Schrijf een blog</a></li>
							<li><a target="_newpost" href="<?php bloginfo('url') ?>/voordeelclub/mijnvoordeelclub/nieuwtipwin">Schrijf een tip</a></li>
							<?php endif ?>
							<li><a href="<?php bloginfo('url') ?>/winacties/">Winacties</a></li>
							<li><a href="<?php bloginfo('url') ?>/voordeelclub/">Voordeelclub</a></li>
						</ul>-->


						<ul class="login">
							<li>Profiel
								<ul>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/profiel">Profiel</a></li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/profiel/wijzigen">Profiel Wijzigen</a></li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/profiel/foto">Profielfoto Wijzigen</a></li>
								</ul>
							</li>
							<li>Berichten
								<ul>
									<li>
										<a href="<?php bloginfo('url') ?>/gebruiker/berichten">Mijn Berichten</a>
										<span class="label label-mamaplaats notification-msg">Nieuw!</span>
									</li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/berichten/nieuw">Nieuw Bericht</a></li>
								</ul>
							</li>

							<li>Blogs
								<ul>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/mijn_blogs">Mijn Blogs</a></li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/blog">Schrijf nieuwe Blog</a></li>
								</ul>
							</li>
						</ul>

						<ul class="login">
							<li>Volgen
								<ul>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/ik_volg">Ik volg</a></li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/mijn_volgers">Mijn volgers</a></li>
									<li><a href="<?php bloginfo('url') ?>/gebruiker/tijdlijn">Tijdlijn</a></li>
								</ul>
							</li>
							<li>Advies
								<ul>
									<li><a href="<?php bloginfo('url') ?>/advies/voeding/">Kindervoeding</a></li>
									<li><a href="<?php bloginfo('url') ?>/advies/geboortezorg/">Geboortezorg</a></li>
								</ul>
							</li>
							<li>Voordeel
								<ul>
									<li><a href="<?php bloginfo('url') ?>/voordeelclub/mijnvoordeelclub">Mijn voordeel</a></li>
									<li><a href="<?php bloginfo('url') ?>/voordeelclub/mijnvoordeelclub/nieuwtipwin">Schrijf een nieuwe tip</a></li>
									<li><a href="<?php bloginfo('url') ?>/winacties/">Mijn winacties</a></li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="smallbottom"></div>
			</div>
		</li>
		<?php endif ?>

        <div class="social-buttons">
            <a href="http://www.facebook.com/Mamaplaats" class="facebook" target="_blank"></a>
            <a href="https://twitter.com/mamaplaats" class="twitter" target="_blank"></a>
            <a href="http://mamaplaats.hyves.nl/" class="hyves" target="_blank"></a>
            <a href="http://www.youtube.com/mamaplaats/" class="youtube" target="_blank"></a>
        </div>
		<?php
		$active = get_active();
		if(is_front_page() OR empty($active))
		{
			dynamic_sidebar('Hoofd sidebar');
		}
		else
		{
			dynamic_sidebar(ucfirst($active).' sidebar');
		}
		?>
	</ul>
	<div class="clear"></div>
</div><!--end rightcolumn-->
