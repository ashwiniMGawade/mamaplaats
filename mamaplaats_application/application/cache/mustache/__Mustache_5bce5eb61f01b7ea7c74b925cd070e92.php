<?php

class __Mustache_5bce5eb61f01b7ea7c74b925cd070e92 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'show_script' section
        $buffer .= $this->section3a0617c9409be6180910f6116816dc61($context, $indent, $context->find('show_script'));
        $buffer .= $indent . '<div id="two-cols">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_for_mobile')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '		<div class="col-sm-8">';
        $buffer .= "\n";
        $buffer .= $indent . '			<section class="detail-block">';
        $buffer .= "\n";
        $buffer .= $indent . '				<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h1>';
        $value = $context->findDot('product.title');
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
        $buffer .= $indent . '						<span class="author">Door: <a href="';
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
        $value = $context->findDot('product.created');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->findDot('product.created_formatted');
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
        // 'product.is_coming' section
        $buffer .= $this->sectionD50913dbc8c00947614c3adb7c7ebf4c($context, $indent, $context->findDot('product.is_coming'));
        // 'product.is_running' section
        $buffer .= $this->sectionC26b35ca3e7afa7d513bb45967d89b5a($context, $indent, $context->findDot('product.is_running'));
        // 'product.is_published' section
        $buffer .= $this->sectionAc8b3ca98ca111a561e2b429a43cf2f5($context, $indent, $context->findDot('product.is_published'));
        $buffer .= "\n";
        $buffer .= $indent . '			</section>';
        $buffer .= "\n";
        // 'product.is_coming' section
        $buffer .= $this->sectionCab500a79e4ebee245543897fcfedd1b($context, $indent, $context->findDot('product.is_coming'));
        // 'product.is_published' section
        $buffer .= $this->section367e23407c1fee819130f1e66ab4c9c7($context, $indent, $context->findDot('product.is_published'));
        // 'product.is_pub_run' section
        $buffer .= $this->section72fca10af842eb2f4a505cb761649398($context, $indent, $context->findDot('product.is_pub_run'));
        // 'product.is_running' section
        $buffer .= $this->section67e94b2d2c6fc87c0102728c0d0277e5($context, $indent, $context->findDot('product.is_running'));
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_share_buttons')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        if ($partial = $this->mustache->loadPartial('widget_adfab_halfpage')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '			<div class="related-articles">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h3>Gerelateerde reviews</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="holder">';
        $buffer .= "\n";
        // 'related' section
        $buffer .= $this->section46b3aa48a8d29042f019c6f66d66f0f9($context, $indent, $context->find('related'));
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
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

    private function section3a0617c9409be6180910f6116816dc61(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD50913dbc8c00947614c3adb7c7ebf4c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="review-box">
					<p class="scaled-image">
						<img alt="{{title}}" src="{{product.image_url}}" width="750" height="310">
					</p>
					<div class="r-col">
						<div class="date">nog <span>{{count_days}}</span> dagen</div>
						<div class="register"><a href="/user/review-product/{{product.id}}/apply">inschrijven</a></div>
					</div>

					{{{product.description}}}
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="review-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<p class="scaled-image">';
                $buffer .= "\n";
                $buffer .= $indent . '						<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('product.image_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="750" height="310">';
                $buffer .= "\n";
                $buffer .= $indent . '					</p>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="r-col">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="date">nog <span>';
                $value = $context->find('count_days');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span> dagen</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="register"><a href="/user/review-product/';
                $value = $context->findDot('product.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/apply">inschrijven</a></div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->findDot('product.description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC26b35ca3e7afa7d513bb45967d89b5a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="report-box">
					<p class="scaled-image">
						<img alt="{{title}}" src="{{product.image_url}}" width="750" height="310">
					</p>

					{{{product.description}}}
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="report-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<p class="scaled-image">';
                $buffer .= "\n";
                $buffer .= $indent . '						<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('product.image_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="750" height="310">';
                $buffer .= "\n";
                $buffer .= $indent . '					</p>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->findDot('product.description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8519e85161dd5d6b2f137590a1cb701c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="stempel"><span>{{average_score}}</span></span>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<span class="stempel"><span>';
                $value = $context->find('average_score');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span></span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc8b3ca98ca111a561e2b429a43cf2f5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="report-box">
					<p class="scaled-image">
						{{#average_score}}<span class="stempel"><span>{{average_score}}</span></span>{{/average_score}}
						<img alt="{{title}}" src="{{product.image_url}}" width="750" height="310">
					</p>

					{{{product.description}}}
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<div class="report-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<p class="scaled-image">';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                // 'average_score' section
                $buffer .= $this->section8519e85161dd5d6b2f137590a1cb701c($context, $indent, $context->find('average_score'));
                $buffer .= "\n";
                $buffer .= $indent . '						<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->findDot('product.image_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="750" height="310">';
                $buffer .= "\n";
                $buffer .= $indent . '					</p>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '					';
                $value = $context->findDot('product.description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section613ee8cd5e5c014f7f73daf5b22e73c1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<li>
						<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
							<img alt="{{title}}" src="{{path}}" width="134" height="126">
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
                $buffer .= $indent . '					<li>';
                $buffer .= "\n";
                $buffer .= $indent . '						<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '							<img alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="134" height="126">';
                $buffer .= "\n";
                $buffer .= $indent . '						</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4488de548318c486bd3f415b596f8f6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="photo-block">
				<h3>Foto’s</h3>
				<ul class="photos-list">
					{{#image}}
					<li>
						<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
							<img alt="{{title}}" src="{{path}}" width="134" height="126">
						</a>
					</li>
					{{/image}}
				</ul>
				<p><strong>{{media_short}}</strong></p>
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="photo-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h3>Foto’s</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '				<ul class="photos-list">';
                $buffer .= "\n";
                // 'image' section
                $buffer .= $this->section613ee8cd5e5c014f7f73daf5b22e73c1($context, $indent, $context->find('image'));
                $buffer .= $indent . '				</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p><strong>';
                $value = $context->find('media_short');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</strong></p>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f1d3bf8c55332dc6b89fe39412c5c35(Mustache_Context $context, $indent, $value) {
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
                $buffer .= $indent . '					<li>';
                $buffer .= "\n";
                $buffer .= $indent . '						<a onclick="load_video.in_container(\'#video_container\', \'';
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
                $buffer .= $indent . '							<img alt="';
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
                $buffer .= $indent . '						</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34c70fc0c84af6f8d81ac6d81d5e0263(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="video-block">
				<h3>Videos</h3>
				<div class="holder">
					<iframe id="video_container" width="750" height="450" src="{{first_video.embed}}" frameborder="0" allowfullscreen></iframe>
				</div>
				<ul class="video-list">
					{{#video}}
					<li>
						<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
							<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
						</a>
					</li>
					{{/video}}
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
                $buffer .= $indent . '			<div class="video-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h3>Videos</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '					<iframe id="video_container" width="750" height="450" src="';
                $value = $context->findDot('first_video.embed');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" frameborder="0" allowfullscreen></iframe>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<ul class="video-list">';
                $buffer .= "\n";
                // 'video' section
                $buffer .= $this->section2f1d3bf8c55332dc6b89fe39412c5c35($context, $indent, $context->find('video'));
                $buffer .= $indent . '				</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7db9b5486e68ef9581946c30fecfd93(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#has_images}}
			<div class="photo-block">
				<h3>Foto’s</h3>
				<ul class="photos-list">
					{{#image}}
					<li>
						<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
							<img alt="{{title}}" src="{{path}}" width="134" height="126">
						</a>
					</li>
					{{/image}}
				</ul>
				<p><strong>{{media_short}}</strong></p>
			</div>
			{{/has_images}}
			{{#has_videos}}
			<div class="video-block">
				<h3>Videos</h3>
				<div class="holder">
					<iframe id="video_container" width="750" height="450" src="{{first_video.embed}}" frameborder="0" allowfullscreen></iframe>
				</div>
				<ul class="video-list">
					{{#video}}
					<li>
						<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
							<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
						</a>
					</li>
					{{/video}}
				</ul>
			</div>
			{{/has_videos}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'has_images' section
                $buffer .= $this->sectionD4488de548318c486bd3f415b596f8f6($context, $indent, $context->find('has_images'));
                // 'has_videos' section
                $buffer .= $this->section34c70fc0c84af6f8d81ac6d81d5e0263($context, $indent, $context->find('has_videos'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCab500a79e4ebee245543897fcfedd1b(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '

			{{#media}}
			{{#has_images}}
			<div class="photo-block">
				<h3>Foto’s</h3>
				<ul class="photos-list">
					{{#image}}
					<li>
						<a class="fresco" data-fresco-group="product_images" data-fresco-options="ui: \'inside\'" href="{{path}}">
							<img alt="{{title}}" src="{{path}}" width="134" height="126">
						</a>
					</li>
					{{/image}}
				</ul>
				<p><strong>{{media_short}}</strong></p>
			</div>
			{{/has_images}}
			{{#has_videos}}
			<div class="video-block">
				<h3>Videos</h3>
				<div class="holder">
					<iframe id="video_container" width="750" height="450" src="{{first_video.embed}}" frameborder="0" allowfullscreen></iframe>
				</div>
				<ul class="video-list">
					{{#video}}
					<li>
						<a onclick="load_video.in_container(\'#video_container\', \'{{embed}}\');return false;" href="{{path}}">
							<img alt="{{title}}" src="{{thumb}}" width="120" height="90">
						</a>
					</li>
					{{/video}}
				</ul>
			</div>
			{{/has_videos}}
			{{/media}}

			<div class="participate-block">
				<div class="now-box">
					<h2>Schrijf je nu meteen in.</h2>
					<a class="btn" href="/user/review-product/{{product.id}}/apply">schrijf je nu in</a>
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
                $buffer .= "\n";
                // 'media' section
                $buffer .= $this->sectionF7db9b5486e68ef9581946c30fecfd93($context, $indent, $context->find('media'));
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="participate-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="now-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h2>Schrijf je nu meteen in.</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="btn" href="/user/review-product/';
                $value = $context->findDot('product.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/apply">schrijf je nu in</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB13ccef03ad69cbe67f43d60dcc77d0a(Mustache_Context $context, $indent, $value) {
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
                $buffer .= $indent . '							<li>';
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

    private function section156e7870f1d126cbac6c02428f473483(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<div class="holder">
					<div class="score">{{average_score}}</div>
					<div class="col">
						<h3>voordelen</h3>
						<ul class="benefits-list">
							{{#positive}}
							<li>{{remark}}</li>
							{{/positive}}
						</ul>
					</div>
					<div class="col">
						<h3>nadelen</h3>
						<ul class="disadvantages-list">
							{{#negative}}
							<li>{{remark}}</li>
							{{/negative}}
						</ul>
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
                $buffer .= $indent . '				<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="score">';
                $value = $context->find('average_score');
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
                // 'positive' section
                $buffer .= $this->sectionB13ccef03ad69cbe67f43d60dcc77d0a($context, $indent, $context->find('positive'));
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
                // 'negative' section
                $buffer .= $this->sectionB13ccef03ad69cbe67f43d60dcc77d0a($context, $indent, $context->find('negative'));
                $buffer .= $indent . '						</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCee406610529dd6d955f1f022352fbd8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="conclusion-block">
				<h2>Algemene conclusie</h2>
				<p>{{general_conclusion}}</p>
				{{#remarks}}
				<div class="holder">
					<div class="score">{{average_score}}</div>
					<div class="col">
						<h3>voordelen</h3>
						<ul class="benefits-list">
							{{#positive}}
							<li>{{remark}}</li>
							{{/positive}}
						</ul>
					</div>
					<div class="col">
						<h3>nadelen</h3>
						<ul class="disadvantages-list">
							{{#negative}}
							<li>{{remark}}</li>
							{{/negative}}
						</ul>
					</div>
				</div>
				{{/remarks}}
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="conclusion-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2>Algemene conclusie</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p>';
                $value = $context->find('general_conclusion');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                // 'remarks' section
                $buffer .= $this->section156e7870f1d126cbac6c02428f473483($context, $indent, $context->find('remarks'));
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63ca60f1df9d0f1befb78472fdc0c391(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#conclusion}}
			<div class="conclusion-block">
				<h2>Algemene conclusie</h2>
				<p>{{general_conclusion}}</p>
				{{#remarks}}
				<div class="holder">
					<div class="score">{{average_score}}</div>
					<div class="col">
						<h3>voordelen</h3>
						<ul class="benefits-list">
							{{#positive}}
							<li>{{remark}}</li>
							{{/positive}}
						</ul>
					</div>
					<div class="col">
						<h3>nadelen</h3>
						<ul class="disadvantages-list">
							{{#negative}}
							<li>{{remark}}</li>
							{{/negative}}
						</ul>
					</div>
				</div>
				{{/remarks}}
			</div>
			{{/conclusion}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'conclusion' section
                $buffer .= $this->sectionCee406610529dd6d955f1f022352fbd8($context, $indent, $context->find('conclusion'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section367e23407c1fee819130f1e66ab4c9c7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#review}}
			{{#conclusion}}
			<div class="conclusion-block">
				<h2>Algemene conclusie</h2>
				<p>{{general_conclusion}}</p>
				{{#remarks}}
				<div class="holder">
					<div class="score">{{average_score}}</div>
					<div class="col">
						<h3>voordelen</h3>
						<ul class="benefits-list">
							{{#positive}}
							<li>{{remark}}</li>
							{{/positive}}
						</ul>
					</div>
					<div class="col">
						<h3>nadelen</h3>
						<ul class="disadvantages-list">
							{{#negative}}
							<li>{{remark}}</li>
							{{/negative}}
						</ul>
					</div>
				</div>
				{{/remarks}}
			</div>
			{{/conclusion}}
			{{/review}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'review' section
                $buffer .= $this->section63ca60f1df9d0f1befb78472fdc0c391($context, $indent, $context->find('review'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67bc8b51be601684764721b6cf2ea20c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<div class="col-xs-3">
						<div class="photo">
							<a class="photo-wrap" href="/review/{{review.slug}}">
								<b><img alt="{{user.full_name}}" src="{{user.avatar}}" width="228" height="213"></b>
							</a>
						</div>
						<h4><a href="/review/{{review.slug}}">{{user.full_name}}</a></h4>
						<p class="info">Lid sinds <time datetime="{{user.registration_date}}">{{user.registration_date_formatted}}</time></p>
						<p>{{review.information}}</p>
						<!--<a href="/review/{{review.slug}}#comments" class="comments">{{review.comment_count}} Reacties</a>-->
						<!--<a href="#" class="followers">34 Volgers</a>-->
					</div>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<div class="col-xs-3">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="photo-wrap" href="/review/';
                $value = $context->findDot('review.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<b><img alt="';
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
                $buffer .= '" width="228" height="213"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<h4><a href="/review/';
                $value = $context->findDot('review.slug');
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
                $buffer .= '</a></h4>';
                $buffer .= "\n";
                $buffer .= $indent . '						<p class="info">Lid sinds <time datetime="';
                $value = $context->findDot('user.registration_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('user.registration_date_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time></p>';
                $buffer .= "\n";
                $buffer .= $indent . '						<p>';
                $value = $context->findDot('review.information');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '						<!--<a href="/review/';
                $value = $context->findDot('review.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#comments" class="comments">';
                $value = $context->findDot('review.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' Reacties</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '						<!--<a href="#" class="followers">34 Volgers</a>-->';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2933bfb77308e32c842c6a6615f0a40c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="mothers-block">
				<h2>Bekijk de reviews van...</h2>
				<div class="row">
					{{#reviews}}
					<div class="col-xs-3">
						<div class="photo">
							<a class="photo-wrap" href="/review/{{review.slug}}">
								<b><img alt="{{user.full_name}}" src="{{user.avatar}}" width="228" height="213"></b>
							</a>
						</div>
						<h4><a href="/review/{{review.slug}}">{{user.full_name}}</a></h4>
						<p class="info">Lid sinds <time datetime="{{user.registration_date}}">{{user.registration_date_formatted}}</time></p>
						<p>{{review.information}}</p>
						<!--<a href="/review/{{review.slug}}#comments" class="comments">{{review.comment_count}} Reacties</a>-->
						<!--<a href="#" class="followers">34 Volgers</a>-->
					</div>
					{{/reviews}}
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
                $buffer .= $indent . '			<div class="mothers-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2>Bekijk de reviews van...</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row">';
                $buffer .= "\n";
                // 'reviews' section
                $buffer .= $this->section67bc8b51be601684764721b6cf2ea20c($context, $indent, $context->find('reviews'));
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72fca10af842eb2f4a505cb761649398(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#review}}
			<div class="mothers-block">
				<h2>Bekijk de reviews van...</h2>
				<div class="row">
					{{#reviews}}
					<div class="col-xs-3">
						<div class="photo">
							<a class="photo-wrap" href="/review/{{review.slug}}">
								<b><img alt="{{user.full_name}}" src="{{user.avatar}}" width="228" height="213"></b>
							</a>
						</div>
						<h4><a href="/review/{{review.slug}}">{{user.full_name}}</a></h4>
						<p class="info">Lid sinds <time datetime="{{user.registration_date}}">{{user.registration_date_formatted}}</time></p>
						<p>{{review.information}}</p>
						<!--<a href="/review/{{review.slug}}#comments" class="comments">{{review.comment_count}} Reacties</a>-->
						<!--<a href="#" class="followers">34 Volgers</a>-->
					</div>
					{{/reviews}}
				</div>
			</div>
			{{/review}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'review' section
                $buffer .= $this->section2933bfb77308e32c842c6a6615f0a40c($context, $indent, $context->find('review'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67e94b2d2c6fc87c0102728c0d0277e5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="participate-block">
				<div class="now-box">
					<h3>Dit is een lopende review. Kom snel terug voor meer...</h3>
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
                $buffer .= $indent . '			<div class="participate-block">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="now-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h3>Dit is een lopende review. Kom snel terug voor meer...</h3>';
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

    private function section46b3aa48a8d29042f019c6f66d66f0f9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<article class="post">
						<div class="photo">
							<a href="/review/product/{{slug}}" class="photo-wrap">
								<img alt="{{title}}" src="{{image_url}}" width="228" height="213">
							</a>
						</div>
						<div class="info">
							<h4><a href="/review/product/{{slug}}">{{title}}</a></h4>
							<p>{{description}} <a href="/review/product/{{slug}}">&gt;</a></p>
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
                $buffer .= $indent . '							<a href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
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
                $value = $context->find('image_url');
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
                $buffer .= $indent . '							<h4><a href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h4>';
                $buffer .= "\n";
                $buffer .= $indent . '							<p>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a href="/review/product/';
                $value = $context->find('slug');
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
}