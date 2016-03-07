<?php

class __Mustache_d24349e4a48ba8cfcc305177223bcf1a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="account">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="login-block">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Log in bij Mamaplaats</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<form class="validate-form" action="" method="POST">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h3>Inloggen</h3>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="alert alert-danger">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $buffer .= "\n";
        $buffer .= $indent . '				We hebben geen account kunnen vinden met deze Gebruikersnaam / Wachtwoord combinatie<br />';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="form-item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<label for="username">Email adres:</label>';
        $buffer .= "\n";
        $buffer .= $indent . '				<input class="required" id="username" name="username" type="text" placeholder="Gebruikersnaam of Email" value="test" tabindex="1">';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="form-item">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a class="link" href="/user/forgot-password">Wachtwoord vergeten</a>';
        $buffer .= "\n";
        $buffer .= $indent . '				<label for="password">Wachtwoord</label>';
        $buffer .= "\n";
        $buffer .= $indent . '				<input class="required" id="i2" name="password" type="password" placeholder="Vul hier je wachtwoord in" tabindex="2">';
        $buffer .= "\n";
        $buffer .= $indent . '				<input type="hidden" value="1" name="remember_me">';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="set">';
        $buffer .= "\n";
        $buffer .= $indent . '				<button class="btn" tabindex="3">Login</button>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="/guest/register">Account aanmaken</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</form>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}