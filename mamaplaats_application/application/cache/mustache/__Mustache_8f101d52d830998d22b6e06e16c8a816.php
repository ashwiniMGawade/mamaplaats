<?php

class __Mustache_8f101d52d830998d22b6e06e16c8a816 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'coupon_category' section
        $buffer .= $this->section9f08dc22ae820338dd39f233c88a2cb3($context, $indent, $context->find('coupon_category'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionE9ae256336f59cd3ee1527c396784443(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					{{> coupon_offer}}
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('coupon_offer')) {
                    $buffer .= $partial->renderInternal($context, '					');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f08dc22ae820338dd39f233c88a2cb3(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="inner">
	<div class="row click-out">
		<div class="col-sm-8">
			<div class="intro-box">
				<span class="icon coupon-icon-{{icon}}"></span>
				<div class="description">
					<h1>{{title}}</h1>
					{{{description}}}
				</div>
			</div>
			<div class="popular-codes alt">
				<div class="heading-box">
					<h1>Kortingscodes, acties en gratis</h1>
				</div>
				{{#coupon_offers}}
					{{> coupon_offer}}
				{{/coupon_offers}}
				{{^coupon_offers}}
					<div class="alert alert-info">
						Er zijn op dit moment geen kortingscodes beschikbaar binnen deze categorie
					</div>
				{{/coupon_offers}}
			</div>
		</div>
		<div class="col-sm-4">
			<div class="inner-sidebar">
				{{>widget_newsletter_box}}
				{{>widget_social}}

				{{& widgets}}
			</div>
		</div>
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
                $buffer .= $indent . '<div id="inner">';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="row click-out">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-8">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="intro-box">';
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
                $buffer .= $indent . '					<h1>';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="popular-codes alt">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Kortingscodes, acties en gratis</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                // 'coupon_offers' section
                $buffer .= $this->sectionE9ae256336f59cd3ee1527c396784443($context, $indent, $context->find('coupon_offers'));
                // 'coupon_offers' inverted section
                $value = $context->find('coupon_offers');
                if (empty($value)) {
                    
                    $buffer .= $indent . '					<div class="alert alert-info">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						Er zijn op dit moment geen kortingscodes beschikbaar binnen deze categorie';
                    $buffer .= "\n";
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="inner-sidebar">';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('widget_newsletter_box')) {
                    $buffer .= $partial->renderInternal($context, '				');
                }
                if ($partial = $this->mustache->loadPartial('widget_social')) {
                    $buffer .= $partial->renderInternal($context, '				');
                }
                $buffer .= "\n";
                $buffer .= $indent . '				';
                $value = $context->find('widgets');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $buffer .= $indent . '</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}