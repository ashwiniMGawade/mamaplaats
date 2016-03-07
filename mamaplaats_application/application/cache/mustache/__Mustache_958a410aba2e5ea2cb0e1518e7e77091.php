<?php

class __Mustache_958a410aba2e5ea2cb0e1518e7e77091 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Winkel Bewerken</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/coupon/shops">Terug</a>';
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
        $buffer .= $indent . '	<div id="media_list" class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Slides</h2>';
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
        $buffer .= $indent . '					<div class="control group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<table class="table table-striped table-bordered bootstrap-datatable datatable">';
        $buffer .= "\n";
        $buffer .= $indent . '							<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Voorbeeld</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>URL</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Volgorde</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Verwijderen</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tbody>';
        $buffer .= "\n";
        // 'slides' section
        $buffer .= $this->sectionA130dfa3e760583ccb8b42e47719886a($context, $indent, $context->find('slides'));
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
        $buffer .= $indent . '					<input style="float:left;" class="btn btn-primary" type="submit" value="opslaan">';
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
        $buffer .= $indent . '						<label class="control-label">Nieuwe Slide Toevoegen</label>';
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
        $buffer .= $indent . '								<th>Volgorde</th>';
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
        $buffer .= $indent . '										<input name="slides[new][id]" type="hidden">';
        $buffer .= "\n";
        $buffer .= $indent . '										<input class="span12" name="slides[new][title]" type="text">';
        $buffer .= "\n";
        $buffer .= $indent . '									</td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="span12" name="slides[new][url]" type="url"></td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="fileupload" type="file" name="image"></td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td><input class="span12" name="slides[new][order]" type="number" min="1" value="1"></td>';
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
        $buffer .= $indent . '						<input style="float:left;" class="btn btn-primary" type="submit" value="Slide toevoegen">';
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

    private function sectionA130dfa3e760583ccb8b42e47719886a(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<tr>
								<td><img src="/{{image}}" style="max-width: 120px; max-height: 120px;"></td>
								<td>
									<input name="slides[{{id}}][id]" type="hidden" value="{{id}}">
									<input name="slides[{{id}}][image]" type="hidden" value="{{image}}">
									<input name="slides[{{id}}][title]" class="input-append focused" type="text" value="{{title}}" required>
								</td>
								<td><input name="slides[{{id}}][url]" class="input-append focused" type="url" value="{{url}}" required></td>
								<td><input name="slides[{{id}}][order]" class="input-append focused" type="number" min="1" value="{{order}}" required></td>
								<td><a href="/admin/coupon/slider?delete_id={{id}}">Verwijderen</a></td>
							</tr>
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><img src="/';
                $value = $context->find('image');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="max-width: 120px; max-height: 120px;"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input name="slides[';
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
                $buffer .= $indent . '									<input name="slides[';
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
                $buffer .= $indent . '									<input name="slides[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][title]" class="input-append focused" type="text" value="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required>';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><input name="slides[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][url]" class="input-append focused" type="url" value="';
                $value = $context->find('url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><input name="slides[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][order]" class="input-append focused" type="number" min="1" value="';
                $value = $context->find('order');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" required></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a href="/admin/coupon/slider?delete_id=';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Verwijderen</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}