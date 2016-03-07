<?php

class __Mustache_5173ac4bda349593c8badf6e33bbbc1b extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="advies">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>404: pagina niet gevonden</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>';
        $buffer .= "\n";
        $buffer .= $indent . '		Dit kan komen omdat wij een pagina hebben verwijderd, of een typefout is gemaakt in het adres.';
        $buffer .= "\n";
        $buffer .= $indent . '		Je kan het onderstaande formulier gebruiken om op mamaplaats te zoeken naar het artikel.';
        $buffer .= "\n";
        $buffer .= $indent . '	</p>';
        $buffer .= "\n";
        $buffer .= $indent . '	<form class="find-advice-form" method="get" action="/zoek">';
        $buffer .= "\n";
        $buffer .= $indent . '		<fieldset>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2>Zoek op mamaplaats</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="field">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button class="btn">zoeken</button>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="inp-wrap">';
        $buffer .= "\n";
        $buffer .= $indent . '					<input name="search" type="search" placeholder="Vul zoek term in">';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
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