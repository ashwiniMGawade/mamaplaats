<?php

class __Mustache_0fdabfed2e8041c5687fa83c6567a427 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="account">';
        $buffer .= "\n";
        $buffer .= $indent . '	<section class="registration-block">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header class="heading-box">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_social')) {
            $buffer .= $partial->renderInternal($context, '			');
        }
        $buffer .= $indent . '			<h1>';
        $value = $context->find('page_title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-set">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-1">';
        $buffer .= "\n";
        $buffer .= $indent . '			 <img src="';
        $value = $context->find('left_panel_image');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"/>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-2">';
        $buffer .= "\n";
        // 'user' section
        $buffer .= $this->sectionF72c684ee9cf9aab64152355e674f1b7($context, $indent, $context->find('user'));
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
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

    private function sectionA5978e7ca70816bb330fb80e37afcb65(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<div class="column">
							<div class="form-item">
								<label>Telefoonnummer *</label>
                                <input class="required-number" maxlength="10" id="i6 phone_number" type="text" name="phone_number" placeholder="Telefoonnummer" value="{{phone_number}}">
								<div id="phone-format-error" class="custom-validation-error" style="display: none">Vul een geldig telefoonnummer in</div>
							</div>
						</div>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '								<label>Telefoonnummer *</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input class="required-number" maxlength="10" id="i6 phone_number" type="text" name="phone_number" placeholder="Telefoonnummer" value="';
                $value = $context->find('phone_number');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div id="phone-format-error" class="custom-validation-error" style="display: none">Vul een geldig telefoonnummer in</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33d3409641b377d835d63f971c5a9907(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected" ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'selected="selected" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47d210e84d31dad280a14e1fd160a50d(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <option value="{{value}}" {{#selected}}selected="selected" {{/selected}}>{{text}}</option>
											';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                                <option value="';
                $value = $context->find('value');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $buffer .= $this->section33d3409641b377d835d63f971c5a9907($context, $indent, $context->find('selected'));
                $buffer .= '>';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d4c8fcbeb49a42c229ef2248fbc5a42(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
												<option value="{{text}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '												<option value="';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $context->find('selected'));
                $buffer .= '>';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ecedd6c5b808dba315ece5c564a21c9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <option value="{{value}}" {{#selected}}selected="selected" {{/selected}}>{{text}}</option>
										';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                            <option value="';
                $value = $context->find('value');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $buffer .= $this->section33d3409641b377d835d63f971c5a9907($context, $indent, $context->find('selected'));
                $buffer .= '>';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfc016d183ec7d4f72c7645a8c3abc5e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="column w4">
                            <div class="form-item">
                                <label>Geslacht</label>
                                <div class="select-wrap">
                                    <select name="gender">
										{{#genders}}
                                            <option value="{{value}}" {{#selected}}selected="selected" {{/selected}}>{{text}}</option>
										{{/genders}}
                                    </select>
                                </div>
                            </div>
                        </div>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                        <div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <label>Geslacht</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                                <div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '                                    <select name="gender">';
                $buffer .= "\n";
                // 'genders' section
                $buffer .= $this->section8ecedd6c5b808dba315ece5c564a21c9($context, $indent, $context->find('genders'));
                $buffer .= $indent . '                                    </select>';
                $buffer .= "\n";
                $buffer .= $indent . '                                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC68b5a5a0bfd1093f74f2ec455598b0c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="check-item">
                                <input name="newsletter_group" value="0" type="hidden">
                                <input id="c3 newsletter" type="checkbox" value="1" name="newsletter_group" {{#newsletter_group}}checked="checked"{{/newsletter_group}}>
                                <label for="c3">{{{opt_text}}}</label>
                            </div>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                            <div class="check-item">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input name="newsletter_group" value="0" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input id="c3 newsletter" type="checkbox" value="1" name="newsletter_group" ';
                // 'newsletter_group' section
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $context->find('newsletter_group'));
                $buffer .= '>';
                $buffer .= "\n";
                $buffer .= $indent . '                                <label for="c3">';
                $value = $context->find('opt_text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8031d4fdd4025d5ddde1e83bfb2188f1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="check-item">
                            <label for="c4">* {{{phone_number_field.text}}}</label>
                        </div>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                        <div class="check-item">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label for="c4">* ';
                $value = $context->findDot('phone_number_field.text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF72c684ee9cf9aab64152355e674f1b7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<form class="form-inline validate-form" action="" method="post">
					{{> messages}}
					{{^success}}
					<h3>Persoonsgegevens</h3>
					<div class="form-row">
						<div class="column">
							<div class="form-item">
								<label for="i1">Voornaam</label>
								<input class="required" id="i1 first_name" type="text" name="first_name" placeholder="Voornaam" value="{{first_name}}">
							</div>
						</div>
						<div class="column">
							<div class="form-item">
								<label for="i2">Achternaam</label>
								<input class="required" id="i2 last_name" type="text" name="last_name" placeholder="Achternaam" value="{{last_name}}">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="column">
							<div class="form-item">
								<label for="i3">Email adres</label>
								<input class="required-email" id="i3 email" type="email" name="email" placeholder="Emailadres" value="{{email}}">
							</div>
						</div>
						<div class="column">
							<div class="form-item">
								<label for="i4">Wachtwoord</label>
								<input class="required" id="i4 password" type="password" name="password" placeholder="Wachtwoord" value="{{password}}">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="column">
							<div class="form-item">
								<label for="i3">Username</label>
								<input class="required" id="i5 display_name" type="text" name="display_name" placeholder="Gebruikersnaam" value="{{display_name}}">
							</div>
						</div>
						{{#phone_number_field.display}}
						<div class="column">
							<div class="form-item">
								<label>Telefoonnummer *</label>
                                <input class="required-number" maxlength="10" id="i6 phone_number" type="text" name="phone_number" placeholder="Telefoonnummer" value="{{phone_number}}">
								<div id="phone-format-error" class="custom-validation-error" style="display: none">Vul een geldig telefoonnummer in</div>
							</div>
						</div>
						{{/phone_number_field.display}}
						{{^phone_number_field.display}}
                            <div class="column w4">
                                <div class="form-item">
                                    <label>Geslacht</label>
                                    <div class="select-wrap">
                                        <select name="gender">
											{{#genders}}
                                                <option value="{{value}}" {{#selected}}selected="selected" {{/selected}}>{{text}}</option>
											{{/genders}}
                                        </select>
                                    </div>
                                </div>
                            </div>
						{{/phone_number_field.display}}
					</div>
					<div class="form-row">
						<div class="column">
							<label for="i5">Geboortedatum</label>
							<div class="wrap">
								<div class="column w3">
									<div class="form-item">
										<input id="i6" name="birthdate[day]" type="text" value="{{birthdate.day}}" placeholder="DD">
									</div>
								</div>
								<div class="column w3">
									<div class="form-item">
										<input name="birthdate[month]" type="text" value="{{birthdate.month}}" placeholder="MM">
									</div>
								</div>
								<div class="column w3">
									<div class="form-item">
										<div class="select-wrap">
											<select name="birthdate[year]">
												{{#birthdate_years}}
												<option value="{{text}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												{{/birthdate_years}}
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						{{#phone_number_field.display}}
                        <div class="column w4">
                            <div class="form-item">
                                <label>Geslacht</label>
                                <div class="select-wrap">
                                    <select name="gender">
										{{#genders}}
                                            <option value="{{value}}" {{#selected}}selected="selected" {{/selected}}>{{text}}</option>
										{{/genders}}
                                    </select>
                                </div>
                            </div>
                        </div>
						{{/phone_number_field.display}}
					</div>
					<div class="check-row">
                        <div class="check-item">
                            <input id="c2 tos" name="tos" type="checkbox" {{#tos}}checked="checked"{{/tos}}>
                            <label for="c2">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen. Tevens ga ik akkoord met de  <a href="/algemene-voorwaarden/">algemene voorwaarden.</a></label>
                        </div>
						{{#slug}}
                            <div class="check-item">
                                <input name="newsletter_group" value="0" type="hidden">
                                <input id="c3 newsletter" type="checkbox" value="1" name="newsletter_group" {{#newsletter_group}}checked="checked"{{/newsletter_group}}>
                                <label for="c3">{{{opt_text}}}</label>
                            </div>
						{{/slug}}
						{{#phone_number_field.text}}
                        <div class="check-item">
                            <label for="c4">* {{{phone_number_field.text}}}</label>
                        </div>
						{{/phone_number_field.text}}
					</div>
					<div class="set">
						<button class="btn" type="submit">Registreren</button>
					</div>
					{{/success}}
				</form>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<form class="form-inline validate-form" action="" method="post">';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('messages')) {
                    $buffer .= $partial->renderInternal($context, '					');
                }
                // 'success' inverted section
                $value = $context->find('success');
                if (empty($value)) {
                    
                    $buffer .= $indent . '					<h3>Persoonsgegevens</h3>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="form-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i1">Voornaam</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<input class="required" id="i1 first_name" type="text" name="first_name" placeholder="Voornaam" value="';
                    $value = $context->find('first_name');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i2">Achternaam</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<input class="required" id="i2 last_name" type="text" name="last_name" placeholder="Achternaam" value="';
                    $value = $context->find('last_name');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="form-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i3">Email adres</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<input class="required-email" id="i3 email" type="email" name="email" placeholder="Emailadres" value="';
                    $value = $context->find('email');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i4">Wachtwoord</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<input class="required" id="i4 password" type="password" name="password" placeholder="Wachtwoord" value="';
                    $value = $context->find('password');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="form-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i3">Username</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<input class="required" id="i5 display_name" type="text" name="display_name" placeholder="Gebruikersnaam" value="';
                    $value = $context->find('display_name');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    // 'phone_number_field.display' section
                    $buffer .= $this->sectionA5978e7ca70816bb330fb80e37afcb65($context, $indent, $context->findDot('phone_number_field.display'));
                    // 'phone_number_field.display' inverted section
                    $value = $context->findDot('phone_number_field.display');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                            <div class="column w4">';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                <div class="form-item">';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                    <label>Geslacht</label>';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                    <div class="select-wrap">';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                        <select name="gender">';
                        $buffer .= "\n";
                        // 'genders' section
                        $buffer .= $this->section47d210e84d31dad280a14e1fd160a50d($context, $indent, $context->find('genders'));
                        $buffer .= $indent . '                                        </select>';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                    </div>';
                        $buffer .= "\n";
                        $buffer .= $indent . '                                </div>';
                        $buffer .= "\n";
                        $buffer .= $indent . '                            </div>';
                        $buffer .= "\n";
                    }
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="form-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="column">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<label for="i5">Geboortedatum</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<input id="i6" name="birthdate[day]" type="text" value="';
                    $value = $context->findDot('birthdate.day');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" placeholder="DD">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<input name="birthdate[month]" type="text" value="';
                    $value = $context->findDot('birthdate.month');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" placeholder="MM">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<select name="birthdate[year]">';
                    $buffer .= "\n";
                    // 'birthdate_years' section
                    $buffer .= $this->section6d4c8fcbeb49a42c229ef2248fbc5a42($context, $indent, $context->find('birthdate_years'));
                    $buffer .= $indent . '											</select>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    // 'phone_number_field.display' section
                    $buffer .= $this->sectionFfc016d183ec7d4f72c7645a8c3abc5e($context, $indent, $context->findDot('phone_number_field.display'));
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="check-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '                        <div class="check-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '                            <input id="c2 tos" name="tos" type="checkbox" ';
                    // 'tos' section
                    $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $context->find('tos'));
                    $buffer .= '>';
                    $buffer .= "\n";
                    $buffer .= $indent . '                            <label for="c2">Ja, ik ontvang graag wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen. Tevens ga ik akkoord met de  <a href="/algemene-voorwaarden/">algemene voorwaarden.</a></label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '                        </div>';
                    $buffer .= "\n";
                    // 'slug' section
                    $buffer .= $this->sectionC68b5a5a0bfd1093f74f2ec455598b0c($context, $indent, $context->find('slug'));
                    // 'phone_number_field.text' section
                    $buffer .= $this->section8031d4fdd4025d5ddde1e83bfb2188f1($context, $indent, $context->findDot('phone_number_field.text'));
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					<div class="set">';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<button class="btn" type="submit">Registreren</button>';
                    $buffer .= "\n";
                    $buffer .= $indent . '					</div>';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '				</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}