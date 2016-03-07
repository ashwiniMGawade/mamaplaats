<?php

class __Mustache_020ab5bf05d1d86c73c6c7c5c6e49fed extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('pregnancy_calander')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="review">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="clearfix"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '                ');
        }
        $buffer .= $indent . '            <h1>Lopende reviews</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box alt">';
        $buffer .= "\n";
        // 'running_products' section
        $buffer .= $this->section3f3ee65c825f07f4c81cf600545f6879($context, $indent, $context->find('running_products'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        // 'running_products' inverted section
        $value = $context->find('running_products');
        if (empty($value)) {
            
            $buffer .= $indent . '		<div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '			Op dit moment zijn er geen lopende reviews.';
            $buffer .= "\n";
            $buffer .= $indent . '		</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Zie enkele van onze afgeronde reviews</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box">';
        $buffer .= "\n";
        // 'finished_products' section
        $buffer .= $this->section7a5563ed00bcb61cbc6378d89f711ec8($context, $indent, $context->find('finished_products'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="info-block">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-sm-4">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab')) {
            $buffer .= $partial->renderInternal($context, '				');
        }
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-sm-8">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_newsletter_large')) {
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

    private function section96ea78c7bc3b8ae983ff3de581740415(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn small {{^url}}grey disabled{{/url}}" href="{{url}}">{{tag}}</a>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<a class="btn small ';
                // 'url' inverted section
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= 'grey disabled';
                }
                $buffer .= '" href="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('tag');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f3ee65c825f07f4c81cf600545f6879(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<article class="item">
				<figure class="photo">
					<a class="photo-wrap" href="/review/product/{{slug}}">
						<b><img alt="{{title}}" src="{{image_url}}" width="260" height="216"></b>
					</a>
				</figure>
				<h4><a href="/review/product/{{slug}}">{{title}}</a></h4>
				<p>{{description}}</p>
				{{#status_link}}<a class="btn small {{^url}}grey disabled{{/url}}" href="{{url}}">{{tag}}</a>{{/status_link}}

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
                $buffer .= $indent . '					<a class="photo-wrap" href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						<b><img alt="';
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
                $buffer .= '" width="260" height="216"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4><a href="/review/product/';
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
                $buffer .= $indent . '				<p>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                // 'status_link' section
                $buffer .= $this->section96ea78c7bc3b8ae983ff3de581740415($context, $indent, $context->find('status_link'));
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEba31827446d4ab163e49622ee249e59(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="stempel"><span>{{average_rating}}</span></span>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<span class="stempel"><span>';
                $value = $context->find('average_rating');
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

    private function section7a5563ed00bcb61cbc6378d89f711ec8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<article class="item">
				<figure class="photo">
					<a class="photo-wrap" href="/review/product/{{slug}}">
						{{#average_rating}}<span class="stempel"><span>{{average_rating}}</span></span>{{/average_rating}}
						<b><img alt="{{title}}" src="{{image_url}}" width="260" height="242"></b>
					</a>
				</figure>
				<h4><a href="/review/product/{{slug}}">{{title}}</a></h4>
				<p>{{description}}</p>
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
                $buffer .= $indent . '					<a class="photo-wrap" href="/review/product/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						';
                // 'average_rating' section
                $buffer .= $this->sectionEba31827446d4ab163e49622ee249e59($context, $indent, $context->find('average_rating'));
                $buffer .= "\n";
                $buffer .= $indent . '						<b><img alt="';
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
                $buffer .= '" width="260" height="242"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4><a href="/review/product/';
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
                $buffer .= $indent . '				<p>';
                $value = $context->find('description');
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
}