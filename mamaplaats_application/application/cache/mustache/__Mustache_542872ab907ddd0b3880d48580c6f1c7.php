<?php

class __Mustache_542872ab907ddd0b3880d48580c6f1c7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('email_header')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= "\n";
        // 'blogs' section
        $buffer .= $this->section484b682a24d31e6ca5e627846274921e($context, $indent, $context->find('blogs'));
        if ($partial = $this->mustache->loadPartial('email_footer')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section714f9a2d288eb958a55dd88bd8da4032(Mustache_Context $context, $indent, $value) {
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
						Reactie van {{author_name}}
					</h4>
					<div style="color: #555555;font-family: Arial;font-size: 14px;">
					{{content}}<br>
					</div>
					<a href="{{url}}">Bekijk en reageer nu!</a>
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
                $buffer .= $indent . '		</table>';
                $buffer .= "\n";
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section484b682a24d31e6ca5e627846274921e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<h1 style="color:#202020 !important;display:block;font-family:Arial;font-size:26px;font-style:normal;font-weight:bold;line-height:100%;letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left;">
			{{blog.title}}
		</h1>

		{{#comments}}

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
		</table>

		{{/comments}}

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
                $value = $context->findDot('blog.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '		</h1>';
                $buffer .= "\n";
                $buffer .= "\n";
                // 'comments' section
                $buffer .= $this->section714f9a2d288eb958a55dd88bd8da4032($context, $indent, $context->find('comments'));
                $buffer .= "\n";
                $buffer .= $indent . '		<br/><br/>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}