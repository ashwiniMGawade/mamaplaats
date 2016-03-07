<?php

class __Mustache_fa6d7a37a4e1ddcb6dcb22f5c9791f00 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="account">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="registration-block">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="social-networks">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="sub-heading">Volg Mamaplaats</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul>';
        $buffer .= "\n";
        $buffer .= $indent . '					<!--<li><a target="_blank" href="https://plus.google.com/111896831719068730791?prsrc=3" class="google">Google</a></li>-->';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a target="_blank" href="https://www.facebook.com/Mamaplaats" class="facebook">Facebook</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a target="_blank" href="https://twitter.com/Mamaplaats" class="twitter">Twitter</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '					<li><a target="_blank" href="http://www.youtube.com/user/Mamaplaats" class="youtube">YouTube</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>			<h1>Registreer je bij mamaplaats</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-set">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-1">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <img src="http://www.mamaplaats.nl/wordpress/wp-content/uploads/2014/11/Algemeen1.jpg"/>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-2">';
        $buffer .= "\n";
        $buffer .= $indent . '				<form class="form-inline validate-form" action="" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="alert alert-success">';
        $buffer .= "\n";
        $buffer .= $indent . '						<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $buffer .= "\n";
        $buffer .= $indent . '						';
        $buffer .= "\n";
        $buffer .= $indent . '						Je account is met succes geregistreerd. Voordat je kan inloggen moet je';
        $buffer .= "\n";
        $buffer .= $indent . '						op de verificatie link klikken die we naar je email hebben gestuurd.';
        $buffer .= "\n";
        $buffer .= $indent . '					<br />';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</form>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}