<?php

class __Mustache_2e6824ff4abe74af9e0fec0684e29664 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '   <div class="col-md-7 col-xs-6 col-sm-6 calender-block pregnancy-calender-black-box-container">';
        $buffer .= "\n";
        $buffer .= $indent . '       <h2 class="title">Zwangerschapskalender</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '        <ul>';
        $buffer .= "\n";
        // 'pregnancy_calendar' section
        $buffer .= $this->section117e62af50ecf537a2422e8bb19adad9($context, $indent, $context->find('pregnancy_calendar'));
        $buffer .= $indent . '        </ul>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="col-md-5 col-xs-6 col-sm-6 calender-block nopadding-left pregnancy-calender-golden-box-container">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h2 class="title text-right">Ontwikkeling kind</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '        <ul class="pull-right" style="padding-right: 5px;">';
        $buffer .= "\n";
        // 'after_birth_calendar' section
        $buffer .= $this->section3abcff4fdb301ac603fe38c950b869d6($context, $indent, $context->find('after_birth_calendar'));
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

    private function section117e62af50ecf537a2422e8bb19adad9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    <a href="{{basepath}}{{url}}" id="box">&nbsp;</a>
                    <div class="preview-detail left-zero">
                        <em class="up-aarow left-zero">&nbsp;</em>
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
                $buffer .= $indent . '                    <div class="preview-detail left-zero">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <em class="up-aarow left-zero">&nbsp;</em>';
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

    private function section3abcff4fdb301ac603fe38c950b869d6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                    <a class="golden" href="{{basepath}}{{url}}" title="{{title}}" id="child_growth_box">&nbsp;</a>
                    <div class="preview-detail right-zero">
                        <em class="up-aarow right-zero">&nbsp;</em>
                        <p>{{title}}</p>
                        <div class="preview-img">
                            <a href="{{basepath}}{{url}}">
                                <img src="{{basepath}}assets/images/advies_na_zwangerschap/{{image}}.jpg"/>
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
                $buffer .= '" id="child_growth_box">&nbsp;</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="preview-detail right-zero">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <em class="up-aarow right-zero">&nbsp;</em>';
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
                $buffer .= 'assets/images/advies_na_zwangerschap/';
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
}