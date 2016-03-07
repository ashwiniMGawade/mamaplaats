<?php

class __Mustache_edbfb45dc1a4ea68fd8a9bfdda059261 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="data-form unsubscribe">';
        $buffer .= "\n";
        // 'has_messages' section
        $buffer .= $this->section74c740312d92db20565b07b111f96225($context, $indent, $context->find('has_messages'));
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA7c821876eb5e31c33a67d6479078745(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{message}}<br />';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $context->find('message');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74c740312d92db20565b07b111f96225(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="alert alert-{{type}}">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{#messages}}{{message}}<br />{{/messages}}
    </div>
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <div class="alert alert-';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '        <button type="button" class="close" data-dismiss="alert">&times;</button>';
                $buffer .= "\n";
                $buffer .= $indent . '            ';
                // 'messages' section
                $buffer .= $this->sectionA7c821876eb5e31c33a67d6479078745($context, $indent, $context->find('messages'));
                $buffer .= "\n";
                $buffer .= $indent . '    </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}