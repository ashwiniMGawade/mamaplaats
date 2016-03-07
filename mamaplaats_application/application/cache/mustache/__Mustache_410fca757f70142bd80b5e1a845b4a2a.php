<?php

class __Mustache_410fca757f70142bd80b5e1a845b4a2a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="facebook-plugin">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h3>Mamaplaats op facebook</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="place">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="fb-like-box" data-href="https://www.facebook.com/Mamaplaats" data-width="300" data-height="270" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}