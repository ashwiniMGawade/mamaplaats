<?php

class __Mustache_cf0d9586f1ff41056592e046b7983137 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Deze moeders volgen jou</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="blog-list">';
        $buffer .= "\n";
        // 'followers' section
        $buffer .= $this->sectionBcfd367ede1d46712126c10beaaeee07($context, $indent, $context->find('followers'));
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section3b1b5fe84c8ebfe93db39ad037d58c4f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<a href="#" data-follow-id="{{id}}" class="btn follow grey btn-with-stars">Wordt Gevolgd</a>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<a href="#" data-follow-id="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn follow grey btn-with-stars">Wordt Gevolgd</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcfd367ede1d46712126c10beaaeee07(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="blogger">
		<div class="holder">
			<div class="photo">
				<a class="photo-wrap" href="/lid/{{slug}}">
					<b><img alt="{{full_name}}" src="{{avatar}}" width="140" height="120"></b>
					<!--<span class="title">supermama</span>-->
				</a>
			</div>
			<h3><a href="/lid/{{slug}}">
			{{full_name}}
			{{^full_name}}
			&nbsp;
			{{/full_name}}
			</a></h3>
			<div class="info">
				<a href="javascript:void(0);" class="comments link-to-text">{{flr_comment_count}} reacties</a> <a href="javascript:void(0);" class="followers link-to-text">{{flr_follower_count}} volgers</a>
			</div>
			<p>{{biography}} <a href="/lid/{{slug}}">Bekijk volledig profiel</a></p>
			{{#following_back}}
			<a href="#" data-follow-id="{{id}}" class="btn follow grey btn-with-stars">Wordt Gevolgd</a>
			{{/following_back}}
			{{^following_back}}
			<a href="#" data-follow-id="{{id}}" class="btn follow btn-with-stars">Volgen</a>downloa
			{{/following_back}}
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
                $buffer .= $indent . '	<div class="blogger">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a class="photo-wrap" href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '					<b><img alt="';
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
                $buffer .= '" width="140" height="120"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					<!--<span class="title">supermama</span>-->';
                $buffer .= "\n";
                $buffer .= $indent . '				</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<h3><a href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                // 'full_name' inverted section
                $value = $context->find('full_name');
                if (empty($value)) {
                    
                    $buffer .= $indent . '			&nbsp;';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '			</a></h3>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="javascript:void(0);" class="comments link-to-text">';
                $value = $context->find('flr_comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a> <a href="javascript:void(0);" class="followers link-to-text">';
                $value = $context->find('flr_follower_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' volgers</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<p>';
                $value = $context->find('biography');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' <a href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Bekijk volledig profiel</a></p>';
                $buffer .= "\n";
                // 'following_back' section
                $buffer .= $this->section3b1b5fe84c8ebfe93db39ad037d58c4f($context, $indent, $context->find('following_back'));
                // 'following_back' inverted section
                $value = $context->find('following_back');
                if (empty($value)) {
                    
                    $buffer .= $indent . '			<a href="#" data-follow-id="';
                    $value = $context->find('id');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" class="btn follow btn-with-stars">Volgen</a>downloa';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}