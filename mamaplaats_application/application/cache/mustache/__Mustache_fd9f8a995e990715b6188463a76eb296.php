<?php

class __Mustache_fd9f8a995e990715b6188463a76eb296 extends Mustache_Template
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
        $buffer .= $indent . '    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '    <a class="more-info" href="';
        $value = $context->find('basepath');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'how-to-blog">Meer informatie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}