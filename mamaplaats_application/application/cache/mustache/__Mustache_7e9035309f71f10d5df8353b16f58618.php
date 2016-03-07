<?php

class __Mustache_7e9035309f71f10d5df8353b16f58618 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'user_info' section
        $buffer .= $this->section2b3240263f5554e39f5b4e146ded5db1($context, $indent, $context->find('user_info'));
        // 'menu' section
        $buffer .= $this->sectionD1736fe0e9acdbd02342626f2c45ed94($context, $indent, $context->find('menu'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section2b3240263f5554e39f5b4e146ded5db1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="#" class="mp-logo">
        <img src="{{avatar}}" alt="{{full_name}}" width="158" height="30">
    </a>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <a href="#" class="mp-logo">';
                $buffer .= "\n";
                $buffer .= $indent . '        <img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="158" height="30">';
                $buffer .= "\n";
                $buffer .= $indent . '    </a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53104ac0f452a4baea88ee0aa862c3ef(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="amount">({{count}})</span>
                    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                        <span class="amount">(';
                $value = $context->find('count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ')</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8a2615fc21f3c3a71925bd94be9b2cf(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{path}}" class="list-group-item {{#active}}active{{/active}}">
                    {{text}}
                    {{#count}}
                        <span class="amount">({{count}})</span>
                    {{/count}}
                </a>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                <a href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="list-group-item ';
                // 'active' section
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $context->find('active'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                    ';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                // 'count' section
                $buffer .= $this->section53104ac0f452a4baea88ee0aa862c3ef($context, $indent, $context->find('count'));
                $buffer .= $indent . '                </a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1736fe0e9acdbd02342626f2c45ed94(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <nav class="ad-menu">
        <strong class="title">{{text}}</strong>
        <div class="list-group">
            {{#sub_menu}}
                <a href="{{path}}" class="list-group-item {{#active}}active{{/active}}">
                    {{text}}
                    {{#count}}
                        <span class="amount">({{count}})</span>
                    {{/count}}
                </a>
            {{/sub_menu}}
        </div>
    </nav>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <nav class="ad-menu">';
                $buffer .= "\n";
                $buffer .= $indent . '        <strong class="title">';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</strong>';
                $buffer .= "\n";
                $buffer .= $indent . '        <div class="list-group">';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->sectionC8a2615fc21f3c3a71925bd94be9b2cf($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '    </nav>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}