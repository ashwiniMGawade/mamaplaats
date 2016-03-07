<?php

class __Mustache_ed68ee7211be9a7872c20b48537cd94d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        // 'has_messages' section
        $buffer .= $this->sectionDf778ac34f9e41b4ebea1743cad5b6ca($context, $indent, $context->find('has_messages'));
        $buffer .= $indent . '    <div id="blog_list" class="grid-box">';
        $buffer .= "\n";
        // 'blog_list' section
        $buffer .= $this->section32f926ae8231ec0f3531de32f4e0e8e6($context, $indent, $context->find('blog_list'));
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <a href="#" onclick="return load_more.user_blogs(\'';
        $value = $context->find('list_type');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\', 15)" class="lazy-load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA7c821876eb5e31c33a67d6479078745(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{message}}<br />';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $context->find('message');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf778ac34f9e41b4ebea1743cad5b6ca(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-{{type}}">
			{{#messages}}{{message}}<br />{{/messages}}
        </div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        <div class="alert alert-';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			';
                // 'messages' section
                $buffer .= $this->sectionA7c821876eb5e31c33a67d6479078745($context, $indent, $context->find('messages'));
                $buffer .= "\n";
                $buffer .= $indent . '        </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32f926ae8231ec0f3531de32f4e0e8e6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <article class="item">
                <figure class="photo">
                    <a class="photo-wrap" href="{{blog.link_title}}">
                        <b><img alt="{{media.title}}" src="{{media.path}}" width="230" height="140"></b>
                    </a>
                </figure>
                <h4><a href="{{blog.link_title}}">{{blog.title}}</a></h4>
                <p class="info">
                    <a href="/lid/{{user.slug}}">{{user.full_name}}</a> -
                    <time datetime="{{blog.created}}">{{blog.created_formatted}}</time>
                </p>
                <p>{{blog.excerpt}}</p>
                <a href="/user/blog/index/{{blog.id}}">Bewerken Blog</a>
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
                $buffer .= $indent . '                    <a class="photo-wrap" href="';
                $value = $context->findDot('blog.link_title');
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
                $buffer .= $indent . '                <h4><a href="';
                $value = $context->findDot('blog.link_title');
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
                $buffer .= $indent . '                <a href="/user/blog/index/';
                $value = $context->findDot('blog.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Bewerken Blog</a>';
                $buffer .= "\n";
                $buffer .= $indent . '            </article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}