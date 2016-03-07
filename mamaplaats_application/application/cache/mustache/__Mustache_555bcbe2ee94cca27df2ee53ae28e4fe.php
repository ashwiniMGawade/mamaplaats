<?php

class __Mustache_555bcbe2ee94cca27df2ee53ae28e4fe extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="adfab_footer_inner_pages" class="footer-box align-center big-banner">';
        $buffer .= "\n";
        // 'footer_overview_pages_advertisement.show_ad' section
        $buffer .= $this->sectionFb49b100798ae934d0fb2ea90d379396($context, $indent, $context->findDot('footer_overview_pages_advertisement.show_ad'));
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionFb49b100798ae934d0fb2ea90d379396(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{{footer_overview_pages_advertisement.text}}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		';
                $value = $context->findDot('footer_overview_pages_advertisement.text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}