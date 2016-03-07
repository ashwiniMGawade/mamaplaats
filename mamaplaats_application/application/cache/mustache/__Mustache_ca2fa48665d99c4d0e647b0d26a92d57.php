<?php

class __Mustache_ca2fa48665d99c4d0e647b0d26a92d57 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="data-form unsubscribe">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="alert alert-danger">';
        $buffer .= "\n";
        $buffer .= $indent . '        <button type="button" class="close" data-dismiss="alert">&times;</button>';
        $buffer .= "\n";
        $buffer .= $indent . '            Spijtig !. Geen dergelijke gebruiker aanwezig is<br />';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}