<?php

class __Mustache_5b726312c04ef0f1d34f0e62279f4fad extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="btns">';
        $buffer .= "\n";
        $buffer .= $indent . '		<a href="/conversation/list" class="btn alt">Terug naar het overzicht</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>';
        $value = $context->find('getTitle');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="report-list">';
        $buffer .= "\n";
        // 'conversation' section
        $buffer .= $this->section7af652d13fba539dcd0d674818a2315f($context, $indent, $context->find('conversation'));
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        // 'is_draft_message' inverted section
        $value = $context->find('is_draft_message');
        if (empty($value)) {
            
            $buffer .= $indent . '    <header class="heading-box">';
            $buffer .= "\n";
            $buffer .= $indent . '        <h3>Plaats een reactie</h3>';
            $buffer .= "\n";
            $buffer .= $indent . '    </header>';
            $buffer .= "\n";
            $buffer .= $indent . '    <div class="msg-box">';
            $buffer .= "\n";
            $buffer .= $indent . '        <form action="" method="post">';
            $buffer .= "\n";
            $buffer .= $indent . '            <fieldset>';
            $buffer .= "\n";
            $buffer .= $indent . '                <input name="recipient_id" type="hidden" value="';
            $value = $context->find('partner_id');
            if (!is_string($value) && is_callable($value)) {
                $value = $this->mustache
                    ->loadLambda((string) call_user_func($value))
                    ->renderInternal($context, $indent);
            }
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">';
            $buffer .= "\n";
            $buffer .= $indent . '                <textarea name="content" placeholder="JOUW REACTIE *" rows="5" cols="50"></textarea>';
            $buffer .= "\n";
            $buffer .= $indent . '                <button class="btn" type="submit">verstuur</button>';
            $buffer .= "\n";
            $buffer .= $indent . '            </fieldset>';
            $buffer .= "\n";
            $buffer .= $indent . '        </form>';
            $buffer .= "\n";
            $buffer .= $indent . '    </div>';
            $buffer .= "\n";
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section615794122f141407016acbb3af719a9a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'alt';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'alt';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46e577df90cfffb311c60c4ff1c9ffff(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="/conversation/draft/{{message.id}}" class="message_link">Edit</a>
            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '            <a href="/conversation/draft/';
                $value = $context->findDot('message.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="message_link">Edit</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7af652d13fba539dcd0d674818a2315f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<article class="item {{#is_alt}}alt{{/is_alt}}">
		<div class="photo">
			<a href="/lid/{{author.slug}}" class="photo-wrap">
				<b><img src="{{author.avatar}}" width="70" height="70" alt="{{author.full_name}}"></b>
			</a>
		</div>
        <div class="description">
            <div class="wrap">
                <time datetime="{{message.created}}">{{message.created_formatted}}</time>
                <strong class="title"><a href="/lid/{{author.slug}}">{{author.full_name}}</a></strong>
            </div>
            <p>{{message.content}}</p>
            {{#message.draft}}
            <a href="/conversation/draft/{{message.id}}" class="message_link">Edit</a>
            {{/message.draft}}
        </div>

	</article>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<article class="item ';
                // 'is_alt' section
                $buffer .= $this->section615794122f141407016acbb3af719a9a($context, $indent, $context->find('is_alt'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '			<a href="/lid/';
                $value = $context->findDot('author.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '				<b><img src="';
                $value = $context->findDot('author.avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="70" height="70" alt="';
                $value = $context->findDot('author.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></b>';
                $buffer .= "\n";
                $buffer .= $indent . '			</a>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '        <div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '            <div class="wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '                <time datetime="';
                $value = $context->findDot('message.created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('message.created_formatted');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</time>';
                $buffer .= "\n";
                $buffer .= $indent . '                <strong class="title"><a href="/lid/';
                $value = $context->findDot('author.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('author.full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></strong>';
                $buffer .= "\n";
                $buffer .= $indent . '            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '            <p>';
                $value = $context->findDot('message.content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</p>';
                $buffer .= "\n";
                // 'message.draft' section
                $buffer .= $this->section46e577df90cfffb311c60c4ff1c9ffff($context, $indent, $context->findDot('message.draft'));
                $buffer .= $indent . '        </div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '	</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}