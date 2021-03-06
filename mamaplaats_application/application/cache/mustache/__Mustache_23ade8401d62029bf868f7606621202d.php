<?php

class __Mustache_23ade8401d62029bf868f7606621202d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Jij volgt deze moeders</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="blog-list">';
        $buffer .= "\n";
        // 'following' section
        $buffer .= $this->section9b267505f2dc1f342e87e745bce9b56a($context, $indent, $context->find('following'));
        // 'following' inverted section
        $value = $context->find('following');
        if (empty($value)) {
            
            $buffer .= $indent . '	<div class="alert alert-info">Je volgt op dit moment niemand.</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section9b267505f2dc1f342e87e745bce9b56a(Mustache_Context $context, $indent, $value) {
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
			<h3><a href="/lid/{{slug}}">{{full_name}}</a></h3>
			<div class="info">
				<a href="javascript:void(0);" class="comments link-to-text">{{comments_count}} reacties</a> <a href="javascript:void(0);" class="followers link-to-text">{{followers_count}} volgers</a>
			</div>
			<p>{{biography}} <a href="/lid/{{slug}}">Bekijk volledig profiel</a></p>
			<a href="#" data-follow-id="{{id}}" class="btn follow grey btn-with-stars">Wordt Gevolgd</a>
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
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h3>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="javascript:void(0);" class="comments link-to-text">';
                $value = $context->find('comments_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a> <a href="javascript:void(0);" class="followers link-to-text">';
                $value = $context->find('followers_count');
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