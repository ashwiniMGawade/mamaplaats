<?php

class __Mustache_bca093519ae4b02fd0ab2785a90ee9bc extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'in_blog_above_comments_advertisement.show_ad' section
        $buffer .= $this->sectionA5267a337d559446f9c4803902848f77($context, $indent, $context->findDot('in_blog_above_comments_advertisement.show_ad'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA5267a337d559446f9c4803902848f77(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{{in_blog_above_comments_advertisement.text}}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	';
                $value = $context->findDot('in_blog_above_comments_advertisement.text');
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