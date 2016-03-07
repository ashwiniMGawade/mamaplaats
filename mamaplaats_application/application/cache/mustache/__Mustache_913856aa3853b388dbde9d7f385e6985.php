<?php

class __Mustache_913856aa3853b388dbde9d7f385e6985 extends Mustache_Template
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
        // 'add_advertisement' section
        $buffer .= $this->section8a5908afa8de574f309712b577f7cd19($context, $indent, $context->find('add_advertisement'));
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
        // 'advertisements' section
        $buffer .= $this->sectionE6a6fc2298d3d3deb3021f031def3ba0($context, $indent, $context->find('advertisements'));
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

    private function section8a5908afa8de574f309712b577f7cd19(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				<a href="/admin/setting/advertisement" class="btn right">Voeg Advertentie</a>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				<a href="/admin/setting/advertisement" class="btn right">Voeg Advertentie</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6a6fc2298d3d3deb3021f031def3ba0(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr>
                            <td>{{id}}</td>
                            <td><a href="/admin/setting/advertisement/{{name}}">{{name}}</a></td>
                            <td><a href="/admin/setting/advertisement/{{slug}}">{{slug}}</a></td>
                            <td>{{status}}</td>
                            <td>
                                <a class="btn" href="/admin/setting/advertisement/{{id}}">
                                    <i class="halflings-icon edit"></i>
                                </a>
                                <a class="btn" href="/admin/setting/advertisement/delete/{{id}}" onclick="return confirm(\'Weet je zeker dat je \\\'{{name}}\\\' wil verwijderen?\');">
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
                $buffer .= $indent . '                        <tr>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <td>';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <td><a href="/admin/setting/advertisement/';
                $value = $context->find('name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <td><a href="/admin/setting/advertisement/';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->find('slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <td>';
                $value = $context->find('status');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '                            <td>';
                $buffer .= "\n";
                $buffer .= $indent . '                                <a class="btn" href="/admin/setting/advertisement/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '                                    <i class="halflings-icon edit"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '                                </a>';
                $buffer .= "\n";
                $buffer .= $indent . '                                <a class="btn" href="/admin/setting/advertisement/delete/';
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
                $buffer .= $indent . '                                    <i class="halflings-icon trash"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '                                </a>';
                $buffer .= "\n";
                $buffer .= $indent . '                            </td>';
                $buffer .= "\n";
                $buffer .= $indent . '                        </tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}