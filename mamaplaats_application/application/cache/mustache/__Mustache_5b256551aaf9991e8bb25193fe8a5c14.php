<?php

class __Mustache_5b256551aaf9991e8bb25193fe8a5c14 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<article class="item simple">';
        $buffer .= "\n";
        $buffer .= $indent . '	<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="photo-wrap" href="/win/';
        $value = $context->findDot('win.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"><b><img alt="';
        $value = $context->findDot('win.title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" src="';
        $value = $context->findDot('media.path');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></b></a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="category"><a href="/win/';
        $value = $context->findDot('win.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">Winactie</a></h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h4><a href="/win/';
        $value = $context->findDot('win.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->findDot('win.title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p><a href="/win/';
        $value = $context->findDot('win.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">Doe mee en win!</a></p>';
        $buffer .= "\n";
        $buffer .= $indent . '</article>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}