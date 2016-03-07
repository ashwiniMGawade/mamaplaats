<?php

class __Mustache_3a233f0fda25445fa65b040781158fbe extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="reply_box_container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="reply_box" class="comment-form">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h3>Plaats een reactie</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        // 'reply_as_user' section
        $buffer .= $this->section81325bdb27cbbe35e08e84860d4e77ba($context, $indent, $context->find('reply_as_user'));
        $buffer .= "\n";
        // 'reply_as_guest' section
        $buffer .= $this->section0376887f2aa84bf9dbc7538187f70f71($context, $indent, $context->find('reply_as_guest'));
        $buffer .= "\n";
        // 'reply_as_guest_not_allowed' section
        $buffer .= $this->section2041f0967193e716cff0a67cac1e9523($context, $indent, $context->find('reply_as_guest_not_allowed'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Modal -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="modal-dialog">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="modal-content">';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="modal-header">';
        $buffer .= "\n";
        $buffer .= $indent . '                <button type="button" class="close" id="close-modal-popup"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
        $buffer .= "\n";
        $buffer .= $indent . '                <!--<h4 class="modal-title" id="myModalLabel">Modal title</h4>-->';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="modal-body">';
        $buffer .= "\n";
        $buffer .= $indent . '                Bedankt voor je inschrijving. Er is een bevestigingsmail verstuurd naar je e-mailadres.<br/>';
        $buffer .= "\n";
        $buffer .= $indent . '                Als je geen verificatie mail ontvangen hebt ben je al bij ons bekend';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="modal-footer">';
        $buffer .= "\n";
        $buffer .= $indent . '                <button type="button" class="btn btn-primary popup-btn">GA VERDER</button>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<!--<div id="reply_box_container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="reply_box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<br />';
        $buffer .= "\n";
        $buffer .= $indent . '		Plaats een reactie';
        $buffer .= "\n";
        $buffer .= $indent . '		<hr /><hr />';
        $buffer .= "\n";
        // 'has_messages' section
        $buffer .= $this->sectionC89fe58cd735113e0d97a24fca0ab913($context, $indent, $context->find('has_messages'));
        $buffer .= "\n";
        // 'reply_as_user' section
        $buffer .= $this->section75bd5364afee03610a34cc63542b7656($context, $indent, $context->find('reply_as_user'));
        $buffer .= "\n";
        // 'reply_as_guest' section
        $buffer .= $this->section00640203d00751dcddca0a157640d07a($context, $indent, $context->find('reply_as_guest'));
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<br />-->';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section81325bdb27cbbe35e08e84860d4e77ba(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<form id="post_comment" name="post_comment" method="POST" class="validate-form">
			<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">
			<input id="comment_item_id" type="hidden" name="comment[item_id]" value="{{comment_item_id}}">
			<div class="inp-wrap">
				<textarea class="required" d="comment_content" name="comment[content]" cols="50" rows="4" placeholder="JOUW REACTIE *"></textarea>
			</div>
			<button style="display: none;" id="comment-reset-button" onclick="return comment_form.reset()" class="btn">annuleren</button>
			<button class="btn">verstuur</button>
		</form>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<form id="post_comment" name="post_comment" method="POST" class="validate-form">';
                $buffer .= "\n";
                $buffer .= $indent . '			<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '			<input id="comment_item_id" type="hidden" name="comment[item_id]" value="';
                $value = $context->find('comment_item_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="inp-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea class="required" d="comment_content" name="comment[content]" cols="50" rows="4" placeholder="JOUW REACTIE *"></textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<button style="display: none;" id="comment-reset-button" onclick="return comment_form.reset()" class="btn">annuleren</button>';
                $buffer .= "\n";
                $buffer .= $indent . '			<button class="btn">verstuur</button>';
                $buffer .= "\n";
                $buffer .= $indent . '		</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0376887f2aa84bf9dbc7538187f70f71(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<form id="post_comment" name="post_comment" method="POST" class="validate-form">
			<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">
			<input id="comment_item_id" type="hidden" name="comment[item_id]" value="{{comment_item_id}}">
			<div class="inp-wrap">
				<textarea id="comment_content" name="comment[content]" class="required" cols="50" rows="4" placeholder="JOUW REACTIE *"></textarea>
			</div>
			<div class="inp-wrap">
				<input class="required-email" id="comment_email" name="comment[email]" type="email" placeholder="JE EMAIL *">
			</div>
			<div class="inp-wrap">
				<input id="comment_author" name="comment[author]" class="required" type="text" placeholder="JE NAAM *">
			</div>
			<div>
			<input type="checkbox" name="comment[register_newletter]" id="register_newletter"><span>Schrijf mij in voor de nieuwsbrief</span>
			</div>
			<button style="display: none;" id="comment-reset-button" onclick="return comment_form.reset()" class="btn">annuleren</button>
			<button class="btn submit-form-btn">verstuur</button>
            <button class="btn model-popup-form" data-toggle="modal" data-target="#myModal" style="display: none">verstuur</button>
		</form>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<form id="post_comment" name="post_comment" method="POST" class="validate-form">';
                $buffer .= "\n";
                $buffer .= $indent . '			<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '			<input id="comment_item_id" type="hidden" name="comment[item_id]" value="';
                $value = $context->find('comment_item_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="inp-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea id="comment_content" name="comment[content]" class="required" cols="50" rows="4" placeholder="JOUW REACTIE *"></textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="inp-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input class="required-email" id="comment_email" name="comment[email]" type="email" placeholder="JE EMAIL *">';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="inp-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_author" name="comment[author]" class="required" type="text" placeholder="JE NAAM *">';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<input type="checkbox" name="comment[register_newletter]" id="register_newletter"><span>Schrijf mij in voor de nieuwsbrief</span>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<button style="display: none;" id="comment-reset-button" onclick="return comment_form.reset()" class="btn">annuleren</button>';
                $buffer .= "\n";
                $buffer .= $indent . '			<button class="btn submit-form-btn">verstuur</button>';
                $buffer .= "\n";
                $buffer .= $indent . '            <button class="btn model-popup-form" data-toggle="modal" data-target="#myModal" style="display: none">verstuur</button>';
                $buffer .= "\n";
                $buffer .= $indent . '		</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2041f0967193e716cff0a67cac1e9523(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		<div class="alert alert-info">
			Om te kunnen reageren, moet je ingelogd zijn.
			<a class="alert-link" href="/guest/register">Registeer een account</a> of
			<a class="alert-link" href="/user/login">log in bij Mamaplaats</a>.
		</div>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		<div class="alert alert-info">';
                $buffer .= "\n";
                $buffer .= $indent . '			Om te kunnen reageren, moet je ingelogd zijn.';
                $buffer .= "\n";
                $buffer .= $indent . '			<a class="alert-link" href="/guest/register">Registeer een account</a> of';
                $buffer .= "\n";
                $buffer .= $indent . '			<a class="alert-link" href="/user/login">log in bij Mamaplaats</a>.';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7c821876eb5e31c33a67d6479078745(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{message}}<br />';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $context->find('message');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC89fe58cd735113e0d97a24fca0ab913(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{#messages}}{{message}}<br />{{/messages}}
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			';
                // 'messages' section
                $buffer .= $this->sectionA7c821876eb5e31c33a67d6479078745($context, $indent, $context->find('messages'));
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75bd5364afee03610a34cc63542b7656(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			Ingelogd als: {{display_name}}
			<form id="post_comment" name="post_comment" method="POST">
				<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">
				<input id="comment_item_id" type="hidden" name="comment[item_id]" value="{{comment_item_id}}">
				<label for="comment_content"></label>
				<textarea id="comment_content" name="comment[content]" rows="4" cols="50" placeholder="JOUW REACTIE *"></textarea>
				<br/>
				<input type="submit" id="comment_submit" name="comment_submit" value="Verstuur">
			</form>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			Ingelogd als: ';
                $value = $context->find('display_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                $buffer .= $indent . '			<form id="post_comment" name="post_comment" method="POST">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_item_id" type="hidden" name="comment[item_id]" value="';
                $value = $context->find('comment_item_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="comment_content"></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea id="comment_content" name="comment[content]" rows="4" cols="50" placeholder="JOUW REACTIE *"></textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '				<br/>';
                $buffer .= "\n";
                $buffer .= $indent . '				<input type="submit" id="comment_submit" name="comment_submit" value="Verstuur">';
                $buffer .= "\n";
                $buffer .= $indent . '			</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00640203d00751dcddca0a157640d07a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<form id="post_comment" name="post_comment" method="POST">
				<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">
				<input id="comment_item_id" type="hidden" name="comment[item_id]" value="{{comment_item_id}}">
				<label for="comment_content"></label>
				<textarea id="comment_content" name="comment[content]" rows="4" cols="50" placeholder="JOUW REACTIE *"></textarea>
				<br/>
				<label for="comment_email"></label>
				<input id="comment_email" name="comment[email]" type="email" placeholder="JE EMAIL *" />
				<br/>
				<label for="comment_author"></label>
				<input id="comment_author" name="comment[author]" type="text" placeholder="JE NAAM *" />
				<br />
				<input type="submit" id="comment_submit" name="comment_submit" value="Verstuur"> (<a onclick="return addComment.resetForm()" href="#">annuleer reactie</a>)
			</form>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<form id="post_comment" name="post_comment" method="POST">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_parent_id" type="hidden" name="comment[parent_id]" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_item_id" type="hidden" name="comment[item_id]" value="';
                $value = $context->find('comment_item_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="comment_content"></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea id="comment_content" name="comment[content]" rows="4" cols="50" placeholder="JOUW REACTIE *"></textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '				<br/>';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="comment_email"></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_email" name="comment[email]" type="email" placeholder="JE EMAIL *" />';
                $buffer .= "\n";
                $buffer .= $indent . '				<br/>';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="comment_author"></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<input id="comment_author" name="comment[author]" type="text" placeholder="JE NAAM *" />';
                $buffer .= "\n";
                $buffer .= $indent . '				<br />';
                $buffer .= "\n";
                $buffer .= $indent . '				<input type="submit" id="comment_submit" name="comment_submit" value="Verstuur"> (<a onclick="return addComment.resetForm()" href="#">annuleer reactie</a>)';
                $buffer .= "\n";
                $buffer .= $indent . '			</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}