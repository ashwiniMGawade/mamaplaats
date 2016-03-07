<?php

class __Mustache_5784f452fe91a56dfbf3b55ef05fc426 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Aanbieding Bewerken</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/coupon/offers">Terug</a>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/coupon/shop/';
        $value = $context->findDot('offer.coupon_shop_id');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">Naar Winkel</a>';
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
        $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>De Aanbieding</h2>';
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
        $value = $context->findDot('offer.title');
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
        $buffer .= $indent . '						<label class="control-label" for="coupon_shop_id">Welke winkel?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="coupon_shop_id" name="coupon_shop_id">';
        $buffer .= "\n";
        // 'shops' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('shops'));
        $buffer .= $indent . '							</select>';
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
        $value = $context->findDot('offer.url');
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
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="type">Welke type aanbieding?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<select class="span12" id="type" name="type">';
        $buffer .= "\n";
        // 'types' section
        $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('types'));
        $buffer .= $indent . '							</select>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="coupon_code">Wat is de coupon code? (Alleen voor coupons)</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="coupon_code" class="span12 focused" id="coupon_code" type="text" value="';
        $value = $context->findDot('offer.coupon_code');
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
        $buffer .= $indent . '					<div class="control-group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label" for="description">Omschrijving</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<textarea name="description" class="input-block-level" id="description" rows="8">';
        $value = $context->findDot('offer.description');
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
        $buffer .= $indent . '						<label class="control-label" for="start_date">Start Datum?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="start_date" class="span12 focused datepicker" id="start_date" type="text" value="';
        $value = $context->findDot('offer.start_date');
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
        $buffer .= $indent . '						<label class="control-label" for="end_date">Eind Datum?</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '							<input name="end_date" class="span12 focused datepicker" id="end_date" type="text" value="';
        $value = $context->findDot('offer.end_date');
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