<?php

class __Mustache_9be4aa235c35069b96d636aaa8f829c2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="popular-activities-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h2>Populair</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '		<h4>De meeste populaire aanbiedingen</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="popular-listing">';
        $buffer .= "\n";
        $buffer .= $indent . '		<ul>';
        $buffer .= "\n";
        // 'popular_coupon_offers' section
        $buffer .= $this->section89743fffe20550c73181280818679f71($context, $indent, $context->find('popular_coupon_offers'));
        $buffer .= $indent . '		</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="view-all" href="/korting/nieuwste">Bekijk alle acties</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section89743fffe20550c73181280818679f71(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<li>
				<a class="item" href="/korting/winkel/{{coupon_shop_slug}}#show_offer_{{id}}">
					<img class="photo" alt="{{coupon_shop_name}}" src="{{image}}" width="58" height="58">
					<div class="description">
						<h3>{{coupon_shop_name}}</h3>
						<p>{{description}}</p>
					</div>
				</a>
			</li>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<li>';
                $buffer .= "\n";
                $buffer .= $indent . '				<a class="item" href="/korting/winkel/';
                $value = $context->find('coupon_shop_slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#show_offer_';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '					<img class="photo" alt="';
                $value = $context->find('coupon_shop_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="58" height="58">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '						<h3>';
                $value = $context->find('coupon_shop_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '						<p>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}