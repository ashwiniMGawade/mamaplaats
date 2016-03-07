<?php

class __Mustache_1e5a937c7cc5f5dc61fe9850eed1c237 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'products' section
        $buffer .= $this->section7270ddc2d8ff3e77c17e0f0a107079f7($context, $indent, $context->find('products'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionEba31827446d4ab163e49622ee249e59(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="stempel"><span>{{average_rating}}</span></span>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<span class="stempel"><span>';
                $value = $context->find('average_rating');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7270ddc2d8ff3e77c17e0f0a107079f7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="item">
	<figure class="photo">
		<a class="photo-wrap" href="/review/product/{{slug}}">
			{{#average_rating}}<span class="stempel"><span>{{average_rating}}</span></span>{{/average_rating}}
			<b><img alt="{{title}}" src="{{image_url}}" width="260" height="242"></b>
		</a>
	</figure>
	<h4><a href="/review/product/{{slug}}">{{title}}</a></h4>
	<p>{{description}}</p>
</article>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<article class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '	<figure class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '		<a class="photo-wrap" href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			';
                // 'average_rating' section
                $buffer .= $this->sectionEba31827446d4ab163e49622ee249e59($context, $indent, $context->find('average_rating'));
                $buffer .= "\n";
                $buffer .= $indent . '			<b><img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('image_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="260" height="242"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '		</a>';
                $buffer .= "\n";
                $buffer .= $indent . '	</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '	<h4><a href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h4>';
                $buffer .= "\n";
                $buffer .= $indent . '	<p>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}