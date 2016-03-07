<?php

class __Mustache_22d1d728d21e9e696ba9c38a502ba391 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Aanbiedingen</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="/admin/coupon/offer/import" class="btn right">Aanbiedingen Importeren</a>&nbsp;';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="/admin/coupon/offer" class="btn right">Aanbieding Toevoegen</a>';
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
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2><i class="icon-camera edit"></i><span class="break"></span>Aanbiedingen</h2>';
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
        $buffer .= $indent . '						<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Titel</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Omschrijving</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Start Datum</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Eind Datum</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Type</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Kliks</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Acties</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        // 'offers' section
        $buffer .= $this->sectionEbb208824f0c93a0b2bdd3b5e94eeefe($context, $indent, $context->find('offers'));
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

    private function sectionEbb208824f0c93a0b2bdd3b5e94eeefe(Mustache_Context $context, $indent, $value) {
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
								<a class="btn" href="/admin/coupon/offer/{{id}}">
									<i class="halflings-icon edit"></i>
								</a>
								<a class="btn" href="/admin/coupon/offers?delete_id={{id}}" onclick="return confirm(\'Weet je zeker dat je \\\'{{title}}\\\' wil verwijderen?\');">
									<i class="halflings-icon trash"></i>
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
                $buffer .= $indent . '						<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td><a href="/admin/coupon/offer/';
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
                $buffer .= $indent . '							<td>';
                $value = $context->find('description');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('start_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('click_outs');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<a class="btn" href="/admin/coupon/offer/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '									<i class="halflings-icon edit"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '								</a>';
                $buffer .= "\n";
                $buffer .= $indent . '								<a class="btn" href="/admin/coupon/offers?delete_id=';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" onclick="return confirm(\'Weet je zeker dat je \\\'';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\\\' wil verwijderen?\');">';
                $buffer .= "\n";
                $buffer .= $indent . '									<i class="halflings-icon trash"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '								</a>';
                $buffer .= "\n";
                $buffer .= $indent . '							</td>';
                $buffer .= "\n";
                $buffer .= $indent . '						</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}