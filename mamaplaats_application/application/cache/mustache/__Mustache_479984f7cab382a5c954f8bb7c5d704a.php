<?php

class __Mustache_479984f7cab382a5c954f8bb7c5d704a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="span8">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Advertenties</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2><i class="icon-cog edit"></i><span class="break"></span>Advertenties</h2>';
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
        $buffer .= $indent . '                        <th>Id</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Slug</th>';
        $buffer .= "\n";
        $buffer .= $indent . '						<th>URL</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Toestand</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Action</th>';
        $buffer .= "\n";
        $buffer .= $indent . '					</tr>';
        $buffer .= "\n";
        $buffer .= $indent . '					</thead>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '					<tr>';
        $buffer .= "\n";
        $buffer .= $indent . '						<td><a href="/admin/setting/advertisement-popup">1</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <td><a href="/admin/setting/advertisement-popup">advertisement-popup</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '						<td>http://www.mamaplaats.nl/user/blog/index</td>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <td>Off</td>';
        $buffer .= "\n";
        $buffer .= $indent . '						<td>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <a href="/admin/setting/advertisement-popup">';
        $buffer .= "\n";
        $buffer .= $indent . '								<i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '							</a>';
        $buffer .= "\n";
        $buffer .= $indent . '						</td>';
        $buffer .= "\n";
        $buffer .= $indent . '					</tr>';
        $buffer .= "\n";
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

}