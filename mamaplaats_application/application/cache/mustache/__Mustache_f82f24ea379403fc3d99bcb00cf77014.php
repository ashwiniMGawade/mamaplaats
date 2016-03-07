<?php

class __Mustache_f82f24ea379403fc3d99bcb00cf77014 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Uitgelichte Blokken Bewerken</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/featured-sections">Terug</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
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
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Sectie</h2>';
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
        $buffer .= $indent . '			<div class="box-content">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="title">Titel</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="title" class="span12 focused" id="title" type="text" value="';
        $value = $context->findDot('section.title');
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
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="tag">Tag</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="tag" class="span12 focused" id="tag" type="text" value="';
        $value = $context->findDot('section.tag');
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
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="template">Template</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="template" name="template">';
        $buffer .= "\n";
        // 'templates' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('templates'));
        $buffer .= $indent . '							</select>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="description">Omschrijving</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<textarea name="description" class="input-block-level" id="description" rows="8">';
        $value = $context->findDot('section.description');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label">Blokken</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<table class="table table-striped table-bordered">';
        $buffer .= "\n";
        $buffer .= $indent . '							<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '								<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>Voorbeeld</th>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>URL</th>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>Blok Nummer</th>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>Toon Mobiel?</th>';
        $buffer .= "\n";
        $buffer .= $indent . '									<th>Verwijderen</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tbody>';
        $buffer .= "\n";
        // 'blocks' section
        $buffer .= $this->section2e5a8126b35b909cc0926e182d23878c($context, $indent, $context->find('blocks'));
        $buffer .= $indent . '							</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '						</table>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label">Nieuw Blok Toevoegen</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<table class="table table-bordered">';
        $buffer .= "\n";
        $buffer .= $indent . '							<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>URL</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Upload</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Blok Nummer</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Toon Mobiel?</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '								<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td>';
        $buffer .= "\n";
        $buffer .= $indent . '										<input name="blocks[new][id]" type="hidden">';
        $buffer .= "\n";
        $buffer .= $indent . '										<input class="span12" name="blocks[new][title]" type="text">';
        $buffer .= "\n";
        $buffer .= $indent . '									</td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="span12" name="blocks[new][url]" type="url"></td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="fileupload" type="file" name="image"></td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="span12" name="blocks[new][order_number]" type="number" min="1" value="1"></td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td>';
        $buffer .= "\n";
        $buffer .= $indent . '										<input name="blocks[new][show_mobile]" type="hidden" value="0">';
        $buffer .= "\n";
        $buffer .= $indent . '										<input name="blocks[new][show_mobile]" type="checkbox" value="1">';
        $buffer .= "\n";
        $buffer .= $indent . '									</td>';
        $buffer .= "\n";
        $buffer .= $indent . '								</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '						</table>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
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

    private function sectionFfd03186996640c052d5549c964026e0(Mustache_Context $context, $indent, $value) {
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
                $buffer .= $indent . '								<option value="';
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

    private function section2e5a8126b35b909cc0926e182d23878c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<tr>
									<td><img src="{{image}}" style="max-width: 120px; max-height: 120px;"></td>
									<td>
										<input name="blocks[{{id}}][id]" type="hidden" value="{{id}}">
										<input name="blocks[{{id}}][image]" type="hidden" value="{{image}}">
										<input name="blocks[{{id}}][title]" type="text" value="{{title}}" required>
									</td>
									<td><input name="blocks[{{id}}][url]" type="url" value="{{url}}" required></td>
									<td><input name="blocks[{{id}}][order_number]" class="span12" type="number" min="1" value="{{order_number}}" required></td>
									<td>
										<input name="blocks[{{id}}][show_mobile]" type="hidden" value="0">
										<input name="blocks[{{id}}][show_mobile]" type="checkbox" value="1" {{#show_mobile}}checked{{/show_mobile}}>
									</td>
									<td><input name="blocks[{{id}}][delete]" type="checkbox" value="1"></td>
								</tr>
								';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '								<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td><img src="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="max-width: 120px; max-height: 120px;"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td>';
                $buffer .= "\n";
                $buffer .= $indent . '										<input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][id]" type="hidden" value="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][image]" type="hidden" value="';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][title]" type="text" value="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>';
                $buffer .= "\n";
                $buffer .= $indent . '									</td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td><input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][url]" type="url" value="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required></td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td><input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][order_number]" class="span12" type="number" min="1" value="';
                $value = $context->find('order_number');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required></td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td>';
                $buffer .= "\n";
                $buffer .= $indent . '										<input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][show_mobile]" type="hidden" value="0">';
                $buffer .= "\n";
                $buffer .= $indent . '										<input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][show_mobile]" type="checkbox" value="1" ';
                // 'show_mobile' section
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $context->find('show_mobile'));
                $buffer .= '>';
                $buffer .= "\n";
                $buffer .= $indent . '									</td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<td><input name="blocks[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][delete]" type="checkbox" value="1"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}