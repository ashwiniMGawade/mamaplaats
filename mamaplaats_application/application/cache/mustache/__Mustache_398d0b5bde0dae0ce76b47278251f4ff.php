<?php

class __Mustache_398d0b5bde0dae0ce76b47278251f4ff extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '	</div> ';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<footer id="footer">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="footer-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<strong class="logo"><a href="#">MamaPlaats</a></strong>';
        $buffer .= "\n";
        $buffer .= $indent . '						<span class="copyright">Copyright &copy; Mamaplaats.nl</span>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="col-sm-8">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '						');
        }
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="footer-lists">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row">';
        $buffer .= "\n";
        // 'menu' section
        $buffer .= $this->section22a6cf3faad2c6bcd8fa02015d3d8518($context, $indent, $context->find('menu'));
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="partners-box">';
        $buffer .= "\n";
        $buffer .= $indent . '				<h4>Partners</h4>';
        $buffer .= "\n";
        $buffer .= $indent . '				<ul>';
        $buffer .= "\n";
        // 'partners' section
        $buffer .= $this->sectionFefbc2a14a637c5ba7bcb8a8436112c9($context, $indent, $context->find('partners'));
        $buffer .= $indent . '				</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div> ';
        $buffer .= "\n";
        $buffer .= $indent . '	</footer>';
        $buffer .= "\n";
        $buffer .= $indent . '</div> ';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA3025aa68504b6ec2c68ad710609628c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<li><a href="{{path}}">{{text}}</a></li>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<li><a href="';
                $value = $context->find('path');
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

    private function sectionFcdc1874d7ae3ff9f84aadf54b425f41(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<h3>{{text}}</h3>
						<ul>
							{{#sub_menu}}
							<li><a href="{{path}}">{{text}}</a></li>
							{{/sub_menu}}
						</ul>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<h3>';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '						<ul>';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->sectionA3025aa68504b6ec2c68ad710609628c($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '						</ul>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22a6cf3faad2c6bcd8fa02015d3d8518(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<div class="col-sm-2">
						{{#menu_block}}
						<h3>{{text}}</h3>
						<ul>
							{{#sub_menu}}
							<li><a href="{{path}}">{{text}}</a></li>
							{{/sub_menu}}
						</ul>
						{{/menu_block}}
					</div>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<div class="col-sm-2">';
                $buffer .= "\n";
                // 'menu_block' section
                $buffer .= $this->sectionFcdc1874d7ae3ff9f84aadf54b425f41($context, $indent, $context->find('menu_block'));
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFefbc2a14a637c5ba7bcb8a8436112c9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<li><a href="{{url}}" rel="nofollow" target="_blank"><img src="{{image}}" width="82" height="41" alt="{{title}}"></a></li>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<li><a href="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" rel="nofollow" target="_blank"><img src="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="82" height="41" alt="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}