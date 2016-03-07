<?php

class __Mustache_63ef50467890f606afcb94cbb039d8e4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="home">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Zoek resultaten voor \'';
        $value = $context->find('search');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\'</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box">';
        $buffer .= "\n";
        // 'search_results' section
        $buffer .= $this->section437890d4e5694432b3c1c02f117f431b($context, $indent, $context->find('search_results'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        // 'search_results' inverted section
        $value = $context->find('search_results');
        if (empty($value)) {
            
            $buffer .= $indent . '		<div class="alert alert-warning">';
            $buffer .= "\n";
            $buffer .= $indent . '			We hebben helaas geen zoekresultaten voor de term \'';
            $value = $context->find('search');
            if (!is_string($value) && is_callable($value)) {
                $value = $this->mustache
                    ->loadLambda((string) call_user_func($value))
                    ->renderInternal($context, $indent);
            }
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '\' kunnen vinden.';
            $buffer .= "\n";
            $buffer .= $indent . '		</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionD3800d4d7d381423958b2fe22f3287cb(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> article_item_blog}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_blog')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cb9f9e78cf98139560964e5836c6b96(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> article_item_advise}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_advise')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96c84119a310ebd94d725f7a362686ab(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> article_item_win}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_win')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA195ce6443594660d4478b5830d2a410(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> article_item_review_product}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_item_review_product')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section437890d4e5694432b3c1c02f117f431b(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				{{#is_blog}}{{> article_item_blog}}{{/is_blog}}
				{{#is_advise}}{{> article_item_advise}}{{/is_advise}}
				{{#is_win}}{{> article_item_win}}{{/is_win}}
				{{#is_review_product}}{{> article_item_review_product}}{{/is_review_product}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'is_blog' section
                $buffer .= $this->sectionD3800d4d7d381423958b2fe22f3287cb($context, $indent, $context->find('is_blog'));
                // 'is_advise' section
                $buffer .= $this->section3cb9f9e78cf98139560964e5836c6b96($context, $indent, $context->find('is_advise'));
                // 'is_win' section
                $buffer .= $this->section96c84119a310ebd94d725f7a362686ab($context, $indent, $context->find('is_win'));
                // 'is_review_product' section
                $buffer .= $this->sectionA195ce6443594660d4478b5830d2a410($context, $indent, $context->find('is_review_product'));
                $context->pop();
            }
        }
    
        return $buffer;
    }
}