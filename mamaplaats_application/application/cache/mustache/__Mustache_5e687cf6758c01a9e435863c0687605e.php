<?php

class __Mustache_5e687cf6758c01a9e435863c0687605e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="two-cols">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_for_mobile')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '		<div class="col-sm-8">';
        $buffer .= "\n";
        // 'blog' section
        $buffer .= $this->sectionA5ba96441e4076be46480d704d40af5d($context, $indent, $context->find('blog'));
        if ($partial = $this->mustache->loadPartial('blog_adfab_below_description')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_yieldpartners_for_mobile')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_share_buttons')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_adfab_halfpage')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        // 'author' section
        $buffer .= $this->section46ec2a7abd3338dfb30ab4aa4f97e649($context, $indent, $context->find('author'));
        $buffer .= $indent . '			<div class="related-articles">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h3>Blogs: ook leuk om te lezen</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="holder">';
        $buffer .= "\n";
        // 'related' section
        $buffer .= $this->sectionEdeada495b36bdafaca6ccb896d93aeb($context, $indent, $context->find('related'));
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('next_prev_buttons')) {
            $buffer .= $partial->renderInternal($context, '            ');
        }
        if ($partial = $this->mustache->loadPartial('reply_box')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        // 'blog.comment_count' section
        $buffer .= $this->section3025cf584f97c77e26e04f363d49dc60($context, $indent, $context->findDot('blog.comment_count'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="side-holder">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        if ($partial = $this->mustache->loadPartial('new_blog')) {
            $buffer .= $partial->renderInternal($context, '                ');
        }
        if ($partial = $this->mustache->loadPartial('widget_newsletter')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        if ($partial = $this->mustache->loadPartial('widget_adfab')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '               	';
        $value = $context->find('widgets');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_facebook')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
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

    private function section2d5c2d74c411c13d1220cc2fbe28b71c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<p class="sub-heading">{{excerpt}}</p>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<p class="sub-heading">';
                $value = $context->find('excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5ba96441e4076be46480d704d40af5d(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<section class="detail-block">
                {{>next_prev_buttons}}
				<header class="heading-box">
					<h1>{{title}}</h1>
					<div class="meta">
						<span class="author">Door: <a href="/lid/{{author.slug}}">
                                {{author.full_name}}
                        </a></span>
						<span class="sep">•</span> <time datetime="{{created}}">{{created_formatted}}</time>
						<span class="sep">•</span> <a href="#{{link_comments}}" class="comments">{{comment_count}} reacties</a>
					</div>
				</header>
				<p class="scaled-image">
					<img width="750" height="488" src="{{thumbnail}}" alt="{{title}}">
				</p>
				{{#excerpt}}<p class="sub-heading">{{excerpt}}</p>{{/excerpt}}
				{{{content}}}

				<!--<div class="read-more">Meer lezen over - <a href="#">Symptomen en problemen tijdens zwangerschap</a></div>-->
			</section>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<section class="detail-block">';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('next_prev_buttons')) {
                    $buffer .= $partial->renderInternal($context, '                ');
                }
                $buffer .= $indent . '				<header class="heading-box">';
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
                $buffer .= $indent . '					<div class="meta">';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="author">Door: <a href="/lid/';
                $value = $context->findDot('author.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                                ';
                $value = $context->findDot('author.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '                        </a></span>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="sep">•</span> <time datetime="';
                $value = $context->find('created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('created_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="sep">•</span> <a href="#';
                $value = $context->find('link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="comments">';
                $value = $context->find('comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p class="scaled-image">';
                $buffer .= "\n";
                $buffer .= $indent . '					<img width="750" height="488" src="';
                $value = $context->find('thumbnail');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                // 'excerpt' section
                $buffer .= $this->section2d5c2d74c411c13d1220cc2fbe28b71c($context, $indent, $context->find('excerpt'));
                $buffer .= "\n";
                $buffer .= $indent . '				';
                $value = $context->find('content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '				<!--<div class="read-more">Meer lezen over - <a href="#">Symptomen en problemen tijdens zwangerschap</a></div>-->';
                $buffer .= "\n";
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46ec2a7abd3338dfb30ab4aa4f97e649(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="blogger">
				<div class="photo">
					<a class="photo-wrap" href="/lid/{{slug}}"><b><img alt="{{full_name}}" src="{{avatar}}" width="140" height="120"></b></a>
				</div>
				<h3><a href="/lid/{{slug}}">{{author.full_name}}	</a></h3>
				<div class="info">
					<!--<a href="#" class="comments">953 reacties</a>-->
					<!--<a href="#" class="followers">700 volgers</a>-->
				</div>
				<p>{{biography}}</p>
				<a href="#" data-follow-id="{{id}}" class="btn follow check_follow">Volgen</a>
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="blogger">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="photo-wrap" href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><b><img alt="';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="140" height="120"></b></a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h3><a href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('author.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '	</a></h3>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '					<!--<a href="#" class="comments">953 reacties</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '					<!--<a href="#" class="followers">700 volgers</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p>';
                $value = $context->find('biography');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="#" data-follow-id="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn follow check_follow">Volgen</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdeada495b36bdafaca6ccb896d93aeb(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<article class="post">
						<div class="photo">
							<a href="/blog/{{blog.slug}}" class="photo-wrap">
								<img alt="{{blog.title}}" src="{{image.path}}" width="228" height="213">
							</a>
						</div>
						<div class="info">
							<h4><a href="/blog/{{blog.slug}}">{{blog.title}}</a></h4>
							<p>{{blog.excerpt}} <a href="/blog/{{blog.slug}}">&gt;</a></p>
						</div>
					</article>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<article class="post">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '								<img alt="';
                $value = $context->findDot('blog.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('image.path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="228" height="213">';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '							<h4><a href="/blog/';
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
                $buffer .= $indent . '							<p>';
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
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e766ec0d58a7fc10706d063db308f04(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							{{>replies}}
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('replies')) {
                    $buffer .= $partial->renderInternal($context, '							');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3025cf584f97c77e26e04f363d49dc60(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div id="comments" class="comment-box">
				<div class="heading-box">
					<em class="qty">{{blog.comment_count}} Reacties</em>
					<h3>Reacties</h3>
				</div>
				<div class="section">
					<ol class="comments">
						{{#comments}}
							{{>replies}}
						{{/comments}}
					</ol>
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
                $buffer .= $indent . '			<div id="comments" class="comment-box">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<em class="qty">';
                $value = $context->findDot('blog.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' Reacties</em>';
                $buffer .= "\n";
                $buffer .= $indent . '					<h3>Reacties</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="section">';
                $buffer .= "\n";
                $buffer .= $indent . '					<ol class="comments">';
                $buffer .= "\n";
                // 'comments' section
                $buffer .= $this->section2e766ec0d58a7fc10706d063db308f04($context, $indent, $context->find('comments'));
                $buffer .= $indent . '					</ol>';
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