<?php

class __Mustache_4de1a787f4fb3c4aa614e7309d365795 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="popular-categories-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h2>Populairste Categorieen</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '		<h4>En de bijbehorende populairste acties, kortingscodes en gratis acties!</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul class="tabset">';
        $buffer .= "\n";
        // 'popular_coupon_categories' section
        $buffer .= $this->sectionE10f46173e44099e1e6cd012f86fda11($context, $indent, $context->find('popular_coupon_categories'));
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '	<a href="/korting/categorien" class="view-all">Bekijk&nbsp;alle categorieen</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionE10f46173e44099e1e6cd012f86fda11(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<li>
			<a class="item" href="/korting/categorie/{{slug}}">
				<span class="icon coupon-icon-{{icon}}"></span>
				<div class="description">
					<h3>{{name}}</h3>
					<p>{{coupon_offer_count}} codes beschikbaar</p>
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
                $buffer .= $indent . '		<li>';
                $buffer .= "\n";
                $buffer .= $indent . '			<a class="item" href="/korting/categorie/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<span class="icon coupon-icon-';
                $value = $context->find('icon');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h3>';
                $value = $context->find('name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '					<p>';
                $value = $context->find('coupon_offer_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' codes beschikbaar</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</a>';
                $buffer .= "\n";
                $buffer .= $indent . '		</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}