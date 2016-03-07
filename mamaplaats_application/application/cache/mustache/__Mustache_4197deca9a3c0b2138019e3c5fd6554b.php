<?php

class __Mustache_4197deca9a3c0b2138019e3c5fd6554b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<section class="blog-masonry following-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Blogs van moeders die ik volg</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="grid-box">';
        $buffer .= "\n";
        // 'blogs' section
        $buffer .= $this->section3838c92bd1701c54d83df520007b27ec($context, $indent, $context->find('blogs'));
        $buffer .= "\n";
        // 'following' inverted section
        $value = $context->find('following');
        if (empty($value)) {
            
            $buffer .= $indent . '			<div>';
            $buffer .= "\n";
            $buffer .= $indent . '				Houd je favorite moeders in de gaten en zorg dat je ze volgt. De blogberichten van deze moeders worden dan hier weergegeven! Momenteel volg je nog geen moeder. <a href="';
            $value = $context->find('basepath');
            if (!is_string($value) && is_callable($value)) {
                $value = $this->mustache
                    ->loadLambda((string) call_user_func($value))
                    ->renderInternal($context, $indent);
            }
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= 'follow/suggestions">Klik hier om moeders te volgen</a>';
            $buffer .= "\n";
            $buffer .= $indent . '			</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-following">';
        $buffer .= "\n";
        // 'load_more_following_blogs' section
        $buffer .= $this->sectionB6f589213571949938004d225f22fc67($context, $indent, $context->find('load_more_following_blogs'));
        $buffer .= $indent . '<section class="blog-masonry most_read-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Meest gelezen blogs</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="grid-box">';
        $buffer .= "\n";
        // 'top_blogs' section
        $buffer .= $this->section3838c92bd1701c54d83df520007b27ec($context, $indent, $context->find('top_blogs'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        // 'top_blogs' inverted section
        $value = $context->find('top_blogs');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '            Geen blog gevonden';
            $buffer .= "\n";
            $buffer .= $indent . '        </div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-most_read">';
        $buffer .= "\n";
        // 'load_more_top_blogs' section
        $buffer .= $this->sectionD644f27ba5dfdaf8e40c1a3e4245b6ea($context, $indent, $context->find('load_more_top_blogs'));
        $buffer .= $indent . '<section class="blog-masonry list-blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '    <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Mijn blogs</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </header>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="grid-box">';
        $buffer .= "\n";
        // 'own_blogs' section
        $buffer .= $this->sectionB2c09e4502efaff0489aa9128853089e($context, $indent, $context->find('own_blogs'));
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        // 'own_blogs' inverted section
        $value = $context->find('own_blogs');
        if (empty($value)) {
            
            $buffer .= $indent . '        <div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '            Geen blog gevonden';
            $buffer .= "\n";
            $buffer .= $indent . '        </div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '</section>';
        $buffer .= "\n";
        $buffer .= $indent . '<input type="hidden" value="3" id="limit-list">';
        $buffer .= "\n";
        // 'load_more_blogs' section
        $buffer .= $this->sectionC80de5187bf3b1d9eec8f2717f6f1fe8($context, $indent, $context->find('load_more_blogs'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section3838c92bd1701c54d83df520007b27ec(Mustache_Context $context, $indent, $value) {
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
                $buffer .= $indent . '			<article class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<figure class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="photo-wrap" href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						<b><img alt="';
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
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</figure>';
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
                $buffer .= $indent . '				<p class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a href="/lid/';
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
                $buffer .= $indent . '					<time datetime="';
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
                $buffer .= $indent . '				</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p>';
                $value = $context->findDot('blog.excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '			</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6f589213571949938004d225f22fc67(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="#" id="load-more-btn-following" onclick="return load_more.user_profile_dashboard(\'following\', 6)" class="load-more">Klik hier om meer berichten te laden</a>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<a href="#" id="load-more-btn-following" onclick="return load_more.user_profile_dashboard(\'following\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD644f27ba5dfdaf8e40c1a3e4245b6ea(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="#" id="load-more-btn-most_read" onclick="return load_more.user_profile_dashboard(\'most_read\', 6)" class="load-more">Klik hier om meer berichten te laden</a>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<a href="#" id="load-more-btn-most_read" onclick="return load_more.user_profile_dashboard(\'most_read\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
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

    private function sectionC80de5187bf3b1d9eec8f2717f6f1fe8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<a href="#" id="load-more-btn-list" onclick="return load_more.user_profile_dashboard(\'list\', 6)" class="load-more">Klik hier om meer berichten te laden</a>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<a href="#" id="load-more-btn-list" onclick="return load_more.user_profile_dashboard(\'list\', 6)" class="load-more">Klik hier om meer berichten te laden</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}