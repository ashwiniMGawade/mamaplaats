<?php

class __Mustache_7a2174b07dfda30ffeb73e0b3673b1bd extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="big-banner">';
        $buffer .= "\n";
        $buffer .= $indent . '    <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '        <!--';
        $buffer .= "\n";
        $buffer .= $indent . '        document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100020006&click=[click]&ord=[timestamp]"></scri\'+\'pt>\');';
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