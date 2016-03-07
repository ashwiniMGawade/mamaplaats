<?php

class __Mustache_4eca1214c88e9070a15fc6a4f7c39e90 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<meta name="twitter:card" content="summary_large_image"/>';
        $buffer .= "\n";
        $buffer .= $indent . '<meta name="twitter:site" content="@mamaplaats"/>';
        $buffer .= "\n";
        $buffer .= $indent . '<meta name="twitter:description" content="';
        $value = $context->find('description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>';
        $buffer .= "\n";
        // 'image' section
        $buffer .= $this->sectionFa61354abbd9e5927c40f831a66dde83($context, $indent, $context->find('image'));
        $buffer .= "\n";
        $buffer .= $indent . '<meta property="og:locale" content="nl_NL"/>';
        $buffer .= "\n";
        $buffer .= $indent . '<meta property="og:title" content="';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>';
        $buffer .= "\n";
        $buffer .= $indent . '<meta property="og:description" content="';
        $value = $context->find('description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>';
        $buffer .= "\n";
        // 'image' section
        $buffer .= $this->section3d88490a30c6509cbf519b613b1abe3c($context, $indent, $context->find('image'));
        $buffer .= "\n";
        $buffer .= $indent . '<meta property="og:site_name" content="Mamaplaats"/>';
        $buffer .= "\n";
        $buffer .= $indent . '<meta property="og:type" content="article"/>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionFa61354abbd9e5927c40f831a66dde83(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<meta name="twitter:image:src" content="{{image}}"/>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<meta name="twitter:image:src" content="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d88490a30c6509cbf519b613b1abe3c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<meta property="og:image" content="{{image}}"/>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<meta property="og:image" content="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"/>';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}