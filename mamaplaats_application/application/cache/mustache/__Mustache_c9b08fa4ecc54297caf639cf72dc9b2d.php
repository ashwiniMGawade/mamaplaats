<?php

class __Mustache_c9b08fa4ecc54297caf639cf72dc9b2d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('email_header')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= "\n";
        // 'blog' section
        $buffer .= $this->sectionE6494cc60590d779bd308192091e6f82($context, $indent, $context->find('blog'));
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('email_footer')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionE6494cc60590d779bd308192091e6f82(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h1 style="color:#202020 !important;display:block;font-family:Arial;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">
            {{blog_title}}
        </h1>
        <table border="0" cellpadding="10" cellspacing="0" style="width: 100%">
            <tr style="border-bottom: 1px solid #CCCCCC;">
                <td style="width: 100px;">
                    <img src="{{avatar}}" />
                </td>
                <td>
                    <h4 style="color:#111111 !important;display:block;font-family:Arial;font-size:14px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">
                        {{author_name}}
                    </h4>
                    <div style="color: #555555;font-family: Arial;font-size: 14px;">
                        {{blog_content}}<br>
                    </div>
                    <a href="{{blog_url}}">Ga naar de blog</a><br>
                    <a href="{{user_blog}}">Bekijk alle blogs van {{author_name}}</a>
                </td>
            </tr>
        </table>
    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        <h1 style="color:#202020 !important;display:block;font-family:Arial;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
                $buffer .= "\n";
                $buffer .= $indent . '            ';
                $value = $context->find('blog_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '        </h1>';
                $buffer .= "\n";
                $buffer .= $indent . '        <table border="0" cellpadding="10" cellspacing="0" style="width: 100%">';
                $buffer .= "\n";
                $buffer .= $indent . '            <tr style="border-bottom: 1px solid #CCCCCC;">';
                $buffer .= "\n";
                $buffer .= $indent . '                <td style="width: 100px;">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />';
                $buffer .= "\n";
                $buffer .= $indent . '                </td>';
                $buffer .= "\n";
                $buffer .= $indent . '                <td>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <h4 style="color:#111111 !important;display:block;font-family:Arial;font-size:14px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
                $buffer .= "\n";
                $buffer .= $indent . '                        ';
                $value = $context->find('author_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '                    </h4>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div style="color: #555555;font-family: Arial;font-size: 14px;">';
                $buffer .= "\n";
                $buffer .= $indent . '                        ';
                $value = $context->find('blog_content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a href="';
                $value = $context->find('blog_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Ga naar de blog</a><br>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a href="';
                $value = $context->find('user_blog');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Bekijk alle blogs van ';
                $value = $context->find('author_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </td>';
                $buffer .= "\n";
                $buffer .= $indent . '            </tr>';
                $buffer .= "\n";
                $buffer .= $indent . '        </table>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}