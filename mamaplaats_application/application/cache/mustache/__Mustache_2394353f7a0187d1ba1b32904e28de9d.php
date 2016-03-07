<?php

class __Mustache_2394353f7a0187d1ba1b32904e28de9d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<form id="newsletter" class="newsletter-form validate-form" action="#newsletter">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="sub-heading">Schrijf je in voor de nieuwsbrief!</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="alert alert-success hidden">';
        $buffer .= "\n";
        $buffer .= $indent . '	Ga nu naar je email box om jouw inschrijving te activeren.<br/>';
        $buffer .= "\n";
        $buffer .= $indent . '	Let op: Geen mail van ons ontvangen? Dan is activeren niet nodig. Jouw email adres was al bij ons bekend.';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn" data-loading-text="Moment..." type="submit">aanmelden</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input class="required-email" name="email" type="email" placeholder="Email adres">';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '        <input data-required="true" name="subscribe_newsletter" type="checkbox">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}