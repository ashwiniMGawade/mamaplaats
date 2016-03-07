<?php

class __Mustache_19bfbf00ab74016c1b14c3aad658b1b1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'newsletter' section
        $buffer .= $this->section87a2e87c865928f136bd3e6ab138a639($context, $indent, $context->find('newsletter'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section87a2e87c865928f136bd3e6ab138a639(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<article class="item wb">
	<form id="newsletter_home" class="newsletter validate-form" action="#newsletter">
		<h3>Schrijf je in voor de nieuwsbrief!</h3>
		<p>NIEUWS OVER WINACTIES / BLOGS / TESTPANELS / TIPS / VIDEO\'S / VOORDEEL / ETC.</p>
		<div class="alert alert-success hidden">Je bent ingeschreven voor onze nieuwsbrief. <br>Ga naar je emailbox voor de verificatie mail.</div>
		<div class="field-row">
			<input class="required-email" name="email" type="email" placeholder="Email adres">
		</div>
        <div class="field-row">
            <input data-required="true" name="subscribe_newsletter" type="checkbox">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen
        </div>
		<button class="btn alt" data-loading-text="Moment..." type="submit">schrijf je nu in</button>
	</form>
</article>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<article class="item wb">';
                $buffer .= "\n";
                $buffer .= $indent . '	<form id="newsletter_home" class="newsletter validate-form" action="#newsletter">';
                $buffer .= "\n";
                $buffer .= $indent . '		<h3>Schrijf je in voor de nieuwsbrief!</h3>';
                $buffer .= "\n";
                $buffer .= $indent . '		<p>NIEUWS OVER WINACTIES / BLOGS / TESTPANELS / TIPS / VIDEO\'S / VOORDEEL / ETC.</p>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="alert alert-success hidden">Je bent ingeschreven voor onze nieuwsbrief. <br>Ga naar je emailbox voor de verificatie mail.</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="field-row">';
                $buffer .= "\n";
                $buffer .= $indent . '			<input class="required-email" name="email" type="email" placeholder="Email adres">';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '        <div class="field-row">';
                $buffer .= "\n";
                $buffer .= $indent . '            <input data-required="true" name="subscribe_newsletter" type="checkbox">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen';
                $buffer .= "\n";
                $buffer .= $indent . '        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '		<button class="btn alt" data-loading-text="Moment..." type="submit">schrijf je nu in</button>';
                $buffer .= "\n";
                $buffer .= $indent . '	</form>';
                $buffer .= "\n";
                $buffer .= $indent . '</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}