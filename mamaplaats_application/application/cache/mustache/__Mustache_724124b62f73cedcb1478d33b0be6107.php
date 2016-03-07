<?php

class __Mustache_724124b62f73cedcb1478d33b0be6107 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'article_list' section
        $buffer .= $this->sectionC7a4e400d7775a7efddb65c6a3f31fd6($context, $indent, $context->find('article_list'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionC7a4e400d7775a7efddb65c6a3f31fd6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
{{> article_items}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_items')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}