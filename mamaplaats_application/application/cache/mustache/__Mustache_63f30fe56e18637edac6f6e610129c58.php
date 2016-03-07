<?php

class __Mustache_63f30fe56e18637edac6f6e610129c58 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '<!--';
        $buffer .= "\n";
        $buffer .= $indent . 'document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100030002&click=[click]&ord=[timestamp]"></scri\'+\'pt>\');';
        $buffer .= "\n";
        $buffer .= $indent . '//-->';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}