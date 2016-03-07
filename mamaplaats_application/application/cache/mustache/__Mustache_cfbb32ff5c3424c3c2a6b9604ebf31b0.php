<?php

class __Mustache_cfbb32ff5c3424c3c2a6b9604ebf31b0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('pregnancy_calander')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="inner">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="clearfix"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Gratis acties</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-8">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="popular-codes">';
        $buffer .= "\n";
        // 'free_offers' section
        $buffer .= $this->section0f737350e6371d6c1d11b11a8e0819c6($context, $indent, $context->find('free_offers'));
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="inner-sidebar">';
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

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section0f737350e6371d6c1d11b11a8e0819c6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> coupon_offer}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('coupon_offer')) {
                    $buffer .= $partial->renderInternal($context, '');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}