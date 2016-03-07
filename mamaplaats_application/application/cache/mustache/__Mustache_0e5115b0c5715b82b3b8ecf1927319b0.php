<?php

class __Mustache_0e5115b0c5715b82b3b8ecf1927319b0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="create-btn-block">';
        $buffer .= "\n";
        $buffer .= $indent . '    <a href="';
        $value = $context->find('basepath');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'user/blog/index" class="blogbtn">';
        $buffer .= "\n";
        $buffer .= $indent . '        Schrijf je eigen blog';
        $buffer .= "\n";
        $buffer .= $indent . '    </a>    ';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}