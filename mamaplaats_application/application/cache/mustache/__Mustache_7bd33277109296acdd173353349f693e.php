<?php

class __Mustache_7bd33277109296acdd173353349f693e extends Mustache_Template
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
        $buffer .= $indent . '<div id="home">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="clearfix"></div>';
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
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div id="home">';
        $buffer .= "\n";
        $buffer .= $indent . '        <section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '        	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '                <!--<div class="float-new-blog">-->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '                    ');
        }
        $buffer .= $indent . '                <!--</div>-->';
        $buffer .= "\n";
        $buffer .= $indent . '                <h1>Nieuwe posts</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '        	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '        	<div class="grid-box">';
        $buffer .= "\n";
        // 'article_list' section
        $buffer .= $this->sectionAebcdb88023b5d1cc5665855fd8578e9($context, $indent, $context->find('article_list'));
        $buffer .= $indent . '        	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '    	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="col-md-6 col-md-offset-3">';
        $buffer .= "\n";
        $buffer .= $indent . '            <a href="#" onclick="return load_more.home(\'\', 15)" class="load-more">Laad meer berichten</a>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionAebcdb88023b5d1cc5665855fd8578e9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        			{{> article_items}}
        			{{> article_widgets}}
        		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                if ($partial = $this->mustache->loadPartial('article_items')) {
                    $buffer .= $partial->renderInternal($context, '        			');
                }
                if ($partial = $this->mustache->loadPartial('article_widgets')) {
                    $buffer .= $partial->renderInternal($context, '        			');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}