<?php

class __Mustache_d34d89bccd178077b22a5cebc18a8d19 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('email_header')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= "\n";
        // 'comments' section
        $buffer .= $this->section9bff00ea7277b0f7787c4c92f9d8a18b($context, $indent, $context->find('comments'));
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

    private function section44b08edaccd0bd37fff3e87d798ec23b(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td colspan="2">
                    Als u niet wilt dat deze melding niet meer te ontvangen. klik <a href="{{unsubscribe_url}}">hier</a>
                </td>
            </tr>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <tr>';
                $buffer .= "\n";
                $buffer .= $indent . '                <td colspan="2">';
                $buffer .= "\n";
                $buffer .= $indent . '                    Als u niet wilt dat deze melding niet meer te ontvangen. klik <a href="';
                $value = $context->find('unsubscribe_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">hier</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </td>';
                $buffer .= "\n";
                $buffer .= $indent . '            </tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9bff00ea7277b0f7787c4c92f9d8a18b(Mustache_Context $context, $indent, $value) {
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
						Reactie van {{author_name}}
					</h4>
					<div style="color: #555555;font-family: Arial;font-size: 14px;">
					{{content}}<br>
					</div>
					<a href="{{url}}">Bekijk en reageer nu!</a>
				</td>
			</tr>
            {{#unsubscribe_url}}
            <tr>
                <td colspan="2">
                    Als u niet wilt dat deze melding niet meer te ontvangen. klik <a href="{{unsubscribe_url}}">hier</a>
                </td>
            </tr>
            {{/unsubscribe_url}}
		</table>
		<br/><br/>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<h1 style="color:#202020 !important;display:block;font-family:Arial;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
                $buffer .= "\n";
                $buffer .= $indent . '			';
                $value = $context->find('blog_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '		</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '		<table border="0" cellpadding="10" cellspacing="0" style="width: 100%">';
                $buffer .= "\n";
                $buffer .= $indent . '			<tr style="border-bottom: 1px solid #CCCCCC;">';
                $buffer .= "\n";
                $buffer .= $indent . '				<td style="width: 100px;">';
                $buffer .= "\n";
                $buffer .= $indent . '					<img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" />';
                $buffer .= "\n";
                $buffer .= $indent . '				</td>';
                $buffer .= "\n";
                $buffer .= $indent . '				<td>';
                $buffer .= "\n";
                $buffer .= $indent . '					<h4 style="color:#111111 !important;display:block;font-family:Arial;font-size:14px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">';
                $buffer .= "\n";
                $buffer .= $indent . '						Reactie van ';
                $value = $context->find('author_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '					</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div style="color: #555555;font-family: Arial;font-size: 14px;">';
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->find('content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<a href="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Bekijk en reageer nu!</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</td>';
                $buffer .= "\n";
                $buffer .= $indent . '			</tr>';
                $buffer .= "\n";
                // 'unsubscribe_url' section
                $buffer .= $this->section44b08edaccd0bd37fff3e87d798ec23b($context, $indent, $context->find('unsubscribe_url'));
                $buffer .= $indent . '		</table>';
                $buffer .= "\n";
                $buffer .= $indent . '		<br/><br/>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}