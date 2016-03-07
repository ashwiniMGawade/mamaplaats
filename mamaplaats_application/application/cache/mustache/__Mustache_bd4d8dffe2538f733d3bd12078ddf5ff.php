<?php

class __Mustache_bd4d8dffe2538f733d3bd12078ddf5ff extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="offer_';
        $value = $context->find('id');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '		<img alt="image description" src="';
        $value = $context->find('image');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" width="98" height="90">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!--';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        // 'is_coupon' section
        $buffer .= $this->sectionFa816b68b1ca0407279eea806152ddec($context, $indent, $context->find('is_coupon'));
        $buffer .= "\n";
        $buffer .= $indent . '		';
        // 'is_free' section
        $buffer .= $this->sectionB35c5f84e312703bdfb4c923a70a5c04($context, $indent, $context->find('is_free'));
        $buffer .= "\n";
        $buffer .= $indent . '		';
        // 'is_offer' section
        $buffer .= $this->sectionB26ecc3c86fd0fa21dc0620017a8e7a1($context, $indent, $context->find('is_offer'));
        $buffer .= "\n";
        $buffer .= $indent . '		-->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="description">';
        $buffer .= "\n";
        $buffer .= $indent . '		<p class="dates">';
        $buffer .= "\n";
        $buffer .= $indent . '			Toegevoegd op ';
        $value = $context->find('start_date');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' <span class="sep">|</span>';
        $buffer .= "\n";
        $buffer .= $indent . '			Verloopt op ';
        $value = $context->find('end_date');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= "\n";
        $buffer .= $indent . '		</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		<p class="call-to-action">Pak hier je voordeel</p>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<h2><a rel="nofollow" target="_blank" ';
        // 'open_url' section
        $buffer .= $this->section66155828d92f6aafc7bd7f1884785407($context, $indent, $context->find('open_url'));
        $buffer .= ' href="';
        $value = $context->find('url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a></h2>';
        $buffer .= "\n";
        $buffer .= $indent . '		<h3>';
        $value = $context->find('description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h3>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="group">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a rel="nofollow" target="_blank" ';
        // 'open_url' section
        $buffer .= $this->section66155828d92f6aafc7bd7f1884785407($context, $indent, $context->find('open_url'));
        $buffer .= ' href="';
        $value = $context->find('url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn">Pak deze actie &amp; ga naar de shop</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        // 'is_coupon' section
        $buffer .= $this->section443617a03b7a3f948508ecdec04a5492($context, $indent, $context->find('is_coupon'));
        $buffer .= "\n";
        $buffer .= $indent . '			';
        // 'is_free' section
        $buffer .= $this->sectionE505ad82f6825238fe03ace0750bfc77($context, $indent, $context->find('is_free'));
        $buffer .= "\n";
        $buffer .= $indent . '			';
        // 'is_offer' section
        $buffer .= $this->sectionE505ad82f6825238fe03ace0750bfc77($context, $indent, $context->find('is_offer'));
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        // 'is_coupon' section
        $buffer .= $this->section97f5a01def97b9aa83c6481f80b544c4($context, $indent, $context->find('is_coupon'));
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionFa816b68b1ca0407279eea806152ddec(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="info discount-code"><span>kortings code</span></div>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<div class="info discount-code"><span>kortings code</span></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB35c5f84e312703bdfb4c923a70a5c04(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="info free"><span>gratis</span></div>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<div class="info free"><span>gratis</span></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB26ecc3c86fd0fa21dc0620017a8e7a1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="info action"><span>actie</span></div>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<div class="info action"><span>actie</span></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66155828d92f6aafc7bd7f1884785407(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-open-url="{{open_url}}"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'data-open-url="';
                $value = $context->find('open_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section443617a03b7a3f948508ecdec04a5492(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="code" rel="nofollow" target="_blank" {{#open_url}}data-open-url="{{open_url}}"{{/open_url}} href="{{url}}">{{coupon_code}}</a>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<a class="code" rel="nofollow" target="_blank" ';
                // 'open_url' section
                $buffer .= $this->section66155828d92f6aafc7bd7f1884785407($context, $indent, $context->find('open_url'));
                $buffer .= ' href="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('coupon_code');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE505ad82f6825238fe03ace0750bfc77(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="more">Bekijk meer van <a href="/korting/winkel/{{coupon_shop_slug}}">{{coupon_shop_name}}</a></div>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<div class="more">Bekijk meer van <a href="/korting/winkel/';
                $value = $context->find('coupon_shop_slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('coupon_shop_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97f5a01def97b9aa83c6481f80b544c4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="lightbox-info" data-image="{{image}}" data-title="{{title}}" data-start="{{start_date}}" data-end="{{end_date}}" data-coupon="{{coupon_code}}" data-url="{{url}}" data-shop="{{coupon_shop_name}}"></div>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<div class="lightbox-info" data-image="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-title="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-start="';
                $value = $context->find('start_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-end="';
                $value = $context->find('end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-coupon="';
                $value = $context->find('coupon_code');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-url="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-shop="';
                $value = $context->find('coupon_shop_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}