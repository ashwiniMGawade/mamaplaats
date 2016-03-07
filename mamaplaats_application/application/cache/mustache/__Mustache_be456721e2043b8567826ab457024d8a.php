<?php

class __Mustache_be456721e2043b8567826ab457024d8a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Testpanel</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '			<a href="/admin/review-product" class="btn right">Nieuwe Testpanel</a>';
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
        $buffer .= $indent . '			<h2><i class="icon-camera edit"></i><span class="break"></span>Testpanel Lijstweergave</h2>';
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
        $buffer .= $indent . '							<th>Inschrijf Start</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Inschrijf Eind</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Laatst Gewijzigd</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							<th>Acties</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        // 'product_list' section
        $buffer .= $this->section05f8361651373afa95086cc1d1b92cd5($context, $indent, $context->find('product_list'));
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

    private function section05f8361651373afa95086cc1d1b92cd5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<tr>
							<td><a href="/admin/review-product/{{id}}" class="boldtext">{{title}}</a></td>
							<td>{{application_start_date}}</td>
							<td>{{application_end_date}}</td>
							<td>{{modified}}</td>
							<td>
								<a class="btn" href="/admin/review-product/{{id}}">
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
                $buffer .= $indent . '						<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td><a href="/admin/review-product/';
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
                $value = $context->find('application_start_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('application_end_date');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->find('modified');
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
                $buffer .= $indent . '								<a class="btn" href="/admin/review-product/';
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