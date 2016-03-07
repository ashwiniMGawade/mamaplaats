<?php

class __Mustache_76a91e550ec0fbe97be7f72339ff39c7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Suggesties om te volgen</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="blog-list">';
        $buffer .= "\n";
        // 'suggestions' section
        $buffer .= $this->section020e119d5bebf8fd9e7face215c0f07a($context, $indent, $context->find('suggestions'));
        // 'suggestions' inverted section
        $value = $context->find('suggestions');
        if (empty($value)) {
            
            $buffer .= $indent . '	<div class="alert alert-info">Er zijn nog geen suggesties gevonden om te volgen, vul je profiel aan voor betere suggesties.</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!--<a href="#" class="load-more">Meer berichten laden</a>-->';

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