<?php

class __Mustache_cac47db2a2e1161a710ab5dfeaacac55 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'user' section
        $buffer .= $this->section18824fa570c10a8f8e6591fd40caba5a($context, $indent, $context->find('user'));
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">var initial_children = ';
        $value = $context->find('children');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= ';</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript" src="/assets/js/mamaplaats/ko.user_children.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	function toggle_display(field_name, obj)';
        $buffer .= "\n";
        $buffer .= $indent . '	{';
        $buffer .= "\n";
        $buffer .= $indent . '		field = document.getElementById(field_name);';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		if (obj.value == 1)';
        $buffer .= "\n";
        $buffer .= $indent . '		{';
        $buffer .= "\n";
        $buffer .= $indent . '			field.style.display = \'\';';
        $buffer .= "\n";
        $buffer .= $indent . '		}';
        $buffer .= "\n";
        $buffer .= $indent . '		else';
        $buffer .= "\n";
        $buffer .= $indent . '		{';
        $buffer .= "\n";
        $buffer .= $indent . '			field.style.display = \'none\';';
        $buffer .= "\n";
        $buffer .= $indent . '		}';
        $buffer .= "\n";
        $buffer .= $indent . '	}';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	function uploadAvatar(obj) {';
        $buffer .= "\n";
        $buffer .= $indent . '		return obj.form.submit();';
        $buffer .= "\n";
        $buffer .= $indent . '	}';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionA7c821876eb5e31c33a67d6479078745(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{message}}<br />';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $context->find('message');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9d539c31c46d9923111eaa6987761b8(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="alert alert-{{type}}">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{#messages}}{{message}}<br />{{/messages}}
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="alert alert-';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				<button type="button" class="close" data-dismiss="alert">&times;</button>';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                // 'messages' section
                $buffer .= $this->sectionA7c821876eb5e31c33a67d6479078745($context, $indent, $context->find('messages'));
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
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

    private function sectionCf9be8a96289254d701b909c35fec2b4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '												<option value="';
                $value = $context->find('value');
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

    private function sectionA2bdadc2431ce63db155162c6968ad3f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
										';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '										<option value="';
                $value = $context->find('value');
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

    private function section85e3a83fed38fdf7fc808bc7c983c1c3(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header class="heading-box">
					<h1>Persoonsgegevens</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<label for="f1">Email</label>
									<input type="email" name="email" id="f1 email" placeholder="Emailadres" value="{{email}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f2">Voornaam</label>
									<input type="text" name="first_name" id="f2 first_name" placeholder="Voornaam" value="{{first_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f3">Tussenvoegsel</label>
									<input type="text" name="middle_name" id="f3 middle_name" placeholder="Tussenvoegsel" value="{{middle_name}}">
								</div>
							</div>
							</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Achternaam</label>
									<input type="text" name="last_name" id="f4 last_name" placeholder="Achternaam" value="{{last_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Gebruikersnaam</label>
									<input type="text" name="display_name" id="f4 display_name" placeholder="Gebruikersnaam" value="{{display_name}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w4">
								<label for="f5">Geboortedatum</label>
								<div class="wrap">
									<div class="column w5">
										<div class="form-item">
											<input type="text" id="f5" name="birthdate[day]" value="{{birthdate.day}}" placeholder="DD">
										</div>
									</div>
									<div class="column w5">
										<div class="form-item">
											<input type="text" name="birthdate[month]" value="{{birthdate.month}}" placeholder="MM">
										</div>
									</div>
									<div class="column w5">
										<div class="select-wrap">
											<select name="birthdate[year]">
												{{#birthdate_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												{{/birthdate_year_select}}
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="column w2">
								<label for="s2">Geslacht</label>
								<div class="select-wrap">
									<select name="gender" id="s2">
										{{#genders}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
										{{/genders}}
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="file-column">
						<div class="photo">
							<img src="{{avatar}}?time={{time}}" width="230" height="150" alt="{{full_name}}">
						</div>
						<input type="file" name="avatar" title="upload profiel foto" onchange="uploadAvatar(this)">
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
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Persoonsgegevens</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="personal-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-column">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<label for="f1">Email</label>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="email" name="email" id="f1 email" placeholder="Emailadres" value="';
                $value = $context->find('email');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<label for="f2">Voornaam</label>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="text" name="first_name" id="f2 first_name" placeholder="Voornaam" value="';
                $value = $context->find('first_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<label for="f3">Tussenvoegsel</label>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="text" name="middle_name" id="f3 middle_name" placeholder="Tussenvoegsel" value="';
                $value = $context->find('middle_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<label for="f4">Achternaam</label>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="text" name="last_name" id="f4 last_name" placeholder="Achternaam" value="';
                $value = $context->find('last_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<label for="f4">Gebruikersnaam</label>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="text" name="display_name" id="f4 display_name" placeholder="Gebruikersnaam" value="';
                $value = $context->find('display_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '								<label for="f5">Geboortedatum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="column w5">';
                $buffer .= "\n";
                $buffer .= $indent . '										<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '											<input type="text" id="f5" name="birthdate[day]" value="';
                $value = $context->findDot('birthdate.day');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" placeholder="DD">';
                $buffer .= "\n";
                $buffer .= $indent . '										</div>';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="column w5">';
                $buffer .= "\n";
                $buffer .= $indent . '										<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '											<input type="text" name="birthdate[month]" value="';
                $value = $context->findDot('birthdate.month');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" placeholder="MM">';
                $buffer .= "\n";
                $buffer .= $indent . '										</div>';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="column w5">';
                $buffer .= "\n";
                $buffer .= $indent . '										<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '											<select name="birthdate[year]">';
                $buffer .= "\n";
                // 'birthdate_year_select' section
                $buffer .= $this->sectionCf9be8a96289254d701b909c35fec2b4($context, $indent, $context->find('birthdate_year_select'));
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
                $buffer .= $indent . '							<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '								<label for="s2">Geslacht</label>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '									<select name="gender" id="s2">';
                $buffer .= "\n";
                // 'genders' section
                $buffer .= $this->sectionA2bdadc2431ce63db155162c6968ad3f($context, $indent, $context->find('genders'));
                $buffer .= $indent . '									</select>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="file-column">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '							<img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?time=';
                $value = $context->find('time');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="230" height="150" alt="';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input type="file" name="avatar" title="upload profiel foto" onchange="uploadAvatar(this)">';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69feef66affa081e8ade6fe99d1c93b9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header class="heading-box">
					<h1>Wachtwoord wijzigen</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" id="f6" name="old_password" value="" placeholder="Huidig wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="new_password" value="" placeholder="Nieuw wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="confirm_password" value="" placeholder="Herhaal wachtwoord">
								</div>
							</div>
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
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Wachtwoord wijzigen</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="personal-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-column">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="password" id="f6" name="old_password" value="" placeholder="Huidig wachtwoord">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					   </div>';
                $buffer .= "\n";
                $buffer .= $indent . '					   <div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="password" name="new_password" value="" placeholder="Nieuw wachtwoord">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					   </div>';
                $buffer .= "\n";
                $buffer .= $indent . '					   <div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input type="password" name="confirm_password" value="" placeholder="Herhaal wachtwoord">';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					   </div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section926bb5963ac40f4b978ec3024bc3442a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '									<option value="';
                $value = $context->find('value');
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

    private function section8d315270ed06c6a3223b15205012c54a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
												<option value="{{value}}">{{text}}</option>
											';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '												<option value="';
                $value = $context->find('value');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
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

    private function sectionDe8703ba17d7bfe0ec1f759e5ccd49f9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '										<option value="';
                $value = $context->find('value');
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

    private function section3b3fa26b8a75007ead21d4ec31f52595(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
											';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '												<option value="';
                $value = $context->find('value');
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

    private function section595a3c1c58fe602dd3e7299ae58c4c4f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header class="heading-box">
					<h1>Gezinssituatie</h1>
				</header>
				<div class="family-data">
					<div class="data-row">
						<div class="column w4">
							<label for="has_children">Heb je kinderen?</label>
							<div class="select-wrap small">
								<select id="has_children" name="has_children" class="span12" onchange="toggle_display(\'children\', this); toggle_display(\'add_child\', this)">
									{{#children_select}}
									<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/children_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="children_list data-row" data-bind="foreach: children">
						<div class="column w5">
							<label for="f7">Voornaam van je kind</label>
							<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">
							<div class="form-item">
								<input id="f7" type="text" placeholder="Voornaam kind" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}">
							</div>
						</div>
						<div class="column w3">
							<label for="f8">Geboortedatum</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input id="f8" type="text" placeholder="DD" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="form-item">
										<input type="text" placeholder="MM" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="select-wrap" >
										<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">
											{{#birthdate_year_select}}
												<option value="{{value}}">{{text}}</option>
											{{/birthdate_year_select}}
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="column w6">
							<label for="s5">Geslacht</label>
							<div class="select-wrap">
								<select id="s5" data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">
									<option value="1">jongen</option>
									<option value="2">meisje</option>
								</select>
							</div>
						</div>
						<div class="column w1">
							<a data-bind="click: $root.removeChild" href="#children">X</a>
						</div>
					</div>
					<div id="add_child" class="children_list data-row">
						<a data-bind="click: addChild" class="btn-link">kind toevoegen</a>
					</div>
					<div class="btn-box"></div>
				</div>

				<div class="family-data">
					<div class="data-row">
						<div class="column w2">
							<label for="is_pregnant">Ben je zwanger</label>
							<div class="select-wrap">
								<select id="is_pregnant" name="is_pregnant">
									{{#pregnant_select}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/pregnant_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="data-row">
						<div id="pregnancy_date" class="column w3" >
							<label for="f6">Uitgerekend op</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input type="text" id="f6" name="pregnancy_due_date[day]" value="{{pregnancy_due_date.day}}" placeholder="DD">
									</div>
								</div>
								<div class="column w4">
									<div class="form-item">
										<input type="text" name="pregnancy_due_date[month]" value="{{pregnancy_due_date.month}}" placeholder="MM">
									</div>
								</div>
								<div class="column w4">
									<div class="select-wrap">
										<select name="pregnancy_due_date[year]">
											{{#pregnancy_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
											{{/pregnancy_year_select}}
										</select>
									</div>
								</div>
							</div>
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
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Gezinssituatie</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="family-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="has_children">Heb je kinderen?</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="select-wrap small">';
                $buffer .= "\n";
                $buffer .= $indent . '								<select id="has_children" name="has_children" class="span12" onchange="toggle_display(\'children\', this); toggle_display(\'add_child\', this)">';
                $buffer .= "\n";
                // 'children_select' section
                $buffer .= $this->section926bb5963ac40f4b978ec3024bc3442a($context, $indent, $context->find('children_select'));
                $buffer .= $indent . '								</select>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="children_list data-row" data-bind="foreach: children">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w5">';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="f7">Voornaam van je kind</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '								<input id="f7" type="text" placeholder="Voornaam kind" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w3">';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="f8">Geboortedatum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input id="f8" type="text" placeholder="DD" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="column w4" >';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input type="text" placeholder="MM" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="column w4" >';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="select-wrap" >';
                $buffer .= "\n";
                $buffer .= $indent . '										<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">';
                $buffer .= "\n";
                // 'birthdate_year_select' section
                $buffer .= $this->section8d315270ed06c6a3223b15205012c54a($context, $indent, $context->find('birthdate_year_select'));
                $buffer .= $indent . '										</select>';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w6">';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="s5">Geslacht</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '								<select id="s5" data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '									<option value="1">jongen</option>';
                $buffer .= "\n";
                $buffer .= $indent . '									<option value="2">meisje</option>';
                $buffer .= "\n";
                $buffer .= $indent . '								</select>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w1">';
                $buffer .= "\n";
                $buffer .= $indent . '							<a data-bind="click: $root.removeChild" href="#children">X</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div id="add_child" class="children_list data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '						<a data-bind="click: addChild" class="btn-link">kind toevoegen</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="btn-box"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="family-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="column w2">';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="is_pregnant">Ben je zwanger</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '								<select id="is_pregnant" name="is_pregnant">';
                $buffer .= "\n";
                // 'pregnant_select' section
                $buffer .= $this->sectionDe8703ba17d7bfe0ec1f759e5ccd49f9($context, $indent, $context->find('pregnant_select'));
                $buffer .= $indent . '								</select>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div id="pregnancy_date" class="column w3" >';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="f6">Uitgerekend op</label>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input type="text" id="f6" name="pregnancy_due_date[day]" value="';
                $value = $context->findDot('pregnancy_due_date.day');
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
                $buffer .= $indent . '								<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input type="text" name="pregnancy_due_date[month]" value="';
                $value = $context->findDot('pregnancy_due_date.month');
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
                $buffer .= $indent . '								<div class="column w4">';
                $buffer .= "\n";
                $buffer .= $indent . '									<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '										<select name="pregnancy_due_date[year]">';
                $buffer .= "\n";
                // 'pregnancy_year_select' section
                $buffer .= $this->section3b3fa26b8a75007ead21d4ec31f52595($context, $indent, $context->find('pregnancy_year_select'));
                $buffer .= $indent . '										</select>';
                $buffer .= "\n";
                $buffer .= $indent . '									</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07133e26ace5a3cc218b977d9bc8c78f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header id="biography" class="heading-box">
					<h1>Over Jezelf</h1>
				</header>
				<div class="biography-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<textarea class="height-250" name="biography" cols="60" rows="10" placeholder="Schrijf hier iets over jezelf.">{{biography}}</textarea>
								</div>
							</div>
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
                $buffer .= $indent . '				<header id="biography" class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Over Jezelf</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="biography-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="data-column">';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="data-row">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="column">';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '									<textarea class="height-250" name="biography" cols="60" rows="10" placeholder="Schrijf hier iets over jezelf.">';
                $value = $context->find('biography');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
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

    private function sectionE6fa3381e02ad564d08ccaa6a6af04d4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header class="heading-box">
					<h1>Nieuwsbrief instellingen</h1>
				</header>
				<div class="news-data">
					<div class="check-wrap">
						<input type="checkbox" name="newsletter_subscription" {{#newsletter}}checked="checked"{{/newsletter}}>
						<label for="newsletter">Ja ik wil mij graag inschrijven voor de Mamaplaats nieuwsbrief<br />
                            <p class="subscribe-newsletter-subtitle">Ontvang wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen</p>
						</label>
					</div>
					<input type="hidden" name="update_page" value="">
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Nieuwsbrief instellingen</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="news-data">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="check-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '						<input type="checkbox" name="newsletter_subscription" ';
                // 'newsletter' section
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $context->find('newsletter'));
                $buffer .= '>';
                $buffer .= "\n";
                $buffer .= $indent . '						<label for="newsletter">Ja ik wil mij graag inschrijven voor de Mamaplaats nieuwsbrief<br />';
                $buffer .= "\n";
                $buffer .= $indent . '                            <p class="subscribe-newsletter-subtitle">Ontvang wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen</p>';
                $buffer .= "\n";
                $buffer .= $indent . '						</label>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<input type="hidden" name="update_page" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3965d2097cf499c5c369f9daeeb96800(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '<span>{{sub_title}}</span>';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= '<span>';
                $value = $context->find('sub_title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c9b3d4b5783c82356d449ae7f07d24d(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<li>
							<input class="default" id="c{{id}}" name="interests[]" type="checkbox" value="{{id}}" {{#selected}}checked{{/selected}}>
							<label for="c{{id}}" class="{{image}}">
								<span>{{title}} {{#sub_title}}<span>{{sub_title}}</span>{{/sub_title}}</span>
							</label>
						</li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<li>';
                $buffer .= "\n";
                $buffer .= $indent . '							<input class="default" id="c';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" name="interests[]" type="checkbox" value="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('selected'));
                $buffer .= '>';
                $buffer .= "\n";
                $buffer .= $indent . '							<label for="c';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<span>';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'sub_title' section
                $buffer .= $this->section3965d2097cf499c5c369f9daeeb96800($context, $indent, $context->find('sub_title'));
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '							</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAea089a4bc2bc4cda072ce9d5c5fb5f4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<header class="heading-box">
					<h1>Interesses opgeven</h1>
				</header>
				<div class="interests-box">
					<p>Vul hier je interesses in zodat wij jou zo gericht mogelijk kunnen informeren over dingen die leuk zijn voor jou en je kind!</p>
					<ul>
						{{#interests}}
						<li>
							<input class="default" id="c{{id}}" name="interests[]" type="checkbox" value="{{id}}" {{#selected}}checked{{/selected}}>
							<label for="c{{id}}" class="{{image}}">
								<span>{{title}} {{#sub_title}}<span>{{sub_title}}</span>{{/sub_title}}</span>
							</label>
						</li>
						{{/interests}}
					</ul>
					<input type="hidden" name="update_page" value="">
				</div>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<header class="heading-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<h1>Interesses opgeven</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '				</header>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="interests-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<p>Vul hier je interesses in zodat wij jou zo gericht mogelijk kunnen informeren over dingen die leuk zijn voor jou en je kind!</p>';
                $buffer .= "\n";
                $buffer .= $indent . '					<ul>';
                $buffer .= "\n";
                // 'interests' section
                $buffer .= $this->section8c9b3d4b5783c82356d449ae7f07d24d($context, $indent, $context->find('interests'));
                $buffer .= $indent . '					</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '					<input type="hidden" name="update_page" value="">';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07975600b5d0a7a6f25b4025211929ca(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				{{#personal_info}}
				<header class="heading-box">
					<h1>Persoonsgegevens</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<label for="f1">Email</label>
									<input type="email" name="email" id="f1 email" placeholder="Emailadres" value="{{email}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f2">Voornaam</label>
									<input type="text" name="first_name" id="f2 first_name" placeholder="Voornaam" value="{{first_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f3">Tussenvoegsel</label>
									<input type="text" name="middle_name" id="f3 middle_name" placeholder="Tussenvoegsel" value="{{middle_name}}">
								</div>
							</div>
							</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Achternaam</label>
									<input type="text" name="last_name" id="f4 last_name" placeholder="Achternaam" value="{{last_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Gebruikersnaam</label>
									<input type="text" name="display_name" id="f4 display_name" placeholder="Gebruikersnaam" value="{{display_name}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w4">
								<label for="f5">Geboortedatum</label>
								<div class="wrap">
									<div class="column w5">
										<div class="form-item">
											<input type="text" id="f5" name="birthdate[day]" value="{{birthdate.day}}" placeholder="DD">
										</div>
									</div>
									<div class="column w5">
										<div class="form-item">
											<input type="text" name="birthdate[month]" value="{{birthdate.month}}" placeholder="MM">
										</div>
									</div>
									<div class="column w5">
										<div class="select-wrap">
											<select name="birthdate[year]">
												{{#birthdate_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												{{/birthdate_year_select}}
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="column w2">
								<label for="s2">Geslacht</label>
								<div class="select-wrap">
									<select name="gender" id="s2">
										{{#genders}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
										{{/genders}}
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="file-column">
						<div class="photo">
							<img src="{{avatar}}?time={{time}}" width="230" height="150" alt="{{full_name}}">
						</div>
						<input type="file" name="avatar" title="upload profiel foto" onchange="uploadAvatar(this)">
					</div>
				</div>
				{{/personal_info}}

				{{#change_password}}
				<header class="heading-box">
					<h1>Wachtwoord wijzigen</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" id="f6" name="old_password" value="" placeholder="Huidig wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="new_password" value="" placeholder="Nieuw wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="confirm_password" value="" placeholder="Herhaal wachtwoord">
								</div>
							</div>
					   </div>
					</div>
				</div>
				{{/change_password}}

				{{#family_situation}}
				<header class="heading-box">
					<h1>Gezinssituatie</h1>
				</header>
				<div class="family-data">
					<div class="data-row">
						<div class="column w4">
							<label for="has_children">Heb je kinderen?</label>
							<div class="select-wrap small">
								<select id="has_children" name="has_children" class="span12" onchange="toggle_display(\'children\', this); toggle_display(\'add_child\', this)">
									{{#children_select}}
									<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/children_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="children_list data-row" data-bind="foreach: children">
						<div class="column w5">
							<label for="f7">Voornaam van je kind</label>
							<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">
							<div class="form-item">
								<input id="f7" type="text" placeholder="Voornaam kind" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}">
							</div>
						</div>
						<div class="column w3">
							<label for="f8">Geboortedatum</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input id="f8" type="text" placeholder="DD" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="form-item">
										<input type="text" placeholder="MM" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="select-wrap" >
										<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">
											{{#birthdate_year_select}}
												<option value="{{value}}">{{text}}</option>
											{{/birthdate_year_select}}
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="column w6">
							<label for="s5">Geslacht</label>
							<div class="select-wrap">
								<select id="s5" data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">
									<option value="1">jongen</option>
									<option value="2">meisje</option>
								</select>
							</div>
						</div>
						<div class="column w1">
							<a data-bind="click: $root.removeChild" href="#children">X</a>
						</div>
					</div>
					<div id="add_child" class="children_list data-row">
						<a data-bind="click: addChild" class="btn-link">kind toevoegen</a>
					</div>
					<div class="btn-box"></div>
				</div>

				<div class="family-data">
					<div class="data-row">
						<div class="column w2">
							<label for="is_pregnant">Ben je zwanger</label>
							<div class="select-wrap">
								<select id="is_pregnant" name="is_pregnant">
									{{#pregnant_select}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/pregnant_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="data-row">
						<div id="pregnancy_date" class="column w3" >
							<label for="f6">Uitgerekend op</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input type="text" id="f6" name="pregnancy_due_date[day]" value="{{pregnancy_due_date.day}}" placeholder="DD">
									</div>
								</div>
								<div class="column w4">
									<div class="form-item">
										<input type="text" name="pregnancy_due_date[month]" value="{{pregnancy_due_date.month}}" placeholder="MM">
									</div>
								</div>
								<div class="column w4">
									<div class="select-wrap">
										<select name="pregnancy_due_date[year]">
											{{#pregnancy_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
											{{/pregnancy_year_select}}
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{/family_situation}}

				{{#own_detail}}
				<header id="biography" class="heading-box">
					<h1>Over Jezelf</h1>
				</header>
				<div class="biography-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<textarea class="height-250" name="biography" cols="60" rows="10" placeholder="Schrijf hier iets over jezelf.">{{biography}}</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{/own_detail}}

				{{#newsletter_settings}}
				<header class="heading-box">
					<h1>Nieuwsbrief instellingen</h1>
				</header>
				<div class="news-data">
					<div class="check-wrap">
						<input type="checkbox" name="newsletter_subscription" {{#newsletter}}checked="checked"{{/newsletter}}>
						<label for="newsletter">Ja ik wil mij graag inschrijven voor de Mamaplaats nieuwsbrief<br />
                            <p class="subscribe-newsletter-subtitle">Ontvang wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen</p>
						</label>
					</div>
					<input type="hidden" name="update_page" value="">
				</div>
				{{/newsletter_settings}}

				{{#interest}}
				<header class="heading-box">
					<h1>Interesses opgeven</h1>
				</header>
				<div class="interests-box">
					<p>Vul hier je interesses in zodat wij jou zo gericht mogelijk kunnen informeren over dingen die leuk zijn voor jou en je kind!</p>
					<ul>
						{{#interests}}
						<li>
							<input class="default" id="c{{id}}" name="interests[]" type="checkbox" value="{{id}}" {{#selected}}checked{{/selected}}>
							<label for="c{{id}}" class="{{image}}">
								<span>{{title}} {{#sub_title}}<span>{{sub_title}}</span>{{/sub_title}}</span>
							</label>
						</li>
						{{/interests}}
					</ul>
					<input type="hidden" name="update_page" value="">
				</div>
				{{/interest}}

				<div class="btn-box">
					<button class="btn large">Profiel bijwerken</button>
				</div>

			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'personal_info' section
                $buffer .= $this->section85e3a83fed38fdf7fc808bc7c983c1c3($context, $indent, $context->find('personal_info'));
                $buffer .= "\n";
                // 'change_password' section
                $buffer .= $this->section69feef66affa081e8ade6fe99d1c93b9($context, $indent, $context->find('change_password'));
                $buffer .= "\n";
                // 'family_situation' section
                $buffer .= $this->section595a3c1c58fe602dd3e7299ae58c4c4f($context, $indent, $context->find('family_situation'));
                $buffer .= "\n";
                // 'own_detail' section
                $buffer .= $this->section07133e26ace5a3cc218b977d9bc8c78f($context, $indent, $context->find('own_detail'));
                $buffer .= "\n";
                // 'newsletter_settings' section
                $buffer .= $this->sectionE6fa3381e02ad564d08ccaa6a6af04d4($context, $indent, $context->find('newsletter_settings'));
                $buffer .= "\n";
                // 'interest' section
                $buffer .= $this->sectionAea089a4bc2bc4cda072ce9d5c5fb5f4($context, $indent, $context->find('interest'));
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="btn-box">';
                $buffer .= "\n";
                $buffer .= $indent . '					<button class="btn large">Profiel bijwerken</button>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18824fa570c10a8f8e6591fd40caba5a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="data-form">
	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			{{#has_messages}}
			<div class="alert alert-{{type}}">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				{{#messages}}{{message}}<br />{{/messages}}
			</div>
			{{/has_messages}}

			{{#page}}
				{{#personal_info}}
				<header class="heading-box">
					<h1>Persoonsgegevens</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<label for="f1">Email</label>
									<input type="email" name="email" id="f1 email" placeholder="Emailadres" value="{{email}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f2">Voornaam</label>
									<input type="text" name="first_name" id="f2 first_name" placeholder="Voornaam" value="{{first_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f3">Tussenvoegsel</label>
									<input type="text" name="middle_name" id="f3 middle_name" placeholder="Tussenvoegsel" value="{{middle_name}}">
								</div>
							</div>
							</div>
						<div class="data-row">
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Achternaam</label>
									<input type="text" name="last_name" id="f4 last_name" placeholder="Achternaam" value="{{last_name}}">
								</div>
							</div>
							<div class="column w2">
								<div class="form-item">
									<label for="f4">Gebruikersnaam</label>
									<input type="text" name="display_name" id="f4 display_name" placeholder="Gebruikersnaam" value="{{display_name}}">
								</div>
							</div>
						</div>
						<div class="data-row">
							<div class="column w4">
								<label for="f5">Geboortedatum</label>
								<div class="wrap">
									<div class="column w5">
										<div class="form-item">
											<input type="text" id="f5" name="birthdate[day]" value="{{birthdate.day}}" placeholder="DD">
										</div>
									</div>
									<div class="column w5">
										<div class="form-item">
											<input type="text" name="birthdate[month]" value="{{birthdate.month}}" placeholder="MM">
										</div>
									</div>
									<div class="column w5">
										<div class="select-wrap">
											<select name="birthdate[year]">
												{{#birthdate_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												{{/birthdate_year_select}}
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="column w2">
								<label for="s2">Geslacht</label>
								<div class="select-wrap">
									<select name="gender" id="s2">
										{{#genders}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
										{{/genders}}
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="file-column">
						<div class="photo">
							<img src="{{avatar}}?time={{time}}" width="230" height="150" alt="{{full_name}}">
						</div>
						<input type="file" name="avatar" title="upload profiel foto" onchange="uploadAvatar(this)">
					</div>
				</div>
				{{/personal_info}}

				{{#change_password}}
				<header class="heading-box">
					<h1>Wachtwoord wijzigen</h1>
				</header>
				<div class="personal-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" id="f6" name="old_password" value="" placeholder="Huidig wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="new_password" value="" placeholder="Nieuw wachtwoord">
								</div>
							</div>
					   </div>
					   <div class="data-row">
							<div class="column">
								<div class="form-item">
									<input type="password" name="confirm_password" value="" placeholder="Herhaal wachtwoord">
								</div>
							</div>
					   </div>
					</div>
				</div>
				{{/change_password}}

				{{#family_situation}}
				<header class="heading-box">
					<h1>Gezinssituatie</h1>
				</header>
				<div class="family-data">
					<div class="data-row">
						<div class="column w4">
							<label for="has_children">Heb je kinderen?</label>
							<div class="select-wrap small">
								<select id="has_children" name="has_children" class="span12" onchange="toggle_display(\'children\', this); toggle_display(\'add_child\', this)">
									{{#children_select}}
									<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/children_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="children_list data-row" data-bind="foreach: children">
						<div class="column w5">
							<label for="f7">Voornaam van je kind</label>
							<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">
							<div class="form-item">
								<input id="f7" type="text" placeholder="Voornaam kind" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}">
							</div>
						</div>
						<div class="column w3">
							<label for="f8">Geboortedatum</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input id="f8" type="text" placeholder="DD" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="form-item">
										<input type="text" placeholder="MM" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}">
									</div>
								</div>
								<div class="column w4" >
									<div class="select-wrap" >
										<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">
											{{#birthdate_year_select}}
												<option value="{{value}}">{{text}}</option>
											{{/birthdate_year_select}}
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="column w6">
							<label for="s5">Geslacht</label>
							<div class="select-wrap">
								<select id="s5" data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">
									<option value="1">jongen</option>
									<option value="2">meisje</option>
								</select>
							</div>
						</div>
						<div class="column w1">
							<a data-bind="click: $root.removeChild" href="#children">X</a>
						</div>
					</div>
					<div id="add_child" class="children_list data-row">
						<a data-bind="click: addChild" class="btn-link">kind toevoegen</a>
					</div>
					<div class="btn-box"></div>
				</div>

				<div class="family-data">
					<div class="data-row">
						<div class="column w2">
							<label for="is_pregnant">Ben je zwanger</label>
							<div class="select-wrap">
								<select id="is_pregnant" name="is_pregnant">
									{{#pregnant_select}}
										<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/pregnant_select}}
								</select>
							</div>
						</div>
					</div>
					<div class="data-row">
						<div id="pregnancy_date" class="column w3" >
							<label for="f6">Uitgerekend op</label>
							<div class="wrap">
								<div class="column w4">
									<div class="form-item">
										<input type="text" id="f6" name="pregnancy_due_date[day]" value="{{pregnancy_due_date.day}}" placeholder="DD">
									</div>
								</div>
								<div class="column w4">
									<div class="form-item">
										<input type="text" name="pregnancy_due_date[month]" value="{{pregnancy_due_date.month}}" placeholder="MM">
									</div>
								</div>
								<div class="column w4">
									<div class="select-wrap">
										<select name="pregnancy_due_date[year]">
											{{#pregnancy_year_select}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
											{{/pregnancy_year_select}}
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{/family_situation}}

				{{#own_detail}}
				<header id="biography" class="heading-box">
					<h1>Over Jezelf</h1>
				</header>
				<div class="biography-data">
					<div class="data-column">
						<div class="data-row">
							<div class="column">
								<div class="form-item">
									<textarea class="height-250" name="biography" cols="60" rows="10" placeholder="Schrijf hier iets over jezelf.">{{biography}}</textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{/own_detail}}

				{{#newsletter_settings}}
				<header class="heading-box">
					<h1>Nieuwsbrief instellingen</h1>
				</header>
				<div class="news-data">
					<div class="check-wrap">
						<input type="checkbox" name="newsletter_subscription" {{#newsletter}}checked="checked"{{/newsletter}}>
						<label for="newsletter">Ja ik wil mij graag inschrijven voor de Mamaplaats nieuwsbrief<br />
                            <p class="subscribe-newsletter-subtitle">Ontvang wekelijks nieuwsbrieven van Mamaplaats met actuele onderwerpen op het gebied van moeders en kinderen</p>
						</label>
					</div>
					<input type="hidden" name="update_page" value="">
				</div>
				{{/newsletter_settings}}

				{{#interest}}
				<header class="heading-box">
					<h1>Interesses opgeven</h1>
				</header>
				<div class="interests-box">
					<p>Vul hier je interesses in zodat wij jou zo gericht mogelijk kunnen informeren over dingen die leuk zijn voor jou en je kind!</p>
					<ul>
						{{#interests}}
						<li>
							<input class="default" id="c{{id}}" name="interests[]" type="checkbox" value="{{id}}" {{#selected}}checked{{/selected}}>
							<label for="c{{id}}" class="{{image}}">
								<span>{{title}} {{#sub_title}}<span>{{sub_title}}</span>{{/sub_title}}</span>
							</label>
						</li>
						{{/interests}}
					</ul>
					<input type="hidden" name="update_page" value="">
				</div>
				{{/interest}}

				<div class="btn-box">
					<button class="btn large">Profiel bijwerken</button>
				</div>

			{{/page}}
		</fieldset>
	</form>
</div>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<div class="data-form">';
                $buffer .= "\n";
                $buffer .= $indent . '	<form action="" method="post" enctype="multipart/form-data">';
                $buffer .= "\n";
                $buffer .= $indent . '		<fieldset>';
                $buffer .= "\n";
                // 'has_messages' section
                $buffer .= $this->sectionF9d539c31c46d9923111eaa6987761b8($context, $indent, $context->find('has_messages'));
                $buffer .= "\n";
                // 'page' section
                $buffer .= $this->section07975600b5d0a7a6f25b4025211929ca($context, $indent, $context->find('page'));
                $buffer .= $indent . '		</fieldset>';
                $buffer .= "\n";
                $buffer .= $indent . '	</form>';
                $buffer .= "\n";
                $buffer .= $indent . '</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}