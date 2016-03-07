<?php

class __Mustache_4a2afdcd7165e4ccfc0855fb78952e94 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="home">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Zoek resultaten voor \'aghlkgsaghsd alkdshfjDSFASDFf\'</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="grid-box">';
        $buffer .= "\n";
        $buffer .= $indent . '<article class="item simple">';
        $buffer .= "\n";
        $buffer .= $indent . '	<figure class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="photo-wrap" href="/blog/aghlkgsaghsd-alkdshfjdsfasdff"><b><img alt="aghlkgsaghsd alkdshfjDSFASDFf" src="/image/no-image_260xn.png" width="260" height="242"></b></a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</figure>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3 class="category"><a href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">blog</a></h3>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h4><a href="/blog/aghlkgsaghsd-alkdshfjdsfasdff">aghlkgsaghsd alkdshfjDSFASDFf</a></h4>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a href="/lid/mamaplaats">Mamaplaats</a> -';
        $buffer .= "\n";
        $buffer .= $indent . '		<time datetime="2015-08-31 15:17:44">31 August 2015</time> -';
        $buffer .= "\n";
        $buffer .= $indent . '		<a class="comments" href="/blog/aghlkgsaghsd-alkdshfjdsfasdff#comments">0</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFf aghlkgsaghsd alkdshfjDSFASDFfaghlkgsaghsd alkdshfj...</p>';
        $buffer .= "\n";
        $buffer .= $indent . '</article>		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}