<?php

class __Mustache_6074eb0b31134643bd2d674cbd7b545c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="btns">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a href="/conversation/new" class="btn">nieuw bericht</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn alt" onclick="document.getElementById(\'message_list\').submit();">verwijderen</button>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Berichten</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="check-list">';
        $buffer .= "\n";
        $buffer .= $indent . '	<form id="message_list" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        // 'conversation_list' section
        $buffer .= $this->section0369f40b2af3eab19c655549f4a45435($context, $indent, $context->find('conversation_list'));
        // 'conversation_list' inverted section
        $value = $context->find('conversation_list');
        if (empty($value)) {
            
            $buffer .= $indent . '			<div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '				Je hebt op dit moment geen berichten. Wil je een <a class="alert-link" href="/conversation/new">Nieuw bericht schrijven</a>?';
            $buffer .= "\n";
            $buffer .= $indent . '			</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '		</fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!--<a class="load-more" href="#">Meer berichten laden</a>-->';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionDac32392f0db71436738397bd7c19625(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '?type=draft';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '?type=draft';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section108dd6f92536389febfce1a99529e1d4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<span class="amount">{{conversation.new_count}}</span>
								';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '								<span class="amount">';
                $value = $context->findDot('conversation.new_count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0369f40b2af3eab19c655549f4a45435(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<label class="item alt">
				<input type="checkbox" name="partner_ids[]" value="{{conversation_partner.id}}" >
				<span class="photo">
					<a href="/conversation/index/{{conversation_partner.id}}{{#last_message.draft}}?type=draft{{/last_message.draft}}" class="photo-wrap">
						<b><img src="{{conversation_partner.avatar}}" width="70" height="70" alt="{{conversation_partner.full_name}}"></b>
					</a>
				</span>
				<span class="description">
					<span class="wrap">
						<time datetime="{{last_message.created}}">{{last_message.created_formatted}}</time>
						<strong class="title">
							<a href="/conversation/index/{{conversation_partner.id}}{{#last_message.draft}}?type=draft{{/last_message.draft}}">
								{{conversation_partner.full_name}}
								{{# conversation.new_count}}
								<span class="amount">{{conversation.new_count}}</span>
								{{/ conversation.new_count}}
							</a>
						</strong>
					</span>
					<span class="text">{{last_message.content}}</span>
				</span>
			</label>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<label class="item alt">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input type="checkbox" name="partner_ids[]" value="';
                $value = $context->findDot('conversation_partner.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" >';
                $buffer .= "\n";
                $buffer .= $indent . '				<span class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '					<a href="/conversation/index/';
                $value = $context->findDot('conversation_partner.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                // 'last_message.draft' section
                $buffer .= $this->sectionDac32392f0db71436738397bd7c19625($context, $indent, $context->findDot('last_message.draft'));
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '						<b><img src="';
                $value = $context->findDot('conversation_partner.avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="70" height="70" alt="';
                $value = $context->findDot('conversation_partner.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '					</a>';
                $buffer .= "\n";
                $buffer .= $indent . '				</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				<span class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '						<time datetime="';
                $value = $context->findDot('last_message.created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('last_message.created_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '						<strong class="title">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a href="/conversation/index/';
                $value = $context->findDot('conversation_partner.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                // 'last_message.draft' section
                $buffer .= $this->sectionDac32392f0db71436738397bd7c19625($context, $indent, $context->findDot('last_message.draft'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								';
                $value = $context->findDot('conversation_partner.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                // 'conversation.new_count' section
                $buffer .= $this->section108dd6f92536389febfce1a99529e1d4($context, $indent, $context->findDot('conversation.new_count'));
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</strong>';
                $buffer .= "\n";
                $buffer .= $indent . '					</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="text">';
                $value = $context->findDot('last_message.content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '				</span>';
                $buffer .= "\n";
                $buffer .= $indent . '			</label>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}