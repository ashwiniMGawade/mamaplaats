<?php

class __Mustache_a793d355ec904144374cd1cb08515513 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="discount-block">';
        $buffer .= "\n";
        $buffer .= $indent . '    <a class="" href="/korting/nieuwste">';
        $buffer .= "\n";
        $buffer .= $indent . '        Check hier onze nieuwe <span>acties</span> en <span>kortingscodes</span> speciaal voor jou!';
        $buffer .= "\n";
        $buffer .= $indent . '    </a>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}