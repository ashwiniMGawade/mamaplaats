<?php

class __Mustache_6c6d997f045d2ca126f2ef498d413d6d extends Mustache_Template
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
        $buffer .= "\n";
        // 'show_script' section
        $buffer .= $this->section97a2ccecad1fc8312f92f30685242a52($context, $indent, $context->find('show_script'));
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
            $buffer .= $partial->renderInternal($context, '			    ');
        }
        $buffer .= $indent . '            <!--</div>-->';
        $buffer .= "\n";
        $buffer .= $indent . '            <h1>Top expert adviezen van Mamaplaats</h1>';
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
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Expert advies</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box">';
        $buffer .= "\n";
        // 'expert_list' section
        $buffer .= $this->sectionEa145b1fbd0507e364e2f357d427dc7f($context, $indent, $context->find('expert_list'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_footer_inner_pages')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '        <a href="#" onclick="return load_more.expert_list(\'';
        $value = $context->find('category_slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\', 16)" class="lazy-load-more">Klik hier om meer berichten te laden</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section97a2ccecad1fc8312f92f30685242a52(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>
    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">

    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>
    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">

    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>
    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">

    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>
    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">
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
                $buffer .= $indent . '    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>';
                $buffer .= "\n";
                $buffer .= $indent . '    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>';
                $buffer .= "\n";
                $buffer .= $indent . '    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '    <script>(function(e){var t=document,n=t.createElement("script");n.async=!0,n.defer=!0,n.src=e,t.getElementsByTagName("head")[0].appendChild(n)})("//c.flx1.com/1-7124.js?id=7124&m=1")</script>';
                $buffer .= "\n";
                $buffer .= $indent . '    <img src="https://n01d05.cumulus-cloud.com/trackers/tag.php?t=img&cid=2821497405&chid=31446&ts=[timestamp]" border="0" width="1" height="1" style="position:absolute; top:0x; left:0px; z-index:1;">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa145b1fbd0507e364e2f357d427dc7f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<article class="item simple">
				<figure class="photo">
					<a class="photo-wrap" href="/expert/{{expert.slug}}"><b><img alt="{{media.title}}" src="{{media.path}}" width="260" height="140"></b></a>
				</figure>
				<h4><a href="/expert/{{expert.slug}}">{{expert.title}}</a></h4>
				<p class="info">
					<a href="/lid/{{user.slug}}">{{user.full_name}}</a> -
					<time datetime="{{expert.created}}">{{expert.created_formatted}}</time>
					<a class="comments" href="/expert/{{expert.slug}}#{{expert.link_comments}}">{{expert.comment_count}}</a>
				</p>
				<p>{{expert.excerpt}}</p>
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
                $buffer .= $indent . '					<a class="photo-wrap" href="/expert/';
                $value = $context->findDot('expert.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><b><img alt="';
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
                $buffer .= '" width="260" height="140"></b></a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</figure>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h4><a href="/expert/';
                $value = $context->findDot('expert.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('expert.title');
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
                $value = $context->findDot('expert.created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('expert.created_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="comments" href="/expert/';
                $value = $context->findDot('expert.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#';
                $value = $context->findDot('expert.link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('expert.comment_count');
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
                $value = $context->findDot('expert.excerpt');
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