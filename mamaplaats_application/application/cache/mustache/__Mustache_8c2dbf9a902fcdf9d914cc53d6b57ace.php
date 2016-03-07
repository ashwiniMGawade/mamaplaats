<?php

class __Mustache_8c2dbf9a902fcdf9d914cc53d6b57ace extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div id="profile">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-3">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="profile-side-holder">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="side-menu-holder">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" class="opener">Side menu</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="side-menu">';
        $buffer .= "\n";
        // 'user' section
        $buffer .= $this->section564efabb389835fc979e7bf97bdb23f0($context, $indent, $context->find('user'));
        $buffer .= $indent . '                        <a class="btn" href="/user/blog/index" role="button">Blog bericht schrijven</a>';
        $buffer .= "\n";
        // 'menu' section
        $buffer .= $this->sectionBe40f25803d9351fdb03a224eb232833($context, $indent, $context->find('menu'));
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-sm-9">';
        $buffer .= "\n";
        $buffer .= $indent . '			';
        $value = $context->find('content');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        // 'show_profile_progress' section
        $buffer .= $this->section8a6f4a928c9570c17ad1d702ea1a63b5($context, $indent, $context->find('show_profile_progress'));

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section564efabb389835fc979e7bf97bdb23f0(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="avatar-holder clearfix">
                            <div class="img-holder pull-left">
                                <img src="{{avatar}}" alt="{{full_name}}" width="70" height="70" class="img-circle">
                            </div>
                            <div class="text-holder">
                                <div class="holder">
									<span class="name">{{full_name}}</span>
									<span class="info">Mama blogger</span>
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
                $buffer .= $indent . '                        <div class="avatar-holder clearfix">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="img-holder pull-left">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <img src="';
                $value = $context->find('avatar');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" width="70" height="70" class="img-circle">';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="text-holder">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <div class="holder">';
                $buffer .= "\n";
                $buffer .= $indent . '									<span class="name">';
                $value = $context->find('full_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '									<span class="info">Mama blogger</span>';
                $buffer .= "\n";
                $buffer .= $indent . '								</div>';
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

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section363580844e21fe66a1fc824ecb555fc3(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <span class="amount">({{count}})</span>
                                    ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                    <span class="amount">(';
                $value = $context->find('count');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ')</span>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f7db4e257014ebc4dc42fba72ec5ba5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{path}}" class="list-group-item {{#active}}active{{/active}}">
                                    {{text}}
                                    {{#count}}
                                    <span class="amount">({{count}})</span>
                                    {{/count}}
                                    </a>
								';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                                    <a href="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="list-group-item ';
                // 'active' section
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $context->find('active'));
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                                    ';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= "\n";
                // 'count' section
                $buffer .= $this->section363580844e21fe66a1fc824ecb555fc3($context, $indent, $context->find('count'));
                $buffer .= $indent . '                                    </a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe40f25803d9351fdb03a224eb232833(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <nav class="ad-menu">
                            <strong class="title">{{text}}</strong>
                            <div class="list-group">
								{{#sub_menu}}
                                    <a href="{{path}}" class="list-group-item {{#active}}active{{/active}}">
                                    {{text}}
                                    {{#count}}
                                    <span class="amount">({{count}})</span>
                                    {{/count}}
                                    </a>
								{{/sub_menu}}
                            </div>
                        </nav>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                        <nav class="ad-menu">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <strong class="title">';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</strong>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="list-group">';
                $buffer .= "\n";
                // 'sub_menu' section
                $buffer .= $this->section8f7db4e257014ebc4dc42fba72ec5ba5($context, $indent, $context->find('sub_menu'));
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </nav>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a6f4a928c9570c17ad1d702ea1a63b5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog profile-popup-container">
			<div class="modal-content profile-popup">
				<div class="modal-body">
                    <button type="button" class="close" id="close-modal-popup"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h2>TIP: Wil je meedoen aan testpanels en winacties? Zorg dan dat je profiel compleet is.</h2>
					<span class="text">Profiel status {{{profile_progress_percentage}}}</span>
					<div class="progress meter">
                        <div class="progress-bar progress-bar-success range" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{{profile_progress_percentage}}}">
                            <span class="text">{{{profile_progress_percentage}}}</span>
                        </div>
					</div>
					<div class="complete-profile-btn">
                        <a href="/user/profile" class="black-btn-large">Profiel aanvullen</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			var profile_progress_percentage = "{{{profile_progress_percentage}}}";
			var progress_value = profile_progress_percentage.replace("%",\'\');
			if(progress_value < 100)
			{
				$(\'#myModal\').modal(\'show\');
			}
		})
	</script>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<!-- Modal -->';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="modal-dialog profile-popup-container">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="modal-content profile-popup">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="modal-body">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <button type="button" class="close" id="close-modal-popup"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
                $buffer .= "\n";
                $buffer .= $indent . '					<h2>TIP: Wil je meedoen aan testpanels en winacties? Zorg dan dat je profiel compleet is.</h2>';
                $buffer .= "\n";
                $buffer .= $indent . '					<span class="text">Profiel status ';
                $value = $context->find('profile_progress_percentage');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="progress meter">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="progress-bar progress-bar-success range" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: ';
                $value = $context->find('profile_progress_percentage');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <span class="text">';
                $value = $context->find('profile_progress_percentage');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</span>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="complete-profile-btn">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <a href="/user/profile" class="black-btn-large">Profiel aanvullen</a>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	<script type="text/javascript">';
                $buffer .= "\n";
                $buffer .= $indent . '		$(document).ready(function () {';
                $buffer .= "\n";
                $buffer .= $indent . '			var profile_progress_percentage = "';
                $value = $context->find('profile_progress_percentage');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '";';
                $buffer .= "\n";
                $buffer .= $indent . '			var progress_value = profile_progress_percentage.replace("%",\'\');';
                $buffer .= "\n";
                $buffer .= $indent . '			if(progress_value < 100)';
                $buffer .= "\n";
                $buffer .= $indent . '			{';
                $buffer .= "\n";
                $buffer .= $indent . '				$(\'#myModal\').modal(\'show\');';
                $buffer .= "\n";
                $buffer .= $indent . '			}';
                $buffer .= "\n";
                $buffer .= $indent . '		})';
                $buffer .= "\n";
                $buffer .= $indent . '	</script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}