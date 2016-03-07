<?php

class __Mustache_21faac6e25750c562816a3bb147b7395 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="home">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="row">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('pregnancy_calander')) {
            $buffer .= $partial->renderInternal($context, '        ');
        }
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="clearfix"></div>';
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
        $buffer .= $indent . '	<section class="blog-masonry">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '        <!--<div class="float-new-blog">-->';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '            ');
        }
        $buffer .= $indent . '        <!--</div>-->';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Nieuwe posts</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="grid-box">';
        $buffer .= "\n";
        // 'article_list' section
        $buffer .= $this->section8a4463369555ea09d6ea35b11a47d88a($context, $indent, $context->find('article_list'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '    <a href="#" onclick="return load_more.home(\'\', 15)" class="load-more">Laad meer berichten</a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section8a4463369555ea09d6ea35b11a47d88a(Mustache_Context $context, $indent, $value) {
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
                    $buffer .= $partial->renderInternal($context, '			');
                }
                if ($partial = $this->mustache->loadPartial('article_widgets')) {
                    $buffer .= $partial->renderInternal($context, '			');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }
}