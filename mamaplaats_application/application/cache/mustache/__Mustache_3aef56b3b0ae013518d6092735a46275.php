<?php

class __Mustache_3aef56b3b0ae013518d6092735a46275 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('widget_adfab_for_mobile')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('pregnancy_calander')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div id="advies">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="featured-section-blocks">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="clearfix"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '            <!--<div class="float-new-blog">-->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '                ');
        }
        $buffer .= $indent . '            <!--</div>-->';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $value = $context->find('featured_section');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= "\n";
        $buffer .= $indent . '	<form id="advise_search_form" class="find-advice-form" action="#">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2>Zoek & vind advies</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="field autocompelte">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input type="search" placeholder="Zoek hier je advies" autocomplete="off">';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div id="advise_search_results" class="autocompelte-drop"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<em>Zoek een advies door hierboven je zoekterm in te vullen.</em>';
        $buffer .= "\n";
        $buffer .= $indent . '		</fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box">';
        $buffer .= "\n";
        // 'advise_list' section
        $buffer .= $this->sectionE213a4f13ab94e508e381ab8a4bbaea2($context, $indent, $context->find('advise_list'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_footer_inner_pages')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '		<a href="#" onclick="return load_more.advise(\'';
        $value = $context->find('category_slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\', 15)" class="lazy-load-more">Klik hier om meer berichten te laden</a>';
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
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	var advise_search = ';
        $value = $context->find('search_items');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= ';';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionE213a4f13ab94e508e381ab8a4bbaea2(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<article class="item simple">
				<figure class="photo">
					<a class="photo-wrap" href="/advies/{{advise.slug}}"><b><img alt="{{advise.title}}" src="{{media.path}}" width="260" height="140"></b></a>
				</figure>
				<h4><a href="/advies/{{advise.slug}}">{{advise.title}}</a></h4>
				<p class="info">
					<a href="/lid/{{user.slug}}">{{user.full_name}}</a> -
					<a class="comments" href="/advies/{{advise.slug}}#{{advise.link_comments}}">{{advise.comment_count}}</a>
				</p>
				<p>{{advise.excerpt}}</p>
			</article>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<article class="item simple">';
                $buffer .= "\n";
                $buffer .= $indent . '				<figure class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="photo-wrap" href="/advies/';
                $value = $context->findDot('advise.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><b><img alt="';
                $value = $context->findDot('advise.title');
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
                $buffer .= '" width="260" height="140"></b></a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4><a href="/advies/';
                $value = $context->findDot('advise.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('advise.title');
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
                $buffer .= $indent . '					<a class="comments" href="/advies/';
                $value = $context->findDot('advise.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#';
                $value = $context->findDot('advise.link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('advise.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</p>';
                $buffer .= "\n";
                $buffer .= $indent . '				<p>';
                $value = $context->findDot('advise.excerpt');
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