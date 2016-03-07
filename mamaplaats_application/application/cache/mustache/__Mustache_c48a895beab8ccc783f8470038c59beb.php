<?php

class __Mustache_c48a895beab8ccc783f8470038c59beb extends Mustache_Template
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
        $buffer .= $indent . '		<input id="recipient" type="text" name="search-term" placeholder="Zoek een moeder op voornaam, achternaam of gebruikersnaam" autocomplete="off">';
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
        $buffer .= $indent . '			<input id="recipient_id" name="recipient_id" type="hidden" value="">';
        $buffer .= "\n";
        $buffer .= $indent . '			<textarea name="content" placeholder="JOUW BERICHT *" rows="5" cols="50"></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn" type="submit">verstuur</button>';
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