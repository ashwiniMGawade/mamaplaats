<?php

class __Mustache_56f565c32c35d8916463cc92622198da extends Mustache_Template
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
        // 'win' section
        $buffer .= $this->sectionAaa6e62c5709f699ba6e7d9c5cf5c8c5($context, $indent, $context->find('win'));
        if ($partial = $this->mustache->loadPartial('widget_share_buttons')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_adfab_halfpage')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('reply_box')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= "\n";
        // 'win.comment_count' section
        $buffer .= $this->section5bbef20d081c72f3c657afe6448cff8f($context, $indent, $context->findDot('win.comment_count'));
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

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionB540e7bff9c375825297f90340ac1c50(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="alert alert-success">
                    Je bent succesvol geregistreerd. Let op: je bent nog niet ingeschreven voor de winactie, laat een reactie achter om mee te doen.
                </div>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                <div class="alert alert-success">';
                $buffer .= "\n";
                $buffer .= $indent . '                    Je bent succesvol geregistreerd. Let op: je bent nog niet ingeschreven voor de winactie, laat een reactie achter om mee te doen.';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8b8657fd3ff7b9a16948ffeb0eaff76(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'Winnaars Bekend: ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'Winnaars Bekend: ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65a57d7f24a370b99182f2be54642e75(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<img class="stempel" alt="winactie stempel" src="/assets/images/img-stempel01.png" width="135" height="133">
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<img class="stempel" alt="winactie stempel" src="/assets/images/img-stempel01.png" width="135" height="133">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE41f935c9a4882f51f5ba3fc54e10a17(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<div class="item">
						<div class="description">
							<div class="w"><span>W</span></div>
							<h2>Winnaar</h2>
							<h4>{{title}}</h4>
						</div>
						<div class="photo">
							<a class="photo-wrap" href="/lid/{{slug}}">
								<b><img alt="image description" src="{{avatar_path}}" width="202" height="194"></b>
								<span class="caption">{{full_name}}</span>
							</a>
						</div>
						<!--<div class="info">
							<a class="comments" href="#">953 reacties</a>
						</div>-->
					</div>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<div class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="w"><span>W</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<h2>Winnaar</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '							<h4>';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="photo-wrap" href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<b><img alt="image description" src="';
                $value = $context->find('avatar_path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="202" height="194"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '								<span class="caption">';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<!--<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="comments" href="#">953 reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>-->';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section169b8b23ede9421961b9827e041454ac(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<section class="w-listing">
				<h2>Winnaars</h2>
				<div class="w-area">
					{{#winners}}
					<div class="item">
						<div class="description">
							<div class="w"><span>W</span></div>
							<h2>Winnaar</h2>
							<h4>{{title}}</h4>
						</div>
						<div class="photo">
							<a class="photo-wrap" href="/lid/{{slug}}">
								<b><img alt="image description" src="{{avatar_path}}" width="202" height="194"></b>
								<span class="caption">{{full_name}}</span>
							</a>
						</div>
						<!--<div class="info">
							<a class="comments" href="#">953 reacties</a>
						</div>-->
					</div>
					{{/winners}}
				</div>
			</section>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<section class="w-listing">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2>Winnaars</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="w-area">';
                $buffer .= "\n";
                // 'winners' section
                $buffer .= $this->sectionE41f935c9a4882f51f5ba3fc54e10a17($context, $indent, $context->find('winners'));
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaa6e62c5709f699ba6e7d9c5cf5c8c5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#referrer}}
                <div class="alert alert-success">
                    Je bent succesvol geregistreerd. Let op: je bent nog niet ingeschreven voor de winactie, laat een reactie achter om mee te doen.
                </div>
            {{/referrer}}
			<section class="detail-block">
				<header class="heading-box">
					<h1>{{#winners_known}}Winnaars Bekend: {{/winners_known}}{{title}}</h1>
					<div class="meta alt">
						<span class="author">Door: <a href="/lid/{{author.slug}}">{{author.full_name}}</a></span>
						<span class="sep">•</span> <time datetime="{{created}}">{{created}}</time>
						<span class="sep">•</span> <a class="comments" href="#{{link_comments}}">{{comment_count}} reacties</a>
					</div>
				</header>
				<div class="winners-announced">
					<p class="scaled-image">
						{{#winners_known}}
						<img class="stempel" alt="winactie stempel" src="/assets/images/img-stempel01.png" width="135" height="133">
						{{/winners_known}}
						<img alt="{{title}}" src="{{thumbnail}}" width="750" height="488">
					</p>
					{{{content}}}
				</div>
			</section>
			{{#winners_known}}
			<section class="w-listing">
				<h2>Winnaars</h2>
				<div class="w-area">
					{{#winners}}
					<div class="item">
						<div class="description">
							<div class="w"><span>W</span></div>
							<h2>Winnaar</h2>
							<h4>{{title}}</h4>
						</div>
						<div class="photo">
							<a class="photo-wrap" href="/lid/{{slug}}">
								<b><img alt="image description" src="{{avatar_path}}" width="202" height="194"></b>
								<span class="caption">{{full_name}}</span>
							</a>
						</div>
						<!--<div class="info">
							<a class="comments" href="#">953 reacties</a>
						</div>-->
					</div>
					{{/winners}}
				</div>
			</section>
			{{/winners_known}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'referrer' section
                $buffer .= $this->sectionB540e7bff9c375825297f90340ac1c50($context, $indent, $context->find('referrer'));
                $buffer .= $indent . '			<section class="detail-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>';
                // 'winners_known' section
                $buffer .= $this->sectionD8b8657fd3ff7b9a16948ffeb0eaff76($context, $indent, $context->find('winners_known'));
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="meta alt">';
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
                $value = $context->findDot('author.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></span>';
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
                $value = $context->find('created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="sep">•</span> <a class="comments" href="#';
                $value = $context->find('link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
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
                $buffer .= $indent . '				<div class="winners-announced">';
                $buffer .= "\n";
                $buffer .= $indent . '					<p class="scaled-image">';
                $buffer .= "\n";
                // 'winners_known' section
                $buffer .= $this->section65a57d7f24a370b99182f2be54642e75($context, $indent, $context->find('winners_known'));
                $buffer .= $indent . '						<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('thumbnail');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="750" height="488">';
                $buffer .= "\n";
                $buffer .= $indent . '					</p>';
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->find('content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                // 'winners_known' section
                $buffer .= $this->section169b8b23ede9421961b9827e041454ac($context, $indent, $context->find('winners_known'));
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

    private function section5bbef20d081c72f3c657afe6448cff8f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div id="comments" class="comment-box">
				<div class="heading-box">
					<em class="qty">{{win.comment_count}} Reacties</em>
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
                $value = $context->findDot('win.comment_count');
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