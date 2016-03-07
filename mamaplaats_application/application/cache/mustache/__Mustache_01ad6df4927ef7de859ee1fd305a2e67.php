<?php

class __Mustache_01ad6df4927ef7de859ee1fd305a2e67 extends Mustache_Template
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
        $buffer .= $indent . '	<div class="span4">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="pull-right">';
        $buffer .= "\n";
        $buffer .= $indent . '				<a href="/admin/setting/advertisement" class="btn right">Voeg Advertentie</a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '            <h2><i class="icon-cog edit"></i><span class="break"></span>Advertenties</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '                <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                <a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="box-content">';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                <table class="table table-striped table-bordered bootstrap-datatable datatable">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <thead>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <tr>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Id</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Name</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Slug</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Toestand</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <th>Action</th>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </tr>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </thead>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <tr>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <td>1</td>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <td><a href="/admin/setting/advertisement/Testing">Testing</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <td><a href="/admin/setting/advertisement/header">header</a></td>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <td>On</td>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <td>';
        $buffer .= "\n";
        $buffer .= $indent . '                                <a class="btn" href="/admin/setting/advertisement/1">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <i class="halflings-icon edit"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '                                </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                                <a class="btn" href="/admin/setting/advertisement/delete/1" onclick="return confirm(\'Weet je zeker dat je \\\'Testing\\\' wil verwijderen?\');">';
        $buffer .= "\n";
        $buffer .= $indent . '                                    <i class="halflings-icon trash"></i>';
        $buffer .= "\n";
        $buffer .= $indent . '                                </a>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </td>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </tr>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </tbody>';
        $buffer .= "\n";
        $buffer .= $indent . '                </table>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}