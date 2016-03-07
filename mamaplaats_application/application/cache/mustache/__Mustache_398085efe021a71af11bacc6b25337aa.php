<?php

class __Mustache_398085efe021a71af11bacc6b25337aa extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Bijwerken Advertentie Popup</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        if ($partial = $this->mustache->loadPartial('messages')) {
            $buffer .= $partial->renderInternal($context, '	');
        }
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<form action="" method="post" enctype="multipart/form-data">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Advertentie</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '					<a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        // 'advertisement' section
        $buffer .= $this->sectionCe0e6ed4f60e79271d6ad880675a57cd($context, $indent, $context->find('advertisement'));
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section6a60765d44db699c7efa9b7fface9f16(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<div class="control-group span6">
							<img src="{{display_image}}" alt="Advertentie Afbeelding">
						</div>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<div class="control-group span6">';
                $buffer .= "\n";
                $buffer .= $indent . '							<img src="';
                $value = $context->find('display_image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="Advertentie Afbeelding">';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
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

    private function sectionCe0e6ed4f60e79271d6ad880675a57cd(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="box-content">
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="Afbeelding">Afbeelding</label>
						<div class="controls">
							<input id="image-upload" class="file-ignore" type="file" name="image">
						</div>
					</div>
					{{#display_image}}
						<div class="control-group span6">
							<img src="{{display_image}}" alt="Advertentie Afbeelding">
						</div>
					{{/display_image}}
				</div>
				<div class="row-fluid">
					<div class="control-group span4">
						<label class="control-label" for="URL">URL</label>
						<div class="controls">
							<input name="url" class="span12 focused" id="url" type="text" value="{{url}}"><br />
							Voorbeeld: http://mamaplaats.nl
						</div>
					</div>
				</div>
                <div class="row-fluid">
                    <div class="control-group span4">
                        <label class="control-label" for="URL">Start Datum</label>
                        <div class="controls">
                            <input name="start_date" class="span12 focused datepicker" type="text" value="{{start_date}}">
                        </div>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="control-group span4">
                        <label class="control-label" for="URL">Eind Datum</label>
                        <div class="controls">
                            <input name="end_date" class="span12 focused datepicker" type="text" value="{{end_date}}">
                        </div>
                    </div>
                </div>
				<div class="row-fluid">
					<div class="control-group span4">
						<label class="control-label" for="Toestand">Toestand</label>
						<label class="checkbox inline">
							<input type="radio" name="status" value="On" {{#is_on}}checked{{/is_on}}>Aan
						</label>
						<label class="checkbox inline">
							<input type="radio" name="status" value="Off" {{#is_off}}checked{{/is_off}}>Uit
						</label>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12"></div>
					<div class="row-fluid">
						<input class="btn btn-primary" type="submit" value="opslaan">
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
                $buffer .= $indent . '			<div class="box-content">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span12">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="Afbeelding">Afbeelding</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input id="image-upload" class="file-ignore" type="file" name="image">';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                // 'display_image' section
                $buffer .= $this->section6a60765d44db699c7efa9b7fface9f16($context, $indent, $context->find('display_image'));
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="URL">URL</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="url" class="span12 focused" id="url" type="text" value="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><br />';
                $buffer .= "\n";
                $buffer .= $indent . '							Voorbeeld: http://mamaplaats.nl';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <label class="control-label" for="URL">Start Datum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <input name="start_date" class="span12 focused datepicker" type="text" value="';
                $value = $context->find('start_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <label class="control-label" for="URL">Eind Datum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <input name="end_date" class="span12 focused datepicker" type="text" value="';
                $value = $context->find('end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="Toestand">Toestand</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="checkbox inline">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input type="radio" name="status" value="On" ';
                // 'is_on' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('is_on'));
                $buffer .= '>Aan';
                $buffer .= "\n";
                $buffer .= $indent . '						</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="checkbox inline">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input type="radio" name="status" value="Off" ';
                // 'is_off' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('is_off'));
                $buffer .= '>Uit';
                $buffer .= "\n";
                $buffer .= $indent . '						</label>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="span12"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="opslaan">';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}