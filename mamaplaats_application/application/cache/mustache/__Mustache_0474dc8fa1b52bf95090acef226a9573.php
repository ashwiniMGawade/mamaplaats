<?php

class __Mustache_0474dc8fa1b52bf95090acef226a9573 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="two-cols">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-8">';
        $buffer .= "\n";
        $buffer .= $indent . '			<section class="blogger-block">';
        $buffer .= "\n";
        $buffer .= $indent . '				<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '					<h1>Bloggers</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '				</header>';
        $buffer .= "\n";
        $buffer .= $indent . '				<nav class="sort-nav">';
        $buffer .= "\n";
        $buffer .= $indent . '					<ul>';
        $buffer .= "\n";
        // 'alphabet' section
        $buffer .= $this->sectionD9a35d02ff5e3541f060bafb4417b6d1($context, $indent, $context->find('alphabet'));
        $buffer .= $indent . '					</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '				</nav>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="blog-list">';
        $buffer .= "\n";
        // 'blogger_list' section
        $buffer .= $this->sectionD894a2c8995e8db1919291e09071813c($context, $indent, $context->find('blogger_list'));
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</section>';
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
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9a35d02ff5e3541f060bafb4417b6d1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li {{#selected}}class="active"{{/selected}}><a href="/leden/{{value}}">{{text}}</a></li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li ';
                // 'selected' section
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $context->find('selected'));
                $buffer .= '><a href="/leden/';
                $value = $context->find('value');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27d56fb929c02bef6e585083356174fc(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'Wordt Gevolgd';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'Wordt Gevolgd';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD894a2c8995e8db1919291e09071813c(Mustache_Context $context, $indent, $value) {
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
								<a href="/lid/{{slug}}" class="comments">{{comment_count}} reacties</a>
								<a href="/lid/{{slug}}" class="followers">{{follower_count}} volgers</a>
							</div>
							<p>{{biography}} <a href="/lid/{{slug}}">Bekijk volledig profiel</a></p>

							<button data-follow-id="{{id}}" class="btn follow">
								{{#following}}Wordt Gevolgd{{/following}}{{^following}}Volgen{{/following}}
							</button>
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
                $buffer .= $indent . '					<div class="blogger">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '								<a class="photo-wrap" href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '									<b><img alt="';
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
                $buffer .= $indent . '									<!--<span class="title">supermama</span>-->';
                $buffer .= "\n";
                $buffer .= $indent . '								</a>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<h3><a href="/lid/';
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
                $buffer .= $indent . '							<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '								<a href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="comments">';
                $value = $context->find('comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '								<a href="/lid/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="followers">';
                $value = $context->find('follower_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' volgers</a>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<p>';
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
                $buffer .= "\n";
                $buffer .= $indent . '							<button data-follow-id="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn follow">';
                $buffer .= "\n";
                $buffer .= $indent . '								';
                // 'following' section
                $buffer .= $this->section27d56fb929c02bef6e585083356174fc($context, $indent, $context->find('following'));
                // 'following' inverted section
                $value = $context->find('following');
                if (empty($value)) {
                    
                    $buffer .= 'Volgen';
                }
                $buffer .= "\n";
                $buffer .= $indent . '							</button>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}