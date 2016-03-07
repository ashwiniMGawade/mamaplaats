<?php

class __Mustache_a804b24f5cbf7fb9f139a73b7fa03383 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('email_header')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= "\n";
        // 'content' section
        $buffer .= $this->sectionF11b98cba1a3671b07c7dce991103435($context, $indent, $context->find('content'));
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('email_footer')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function sectionF11b98cba1a3671b07c7dce991103435(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div style="color: #555555;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">Beste {{first_name}},<br>
		<br>
		Je hebt een account aangemaakt op Mamaplaats.<br />
		<br />
		Als je dit account wilt activeren klik dan op onderstaande knop:<br /><br />
		<a href="{{activation_url}}" style="font-size: 13px;line-height: 20px;font-family: Times,serif;text-transform: uppercase;	border: 0px none;padding: 10px 16px;border-radius: 0px;cursor: pointer;background: none repeat scroll 0% 0% #B78645;color: #FFF;text-decoration: none;white-space: normal;">
			Activeer mijn account nu
		</a><br />
		<br />
		Als je deze email niet hebt aangevraagd dan kun je deze gewoon negeren. Er zal geen verdere actie worden ondernomen.
		<br /><br />
		Met vriendelijke groet,<br />
		Mamaplaats,<br />
		<a href="http://www.mamaplaats.nl">www.mamaplaats.nl</a>
	</div>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<div style="color: #555555;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">Beste ';
                $value = $context->find('first_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ',<br>';
                $buffer .= "\n";
                $buffer .= $indent . '		<br>';
                $buffer .= "\n";
                $buffer .= $indent . '		Je hebt een account aangemaakt op Mamaplaats.<br />';
                $buffer .= "\n";
                $buffer .= $indent . '		<br />';
                $buffer .= "\n";
                $buffer .= $indent . '		Als je dit account wilt activeren klik dan op onderstaande knop:<br /><br />';
                $buffer .= "\n";
                $buffer .= $indent . '		<a href="';
                $value = $context->find('activation_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="font-size: 13px;line-height: 20px;font-family: Times,serif;text-transform: uppercase;	border: 0px none;padding: 10px 16px;border-radius: 0px;cursor: pointer;background: none repeat scroll 0% 0% #B78645;color: #FFF;text-decoration: none;white-space: normal;">';
                $buffer .= "\n";
                $buffer .= $indent . '			Activeer mijn account nu';
                $buffer .= "\n";
                $buffer .= $indent . '		</a><br />';
                $buffer .= "\n";
                $buffer .= $indent . '		<br />';
                $buffer .= "\n";
                $buffer .= $indent . '		Als je deze email niet hebt aangevraagd dan kun je deze gewoon negeren. Er zal geen verdere actie worden ondernomen.';
                $buffer .= "\n";
                $buffer .= $indent . '		<br /><br />';
                $buffer .= "\n";
                $buffer .= $indent . '		Met vriendelijke groet,<br />';
                $buffer .= "\n";
                $buffer .= $indent . '		Mamaplaats,<br />';
                $buffer .= "\n";
                $buffer .= $indent . '		<a href="http://www.mamaplaats.nl">www.mamaplaats.nl</a>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}