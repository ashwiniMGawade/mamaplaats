<?php

class __Mustache_d8d8ceb87451566147ec2d6de4a751ef extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'children' section
        $buffer .= $this->sectionBeb31a9d7008d8d2962352117718e9e2($context, $indent, $context->find('children'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section1a3e1abed2a31999b4e4580ebec2c352(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'my';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'my';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf647b8ded422c62d11b29e791c94ed8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="author" href="#">Auteur</a>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<a class="author" href="#">Auteur</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBeb31a9d7008d8d2962352117718e9e2(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li>
	<div id="comment_{{id}}" class="comment {{#is_author}}my{{/is_author}}">
		<div class="head">
			<h4>
				<img alt="{{author_name}}" src="{{author_avatar}}" width="32" height="32">
				{{author_name}} <span> <time datetime="{{date}}">{{date}}</time></span>
				{{#is_author}}<a class="author" href="#">Auteur</a>{{/is_author}}
			</h4>
		</div>
		<div class="content">
			<span class="num">{{number}}</span>
			<p>{{content}}</p>
		</div>
		<div class="reply">
			<a onclick="return comment_form.move(\'{{id}}\')" href="#">Reply</a>
			<div id="comment_{{id}}"></div>
		</div>
	</div>
	<ul class="children">
		{{>replies}}
	</ul>
</li>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<li>';
                $buffer .= "\n";
                $buffer .= $indent . '	<div id="comment_';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="comment ';
                // 'is_author' section
                $buffer .= $this->section1a3e1abed2a31999b4e4580ebec2c352($context, $indent, $context->find('is_author'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="head">';
                $buffer .= "\n";
                $buffer .= $indent . '			<h4>';
                $buffer .= "\n";
                $buffer .= $indent . '				<img alt="';
                $value = $context->find('author_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" src="';
                $value = $context->find('author_avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="32" height="32">';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                $value = $context->find('author_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <span> <time datetime="';
                $value = $context->find('date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time></span>';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                // 'is_author' section
                $buffer .= $this->sectionDf647b8ded422c62d11b29e791c94ed8($context, $indent, $context->find('is_author'));
                $buffer .= "\n";
                $buffer .= $indent . '			</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="content">';
                $buffer .= "\n";
                $buffer .= $indent . '			<span class="num">';
                $value = $context->find('number');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '			<p>';
                $value = $context->find('content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="reply">';
                $buffer .= "\n";
                $buffer .= $indent . '			<a onclick="return comment_form.move(\'';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\')" href="#">Reply</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div id="comment_';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	<ul class="children">';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('replies')) {
                    $buffer .= $partial->renderInternal($context, '		');
                }
                $buffer .= $indent . '	</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}