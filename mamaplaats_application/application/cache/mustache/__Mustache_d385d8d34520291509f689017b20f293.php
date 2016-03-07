<?php

class __Mustache_d385d8d34520291509f689017b20f293 extends Mustache_Template
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
        $buffer .= $indent . '			<h1>Welkom! je bent geregistreerd</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-set">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="col-3 activatation-block">';
        $buffer .= "\n";
        // 'user' section
        $buffer .= $this->sectionFcc6fc1f6bab50829ccab127734bb79e($context, $indent, $context->find('user'));
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</section>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
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
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '    $(document).ready(function () {';
        $buffer .= "\n";
        $buffer .= $indent . '        $(\'#skip\').click(function (e) {';
        $buffer .= "\n";
        $buffer .= $indent . '            e.preventDefault();';
        $buffer .= "\n";
        $buffer .= $indent . '            $(".validate-form").submit();';
        $buffer .= "\n";
        $buffer .= $indent . '        });';
        $buffer .= "\n";
        $buffer .= $indent . '    })';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionAa24ad5624faa1b647690622e251a3c2(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						        <img src="https://leads.affiliate4you.nl/?campagne={{advertiser_id}}&orderbedrag=1.00&ordernummer={{user_id}}&klantnaam={{email}}" width="1" height="1">
						    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						        <img src="https://leads.affiliate4you.nl/?campagne=';
                $value = $context->find('advertiser_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&orderbedrag=1.00&ordernummer=';
                $value = $context->find('user_id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&klantnaam=';
                $value = $context->find('email');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="1" height="1">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6cd6bc8edabda887f8f1ddbf99fb710(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<!-- Affiliate4You tracking code / http://www.affiliate4you.nl -->
						    {{#advertiser_id}}
						        <img src="https://leads.affiliate4you.nl/?campagne={{advertiser_id}}&orderbedrag=1.00&ordernummer={{user_id}}&klantnaam={{email}}" width="1" height="1">
						    {{/advertiser_id}}
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<!-- Affiliate4You tracking code / http://www.affiliate4you.nl -->';
                $buffer .= "\n";
                // 'advertiser_id' section
                $buffer .= $this->sectionAa24ad5624faa1b647690622e251a3c2($context, $indent, $context->find('advertiser_id'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fb700acab9a5a979fe1d0693e574324(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<div class="alert alert-success alert-margin">
                            Je account is geregistreerd.
							<br /><br />
							<ul class="unstyled">
								<li><a href="/user/blog/index?visit=first">Schrijf meteen je eigen blog</a></li>
								<li><a href="/win">Ga naar de winacties</a></li>
							</ul>
						</div>
						{{#show_pixel}}
						<!-- Affiliate4You tracking code / http://www.affiliate4you.nl -->
						    {{#advertiser_id}}
						        <img src="https://leads.affiliate4you.nl/?campagne={{advertiser_id}}&orderbedrag=1.00&ordernummer={{user_id}}&klantnaam={{email}}" width="1" height="1">
						    {{/advertiser_id}}
						{{/show_pixel}}
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<div class="alert alert-success alert-margin">';
                $buffer .= "\n";
                $buffer .= $indent . '                            Je account is geregistreerd.';
                $buffer .= "\n";
                $buffer .= $indent . '							<br /><br />';
                $buffer .= "\n";
                $buffer .= $indent . '							<ul class="unstyled">';
                $buffer .= "\n";
                $buffer .= $indent . '								<li><a href="/user/blog/index?visit=first">Schrijf meteen je eigen blog</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '								<li><a href="/win">Ga naar de winacties</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '							</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                // 'show_pixel' section
                $buffer .= $this->sectionB6cd6bc8edabda887f8f1ddbf99fb710($context, $indent, $context->find('show_pixel'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71560c7f4b2378c6806e244e02dc1f40(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
													<option value="{{text}}">{{text}}</option>
													';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '													<option value="';
                $value = $context->find('text');
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

    private function section24072935492afbf5d1085753ef15b87f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
														<option value="{{text}}">{{text}}</option>
														';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '														<option value="';
                $value = $context->find('text');
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

    private function section10a3bdb82b9ebeb58926d1c9f7fe3329(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        	<img src="{{src}}" alt="" style="border: none" border="0" width="1" height="1" />
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                        	<img src="';
                $value = $context->find('src');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" style="border: none" border="0" width="1" height="1" />';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfb0161f8f66f569f0011c72816c07e0(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						{{#tracking_pixel.urls}}
                        	<img src="{{src}}" alt="" style="border: none" border="0" width="1" height="1" />
						{{/tracking_pixel.urls}}
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'tracking_pixel.urls' section
                $buffer .= $this->section10a3bdb82b9ebeb58926d1c9f7fe3329($context, $indent, $context->findDot('tracking_pixel.urls'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcc6fc1f6bab50829ccab127734bb79e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<form class="validate-form" action="" method="post">
					{{#success}}
						<div class="alert alert-success alert-margin">
                            Je account is geregistreerd.
							<br /><br />
							<ul class="unstyled">
								<li><a href="/user/blog/index?visit=first">Schrijf meteen je eigen blog</a></li>
								<li><a href="/win">Ga naar de winacties</a></li>
							</ul>
						</div>
						{{#show_pixel}}
						<!-- Affiliate4You tracking code / http://www.affiliate4you.nl -->
						    {{#advertiser_id}}
						        <img src="https://leads.affiliate4you.nl/?campagne={{advertiser_id}}&orderbedrag=1.00&ordernummer={{user_id}}&klantnaam={{email}}" width="1" height="1">
						    {{/advertiser_id}}
						{{/show_pixel}}
					{{/success}}
					{{^success}}
						{{> messages}}
						<h3>Vul je gegevens in om je registratie compleet te maken!</h3>
						<div class="form-row">
							<div class="column w5">
								<div class="form-item">
									<label>Ben je zwanger?</label>
									<div class="select-wrap">
										<select id="is_pregnant">
											<option value="1" {{#is_pregnant}}selected{{/is_pregnant}}>Ja</option>
											<option value="0" {{^is_pregnant}}selected{{/is_pregnant}}>Nee</option>
										</select>
									</div>
								</div>
							</div>
							<div id="pregnancy_date" class="column w2">
								<label for="i1">Uitgerekend op</label>
								<div class="wrap">
									<div class="column w3">
										<div class="form-item">
											<input id="i1" type="text" name="pregnancy_due_date[day]" placeholder="DD" value="{{pregnancy_due_date.day}}">
										</div>
									</div>
									<div class="column w3">
										<div class="form-item">
											<input type="text" name="pregnancy_due_date[month]" placeholder="MM" value="{{pregnancy_due_date.month}}">
										</div>
									</div>
									<div class="column w3">
										<div class="form-item">
											<div class="select-wrap">
												<select name="pregnancy_due_date[year]">
													{{#pregnancy_years}}
													<option value="{{text}}">{{text}}</option>
													{{/pregnancy_years}}
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-sep"></div>
						<div class="form-row alt">
							<div class="column w4">
								<div class="form-item">
									<label>Heb je kinderen?</label>
									<div class="select-wrap">
										<select id="has_children">
											<option value="1" {{#has_children}}selected{{/has_children}}>ja</option>
											<option value="0" {{^has_children}}selected{{/has_children}}>nee</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="children_list" data-bind="foreach: children">
							<div class="form-row alt">
								<div class="column w6">
									<div class="form-item">
										<label for="i2">Voornaam</label>
										<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">
										<input id="i2" type="text" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}" placeholder="Voornaam">
									</div>
								</div>
								<div class="column w2">
									<label for="i3">Geboortedatum</label>
									<div class="wrap">
										<div class="column w3">
											<div class="form-item">
												<input id="i3" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}" type="text" placeholder="DD">
											</div>
										</div>
										<div class="column w3">
											<div class="form-item">
												<input type="text" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}" placeholder="MM">
											</div>
										</div>
										<div class="column w3">
											<div class="form-item">
												<div class="select-wrap">
													<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">
														{{#child_years}}
														<option value="{{text}}">{{text}}</option>
														{{/child_years}}
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="column w5">
									<div class="form-item">
										<label>Geslacht</label>
										<div class="select-wrap">
											<select data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">
												{{#child_genders}}
												<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
												{{/child_genders}}
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="children_list add-row">
							<a data-bind="click: addChild" href="#">kind toevoegen</a>
						</div>
						<div class="form-sep"></div>
						<div class="set">
							<button class="btn">registreer nu!</button>
                            <a href="#" id="skip">Skip</a>
						</div>
					{{/success}}
					{{#tracking_pixel.has_url}}
						{{#tracking_pixel.urls}}
                        	<img src="{{src}}" alt="" style="border: none" border="0" width="1" height="1" />
						{{/tracking_pixel.urls}}
					{{/tracking_pixel.has_url}}
				</form>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<form class="validate-form" action="" method="post">';
                $buffer .= "\n";
                // 'success' section
                $buffer .= $this->section7fb700acab9a5a979fe1d0693e574324($context, $indent, $context->find('success'));
                // 'success' inverted section
                $value = $context->find('success');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('messages')) {
                        $buffer .= $partial->renderInternal($context, '						');
                    }
                    $buffer .= $indent . '						<h3>Vul je gegevens in om je registratie compleet te maken!</h3>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="form-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="column w5">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<label>Ben je zwanger?</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<select id="is_pregnant">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<option value="1" ';
                    // 'is_pregnant' section
                    $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $context->find('is_pregnant'));
                    $buffer .= '>Ja</option>';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<option value="0" ';
                    // 'is_pregnant' inverted section
                    $value = $context->find('is_pregnant');
                    if (empty($value)) {
                        
                        $buffer .= 'selected';
                    }
                    $buffer .= '>Nee</option>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</select>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '							</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div id="pregnancy_date" class="column w2">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<label for="i1">Uitgerekend op</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<input id="i1" type="text" name="pregnancy_due_date[day]" placeholder="DD" value="';
                    $value = $context->findDot('pregnancy_due_date.day');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<input type="text" name="pregnancy_due_date[month]" placeholder="MM" value="';
                    $value = $context->findDot('pregnancy_due_date.month');
                    if (!is_string($value) && is_callable($value)) {
                        $value = $this->mustache
                            ->loadLambda((string) call_user_func($value))
                            ->renderInternal($context, $indent);
                    }
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '												<select name="pregnancy_due_date[year]">';
                    $buffer .= "\n";
                    // 'pregnancy_years' section
                    $buffer .= $this->section71560c7f4b2378c6806e244e02dc1f40($context, $indent, $context->find('pregnancy_years'));
                    $buffer .= $indent . '												</select>';
                    $buffer .= "\n";
                    $buffer .= $indent . '											</div>';
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
                    $buffer .= $indent . '						<div class="form-sep"></div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="form-row alt">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="column w4">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<label>Heb je kinderen?</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<select id="has_children">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<option value="1" ';
                    // 'has_children' section
                    $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $context->find('has_children'));
                    $buffer .= '>ja</option>';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<option value="0" ';
                    // 'has_children' inverted section
                    $value = $context->find('has_children');
                    if (empty($value)) {
                        
                        $buffer .= 'selected';
                    }
                    $buffer .= '>nee</option>';
                    $buffer .= "\n";
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
                    $buffer .= $indent . '						<div class="children_list" data-bind="foreach: children">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<div class="form-row alt">';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w6">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<label for="i2">Voornaam</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<input type="hidden" data-bind="value: id, attr:{name:\'children[\'+$index()+\'][id]\'}">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<input id="i2" type="text" data-bind="value: first_name, attr:{name:\'children[\'+$index()+\'][first_name]\'}" placeholder="Voornaam">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w2">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<label for="i3">Geboortedatum</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '												<input id="i3" data-bind="value: birthdate.day, attr:{name:\'children[\'+$index()+\'][birthdate][day]\'}" type="text" placeholder="DD">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '												<input type="text" data-bind="value: birthdate.month, attr:{name:\'children[\'+$index()+\'][birthdate][month]\'}" placeholder="MM">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="column w3">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '												<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '													<select data-bind="value: birthdate.year, attr:{name:\'children[\'+$index()+\'][birthdate][year]\'}">';
                    $buffer .= "\n";
                    // 'child_years' section
                    $buffer .= $this->section24072935492afbf5d1085753ef15b87f($context, $indent, $context->find('child_years'));
                    $buffer .= $indent . '													</select>';
                    $buffer .= "\n";
                    $buffer .= $indent . '												</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '											</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '									</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '								<div class="column w5">';
                    $buffer .= "\n";
                    $buffer .= $indent . '									<div class="form-item">';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<label>Geslacht</label>';
                    $buffer .= "\n";
                    $buffer .= $indent . '										<div class="select-wrap">';
                    $buffer .= "\n";
                    $buffer .= $indent . '											<select data-bind="value: gender, attr:{name:\'children[\'+$index()+\'][gender]\'}">';
                    $buffer .= "\n";
                    // 'child_genders' section
                    $buffer .= $this->sectionCf9be8a96289254d701b909c35fec2b4($context, $indent, $context->find('child_genders'));
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
                    $buffer .= $indent . '						<div class="children_list add-row">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<a data-bind="click: addChild" href="#">kind toevoegen</a>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="form-sep"></div>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						<div class="set">';
                    $buffer .= "\n";
                    $buffer .= $indent . '							<button class="btn">registreer nu!</button>';
                    $buffer .= "\n";
                    $buffer .= $indent . '                            <a href="#" id="skip">Skip</a>';
                    $buffer .= "\n";
                    $buffer .= $indent . '						</div>';
                    $buffer .= "\n";
                }
                // 'tracking_pixel.has_url' section
                $buffer .= $this->sectionFfb0161f8f66f569f0011c72816c07e0($context, $indent, $context->findDot('tracking_pixel.has_url'));
                $buffer .= $indent . '				</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}