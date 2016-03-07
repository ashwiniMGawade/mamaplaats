<?php

class __Mustache_6cd8ca31b1205f5bfdf72a06d5a04f79 extends Mustache_Template
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
        $buffer .= $indent . '	<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>De Winkel</h2>';
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
        $buffer .= $indent . '						<label class="control-label" for="name">Naam van de Winkel</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="name" class="span12 focused" id="name" type="text" value="';
        $value = $context->findDot('shop.name');
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
        $buffer .= $indent . '						<label class="control-label" for="slug">Welke url slug?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="slug" class="span12 focused" id="slug" type="text" value="';
        $value = $context->findDot('shop.slug');
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
        $buffer .= $indent . '						<label class="control-label" for="is_popular">Is een populaire winkel?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="is_popular" name="is_popular">';
        $buffer .= "\n";
        // 'popular' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('popular'));
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
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="title">Titel Boven Omschijving</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="title" class="span12 focused" id="title" type="text" value="';
        $value = $context->findDot('shop.title');
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
        $buffer .= $indent . '						<label class="control-label" for="url">Wat is de url naar de winkel?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="url" class="span12 focused" id="url" type="text" value="';
        $value = $context->findDot('shop.url');
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
        $buffer .= $indent . '						<label class="control-label" for="coupon_category_id">Welke categorie?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="coupon_category_id" name="coupon_category_id">';
        $buffer .= "\n";
        // 'categories' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('categories'));
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
        $buffer .= $indent . '							<textarea name="description" class="input-block-level tinymce" id="description" rows="8">';
        $value = $context->findDot('shop.description');
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
        $buffer .= $indent . '					<div class="control-group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="about">Over de Winkel</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<textarea name="about" class="input-block-level tinymce" id="about" rows="8">';
        $value = $context->findDot('shop.about');
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
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="external_id">Extern ID</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="external_id" class="span12 focused" id="external_id" type="text" value="';
        $value = $context->findDot('shop.external_id');
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
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<img class="img-polaroid" width="180" src="';
        $value = $context->findDot('shop.image');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" alt="Voorbeeld Foto"><br><br>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="control-group">';
        $buffer .= "\n";
        $buffer .= $indent . '							<label class="control-label" for="about">Logo Winkel</label>';
        $buffer .= "\n";
        $buffer .= $indent . '							<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div class="uploader">';
        $buffer .= "\n";
        $buffer .= $indent . '									<input name="image" id="image" type="file">';
        $buffer .= "\n";
        $buffer .= $indent . '								</div>';
        $buffer .= "\n";
        $buffer .= $indent . '							</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<br>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="Opslaan">';
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
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2><i class="icon-tags edit"></i><span class="break"></span>Aanbiedingen</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-content">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '				<table class="table table-striped table-bordered bootstrap-datatable datatable">';
        $buffer .= "\n";
        $buffer .= $indent . '					<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Omschrijving</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Start Datum</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Eind Datum</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Type</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Kliks</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>Acties</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        // 'offers' section
        $buffer .= $this->sectionA0812f9676c8baad0ac97388f50435e0($context, $indent, $context->find('offers'));
        $buffer .= $indent . '					</tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '				</table>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

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

    private function sectionA0812f9676c8baad0ac97388f50435e0(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
					<tr>
						<td><a href="/admin/coupon/offer/{{id}}" class="boldtext">{{title}}</a></td>
						<td>{{description}}</td>
						<td>{{start_date}}</td>
						<td>{{end_date}}</td>
						<td>{{type}}</td>
						<td>{{click_outs}}</td>
						<td>
							<a class="btn" href="/admin/offer/offer/{{id}}">
								<i class="halflings-icon edit"></i>
							</a>
						</td>
					</tr>
					';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '					<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td><a href="/admin/coupon/offer/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="boldtext">';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $value = $context->find('start_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $value = $context->find('end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $value = $context->find('click_outs');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						<td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<a class="btn" href="/admin/offer/offer/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								<i class="halflings-icon edit"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '							</a>';
                $buffer .= "\n";
                $buffer .= $indent . '						</td>';
                $buffer .= "\n";
                $buffer .= $indent . '					</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}