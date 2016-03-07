<?php

class __Mustache_39e4b174f66bc6e996a2b3ab95c2a673 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<article class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="create-btn-block">';
        $buffer .= "\n";
        $buffer .= $indent . '        <a href="';
        $value = $context->find('basepath');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'user/blog/index" class="blogbtn">Schrijf je eigen blog</a>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="top-blogs">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h3>Top 3 meest gelezen blogs!</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="listing">';
        $buffer .= "\n";
        // 'most_viewed_blogs' section
        $buffer .= $this->sectionDab3480529d0336a7ccda2bf891dc7ff($context, $indent, $context->find('most_viewed_blogs'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</article>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionDab3480529d0336a7ccda2bf891dc7ff(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="unit">
				<div class="photo">
					<a href="/blog/{{blog.slug}}">
						<span class="photo-wrap">
							<b><img alt="{{blog.title}}" src="{{media.path}}" width="66" height="65"></b>
						</span>
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
                $buffer .= $indent . '			<div class="unit">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '							<b><img alt="';
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
                $buffer .= '" width="66" height="65"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '						</span>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="num">';
                $value = $context->findDot('blog.position');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '.</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h4><a href="/blog/';
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
                $buffer .= $indent . '					<p>';
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
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}