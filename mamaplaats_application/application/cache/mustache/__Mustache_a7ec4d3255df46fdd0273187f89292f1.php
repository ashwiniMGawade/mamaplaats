<?php

class __Mustache_a7ec4d3255df46fdd0273187f89292f1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="span12">';
        $buffer .= "\n";
        $buffer .= $indent . '        <h1>Voeg Advertentie</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";
        $buffer .= $indent . '<form action="" method="post" enctype="multipart/form-data">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="row-fluid sortable ui-sortable">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="box span12">';
        $buffer .= "\n";
        $buffer .= $indent . '            <div class="box-header" data-original-title>';
        $buffer .= "\n";
        $buffer .= $indent . '                <h2><i class="halflings-icon edit"></i><span class="break"></span>Advertentie</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '                <div class="box-icon">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <a href="#" class="btn-close"><i class="icon-remove"></i></a>';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                <div class="box-content">';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="control-label" for="URL">Slug</label>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <select class="span12" id="slug" name="slug">';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="header" selected="selected">header</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="footer-overview-pages" >footer-overview-pages</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="footer" >footer</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="korting-sidebar" >korting-sidebar</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="blog-overview-sidebar" >blog-overview-sidebar</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="in-blog-sidebar" >in-blog-sidebar</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="in-blog-above-comments" >in-blog-above-comments</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                        <option value="slide-in-banner-bottom" >slide-in-banner-bottom</option>';
        $buffer .= "\n";
        $buffer .= $indent . '                                </select>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="control-label" for="URL">Name</label>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <input name="name" class="span12 focused" type="text" value="Testing">';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="control-label" for="URL">HTML Code</label>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <div class="controls">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <textarea name="description" class="input-block-level" id="description" rows="8">&lt;script&gt;alert(12121);&lt;/script&gt;</textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '                            </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="control-group span4">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="control-label" for="Toestand">Toestand</label>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="checkbox inline">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <input type="radio" name="status" value="On" checked>Aan';
        $buffer .= "\n";
        $buffer .= $indent . '                            </label>';
        $buffer .= "\n";
        $buffer .= $indent . '                            <label class="checkbox inline">';
        $buffer .= "\n";
        $buffer .= $indent . '                                <input type="radio" name="status" value="Off" >Uit';
        $buffer .= "\n";
        $buffer .= $indent . '                            </label>';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="span12"></div>';
        $buffer .= "\n";
        $buffer .= $indent . '                        <div class="row-fluid">';
        $buffer .= "\n";
        $buffer .= $indent . '                            <input class="btn btn-primary" type="submit" value="opslaan">';
        $buffer .= "\n";
        $buffer .= $indent . '                        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '                </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '    </div>';
        $buffer .= "\n";
        $buffer .= $indent . '</form>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}