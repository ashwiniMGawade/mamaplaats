<?php

class __Mustache_f2c3e8b1bb458deef6474b3015afc2e1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Categorie Bewerken</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/coupon/categories">Terug</a>';
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
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>De Categorie</h2>';
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
        $buffer .= $indent . '					<div class="control-group span3">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="name">Naam</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="name" class="span12 focused" id="name" type="text" value="';
        $value = $context->findDot('category.name');
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
        $buffer .= $indent . '					<div class="control-group span3">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="slug">Url Slug</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="slug" class="span12 focused" id="slug" type="text" value="';
        $value = $context->findDot('category.slug');
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
        $buffer .= $indent . '					<div class="control-group span3">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="is_popular">Is Populair</label>';
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
        $buffer .= $indent . '					<div class="control-group span3">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="icon">Icoon <i class="coupon-icon-';
        $value = $context->findDot('category.icon');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></i></label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="icon" name="icon">';
        $buffer .= "\n";
        // 'icons' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('icons'));
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
        $value = $context->findDot('category.description');
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
}