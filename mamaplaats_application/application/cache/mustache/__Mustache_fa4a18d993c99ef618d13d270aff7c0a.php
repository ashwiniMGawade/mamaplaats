<?php

class __Mustache_fa4a18d993c99ef618d13d270aff7c0a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'is_blog' section
        $buffer .= $this->section3cb12cf7436470e5472f15340673b41d($context, $indent, $context->find('is_blog'));
        $buffer .= "\n";
        // 'is_advise' section
        $buffer .= $this->section05f28ed6439bc5dcdbf0e69cba31758e($context, $indent, $context->find('is_advise'));
        $buffer .= "\n";
        // 'is_photocontest' section
        $buffer .= $this->section22b7b1067a179bcab2fcd93b35c58014($context, $indent, $context->find('is_photocontest'));
        $buffer .= "\n";
        // 'is_review_product' section
        $buffer .= $this->section713838c0aa8c4d4aabf76f4a2528e2d4($context, $indent, $context->find('is_review_product'));
        $buffer .= "\n";
        // 'is_win' section
        $buffer .= $this->section13d0a201648a1f4e5a2d171f100a9547($context, $indent, $context->find('is_win'));
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section3cb12cf7436470e5472f15340673b41d(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_item_blog}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_blog')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05f28ed6439bc5dcdbf0e69cba31758e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_item_advise}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_advise')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22b7b1067a179bcab2fcd93b35c58014(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_photocontest}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_photocontest')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section713838c0aa8c4d4aabf76f4a2528e2d4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_item_review_product}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_review_product')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13d0a201648a1f4e5a2d171f100a9547(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_item_win}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_win')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}