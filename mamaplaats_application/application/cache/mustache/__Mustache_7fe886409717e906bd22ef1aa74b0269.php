<?php

class __Mustache_7fe886409717e906bd22ef1aa74b0269 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Voeg Advertentie</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
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
        $buffer .= $indent . '    <div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h2><i class="halflings-icon edit"></i><span class="break"></span>Advertentie</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '                <div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        // 'advertisement' section
        $buffer .= $this->section93fa974ab63f4d57e1bdb9a557ba892c($context, $indent, $context->find('advertisement'));
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
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

    private function sectionE35580ceff3f17e0bdb290bb41f918e1(Mustache_Context $context, $indent, $value) {
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
                $buffer .= $indent . '                                        <option value="';
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

    private function section93fa974ab63f4d57e1bdb9a557ba892c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="box-content">
                    <div class="row-fluid">
                        <div class="control-group span4">
                            <label class="control-label" for="URL">Slug</label>
                            <div class="controls">
                                <select class="span12" id="slug" name="slug">
									{{#slugs}}
                                        <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
									{{/slugs}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="control-group span4">
                            <label class="control-label" for="URL">Name</label>
                            <div class="controls">
                                <input name="name" class="span12 focused" type="text" value="{{name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="control-group span4">
                            <label class="control-label" for="URL">HTML Code</label>
                            <div class="controls">
                                <textarea name="description" class="input-block-level" id="description" rows="8">{{description}}</textarea>
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
                $buffer .= $indent . '                <div class="box-content">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="control-label" for="URL">Slug</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <select class="span12" id="slug" name="slug">';
                $buffer .= "\n";
                // 'slugs' section
                $buffer .= $this->sectionE35580ceff3f17e0bdb290bb41f918e1($context, $indent, $context->find('slugs'));
                $buffer .= $indent . '                                </select>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="control-label" for="URL">Name</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input name="name" class="span12 focused" type="text" value="';
                $value = $context->find('name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="control-label" for="URL">HTML Code</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <textarea name="description" class="input-block-level" id="description" rows="8">';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="control-label" for="Toestand">Toestand</label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="checkbox inline">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input type="radio" name="status" value="On" ';
                // 'is_on' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('is_on'));
                $buffer .= '>Aan';
                $buffer .= "\n";
                $buffer .= $indent . '                            </label>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <label class="checkbox inline">';
                $buffer .= "\n";
                $buffer .= $indent . '                                <input type="radio" name="status" value="Off" ';
                // 'is_off' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('is_off'));
                $buffer .= '>Uit';
                $buffer .= "\n";
                $buffer .= $indent . '                            </label>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="span12"></div>';
                $buffer .= "\n";
                $buffer .= $indent . '                        <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                            <input class="btn btn-primary" type="submit" value="opslaan">';
                $buffer .= "\n";
                $buffer .= $indent . '                        </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}