<?php

class __Mustache_7c3cb23e016071d49b9315bfed22846b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Meest gelezen blogs</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div id="blog_list" class="grid-box">';
        $buffer .= "\n";
        // 'blog_list' section
        $buffer .= $this->sectionB2c09e4502efaff0489aa9128853089e($context, $indent, $context->find('blog_list'));
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <a href="#" onclick="return load_more.most_read_blogs(15)" class="lazy-load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionB2c09e4502efaff0489aa9128853089e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <article class="item">
                <figure class="photo">
                    <a class="photo-wrap" href="/blog/{{blog.slug}}">
                        <b><img alt="{{media.title}}" src="{{media.path}}" width="230" height="140"></b>
                    </a>
                </figure>
                <h4><a href="/blog/{{blog.slug}}">{{blog.title}}</a></h4>
                <p class="info">
                    <a href="/lid/{{user.slug}}">{{user.full_name}}</a> -
                    <time datetime="{{blog.created}}">{{blog.created_formatted}}</time>
                </p>
                <p>{{blog.excerpt}}</p>
            </article>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <article class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '                <figure class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a class="photo-wrap" href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <b><img alt="';
                $value = $context->findDot('media.title');
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
                $buffer .= '" width="230" height="140"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </figure>';
                $buffer .= "\n";
                $buffer .= $indent . '                <h4><a href="/blog/';
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
                $buffer .= $indent . '                <p class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a href="/lid/';
                $value = $context->findDot('user.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('user.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a> -';
                $buffer .= "\n";
                $buffer .= $indent . '                    <time datetime="';
                $value = $context->findDot('blog.created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('blog.created_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '                </p>';
                $buffer .= "\n";
                $buffer .= $indent . '                <p>';
                $value = $context->findDot('blog.excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '            </article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}