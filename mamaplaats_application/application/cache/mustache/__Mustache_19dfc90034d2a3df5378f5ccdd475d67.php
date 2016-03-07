<?php

class __Mustache_19dfc90034d2a3df5378f5ccdd475d67 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="next-prev-arw">';
        $buffer .= "\n";
        // 'previous_blog' section
        $buffer .= $this->sectionB0ff700a37009c0c34379b74bb2cc737($context, $indent, $context->find('previous_blog'));
        // 'next_blog' section
        $buffer .= $this->section1896d69e1ba4a71530916ab75c3662d4($context, $indent, $context->find('next_blog'));
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionB0ff700a37009c0c34379b74bb2cc737(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a
           class="prev-arw arw"
           href="{{previous_blog.post_name}}"
           onclick="_gaq.push([\'_trackEvent\', \'buttons\', \'click previous article\', \'an article can be expert, advise or blog\'])"
        >
            <span>{{previous_blog.post_title}}</span>
        </a>
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        <a';
                $buffer .= "\n";
                $buffer .= $indent . '           class="prev-arw arw"';
                $buffer .= "\n";
                $buffer .= $indent . '           href="';
                $value = $context->findDot('previous_blog.post_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= "\n";
                $buffer .= $indent . '           onclick="_gaq.push([\'_trackEvent\', \'buttons\', \'click previous article\', \'an article can be expert, advise or blog\'])"';
                $buffer .= "\n";
                $buffer .= $indent . '        >';
                $buffer .= "\n";
                $buffer .= $indent . '            <span>';
                $value = $context->findDot('previous_blog.post_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '        </a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1896d69e1ba4a71530916ab75c3662d4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a
            class="next-arw arw"
            href="{{next_blog.post_name}}"
            onclick="_gaq.push([\'_trackEvent\', \'buttons\', \'click next article\', \'an article can be expert, advise or blog\'])"
        >
            <span>{{next_blog.post_title}}</span>
        </a>
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        <a';
                $buffer .= "\n";
                $buffer .= $indent . '            class="next-arw arw"';
                $buffer .= "\n";
                $buffer .= $indent . '            href="';
                $value = $context->findDot('next_blog.post_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= "\n";
                $buffer .= $indent . '            onclick="_gaq.push([\'_trackEvent\', \'buttons\', \'click next article\', \'an article can be expert, advise or blog\'])"';
                $buffer .= "\n";
                $buffer .= $indent . '        >';
                $buffer .= "\n";
                $buffer .= $indent . '            <span>';
                $value = $context->findDot('next_blog.post_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '        </a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}