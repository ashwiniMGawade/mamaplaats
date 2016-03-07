<?php

class __Mustache_570cd9978768dd8173d886b2ba11da20 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<section class="featured-section-blocks">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        // 'blocks' section
        $buffer .= $this->sectionD502c5d623cb307578c9ca3d71577d8f($context, $indent, $context->find('blocks'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section2d9cb8061caeb27bd4df5b44368acc11(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' show-mobile';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' show-mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD502c5d623cb307578c9ca3d71577d8f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="col-sm-5">
			<figure class="item{{#one.show_mobile}} show-mobile{{/one.show_mobile}}">
				<a href="{{one.url}}" class="photo-wrap">
					<b><img alt="{{one.title}}" src="{{one.image}}?cache={{version}}" width="450" height="288"></b>
					<span class="caption">{{one.title}}</span>
				</a>
			</figure>
		</div>
		<div class="col-sm-3">
			<figure class="item small{{#two.show_mobile}} show-mobile{{/two.show_mobile}}">
				<a href="{{two.url}}" class="photo-wrap">
					<b><img alt="{{two.title}}" src="{{two.image}}?cache={{version}}" width="271" height="129"></b>
					<span class="caption">{{two.title}}</span>
				</a>
			</figure>
			<figure class="item small{{#three.show_mobile}} show-mobile{{/three.show_mobile}}">
				<a href="{{three.url}}" class="photo-wrap">
					<b><img alt="{{three.title}}" src="{{three.image}}?cache={{version}}" width="271" height="129"></b>
					<span class="caption">{{three.title}}</span>
				</a>
			</figure>
		</div>
		<div class="col-sm-4">
			<figure class="item{{#four.show_mobile}} show-mobile{{/four.show_mobile}}">
				<a href="{{four.url}}" class="photo-wrap">
					<b><img alt="{{four.title}}" src="{{four.image}}?cache={{version}}" width="347" height="288"></b>
					<span class="caption">{{four.title}}</span>
				</a>
			</figure>
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="col-sm-5">';
                $buffer .= "\n";
                $buffer .= $indent . '			<figure class="item';
                // 'one.show_mobile' section
                $buffer .= $this->section2d9cb8061caeb27bd4df5b44368acc11($context, $indent, $context->findDot('one.show_mobile'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="';
                $value = $context->findDot('one.url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
                $value = $context->findDot('one.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('one.image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?cache=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="450" height="288"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="caption">';
                $value = $context->findDot('one.title');
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
                $buffer .= $indent . '			</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-3">';
                $buffer .= "\n";
                $buffer .= $indent . '			<figure class="item small';
                // 'two.show_mobile' section
                $buffer .= $this->section2d9cb8061caeb27bd4df5b44368acc11($context, $indent, $context->findDot('two.show_mobile'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="';
                $value = $context->findDot('two.url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
                $value = $context->findDot('two.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('two.image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?cache=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="271" height="129"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="caption">';
                $value = $context->findDot('two.title');
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
                $buffer .= $indent . '			</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '			<figure class="item small';
                // 'three.show_mobile' section
                $buffer .= $this->section2d9cb8061caeb27bd4df5b44368acc11($context, $indent, $context->findDot('three.show_mobile'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="';
                $value = $context->findDot('three.url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
                $value = $context->findDot('three.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('three.image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?cache=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="271" height="129"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="caption">';
                $value = $context->findDot('three.title');
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
                $buffer .= $indent . '			</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '			<figure class="item';
                // 'four.show_mobile' section
                $buffer .= $this->section2d9cb8061caeb27bd4df5b44368acc11($context, $indent, $context->findDot('four.show_mobile'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="';
                $value = $context->findDot('four.url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
                $value = $context->findDot('four.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('four.image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?cache=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="347" height="288"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="caption">';
                $value = $context->findDot('four.title');
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
                $buffer .= $indent . '			</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}