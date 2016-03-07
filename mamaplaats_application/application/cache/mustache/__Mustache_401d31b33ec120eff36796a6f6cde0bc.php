<?php

class __Mustache_401d31b33ec120eff36796a6f6cde0bc extends Mustache_Template
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
        // 'review' section
        $buffer .= $this->section1bb1f2c967159f7ac73d2defc04b1aa1($context, $indent, $context->find('review'));
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="conclusion-block">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="holder">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="score">';
        $value = $context->findDot('review.rating_overal');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="col">';
        $buffer .= "\n";
        $buffer .= $indent . '						<h3>voordelen</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '						<ul class="benefits-list">';
        $buffer .= "\n";
        // 'remarks.positive' section
        $buffer .= $this->section49ee5e0b02205ed2db28b0c0e9275ae5($context, $indent, $context->findDot('remarks.positive'));
        $buffer .= $indent . '						</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="col">';
        $buffer .= "\n";
        $buffer .= $indent . '						<h3>nadelen</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '						<ul class="disadvantages-list">';
        $buffer .= "\n";
        // 'remarks.negative' section
        $buffer .= $this->section49ee5e0b02205ed2db28b0c0e9275ae5($context, $indent, $context->findDot('remarks.negative'));
        $buffer .= $indent . '						</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        // 'sections' section
        $buffer .= $this->section3cb57269e394d5d6aa0bf5ff70be278c($context, $indent, $context->find('sections'));
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="review-results">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h3>Scores</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="holder">';
        $buffer .= "\n";
        $buffer .= $indent . '					<ul class="listing">';
        $buffer .= "\n";
        // 'ratings' section
        $buffer .= $this->sectionAd0e2766038952e322c41536293f4086($context, $indent, $context->find('ratings'));
        $buffer .= $indent . '					</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="total-score">';
        $buffer .= "\n";
        $buffer .= $indent . '						<h3>Totale score</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="amount">';
        $value = $context->findDot('review.rating_overal');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_share_buttons')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_adfab_halfpage')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        // 'user' section
        $buffer .= $this->section93f647b5e58ab62b9ceb96e7b942b39c($context, $indent, $context->find('user'));
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

    private function section1bb1f2c967159f7ac73d2defc04b1aa1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<section class="detail-block">
				<header class="heading-box">
					<h1>{{title}}</h1>
					<div class="meta alt">
						<span class="author">Door: <a href="/lid/{{user.slug}}">{{user.full_name}}</a></span>
						<span class="sep">•</span> <time datetime="{{published}}">{{published_formatted}}</time>
						<!--<span class="sep">•</span> <a href="#" class="comments">26 reacties</a>-->
					</div>
				</header>
				<div class="info-box">
					<div class="holder">
						<div class="photo">
							<img alt="{{user.full_name}}" src="{{user.avatar}}" width="280" height="250">
							<div class="desc">TESTMOEDER <span>{{user.full_name}}</span></div>
						</div>
						<h2>Even voorstellen...</h2>
						{{{information}}}
					</div>
					<div class="hr"></div>
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
                $buffer .= $indent . '			<section class="detail-block">';
                $buffer .= "\n";
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
                $buffer .= $indent . '					<div class="meta alt">';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="author">Door: <a href="/lid/';
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
                $buffer .= '</a></span>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="sep">•</span> <time datetime="';
                $value = $context->find('published');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('published_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '						<!--<span class="sep">•</span> <a href="#" class="comments">26 reacties</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="info-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<img alt="';
                $value = $context->findDot('user.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('user.avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="280" height="250">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="desc">TESTMOEDER <span>';
                $value = $context->findDot('user.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<h2>Even voorstellen...</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                $value = $context->find('information');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="hr"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49ee5e0b02205ed2db28b0c0e9275ae5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<li>{{remark}}</li>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '								<li>';
                $value = $context->find('remark');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e4db54797dff440552aabc97ad5616f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li>
							<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
								<img alt="image description" src="{{thumb}}" width="134" height="126">
							</a>
						</li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<img alt="image description" src="';
                $value = $context->find('thumb');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="134" height="126">';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cd6a1cb7119ccd93b852ce58509e1c1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="photo-block">
					<h3>Foto’s</h3>
					<ul class="photos-list">
						{{#images}}
						<li>
							<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
								<img alt="image description" src="{{thumb}}" width="134" height="126">
							</a>
						</li>
						{{/images}}
					</ul>
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="photo-block">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h3>Foto’s</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '					<ul class="photos-list">';
                $buffer .= "\n";
                // 'images' section
                $buffer .= $this->section2e4db54797dff440552aabc97ad5616f($context, $indent, $context->find('images'));
                $buffer .= $indent . '					</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c86c4f7b916ffdebdea17e48760a12b(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li>
							<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
								<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
							</a>
						</li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a onclick="load_video.in_container(\'#video_container\', \'';
                $value = $context->find('embed');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');return false;" href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('thumb');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="120" height="90">';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section897c6683d00ed9f895363c8553898235(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="video-block">
					<h3>Videos</h3>
					<div class="holder">
						<iframe id="video_container" width="750" height="450" src="{{first_video.embed}}" frameborder="0" allowfullscreen></iframe>
					</div>
					<ul class="video-list">
						{{#videos}}
						<li>
							<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
								<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
							</a>
						</li>
						{{/videos}}
					</ul>
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="video-block">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h3>Videos</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '						<iframe id="video_container" width="750" height="450" src="';
                $value = $context->findDot('first_video.embed');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" frameborder="0" allowfullscreen></iframe>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<ul class="video-list">';
                $buffer .= "\n";
                // 'videos' section
                $buffer .= $this->section1c86c4f7b916ffdebdea17e48760a12b($context, $indent, $context->find('videos'));
                $buffer .= $indent . '					</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cb57269e394d5d6aa0bf5ff70be278c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<section class="section-block">
				<h2>{{question}}</h2>
				{{{content}}}
				{{^content}}
				<div class="alert alert-info">
					Dit wordt op dit moment nog onderzocht. Kom later terug voor een update!
				</div>
				{{/content}}

				{{#display_images}}
				<div class="photo-block">
					<h3>Foto’s</h3>
					<ul class="photos-list">
						{{#images}}
						<li>
							<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
								<img alt="image description" src="{{thumb}}" width="134" height="126">
							</a>
						</li>
						{{/images}}
					</ul>
				</div>
				{{/display_images}}

				{{#display_videos}}
				<div class="video-block">
					<h3>Videos</h3>
					<div class="holder">
						<iframe id="video_container" width="750" height="450" src="{{first_video.embed}}" frameborder="0" allowfullscreen></iframe>
					</div>
					<ul class="video-list">
						{{#videos}}
						<li>
							<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
								<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
							</a>
						</li>
						{{/videos}}
					</ul>
				</div>
				{{/display_videos}}
			</section>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<section class="section-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2>';
                $value = $context->find('question');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h2>';
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
                // 'content' inverted section
                $value = $context->find('content');
                if (empty($value)) {
                    
                    $buffer .= $indent . '				<div class="alert alert-info">';
                    $buffer .= "\n";
                    $buffer .= $indent . '					Dit wordt op dit moment nog onderzocht. Kom later terug voor een update!';
                    $buffer .= "\n";
                    $buffer .= $indent . '				</div>';
                    $buffer .= "\n";
                }
                $buffer .= "\n";
                // 'display_images' section
                $buffer .= $this->section3cd6a1cb7119ccd93b852ce58509e1c1($context, $indent, $context->find('display_images'));
                $buffer .= "\n";
                // 'display_videos' section
                $buffer .= $this->section897c6683d00ed9f895363c8553898235($context, $indent, $context->find('display_videos'));
                $buffer .= $indent . '			</section>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd0e2766038952e322c41536293f4086(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li>
							<span class="title">{{rating_title}}</span>
							<div class="scale">
								<div class="range" style="width: {{rating_perc}}%;"></div>
								<div class="rating">{{rating}}</div>
							</div>
						</li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<span class="title">';
                $value = $context->find('rating_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="scale">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="range" style="width: ';
                $value = $context->find('rating_perc');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '%;"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="rating">';
                $value = $context->find('rating');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93f647b5e58ab62b9ceb96e7b942b39c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="blogger">
				<div class="photo">
					<a class="photo-wrap" href="/lid/{{slug}}"><b><img alt="{{full_name}}" src="{{avatar}}" width="140" height="120"></b></a>
				</div>
				<h3><a href="/lid/{{slug}}">{{full_name}}</a></h3>
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
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h3>';
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
}