<?php

class __Mustache_000577c27a5b847ff939b33110635279 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'in_blog_sidebar_advertisement.show_ad' section
        $buffer .= $this->sectionA5ba8ca3fa314b8dfa8ed397714c5dc8($context, $indent, $context->findDot('in_blog_sidebar_advertisement.show_ad'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA5ba8ca3fa314b8dfa8ed397714c5dc8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{{in_blog_sidebar_advertisement.text}}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	';
                $value = $context->findDot('in_blog_sidebar_advertisement.text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}