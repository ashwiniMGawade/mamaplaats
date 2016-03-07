<?php

class __Mustache_bfb2095fd057cd4c9f2bda2763cfedc5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="winacties">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="win-listing">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="clearfix"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>';
        $value = $context->find('getTitle');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="row">';
        $buffer .= "\n";
        // 'open_win' section
        $buffer .= $this->sectionF8653536bb294b5517708e1249d6ed3f($context, $indent, $context->find('open_win'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        // 'open_win' inverted section
        $value = $context->find('open_win');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '                Op dit moment lopen er geen winacties. Wil je er snel bij zijn als er een nieuwe winactie start? Schrijf';
            $buffer .= "\n";
            $buffer .= $indent . '                je dan <a href="#newsletter_large">hier</a> in voor de nieuwsbrief.';
            $buffer .= "\n";
            $buffer .= $indent . '            </div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="w-listing">';
        $buffer .= "\n";
        $buffer .= $indent . '        <header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '            <h2>Gesloten winacties</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '        </header>';
        $buffer .= "\n";
        $buffer .= $indent . '        <div id="closed_win_items" class="w-area">';
        $buffer .= "\n";
        // 'closed_win' section
        $buffer .= $this->sectionAb9c5e6d1c308043c5637288738a238c($context, $indent, $context->find('closed_win'));
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_adfab_footer_inner_pages')) {
            $buffer .= $partial->renderInternal($context, '        ');
        }
        $buffer .= "\n";
        // 'subscribed' section
        $buffer .= $this->sectionC763575183aae9df560cda5d13fb6229($context, $indent, $context->find('subscribed'));
        $buffer .= "\n";
        // 'subscribed' inverted section
        $value = $context->find('subscribed');
        if (empty($value)) {
            
            $buffer .= $indent . '                <a href="#" onclick="return load_more.user_win(15, \'';
            $value = $context->find('action');
            if (!is_string($value) && is_callable($value)) {
                $value = $this->mustache
                    ->loadLambda((string) call_user_func($value))
                    ->renderInternal($context, $indent);
            }
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '\')" class="lazy-load-more">Laad meer winacties</a>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionF8653536bb294b5517708e1249d6ed3f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="col-sm-3">
				<div class="description">
					<div class="win"><span>Win</span></div>
					<h4>{{win.title}}</h4>
				</div>
				<div class="photo">
					<a class="photo-wrap" href="/win/{{win.slug}}">
						<b><img alt="{{win.title}}" src="{{media.path}}" width="259" height="242"></b>
					</a>
				</div>
				<div class="info">
					<span class="date">Nog {{win.end_date}}</span>
					<a class="comments" href="/win/{{win.slug}}#{{win.link_comments}}">{{win.comment_count}} reacties</a>
				</div>
				<a class="btn alt" href="/win/{{win.slug}}">Doe mee &amp; win &nbsp;&rarr;</a>
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="col-sm-3">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="win"><span>Win</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<h4>';
                $value = $context->findDot('win.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="photo-wrap" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						<b><img alt="';
                $value = $context->findDot('win.title');
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
                $buffer .= '" width="259" height="242"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="date">Nog ';
                $value = $context->findDot('win.end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<a class="comments" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#';
                $value = $context->findDot('win.link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('win.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<a class="btn alt" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Doe mee &amp; win &nbsp;&rarr;</a>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb9c5e6d1c308043c5637288738a238c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item">
                <div class="description">
                    <div class="w"><span>W</span></div>
                    <h2>Winnaar</h2>
                    <h4>{{win.title}}</h4>
                </div>
                <div class="photo">
                    <a class="photo-wrap" href="/win/{{win.slug}}">
                        <b><img alt="{{win.title}}" src="{{media.path}}" width="202" height="194"></b>
                        <span class="caption">{{win.winners}}</span>
                    </a>
                </div>
                <div class="info">
                    <a class="comments" href="/win/{{win.slug}}#{{win.link_comments}}">{{win.comment_count}} reacties</a>
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
                $buffer .= $indent . '            <div class="item">';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="w"><span>W</span></div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <h2>Winnaar</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <h4>';
                $value = $context->findDot('win.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</h4>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a class="photo-wrap" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <b><img alt="';
                $value = $context->findDot('win.title');
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
                $buffer .= '" width="202" height="194"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <span class="caption">';
                $value = $context->findDot('win.winners');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="info">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <a class="comments" href="/win/';
                $value = $context->findDot('win.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#';
                $value = $context->findDot('win.link_comments');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('win.comment_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' reacties</a>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '            </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC763575183aae9df560cda5d13fb6229(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" onclick="return load_more.user_win(15, \'{{action}}\')" class="lazy-load-more">Laad meer winacties</a>
        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <a href="#" onclick="return load_more.user_win(15, \'';
                $value = $context->find('action');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\')" class="lazy-load-more">Laad meer winacties</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}