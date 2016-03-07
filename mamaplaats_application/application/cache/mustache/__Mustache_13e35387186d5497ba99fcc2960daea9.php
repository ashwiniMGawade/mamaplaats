<?php

class __Mustache_13e35387186d5497ba99fcc2960daea9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>';
        $buffer .= "\n";
        $buffer .= $indent . '<html lang="nl">';
        $buffer .= "\n";
        $buffer .= $indent . '<head>';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta charset="UTF-8">';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<title>';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' - Mamaplaats</title>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<meta name="description" content="';
        $value = $context->find('description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '	<meta name="google-site-verification" content="gRSSrnhSZ29fXY7xSg9LSJXwH_sVDnxXzEdXstXqZv0" />';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('social_meta')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= "\n";
        $buffer .= $indent . '	<link rel="shortcut icon" href="/favicon.ico?v=2" />';
        $buffer .= "\n";
        $buffer .= $indent . '	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic%7CQuattrocento:400,700%7CPT+Serif:400,400italic,700italic,700" rel="stylesheet">';
        $buffer .= "\n";
        $buffer .= "\n";
        // 'options.css_files' section
        $buffer .= $this->section3be8c885521afbd396ba11cbbac773cd($context, $indent, $context->findDot('options.css_files'));
        $buffer .= "\n";
        // 'options.less_files' section
        $buffer .= $this->sectionF1a6ce5bd4241f34524f063b48589d00($context, $indent, $context->findDot('options.less_files'));
        $buffer .= "\n";
        // 'options.load_less' section
        $buffer .= $this->sectionF3eb3eec35cf9c9ff6bed11476b5553d($context, $indent, $context->findDot('options.load_less'));
        $buffer .= "\n";
        // 'show_advertisement_popup' section
        $buffer .= $this->sectionEceb9f6dd486472bae54ed5004669406($context, $indent, $context->find('show_advertisement_popup'));
        $buffer .= "\n";
        // 'options.js_files' section
        $buffer .= $this->section530c20814ec03afce041b87206749780($context, $indent, $context->findDot('options.js_files'));
        $buffer .= "\n";
        $buffer .= $indent . '	<!--[if lt IE 9]><script src="/assets/js/ie.js"></script><![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '    <script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '        var _gaq = _gaq || [];';
        $buffer .= "\n";
        $buffer .= $indent . '        _gaq.push([\'_setAccount\', \'UA-26166105-1\']);';
        $buffer .= "\n";
        $buffer .= $indent . '        _gaq.push([\'_trackPageview\']);';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '        (function() {';
        $buffer .= "\n";
        $buffer .= $indent . '            var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;';
        $buffer .= "\n";
        $buffer .= $indent . '            ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';';
        $buffer .= "\n";
        $buffer .= $indent . '            var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);';
        $buffer .= "\n";
        $buffer .= $indent . '        })();';
        $buffer .= "\n";
        $buffer .= $indent . '    </script>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '    <script>';
        $buffer .= "\n";
        $buffer .= $indent . '        var _prum = [[\'id\', \'5628a1f1abe53d7457487e76\'],';
        $buffer .= "\n";
        $buffer .= $indent . '                     [\'mark\', \'firstbyte\', (new Date()).getTime()]];';
        $buffer .= "\n";
        $buffer .= $indent . '        (function() {';
        $buffer .= "\n";
        $buffer .= $indent . '            var s = document.getElementsByTagName(\'script\')[0]';
        $buffer .= "\n";
        $buffer .= $indent . '              , p = document.createElement(\'script\');';
        $buffer .= "\n";
        $buffer .= $indent . '            p.async = \'async\';';
        $buffer .= "\n";
        $buffer .= $indent . '            p.src = \'//rum-static.pingdom.net/prum.min.js\';';
        $buffer .= "\n";
        $buffer .= $indent . '            s.parentNode.insertBefore(p, s);';
        $buffer .= "\n";
        $buffer .= $indent . '        })();';
        $buffer .= "\n";
        $buffer .= $indent . '    </script>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '</head>';
        $buffer .= "\n";
        $buffer .= $indent . '<body>';
        $buffer .= "\n";
        $buffer .= $indent . '	<!--[if lt IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="browser-unsupported">';
        $buffer .= "\n";
        $buffer .= $indent . '		<strong>Je browser wordt helaas niet ondersteund</strong>';
        $buffer .= "\n";
        $buffer .= $indent . '		We raden je aan om';
        $buffer .= "\n";
        $buffer .= $indent . '		<a rel="nofollow" target="_blank" href=\'http://chrome.com/\'>Chrome</a>,';
        $buffer .= "\n";
        $buffer .= $indent . '		<a rel="nofollow" target="_blank" href=\'http://getfirefox.com\'>FireFox</a>, of';
        $buffer .= "\n";
        $buffer .= $indent . '		<a rel="nofollow" target="_blank" href=\'http://windows.microsoft.com/nl-nl/internet-explorer/download-ie\'>Internet Explorer 8 of hoger</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		te installeren voor een betere ervaring.';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="page-container">';
        $buffer .= "\n";
        $value = $context->find('header');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $indent . $value;
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('content')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $value = $context->find('footer');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $indent . $value;
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="cookie-wall navbar-fixed-bottom">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="cookie-wall-container">';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '                <div class="col-md-9">';
        $buffer .= "\n";
        $buffer .= $indent . '                    Deze website maakt gebruik van cookies. <a href="http://yfm.nl/cookiebeleid-privacystatement" target="_blank">Klik hier</a> voor ons Privacy- en cookiebeleid. Door hiernaast op akkoord te klikken of door gebruik te blijven maken van deze website geeft u aan akkoord te zijn met het gebruik van cookies.';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                <div class="col-md-3">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="javascript:void(0);" class="btn" id="accept_cookie">Ja, ik accepteer de cookies</a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div id="fb-root"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<script>';
        $buffer .= "\n";
        $buffer .= $indent . '		window.fbAsyncInit = function() {';
        $buffer .= "\n";
        $buffer .= $indent . '			FB.init({';
        $buffer .= "\n";
        $buffer .= $indent . '				appId      : \'602658293139325\',';
        $buffer .= "\n";
        $buffer .= $indent . '				status     : true,';
        $buffer .= "\n";
        $buffer .= $indent . '				xfbml      : true';
        $buffer .= "\n";
        $buffer .= $indent . '			});';
        $buffer .= "\n";
        $buffer .= $indent . '		};';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		(function(d, s, id){';
        $buffer .= "\n";
        $buffer .= $indent . '			var js, fjs = d.getElementsByTagName(s)[0];';
        $buffer .= "\n";
        $buffer .= $indent . '			if (d.getElementById(id)) {return;}';
        $buffer .= "\n";
        $buffer .= $indent . '			js = d.createElement(s); js.id = id;';
        $buffer .= "\n";
        $buffer .= $indent . '			js.src = "//connect.facebook.net/en_US/all.js";';
        $buffer .= "\n";
        $buffer .= $indent . '			fjs.parentNode.insertBefore(js, fjs);';
        $buffer .= "\n";
        $buffer .= $indent . '		}(document, \'script\', \'facebook-jssdk\'));';
        $buffer .= "\n";
        $buffer .= $indent . '	</script>';
        $buffer .= "\n";
        $buffer .= $indent . '</body>';
        $buffer .= "\n";
        $buffer .= $indent . '</html>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section3be8c885521afbd396ba11cbbac773cd(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<link href="{{.}}?v={{version}}" rel="stylesheet">
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<link href="';
                $value = $context->last();
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?v=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" rel="stylesheet">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1a6ce5bd4241f34524f063b48589d00(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<link href="{{.}}?v={{version}}" rel="stylesheet/less">
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<link href="';
                $value = $context->last();
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?v=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" rel="stylesheet/less">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3eb3eec35cf9c9ff6bed11476b5553d(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<script src="/assets/js/less-1.5.0.min.js?v={{version}}"></script>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<script src="/assets/js/less-1.5.0.min.js?v=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEceb9f6dd486472bae54ed5004669406(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <script type="text/javascript">
            var ad_popup_status = \'{{status}}\';
            var ad_popup_url = \'{{url}}\';
            var ad_popup_image = \'{{image}}\';
        </script>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '        <script type="text/javascript">';
                $buffer .= "\n";
                $buffer .= $indent . '            var ad_popup_status = \'';
                $value = $context->find('status');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\';';
                $buffer .= "\n";
                $buffer .= $indent . '            var ad_popup_url = \'';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\';';
                $buffer .= "\n";
                $buffer .= $indent . '            var ad_popup_image = \'';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\';';
                $buffer .= "\n";
                $buffer .= $indent . '        </script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section530c20814ec03afce041b87206749780(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<script src="{{.}}?v={{version}}&x=v3"></script>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<script src="';
                $value = $context->last();
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?v=';
                $value = $context->find('version');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&x=v3"></script>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}