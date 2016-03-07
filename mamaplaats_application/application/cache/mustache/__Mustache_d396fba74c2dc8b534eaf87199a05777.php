<?php

class __Mustache_d396fba74c2dc8b534eaf87199a05777 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Adfab -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script type=\'text/javascript\'>';
        $buffer .= "\n";
        $buffer .= $indent . '    var googletag = googletag || {};';
        $buffer .= "\n";
        $buffer .= $indent . '    googletag.cmd = googletag.cmd || [];';
        $buffer .= "\n";
        $buffer .= $indent . '    (function() {';
        $buffer .= "\n";
        $buffer .= $indent . '        var gads = document.createElement(\'script\');';
        $buffer .= "\n";
        $buffer .= $indent . '        gads.async = true;';
        $buffer .= "\n";
        $buffer .= $indent . '        gads.type = \'text/javascript\';';
        $buffer .= "\n";
        $buffer .= $indent . '        var useSSL = \'https:\' == document.location.protocol;';
        $buffer .= "\n";
        $buffer .= $indent . '        gads.src = (useSSL ? \'https:\' : \'http:\') +';
        $buffer .= "\n";
        $buffer .= $indent . '                \'//www.googletagservices.com/tag/js/gpt.js\';';
        $buffer .= "\n";
        $buffer .= $indent . '        var node = document.getElementsByTagName(\'script\')[0];';
        $buffer .= "\n";
        $buffer .= $indent . '        node.parentNode.insertBefore(gads, node);';
        $buffer .= "\n";
        $buffer .= $indent . '    })();';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type=\'text/javascript\'>';
        $buffer .= "\n";
        $buffer .= $indent . '    googletag.cmd.push(function() {';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.defineSlot(\'/3132730/Mamaplaats_ros_atf_leaderboard_billboard\', [[468, 60], [728, 90], [970, 90], [970, 250]], \'div-gpt-ad-1401978110761-1\').addService(googletag.pubads());';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.defineSlot(\'/3132730/Mamaplaats_ros_atf_rectangle\', [[300, 250], [300, 600], [336, 280], [336, 600]], \'div-gpt-ad-1401978110761-2\').addService(googletag.pubads());';
        $buffer .= "\n";
        $buffer .= $indent . '        // googletag.defineSlot(\'/3132730/Mamaplaats_ros_btf_rectangle\', [[300, 250], [300, 600], [336, 280], [336, 600]], \'div-gpt-ad-1401978110761-3\').addService(googletag.pubads());';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.defineSlot(\'/3132730/Mamaplaats_ros_floorad_1x1\', [1, 1], \'div-gpt-ad-1401978110761-4\').addService(googletag.pubads());';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.defineSlot(\'/3132730/Mamaplaats_mobile-web_ros_leaderboard\', [[320, 50], [640, 100]], \'div-gpt-ad-1405613256099-2\').addService(googletag.pubads());';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.pubads().collapseEmptyDivs();';
        $buffer .= "\n";
        $buffer .= $indent . '        googletag.enableServices();';
        $buffer .= "\n";
        $buffer .= $indent . '    });';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- End Adfab -->';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}