<?php

class __Mustache_2aa1f6509cfdd8a69b73d34e56a62697 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<article class="item simple">';
        $buffer .= "\n";
        $buffer .= $indent . '	<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="photo-wrap" href="review/product/';
        $value = $context->findDot('review_product.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '			<span class="stempel"><span>';
        $value = $context->findDot('review_product.average_rating');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span></span>';
        $buffer .= "\n";
        $buffer .= $indent . '			<b><img alt="';
        $value = $context->findDot('review_product.title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" src="';
        $value = $context->findDot('review_product.image_url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '		</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="category"><a href="/review/producten">Review</a></h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h4><a href="review/product/';
        $value = $context->findDot('review_product.slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->findDot('review_product.title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>';
        $value = $context->findDot('review_product.description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</p>';
        $buffer .= "\n";
        $buffer .= $indent . '</article>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}