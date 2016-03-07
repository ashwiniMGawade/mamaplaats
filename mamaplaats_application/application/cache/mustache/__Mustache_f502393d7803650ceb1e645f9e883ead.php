<?php

class __Mustache_f502393d7803650ceb1e645f9e883ead extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<form id="newsletter_large" class="subscribe-form validate-form" action="#newsletter">';
        $buffer .= "\n";
        $buffer .= $indent . '	<p class="sub-heading">Schrijf je in voor de nieuwsbrief en mis niets!</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="alert alert-success hidden">Je bent ingeschreven voor onze nieuwsbrief. Ga naar je emailbox voor de verificatie mail.</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '		<button class="btn" data-loading-text="Moment..." type="submit">Inschrijven</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '			<input class="required-email" type="email" name="email" placeholder="Email adres">';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '            <input data-required="true" name="subscribe_newsletter" type="checkbox">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="followers">Nieuws over winacties / blogs / testpanels / tips / video\'s / voordeel / etc.</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}