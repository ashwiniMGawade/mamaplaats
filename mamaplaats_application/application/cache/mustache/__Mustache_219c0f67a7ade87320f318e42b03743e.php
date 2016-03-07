<?php

class __Mustache_219c0f67a7ade87320f318e42b03743e extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<form id="newsletter" class="newsletter-box validate-form" action="#newsletter">';
        $buffer .= "\n";
        $buffer .= $indent . '	<h2>Schrijf je nu in voor de Nieuwsbrief!</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="alert alert-success hidden">Je bent ingeschreven voor onze nieuwsbrief. <br>Ga naar je emailbox voor de verificatie mail.</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="field-row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<input class="required-email" type="email" placeholder="Email adres">';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="field-row">';
        $buffer .= "\n";
        $buffer .= $indent . '        <input data-required="true" name="subscribe_newsletter" type="checkbox">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<button class="btn" data-loading-text="Moment..." type="submit">schrijf je nu in</button>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}