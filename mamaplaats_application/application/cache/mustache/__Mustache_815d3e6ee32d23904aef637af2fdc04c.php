<?php

class __Mustache_815d3e6ee32d23904aef637af2fdc04c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="top-blogs">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h3>Top 3 Blogs</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="listing">';
        $buffer .= "\n";
        // 'most_viewed_blogs' section
        $buffer .= $this->section460de69ec67322fd82f2f0c326d1c975($context, $indent, $context->find('most_viewed_blogs'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_footer_inner_pages')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        if ($partial = $this->mustache->loadPartial('discount_block')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section460de69ec67322fd82f2f0c326d1c975(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="item">
			<div class="photo">
				<a href="/blog/{{blog.slug}}">
					<span class="photo-wrap"><img alt="{{blog.title}}" src="{{media.path}}" width="112" height="110"></span>
					<span class="num">{{blog.position}}.</span>
				</a>
			</div>
			<div class="description">
				<h4><a href="/blog/{{blog.slug}}">{{blog.title}}</a></h4>
				<p>{{blog.excerpt}} <a href="/blog/{{blog.slug}}">&gt;</a></p>
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
                $buffer .= $indent . '			<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="photo-wrap"><img alt="';
                $value = $context->findDot('blog.title');
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
                $buffer .= '" width="112" height="110"></span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="num">';
                $value = $context->findDot('blog.position');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '.</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4><a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('blog.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h4>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p>';
                $value = $context->findDot('blog.excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">&gt;</a></p>';
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