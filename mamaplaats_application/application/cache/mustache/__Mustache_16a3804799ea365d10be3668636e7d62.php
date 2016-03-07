<?php

class __Mustache_16a3804799ea365d10be3668636e7d62 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="widget-apply-adfabs-facebook"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<script language="javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '   postscribe(\'#widget-apply-adfabs-facebook\', \'<script src=/assets/js/mamaplaats/jq.widget_apply_adfabs_facebook.js><\\/script>\');';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=755862901167315&amp;ev=PixelInitialized" /></noscript>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}