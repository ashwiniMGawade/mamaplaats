<?php

class __Mustache_7b9a5b59484a71ad36190e73790838ea extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Mamaplaats_ros_atf_leaderboard_billboard -->';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="header-leaderboard big-banner">';
        $buffer .= "\n";
        // 'header_advertisement.show_ad' section
        $buffer .= $this->section46c629c83a97ec32e174ed307875a9b2($context, $indent, $context->findDot('header_advertisement.show_ad'));
        // 'isSslOn' inverted section
        $value = $context->find('isSslOn');
        if (empty($value)) {
            
            $buffer .= $indent . '	    <script type="text/javascript">';
            $buffer .= "\n";
            $buffer .= $indent . '	        <!--';
            $buffer .= "\n";
            $buffer .= $indent . '	        document.write(\'<scr\'+\'ipt language="javascript1.1" src="http://ad.yieldpartners.com/symphony/impression?utid=000000048000100020001&click=[click]&ord=[timestamp]"></scri\'+\'pt>\');';
            $buffer .= "\n";
            $buffer .= $indent . '	        //-->';
            $buffer .= "\n";
            $buffer .= $indent . '	    </script>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '	<script>(function(d) {var e = d.createElement(\'script\');e.src = d.location.protocol + \'//app.yieldify.com/yieldify/code.js?yieldify_id=3496&loca=\'+window.location.href;e.async = true;d.getElementsByTagName("head")[0].appendChild(e);}(document));</script>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<nav id="mobile-nav">';
        $buffer .= "\n";
        $buffer .= $indent . '	<a href="#" class="opener">menu</a>';
        $buffer .= "\n";
        $buffer .= $indent . '	<ul>';
        $buffer .= "\n";
        // 'main_menu' section
        $buffer .= $this->section7514c9fd659d254be9142ea32e6aa8c4($context, $indent, $context->find('main_menu'));
        $buffer .= $indent . '	</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '</nav>';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('widget_apply_adfabs_facebook')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= $indent . '<div id="page">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '		<header id="header">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="main-panel">';
        $buffer .= "\n";
        $buffer .= $indent . '					<strong class="logo"><a href="/">MamaPlaats</a></strong>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="quick-access">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="new-blog">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <a href="/user/blog/index"><i class="glyphicon glyphicon-pencil"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="search item">';
        $buffer .= "\n";
        $buffer .= $indent . '							<a href="#" class="opener">Search LInk</a>';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="slide">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('global_seach_box')) {
            $buffer .= $partial->renderInternal($context, '                                ');
        }
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="web item">';
        $buffer .= "\n";
        // 'logged_in' inverted section
        $value = $context->find('logged_in');
        if (empty($value)) {
            
            $buffer .= $indent . '							<a href="/user/login" class="linker">Web Link</a>';
            $buffer .= "\n";
        }
        // 'logged_in' section
        $buffer .= $this->section5876526ce93160d241d293a2b90171a1($context, $indent, $context->find('logged_in'));
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="user item">';
        $buffer .= "\n";
        // 'logged_in' section
        $buffer .= $this->section969afa0836a1337f5615bbad193b96c7($context, $indent, $context->find('logged_in'));
        // 'logged_in' inverted section
        $value = $context->find('logged_in');
        if (empty($value)) {
            
            $buffer .= $indent . '							<a href="#" class="redirect-to-login opener">User Link</a>';
            $buffer .= "\n";
            $buffer .= $indent . '							<div class="slide hide">';
            $buffer .= "\n";
            $buffer .= $indent . '								<form class="login-form validate-form" action="/user/login" method="POST">';
            $buffer .= "\n";
            $buffer .= $indent . '									<div class="field-row">';
            $buffer .= "\n";
            $buffer .= $indent . '										<label for="em1">Email adres</label>';
            $buffer .= "\n";
            $buffer .= $indent . '										<input name="username" id="em1" type="email" class="required" tabindex="1">';
            $buffer .= "\n";
            $buffer .= $indent . '									</div>';
            $buffer .= "\n";
            $buffer .= $indent . '									<div class="field-row">';
            $buffer .= "\n";
            $buffer .= $indent . '										<a href="/user/forgot-password" class="forgot-link">wachtwoord vergeten?</a>';
            $buffer .= "\n";
            $buffer .= $indent . '										<label for="pas1">Wachtwoord</label>';
            $buffer .= "\n";
            $buffer .= $indent . '										<input name="password" id="pas1" type="password" class="required" tabindex="2">';
            $buffer .= "\n";
            $buffer .= $indent . '										<input name="remember_me" type="hidden" value="1">';
            $buffer .= "\n";
            $buffer .= $indent . '									</div>';
            $buffer .= "\n";
            $buffer .= $indent . '									<div class="btn-row">';
            $buffer .= "\n";
            $buffer .= $indent . '										<button class="btn" tabindex="3">login</button>';
            $buffer .= "\n";
            $buffer .= $indent . '										<a href="/guest/register" class="registr-link">Account aanmaken!</a>';
            $buffer .= "\n";
            $buffer .= $indent . '									</div>';
            $buffer .= "\n";
            $buffer .= $indent . '								</form>';
            $buffer .= "\n";
            $buffer .= $indent . '							</div>';
            $buffer .= "\n";
        }
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<nav role="navigation">';
        $buffer .= "\n";
        $buffer .= $indent . '						<ul class="main-nav">';
        $buffer .= "\n";
        // 'main_menu' section
        $buffer .= $this->sectionE0c11deb4d218694987e6a9bc00a935e($context, $indent, $context->find('main_menu'));
        $buffer .= $indent . '						</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '					</nav>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row">';
        $buffer .= "\n";
        $buffer .= "\n";
        // 'main_menu' section
        $buffer .= $this->section516e3a1330de2bf6412af4e20f22d1e1($context, $indent, $context->find('main_menu'));
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="sub-panel" id="main-sub-menu">';
        $buffer .= "\n";
        // 'main_menu' section
        $buffer .= $this->section64ba7ecb1cb20b57431e152f4a2b196a($context, $indent, $context->find('main_menu'));
        if ($partial = $this->mustache->loadPartial('global_seach_box')) {
            $buffer .= $partial->renderInternal($context, '                     ');
        }
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</header> <!-- end #header -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="container">';
        $buffer .= "\n";
        // 'isSslOn' inverted section
        $value = $context->find('isSslOn');
        if (empty($value)) {
            
            $buffer .= $indent . '		<div id="widget_adfab_footer" class="align-center big-banner">';
            $buffer .= "\n";
            // 'footer_advertisement.show_ad' section
            $buffer .= $this->section2a6209e49f71ec64d8ccc83a5eab2326($context, $indent, $context->findDot('footer_advertisement.show_ad'));
            $buffer .= $indent . '		</div>';
            $buffer .= "\n";
            if ($partial = $this->mustache->loadPartial('widget_adfab_footer')) {
                $buffer .= $partial->renderInternal($context, '	');
            }
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section46c629c83a97ec32e174ed307875a9b2(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{{header_advertisement.text}}}
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		';
                $value = $context->findDot('header_advertisement.text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e6948a9d304550ce54dcfc88a0f7423(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<li><a {{#active}}class="active"{{/active}} href="{{path}}">{{text}}</a></li>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<li><a ';
                // 'active' section
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $context->find('active'));
                $buffer .= ' href="';
                $value = $context->find('path');
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
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA99cdff5935c9860d4ffa0741a9fda34(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<ul>
						{{#sub_menu}}
							<li><a {{#active}}class="active"{{/active}} href="{{path}}">{{text}}</a></li>
						{{/sub_menu}}
					</ul>
				';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<ul>';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->section7e6948a9d304550ce54dcfc88a0f7423($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '					</ul>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7514c9fd659d254be9142ea32e6aa8c4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<li {{#active}}class="active"{{/active}}>
				<a href="{{path}}">{{text}}</a>
				{{#active}}
					<ul>
						{{#sub_menu}}
							<li><a {{#active}}class="active"{{/active}} href="{{path}}">{{text}}</a></li>
						{{/sub_menu}}
					</ul>
				{{/active}}
			</li>
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<li ';
                // 'active' section
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $context->find('active'));
                $buffer .= '>';
                $buffer .= "\n";
                $buffer .= $indent . '				<a href="';
                $value = $context->find('path');
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
                $buffer .= '</a>';
                $buffer .= "\n";
                // 'active' section
                $buffer .= $this->sectionA99cdff5935c9860d4ffa0741a9fda34($context, $indent, $context->find('active'));
                $buffer .= $indent . '			</li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4ea8ce0372871a23d49b6bee00104e2(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
									<article class="list-item">
										<div class="photo">
											<a href="{{path}}" class="photo-wrap"><b><img src="{{image_path}}" width="100" height="100" alt="image description"></b></a>
										</div>
										<div class="description">
											<strong class="name"><a href="{{path}}">{{content}}</a></strong>
											<span class="date">{{date}} geleden</span>
										</div>
									</article>
									';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '									<article class="list-item">';
                $buffer .= "\n";
                $buffer .= $indent . '										<div class="photo">';
                $buffer .= "\n";
                $buffer .= $indent . '											<a href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="photo-wrap"><b><img src="';
                $value = $context->find('image_path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="100" height="100" alt="image description"></b></a>';
                $buffer .= "\n";
                $buffer .= $indent . '										</div>';
                $buffer .= "\n";
                $buffer .= $indent . '										<div class="description">';
                $buffer .= "\n";
                $buffer .= $indent . '											<strong class="name"><a href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></strong>';
                $buffer .= "\n";
                $buffer .= $indent . '											<span class="date">';
                $value = $context->find('date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' geleden</span>';
                $buffer .= "\n";
                $buffer .= $indent . '										</div>';
                $buffer .= "\n";
                $buffer .= $indent . '									</article>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5876526ce93160d241d293a2b90171a1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<a href="#" class="opener">Web LInk</a>
							<div class="slide">
								<strong class="title">Meldingen:</strong>
								<div class="list">
									{{#timeline}}
									<article class="list-item">
										<div class="photo">
											<a href="{{path}}" class="photo-wrap"><b><img src="{{image_path}}" width="100" height="100" alt="image description"></b></a>
										</div>
										<div class="description">
											<strong class="name"><a href="{{path}}">{{content}}</a></strong>
											<span class="date">{{date}} geleden</span>
										</div>
									</article>
									{{/timeline}}
								</div>
								<div class="link-wrap">
									<a href="/user/profile" class="link-all">All meldingen bekijken</a>
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
                $buffer .= $indent . '							<a href="#" class="opener">Web LInk</a>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="slide">';
                $buffer .= "\n";
                $buffer .= $indent . '								<strong class="title">Meldingen:</strong>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="list">';
                $buffer .= "\n";
                // 'timeline' section
                $buffer .= $this->sectionC4ea8ce0372871a23d49b6bee00104e2($context, $indent, $context->find('timeline'));
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '								<div class="link-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '									<a href="/user/profile" class="link-all">All meldingen bekijken</a>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section969afa0836a1337f5615bbad193b96c7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<a href="#" class="opener">User Link</a>
							<div class="slide navigation">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="/user/profile"><i class="glyphicon glyphicon-user"></i> Naar Profiel</a></li>
									<li><a href="/user/blog/index"><i class="glyphicon glyphicon-pencil"></i> Schrijf nieuwe blog</a></li>
									<li><a href="/conversation/list"><i class="glyphicon glyphicon-inbox"></i> Berichten Inbox</a></li>
									<li><hr></li>
									<li><a href="/user/logout"><i class="glyphicon glyphicon-off"></i> Uitloggen</a></li>
								</ul>
							</div>
							<!--<a href="/user/profile" class="linker">User Link</a>-->
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<a href="#" class="opener">User Link</a>';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="slide navigation">';
                $buffer .= "\n";
                $buffer .= $indent . '								<ul class="nav nav-pills nav-stacked">';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="/user/profile"><i class="glyphicon glyphicon-user"></i> Naar Profiel</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="/user/blog/index"><i class="glyphicon glyphicon-pencil"></i> Schrijf nieuwe blog</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="/conversation/list"><i class="glyphicon glyphicon-inbox"></i> Berichten Inbox</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><hr></li>';
                $buffer .= "\n";
                $buffer .= $indent . '									<li><a href="/user/logout"><i class="glyphicon glyphicon-off"></i> Uitloggen</a></li>';
                $buffer .= "\n";
                $buffer .= $indent . '								</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '							<!--<a href="/user/profile" class="linker">User Link</a>-->';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ff98c1deac347d8c4a99550583d4940(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = ' active';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= ' active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE0c11deb4d218694987e6a9bc00a935e(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<li id="{{text}}" class="common-nav{{#active}} active{{/active}}"><a href="{{path}}">{{text}}</a></li>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<li id="';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="common-nav';
                // 'active' section
                $buffer .= $this->section3ff98c1deac347d8c4a99550583d4940($context, $indent, $context->find('active'));
                $buffer .= '"><a href="';
                $value = $context->find('path');
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
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section382d3e29b2fe31317e3e9b16077e907c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <li {{#active}}class="active"{{/active}}><a href="{{path}}" onmouseover="_gaq.push([\'_trackEvent\', \'submenu\', \'hover\', \'user hover submenu\'])">{{text}}</a></li>
                            ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                <li ';
                // 'active' section
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $context->find('active'));
                $buffer .= '><a href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" onmouseover="_gaq.push([\'_trackEvent\', \'submenu\', \'hover\', \'user hover submenu\'])">';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section516e3a1330de2bf6412af4e20f22d1e1(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="sub-panel subnav-over common-nav" id="{{text}}">
                        <ul class="sub-nav tar">
                            {{#sub_menu}}
                                <li {{#active}}class="active"{{/active}}><a href="{{path}}" onmouseover="_gaq.push([\'_trackEvent\', \'submenu\', \'hover\', \'user hover submenu\'])">{{text}}</a></li>
                            {{/sub_menu}}
                        </ul>
                        {{> global_seach_box}}
                    </div>
                ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                    <div class="sub-panel subnav-over common-nav" id="';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <ul class="sub-nav tar">';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->section382d3e29b2fe31317e3e9b16077e907c($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '                        </ul>';
                $buffer .= "\n";
                if ($partial = $this->mustache->loadPartial('global_seach_box')) {
                    $buffer .= $partial->renderInternal($context, '                        ');
                }
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcdb631a231fd8611a20c97673fd588a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<li {{#active}}class="active"{{/active}}><a href="{{path}}">{{text}}</a></li>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<li ';
                // 'active' section
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $context->find('active'));
                $buffer .= '><a href="';
                $value = $context->find('path');
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
                $buffer .= '</a></li>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b8b33dff537ac08ad2a80e61a816fbd(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<nav>
						<ul class="sub-nav tar">
							{{#sub_menu}}
							<li {{#active}}class="active"{{/active}}><a href="{{path}}">{{text}}</a></li>
							{{/sub_menu}}
						</ul>
					</nav>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<nav>';
                $buffer .= "\n";
                $buffer .= $indent . '						<ul class="sub-nav tar">';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->sectionFcdb631a231fd8611a20c97673fd588a($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '						</ul>';
                $buffer .= "\n";
                $buffer .= $indent . '					</nav>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64ba7ecb1cb20b57431e152f4a2b196a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '	{{#active}}
					<nav>
						<ul class="sub-nav tar">
							{{#sub_menu}}
							<li {{#active}}class="active"{{/active}}><a href="{{path}}">{{text}}</a></li>
							{{/sub_menu}}
						</ul>
					</nav>
					{{/active}}';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                // 'active' section
                $buffer .= $this->section0b8b33dff537ac08ad2a80e61a816fbd($context, $indent, $context->find('active'));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a6209e49f71ec64d8ccc83a5eab2326(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				{{{footer_advertisement.text}}}
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				';
                $value = $context->findDot('footer_advertisement.text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}