<?php

class __Mustache_4202a06ed2ef84164e73bf47e75af9e5 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="advies">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>500: er is iets fout gegaan</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>';
        $buffer .= "\n";
        $buffer .= $indent . '		Er is iets fout gegaan bij het ophalen van deze pagina. Onze ontwikkel omgeving heeft een melding gekregen van';
        $buffer .= "\n";
        $buffer .= $indent . '		deze fout en zal het zo snel mogelijk proberen op te lossen.';
        $buffer .= "\n";
        $buffer .= $indent . '	</p>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}