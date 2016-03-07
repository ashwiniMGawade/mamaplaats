<?php

class __Mustache_836a18ce7970d05a20454a0cd2251ff7 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h1>Stuur een privé bericht</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('messages')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3>Ontvanger Bericht</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<form id="user_search" method="get">';
        $buffer .= "\n";
        $buffer .= $indent . '		<input id="recipient" type="text" name="search-term" value="';
        $value = $context->findDot('conversation.user.display_name');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" placeholder="Zoek een moeder op voornaam, achternaam of gebruikersnaam" autocomplete="off">';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="result"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h3>Schrijf een nieuw bericht</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '</header>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="msg-box">';
        $buffer .= "\n";
        $buffer .= $indent . '	<form action="" method="post">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			<input id="recipient_id" name="recipient_id" type="hidden" value="';
        $value = $context->findDot('conversation.user.id');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '			<textarea name="content" placeholder="JOUW BERICHT *" rows="5" cols="50">';
        $value = $context->findDot('conversation.msg_body');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row form-item">';
        $buffer .= "\n";
        $buffer .= $indent . '			    <div class="col-sm-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			        <div class="form-item blog-form-btns">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <button class="btn" type="submit">verstuur</button>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			    </div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '			    <div class="col-sm-4 col-sm-offset-4">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="form-item blog-form-btns">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <button class="btn" name="draft" value="draft" type="submit">Opslaan als concept</button>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '	</form>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}