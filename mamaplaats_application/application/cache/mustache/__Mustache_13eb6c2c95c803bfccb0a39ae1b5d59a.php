<?php

class __Mustache_13eb6c2c95c803bfccb0a39ae1b5d59a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Mamaplaats_ros_btf_rectangle -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="mobile-banner">';
        $buffer .= "\n";
        $buffer .= $indent . '    <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '        <!--';
        $buffer .= "\n";
        $buffer .= $indent . '        document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100030001&click=[click]&ord=[timestamp]"></scri\'+\'pt>\');';
        $buffer .= "\n";
        $buffer .= $indent . '        //-->';
        $buffer .= "\n";
        $buffer .= $indent . '    </script>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}