<?php

class __Mustache_4ab240b6f89d4a3ddb893f585fb41f3f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Seo 301 Redirects Beheren</h1>';
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
        $buffer .= $indent . '								<th>Van</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Naar</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Toegevoegd</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Verwijderen</th>';
        $buffer .= "\n";
        $buffer .= $indent . '							</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '							</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tbody>';
        $buffer .= "\n";
        // 'redirects' section
        $buffer .= $this->section7403820c43349840711c98fc7ac67943($context, $indent, $context->find('redirects'));
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
        $buffer .= $indent . '					<div class="control group span12">';
        $buffer .= "\n";
        $buffer .= $indent . '						<label class="control-label">Nieuwe Redirect Toevoegen</label>';
        $buffer .= "\n";
        $buffer .= $indent . '						<table class="table table-bordered">';
        $buffer .= "\n";
        $buffer .= $indent . '							<thead>';
        $buffer .= "\n";
        $buffer .= $indent . '							<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Van</th>';
        $buffer .= "\n";
        $buffer .= $indent . '								<th>Naar</th>';
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
        $buffer .= $indent . '										<div class="input-prepend">';
        $buffer .= "\n";
        $buffer .= $indent . '											<span class="add-on">http://www.mamaplaats.nl/</span>';
        $buffer .= "\n";
        $buffer .= $indent . '											<input class="span9" name="from_url" type="text" placeholder="Rest van de Url">';
        $buffer .= "\n";
        $buffer .= $indent . '										</div>';
        $buffer .= "\n";
        $buffer .= $indent . '									</td>';
        $buffer .= "\n";
        $buffer .= $indent . '									<td>';
        $buffer .= "\n";
        $buffer .= $indent . '										<div class="input-prepend">';
        $buffer .= "\n";
        $buffer .= $indent . '											<span class="add-on">http://www.mamaplaats.nl/</span>';
        $buffer .= "\n";
        $buffer .= $indent . '											<input class="span9" name="to_url" type="text" placeholder="Rest van de Url">';
        $buffer .= "\n";
        $buffer .= $indent . '										</div>';
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
        $buffer .= $indent . '						<input style="float:left;" class="btn btn-primary" type="submit" value="Redirect toevoegen">';
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

    private function section7403820c43349840711c98fc7ac67943(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<tr>
								<td>{{from_url}}</td>
								<td>{{to_url}}</td>
								<td>{{created}}</td>
								<td><a href="/admin/seo/redirect/delete/{{id}}">Verwijderen</a></td>
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
                $buffer .= $indent . '								<td>';
                $value = $context->find('from_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $value = $context->find('to_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $value = $context->find('created');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a href="/admin/seo/redirect/delete/';
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