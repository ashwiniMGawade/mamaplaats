<?php

class __Mustache_6ec8390583d0ee1a140c8cda9b27d833 extends Mustache_Template
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
        $buffer .= $indent . '			</div>			<h1>Welkom! je bent geregistreerd</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-set">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-3 activatation-block">';
        $buffer .= "\n";
        $buffer .= $indent . '				<form class="validate-form" action="" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="alert alert-success alert-margin">';
        $buffer .= "\n";
        $buffer .= $indent . '                            Je account is geregistreerd.';
        $buffer .= "\n";
        $buffer .= $indent . '							<br /><br />';
        $buffer .= "\n";
        $buffer .= $indent . '							<ul class="unstyled">';
        $buffer .= "\n";
        $buffer .= $indent . '								<li><a href="/user/blog/index?visit=first">Schrijf meteen je eigen blog</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '								<li><a href="/win">Ga naar de winacties</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '							</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<!-- Affiliate4You tracking code / http://www.affiliate4you.nl -->';
        $buffer .= "\n";
        $buffer .= $indent . '						        <img src="https://leads.affiliate4you.nl/?campagne=16999&orderbedrag=1.00&ordernummer=117697&klantnaam=ashwini.gawade27@gmail.com" width="1" height="1">';
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
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">var initial_children = [];</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript" src="/assets/js/mamaplaats/ko.user_children.js"></script>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '    $(document).ready(function () {';
        $buffer .= "\n";
        $buffer .= $indent . '        $(\'#skip\').click(function (e) {';
        $buffer .= "\n";
        $buffer .= $indent . '            e.preventDefault();';
        $buffer .= "\n";
        $buffer .= $indent . '            $(".validate-form").submit();';
        $buffer .= "\n";
        $buffer .= $indent . '        });';
        $buffer .= "\n";
        $buffer .= $indent . '    })';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}