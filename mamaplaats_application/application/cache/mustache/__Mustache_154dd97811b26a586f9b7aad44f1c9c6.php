<?php

class __Mustache_154dd97811b26a586f9b7aad44f1c9c6 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '   <div class="col-md-9 calender-block">';
        $buffer .= "\n";
        $buffer .= $indent . '       <h2 class="title">Zwangerschapskalender</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '        <ul>';
        $buffer .= "\n";
        // 'pregnancy_calendar' section
        $buffer .= $this->section90c4b7e6dd27325b83e370bb0380c968($context, $indent, $context->find('pregnancy_calendar'));
        $buffer .= $indent . '        </ul>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="col-md-3 calender-block">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h2 class="title text-right">Advies na zwangerschap</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '        <ul class="pull-right" style="padding-right: 5px;">';
        $buffer .= "\n";
        // 'after_birth_calendar' section
        $buffer .= $this->section57130047d47d60eacf91be63e9bbfcca($context, $indent, $context->find('after_birth_calendar'));
        $buffer .= $indent . '        </ul>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '    $(document).ready(function(){';
        $buffer .= "\n";
        $buffer .= $indent . '         $(\'span#box\').hover( function () {';
        $buffer .= "\n";
        $buffer .= $indent . '             var li_postiion    = $(this).parent().index();';
        $buffer .= "\n";
        $buffer .= $indent . '             if(li_postiion > 3)';
        $buffer .= "\n";
        $buffer .= $indent . '             {';
        $buffer .= "\n";
        $buffer .= $indent . '                $(\'.preview-detail\').css(\'left\', \'-115px\');';
        $buffer .= "\n";
        $buffer .= $indent . '                $(\'em.up-aarow\').css(\'left\', \'46%\');';
        $buffer .= "\n";
        $buffer .= $indent . '             }';
        $buffer .= "\n";
        $buffer .= $indent . '             else';
        $buffer .= "\n";
        $buffer .= $indent . '             {';
        $buffer .= "\n";
        $buffer .= $indent . '                 $(\'.preview-detail\').css(\'left\', \'0\');';
        $buffer .= "\n";
        $buffer .= $indent . '                 $(\'em.up-aarow\').css(\'left\', \'0\');';
        $buffer .= "\n";
        $buffer .= $indent . '             }';
        $buffer .= "\n";
        $buffer .= $indent . '         });';
        $buffer .= "\n";
        $buffer .= $indent . '    });';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section90c4b7e6dd27325b83e370bb0380c968(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    <a href="{{basepath}}{{url}}" id="box">&nbsp;</a>
                    <div class="preview-detail">
                        <em class="up-aarow">&nbsp;</em>
                        <p>{{title}}</p>
                        <div class="preview-img">
                            <a href="{{basepath}}{{url}}">
                                <img src="{{basepath}}assets/images/zwangerschapskalender/{{image}}.jpg"/>
                            </a>
                        </div>
                    </div>
                </li>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                <li>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a href="';
                $value = $context->find('basepath');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="box">&nbsp;</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="preview-detail">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <em class="up-aarow">&nbsp;</em>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <p>';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="preview-img">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <a href="';
                $value = $context->find('basepath');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <img src="';
                $value = $context->find('basepath');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'assets/images/zwangerschapskalender/';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '.jpg"/>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </a>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                </li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57130047d47d60eacf91be63e9bbfcca(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    <a class="golden" href="{{basepath}}{{url}}" title="{{title}}">&nbsp;</a>
                </li>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                <li>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a class="golden" href="';
                $value = $context->find('basepath');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">&nbsp;</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}