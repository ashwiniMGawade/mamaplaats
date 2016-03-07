<?php

class __Mustache_24b1997d9f74642be21ca3d18d0ddbf9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'closed_win' section
        $buffer .= $this->section209a78da6bd513087b3f9a2f7937d607($context, $indent, $context->find('closed_win'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section209a78da6bd513087b3f9a2f7937d607(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="item">
			<div class="description">
				<div class="w"><span>W</span></div>
				<h2>Winnaar</h2>
				<h4>{{win.title}}</h4>
			</div>
			<div class="photo">
				<a class="photo-wrap" href="/win/{{win.slug}}">
					<b><img alt="{{win.title}}" src="{{media.path}}" width="202" height="194"></b>
					<span class="caption">{{win.winners}}</span>
				</a>
			</div>
			<div class="info">
				<a class="comments" href="/win/{{win.slug}}#{{win.link_comments}}">{{win.comment_count}} reacties</a>
			</div>
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="w"><span>W</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2>Winnaar</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4>';
                $value = $context->findDot('win.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a class="photo-wrap" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
                $value = $context->findDot('win.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('media.path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="202" height="194"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="caption">';
                $value = $context->findDot('win.winners');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a class="comments" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#';
                $value = $context->findDot('win.link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('win.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}