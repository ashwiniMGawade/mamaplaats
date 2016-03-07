<?php

class __Mustache_dee539288b48a88d0bacacfe7cfc0413 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('email_header')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<h1 style="color:#202020 !important;display:block;font-family:Arial;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
        $buffer .= "\n";
        $buffer .= $indent . '    ';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= "\n";
        $buffer .= $indent . '</h1>';
        $buffer .= "\n";
        // 'user' section
        $buffer .= $this->section1228d7e73ec1984edde9f90d10175027($context, $indent, $context->find('user'));
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

    private function section1228d7e73ec1984edde9f90d10175027(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<table border="0" cellpadding="10" cellspacing="0" style="width: 100%">
    <tr style="border-bottom: 1px solid #CCCCCC;">
        <td style="width: 100px;">
            <img src="{{avatar}}" />
        </td>
        <td>
            <h4 style="color:#111111 !important;display:block;font-family:Arial;font-size:14px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">
                {{follower_name}}
            </h4>
            <div style="color: #555555;font-family: Arial;font-size: 14px;">
                {{user_details}}<br>
            </div>
            <p>Volg jij {{follower_name}} AL?<a href="{{user_url}}">Klik hier en volg</a></p>
            <p>Benieuwd?<a href="{{following_blog_url}}">Bekijk de blogs van {{follower_name}}</a></p>
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
                $buffer .= $indent . '<table border="0" cellpadding="10" cellspacing="0" style="width: 100%">';
                $buffer .= "\n";
                $buffer .= $indent . '    <tr style="border-bottom: 1px solid #CCCCCC;">';
                $buffer .= "\n";
                $buffer .= $indent . '        <td style="width: 100px;">';
                $buffer .= "\n";
                $buffer .= $indent . '            <img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />';
                $buffer .= "\n";
                $buffer .= $indent . '        </td>';
                $buffer .= "\n";
                $buffer .= $indent . '        <td>';
                $buffer .= "\n";
                $buffer .= $indent . '            <h4 style="color:#111111 !important;display:block;font-family:Arial;font-size:14px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
                $buffer .= "\n";
                $buffer .= $indent . '                ';
                $value = $context->find('follower_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '            </h4>';
                $buffer .= "\n";
                $buffer .= $indent . '            <div style="color: #555555;font-family: Arial;font-size: 14px;">';
                $buffer .= "\n";
                $buffer .= $indent . '                ';
                $value = $context->find('user_details');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br>';
                $buffer .= "\n";
                $buffer .= $indent . '            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '            <p>Volg jij ';
                $value = $context->find('follower_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' AL?<a href="';
                $value = $context->find('user_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Klik hier en volg</a></p>';
                $buffer .= "\n";
                $buffer .= $indent . '            <p>Benieuwd?<a href="';
                $value = $context->find('following_blog_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Bekijk de blogs van ';
                $value = $context->find('follower_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></p>';
                $buffer .= "\n";
                $buffer .= $indent . '        </td>';
                $buffer .= "\n";
                $buffer .= $indent . '    </tr>';
                $buffer .= "\n";
                $buffer .= $indent . '</table>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}