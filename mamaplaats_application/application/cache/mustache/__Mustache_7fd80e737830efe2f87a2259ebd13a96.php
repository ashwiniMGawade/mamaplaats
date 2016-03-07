<?php

class __Mustache_7fd80e737830efe2f87a2259ebd13a96 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="data-form unsubscribe">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="alert alert-success">';
        $buffer .= "\n";
        $buffer .= $indent . '        <button type="button" class="close" data-dismiss="alert">&times;</button>';
        $buffer .= "\n";
        $buffer .= $indent . '            Je bent succesvol uitgeschreven.<br />';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}