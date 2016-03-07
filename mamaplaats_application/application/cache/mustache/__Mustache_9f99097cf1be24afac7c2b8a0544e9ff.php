<?php

class __Mustache_9f99097cf1be24afac7c2b8a0544e9ff extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'is_active_authors' section
        $buffer .= $this->section77c332c0e295e5ed52dccf782c8054e8($context, $indent, $context->find('is_active_authors'));
        // 'is_advertorial' section
        $buffer .= $this->section00449e349876bf559dbc21733052384a($context, $indent, $context->find('is_advertorial'));
        // 'is_latest_comments' section
        $buffer .= $this->section3c9a50d7c4a3544e06069493c34bc010($context, $indent, $context->find('is_latest_comments'));
        // 'is_most_viewed_blogs' section
        $buffer .= $this->sectionCc3913d5e2030ace5e8d398f72fffabf($context, $indent, $context->find('is_most_viewed_blogs'));
        // 'is_newsletter' section
        $buffer .= $this->section09908ec78ff873201e71c0313bbe9b80($context, $indent, $context->find('is_newsletter'));
        // 'is_adfab' section
        $buffer .= $this->sectionF5fda51f4533481739ecaea3de001c4f($context, $indent, $context->find('is_adfab'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section77c332c0e295e5ed52dccf782c8054e8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_active_authors}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_active_authors')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00449e349876bf559dbc21733052384a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_advertorial}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_advertorial')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c9a50d7c4a3544e06069493c34bc010(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_latest_comments}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_latest_comments')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc3913d5e2030ace5e8d398f72fffabf(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_most_viewed_blogs}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_most_viewed_blogs')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09908ec78ff873201e71c0313bbe9b80(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_newsletter}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_newsletter')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5fda51f4533481739ecaea3de001c4f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{> article_widget_adfab}}
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_widget_adfab')) {
                    $buffer .= $partial->renderInternal($context, '	');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}