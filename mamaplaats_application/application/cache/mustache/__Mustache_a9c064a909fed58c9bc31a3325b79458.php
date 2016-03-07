<?php

class __Mustache_a9c064a909fed58c9bc31a3325b79458 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<script>(function() {';
        $buffer .= "\n";
        $buffer .= $indent . '    var _fbq = window._fbq || (window._fbq = []);';
        $buffer .= "\n";
        $buffer .= $indent . '    if (!_fbq.loaded) {';
        $buffer .= "\n";
        $buffer .= $indent . '        var fbds = document.createElement(\'script\');';
        $buffer .= "\n";
        $buffer .= $indent . '        fbds.async = true;';
        $buffer .= "\n";
        $buffer .= $indent . '        fbds.src = \'//connect.facebook.net/en_US/fbds.js\';';
        $buffer .= "\n";
        $buffer .= $indent . '        var s = document.getElementsByTagName(\'script\')[0];';
        $buffer .= "\n";
        $buffer .= $indent . '        s.parentNode.insertBefore(fbds, s);';
        $buffer .= "\n";
        $buffer .= $indent . '        _fbq.loaded = true;';
        $buffer .= "\n";
        $buffer .= $indent . '    }';
        $buffer .= "\n";
        $buffer .= $indent . '    _fbq.push([\'addPixelId\', \'755862901167315\']);';
        $buffer .= "\n";
        $buffer .= $indent . '})();';
        $buffer .= "\n";
        $buffer .= $indent . 'window._fbq = window._fbq || [];';
        $buffer .= "\n";
        $buffer .= $indent . 'window._fbq.push([\'track\', \'PixelInitialized\', {}]);';
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