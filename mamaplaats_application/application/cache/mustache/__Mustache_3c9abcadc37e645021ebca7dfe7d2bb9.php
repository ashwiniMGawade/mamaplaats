<?php

class __Mustache_3c9abcadc37e645021ebca7dfe7d2bb9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Jij volgt deze moeders</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="blog-list">';
        $buffer .= "\n";
        // 'following' section
        $buffer .= $this->section020e119d5bebf8fd9e7face215c0f07a($context, $indent, $context->find('following'));
        // 'following' inverted section
        $value = $context->find('following');
        if (empty($value)) {
            
            $buffer .= $indent . '	<div class="alert alert-info">Je volgt op dit moment niemand.</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section020e119d5bebf8fd9e7face215c0f07a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	 {{> blog_following_suggestions}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('blog_following_suggestions')) {
                    $buffer .= $partial->renderInternal($context, '	 ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}