<?php

class __Mustache_0542651e292a15b847e90f8fec83c226 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="social-networks">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sub-heading">Volg Mamaplaats</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul>';
        $buffer .= "\n";
        $buffer .= $indent . '		<!--<li><a target="_blank" href="https://plus.google.com/111896831719068730791?prsrc=3" class="google">Google</a></li>-->';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a target="_blank" href="https://www.facebook.com/Mamaplaats" class="facebook">Facebook</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a target="_blank" href="https://twitter.com/Mamaplaats" class="twitter">Twitter</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '		<li><a target="_blank" href="http://www.youtube.com/user/Mamaplaats" class="youtube">YouTube</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}