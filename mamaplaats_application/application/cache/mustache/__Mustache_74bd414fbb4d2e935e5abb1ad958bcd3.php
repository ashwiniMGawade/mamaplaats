<?php

class __Mustache_74bd414fbb4d2e935e5abb1ad958bcd3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="header-advertisement"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '<script language="javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '<!--';
        $buffer .= "\n";
        $buffer .= $indent . '(function(){';
        $buffer .= "\n";
        $buffer .= $indent . '    postscribe(\'#header-advertisement\', \'<script src=/assets/js/mamaplaats/jq.header_adv.js><\\/script>\');';
        $buffer .= "\n";
        $buffer .= $indent . '})();';
        $buffer .= "\n";
        $buffer .= $indent . '//-->';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<noscript>';
        $buffer .= "\n";
        $buffer .= $indent . '<a href="http://adserver.adtech.de/adlink/3.0/1594/5712115/0/225/ADTECH;loc=300" target="_blank"><img src="http://adserver.adtech.de/adserv/3.0/1594/5712115/0/225/ADTECH;loc=300" border="0" width="728" height="90"></a>';
        $buffer .= "\n";
        $buffer .= $indent . '</noscript>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}