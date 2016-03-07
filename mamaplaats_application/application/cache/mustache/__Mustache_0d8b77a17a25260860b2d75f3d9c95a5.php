<?php

class __Mustache_0d8b77a17a25260860b2d75f3d9c95a5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= "\n";
        $buffer .= $indent . '<div class="share-this">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3>DEEL DIT ARTIKEL</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="place">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div id="socialite">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="http://www.facebook.com/sharer.php" class="socialite facebook-like" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="http://twitter.com/share" class="socialite twitter-share" data-count="horizontal" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="https://plus.google.com/share" class="socialite googleplus-one" data-size="medium" rel="nofollow" target="_blank"><span class="vhidden">Share on Google+</span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
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