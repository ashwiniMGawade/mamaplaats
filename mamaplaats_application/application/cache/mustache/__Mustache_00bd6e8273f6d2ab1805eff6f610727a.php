<?php

class __Mustache_00bd6e8273f6d2ab1805eff6f610727a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Coupon Winkels</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="/admin/coupon/shop" class="btn right">Winkel Toevoegen</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2><i class="icon-camera edit"></i><span class="break"></span>Winkels</h2>';
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
        $buffer .= $indent . '							<th>Populair</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Acties</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        // 'shops' section
        $buffer .= $this->sectionC85f3f14b8c9aedbecbb3a8e43448ca0($context, $indent, $context->find('shops'));
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

    private function sectionC85f3f14b8c9aedbecbb3a8e43448ca0(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<tr>
							<td><a href="/admin/coupon/shop/{{id}}" class="boldtext">{{name}}</a></td>
							<td>{{description}}</td>
							<td>{{is_popular}}</td>
							<td>
								<a class="btn" href="/admin/coupon/shop/{{id}}">
									<i class="halflings-icon edit"></i>
								</a>
								<a class="btn" href="/admin/coupon/shops?delete_id={{id}}" onclick="return confirm(\'Weet je zeker dat je \\\'{{name}}\\\' wil verwijderen?\');">
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
                $buffer .= $indent . '							<td><a href="/admin/coupon/shop/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="boldtext">';
                $value = $context->find('name');
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
                $value = $context->find('is_popular');
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
                $buffer .= $indent . '								<a class="btn" href="/admin/coupon/shop/';
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
                $buffer .= $indent . '								<a class="btn" href="/admin/coupon/shops?delete_id=';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" onclick="return confirm(\'Weet je zeker dat je \\\'';
                $value = $context->find('name');
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