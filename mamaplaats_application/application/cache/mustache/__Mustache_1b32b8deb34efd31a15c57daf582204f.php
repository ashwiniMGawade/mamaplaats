<?php

class __Mustache_1b32b8deb34efd31a15c57daf582204f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'author' section
        $buffer .= $this->section22511b04db0a38da4287883a9fbf3e49($context, $indent, $context->find('author'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section5fb9b9c71efd21d45f70be35d4807fff(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<article class="item">
						<figure class="photo">
							<a class="photo-wrap" href="/blog/{{blog.slug}}"><b><img alt="{{blog.title}}" src="{{media.path}}" width="230" height="140"></b></a>
						</figure>
						<h4><a href="/blog/{{blog.slug}}">{{blog.title}}</a></h4>
						<p class="info"><a href="/lid/{{author.slug}}">{{author.full_name}}</a> - <time datetime="{{blog.created}}">{{blog.created_formatted}}</time></p>
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
                $buffer .= $indent . '					<article class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '						<figure class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="photo-wrap" href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><b><img alt="';
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
                $buffer .= '" width="230" height="140"></b></a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '						<h4><a href="/blog/';
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
                $buffer .= $indent . '						<p class="info"><a href="/lid/';
                $value = $context->findDot('author.slug');
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
                $buffer .= '</a> - <time datetime="';
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
                $buffer .= '</time></p>';
                $buffer .= "\n";
                $buffer .= $indent . '						<p>';
                $value = $context->findDot('blog.excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '					</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7e28a1ce6e210464066a2a5a3e2e461(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<a href="#" onclick="return load_more.author_blog(\'{{author.slug}}\', 15)" class="load-more">Meer blog berichten van {{full_name}} bekijken</a>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<a href="#" onclick="return load_more.author_blog(\'';
                $value = $context->findDot('author.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', 15)" class="load-more">Meer blog berichten van ';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' bekijken</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22511b04db0a38da4287883a9fbf3e49(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="two-cols">
	<div class="row">
		<div class="col-sm-8">
			<section class="blog-masonry">
				<header class="heading-box">
					<h1>Bloggers</h1>
				</header>
				<div class="blogger alt">
					<div class="holder">
						<div class="photo">
							<a class="photo-wrap" href="#">
								<b><img alt="{{full_name}}" src="{{avatar}}" width="140" height="120"></b>
								<!--<span class="title">supermama</span>-->
							</a>
						</div>
						<h3>{{full_name}}</h3>
						<div class="info">
							<!--<a href="#" class="comments">{{comment_count}} reacties</a>-->
							<!--<a href="#" class="followers">{{follower_count}} volgers</a>-->
						</div>
						<ul class="info-list">
							<li>Mamaplaats blogger sinds: {{registration_date}}</li>
							<!--<li>Woonplaats: Leiden</li>-->
						</ul>
						<a href="#" data-follow-id="{{id}}" class="btn follow check_follow">Volgen</a>
					</div>
					<p>{{biography}}</p>
				</div>
				<header class="heading-box">
					<h1>Blogs van {{display_name}}</h1>
				</header>
				<div class="grid-box">
					{{#blog_list}}
					<article class="item">
						<figure class="photo">
							<a class="photo-wrap" href="/blog/{{blog.slug}}"><b><img alt="{{blog.title}}" src="{{media.path}}" width="230" height="140"></b></a>
						</figure>
						<h4><a href="/blog/{{blog.slug}}">{{blog.title}}</a></h4>
						<p class="info"><a href="/lid/{{author.slug}}">{{author.full_name}}</a> - <time datetime="{{blog.created}}">{{blog.created_formatted}}</time></p>
						<p>{{blog.excerpt}}</p>
					</article>
					{{/blog_list}}
				</div>
				{{#show_load_more}}
				<a href="#" onclick="return load_more.author_blog(\'{{author.slug}}\', 15)" class="load-more">Meer blog berichten van {{full_name}} bekijken</a>
				{{/show_load_more}}
			</section>
			{{> widget_newsletter_large}}
		</div>
		<div class="col-sm-4">
			<div class="side-holder">
				{{> widget_social}}
				{{> widget_newsletter}}
				<script type="text/javascript">
                <!--
                    document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100020003&click=[click]&ord=\' + new Date().getTime() + \'"></scri\'+\'pt>\');
                //-->
                </script>
				{{> widget_adfab}}
				{{& widgets}}
				{{> widget_facebook}}
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
                $buffer .= $indent . '<div id="two-cols">';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="row">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-8">';
                $buffer .= "\n";
                $buffer .= $indent . '			<section class="blog-masonry">';
                $buffer .= "\n";
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Bloggers</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="blogger alt">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="photo-wrap" href="#">';
                $buffer .= "\n";
                $buffer .= $indent . '								<b><img alt="';
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
                $buffer .= '" width="140" height="120"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '								<!--<span class="title">supermama</span>-->';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<h3>';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '							<!--<a href="#" class="comments">';
                $value = $context->find('comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '							<!--<a href="#" class="followers">';
                $value = $context->find('follower_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' volgers</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<ul class="info-list">';
                $buffer .= "\n";
                $buffer .= $indent . '							<li>Mamaplaats blogger sinds: ';
                $value = $context->find('registration_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<!--<li>Woonplaats: Leiden</li>-->';
                $buffer .= "\n";
                $buffer .= $indent . '						</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '						<a href="#" data-follow-id="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn follow check_follow">Volgen</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<p>';
                $value = $context->find('biography');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Blogs van ';
                $value = $context->find('display_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="grid-box">';
                $buffer .= "\n";
                // 'blog_list' section
                $buffer .= $this->section5fb9b9c71efd21d45f70be35d4807fff($context, $indent, $context->find('blog_list'));
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                // 'show_load_more' section
                $buffer .= $this->sectionF7e28a1ce6e210464066a2a5a3e2e461($context, $indent, $context->find('show_load_more'));
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('widget_newsletter_large')) {
                    $buffer .= $partial->renderInternal($context, '			');
                }
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="side-holder">';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('widget_social')) {
                    $buffer .= $partial->renderInternal($context, '				');
                }
                if ($partial = $this->mustache->loadPartial('widget_newsletter')) {
                    $buffer .= $partial->renderInternal($context, '				');
                }
                $buffer .= $indent . '				<script type="text/javascript">';
                $buffer .= "\n";
                $buffer .= $indent . '                <!--';
                $buffer .= "\n";
                $buffer .= $indent . '                    document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100020003&click=[click]&ord=\' + new Date().getTime() + \'"></scri\'+\'pt>\');';
                $buffer .= "\n";
                $buffer .= $indent . '                //-->';
                $buffer .= "\n";
                $buffer .= $indent . '                </script>';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('widget_adfab')) {
                    $buffer .= $partial->renderInternal($context, '				');
                }
                $buffer .= $indent . '				';
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
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}