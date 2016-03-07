<?php

class __Mustache_0d50b44f56352d0becebdc97c4b76d65 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<article class="item simple">';
        $buffer .= "\n";
        $buffer .= $indent . '	<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="photo-wrap" href="/advies/';
        $value = $context->findDot('advise.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"><b><img alt="';
        $value = $context->findDot('advise.title');
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
        $buffer .= '" width="260" height="242"></b></a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="category"><a href="/advies/';
        $value = $context->findDot('advise.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">Advies</a></h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h4><a href="/advies/';
        $value = $context->findDot('advise.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->findDot('advise.title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a href="/lid/';
        $value = $context->findDot('user.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->findDot('user.full_name');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="comments" href="/advise/';
        $value = $context->findDot('advise.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '#comments">';
        $value = $context->findDot('advise.comment_count');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>';
        $value = $context->findDot('advise.excerpt');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>';
        $buffer .= "\n";
        $buffer .= $indent . '</article>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}