<?php

class __Mustache_18031f4ecb44ad248a5befe6916d9b50 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<form class="search-form validate-form" action="/zoek" method="get" novalidate="novalidate">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '        <button class="btn">zoeken</button>';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '            <input name="search" type="search" class="required">';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}