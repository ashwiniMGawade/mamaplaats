<?php

class __Mustache_288b0c3657658920b8cb7825be34b947 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        // 'product' section
        $buffer .= $this->section68f28be8eadc8d94106a8982b1a747bc($context, $indent, $context->find('product'));
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	var initial_sections = ';
        $value = $context->find('product_sections');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= ';';
        $buffer .= "\n";
        $buffer .= $indent . '	var initial_ratings = ';
        $value = $context->find('product_ratings');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= ';';
        $buffer .= "\n";
        $buffer .= $indent . '	var initial_remarks = ';
        $value = $context->find('product_remarks');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $value;
        $buffer .= ';';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="/assets/admin/js/admin/ko.product_review_sections.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="/assets/admin/js/admin/ko.product_review_ratings.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script src="/assets/admin/js/admin/ko.review_remarks.js"></script>';

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

    private function sectionCb63ae2a78af63ede916e36a72e1f5f5(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
								<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{title}}</option>
								';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '								<option value="';
                $value = $context->find('id');
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
                $value = $context->find('title');
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

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cb280acd19a858efb0b7c25af949a67(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<tr>
								<td><img src="{{sample}}" style="max-width: 120px; max-height: 120px;"></td>
								<td>
									<input name="media[{{id}}][id]" type="hidden" value="{{id}}">
									<input name="media[{{id}}][title]" class="input-append focused" id="title" type="text" value="{{title}}">
								</td>
								<td><input name="media[{{id}}][path]" class="input-append focused" id="url" type="text" value="{{path}}"></td>
								<td>
									<select style="width: 100px;" id="type" name="media[{{id}}][type]">
										<option value="image" {{#is_image}}selected="selected"{{/is_image}}>Afbeelding</option>
										<option value="video" {{#is_video}}selected="selected"{{/is_video}}>Video</option>
									</select>
								</td>
								<td>{{created}}</td>
								<td><a href="/admin/media/delete/{{id}}?redirect=/admin/review-product/{{product.id}}#media_list">Verwijderen</a></td>
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
                $buffer .= $indent . '								<td><img src="';
                $value = $context->find('sample');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="max-width: 120px; max-height: 120px;"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input name="media[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][id]" type="hidden" value="';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input name="media[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][title]" class="input-append focused" id="title" type="text" value="';
                $value = $context->find('title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><input name="media[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][path]" class="input-append focused" id="url" type="text" value="';
                $value = $context->find('path');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<select style="width: 100px;" id="type" name="media[';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '][type]">';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="image" ';
                // 'is_image' section
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $context->find('is_image'));
                $buffer .= '>Afbeelding</option>';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="video" ';
                // 'is_video' section
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $context->find('is_video'));
                $buffer .= '>Video</option>';
                $buffer .= "\n";
                $buffer .= $indent . '									</select>';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
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
                $buffer .= $indent . '								<td><a href="/admin/media/delete/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '?redirect=/admin/review-product/';
                $value = $context->findDot('product.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '#media_list">Verwijderen</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74c90f0dd36730ddd31ea246d77921ce(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<tr>
								<td><a href="/admin/user/{{user.id}}">{{user.first_name}} {{user.middle_name}} {{user.last_name}}</a></td>
								<td>{{user.email}}</td>
								<td>{{review.rating_overal}}</td>
								<td>
									<a class="btn" target="_blank" href="/review/{{review.slug}}">
										<i class="halflings-icon link"></i>
									</a>
									<a class="btn" href="/admin/review/{{review.id}}">
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
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a href="/admin/user/';
                $value = $context->findDot('user.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('user.first_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $context->findDot('user.middle_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $context->findDot('user.last_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $value = $context->findDot('user.email');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $value = $context->findDot('review.rating_overal');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<a class="btn" target="_blank" href="/review/';
                $value = $context->findDot('review.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '										<i class="halflings-icon link"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '									</a>';
                $buffer .= "\n";
                $buffer .= $indent . '									<a class="btn" href="/admin/review/';
                $value = $context->findDot('review.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '										<i class="halflings-icon edit"></i>';
                $buffer .= "\n";
                $buffer .= $indent . '									</a>';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92391f7ed5126fff0cd0a50c9598a682(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<tr>
							<td><a href="/admin/user/{{user.id}}">{{user.first_name}} {{user.middle_name}} {{user.last_name}}</a></td>
							<td>{{user.email}}</td>
							<td>{{review.status}}</td>
							<td>
								<a class="btn" href="/admin/review/{{review.id}}">
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
                $buffer .= $indent . '							<td><a href="/admin/user/';
                $value = $context->findDot('user.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('user.first_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $context->findDot('user.middle_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $context->findDot('user.last_name');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->findDot('user.email');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							<td>';
                $value = $context->findDot('review.status');
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
                $buffer .= $indent . '								<a class="btn" href="/admin/review/';
                $value = $context->findDot('review.id');
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

    private function section68f28be8eadc8d94106a8982b1a747bc(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row-fluid">
	<div class="span8">
		<h1>Testpanel Bewerken</h1>
	</div>
	<div class="span4">
		<div class="pull-right">
            <a class="btn" href="/admin/export-product/{{id}}">Exporteer inschrijvingen</a>&nbsp;
			<a class="btn right" style="margin-left: 10px;" href="/admin/review-products">Terug</a>
		</div>
	</div>
</div>
<div class="row-fluid">
	{{> messages}}
</div>
<form action="" method="post" enctype="multipart/form-data">
	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Standaard</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control-group span4">
						<label class="control-label" for="title">Titel</label>
						<div class="controls">
							<input name="title" class="span12 focused" id="title" type="text" value="{{title}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="slug">Url Slug</label>
						<div class="controls">
							<input name="slug" class="span12 focused" id="slug" type="text" value="{{slug}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="category_id">Categorie</label>
						<div class="controls">
							<select class="span12" id="category_id" name="category_id">
								{{#categories}}
								<option value="{{id}}" {{#selected}}selected="selected"{{/selected}}>{{title}}</option>
								{{/categories}}
							</select>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="description">Omschrijving</label>
						<div class="controls">
							<textarea name="description" class="input-block-level tinymce" id="description" rows="8">{{description}}</textarea>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="media_short">Korte Tekst bij de media</label>
						<div class="controls">
							<textarea name="media_short" class="input-block-level" id="media_short" rows="2">{{media_short}}</textarea>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="conclusion">Algemene Conclusie <small>(De Algemene Conclusie van Alle Reviews)</small></label>
						<div class="controls">
							<textarea name="conclusion" class="input-block-level" id="conclusion" rows="8">{{conclusion}}</textarea>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="control-group span4">
						<label class="control-label" for="question_extra1">Extra Vraag 1 <small>Laat leeg om niet te gebruiken</small></label>
						<div class="controls">
							<input name="question_extra1" class="span12" id="question_extra1" type="text" value="{{question_extra1}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="question_extra2">Extra Vraag 2 <small>Laat leeg om niet te gebruiken</small></label>
						<div class="controls">
							<input name="question_extra2" class="span12" id="question_extra2" type="text" value="{{question_extra2}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="question_extra3">Extra Vraag 3 <small>Laat leeg om niet te gebruiken</small></label>
						<div class="controls">
							<input name="question_extra3" class="span12" id="question_extra3" type="text" value="{{question_extra3}}">
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="control-group span4">
						<label class="control-label" for="application_start_date">Inschrijvingen Start Datum</label>
						<div class="controls">
							<input name="application_start_date" class="datepicker span12" id="application_start_date" type="text" value="{{application_start_date}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="application_end_date">Inschrijvingen Eind Datum</label>
						<div class="controls">
							<input name="application_end_date" class="datepicker span12" id="application_end_date" type="text" value="{{application_end_date}}">
						</div>
					</div>
					<div class="control-group span4">
						<label class="control-label" for="status">Status</label>
						<div class="controls">
							<select class="span12" id="status" name="status">
								{{#statuses}}
								<option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{text}}</option>
								{{/statuses}}
							</select>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="image">Voorbeeld Foto <small>Probeer de grote en verhoudingen van 200x200 aan te houden</small></label>
						<div class="controls">
							<div class="uploader">
								<input name="image" id="image" type="file">
							</div>
						</div>
					</div>
					<div>
						<img class="img-polaroid" width="150" src="{{mp_base_url}}/{{image_url}}" alt="Voorbeeld Foto">
						<br/>
						<br/>
					</div>
				</div>
                <div class="row-fluid">
                    <div class="span12">
                        <input name="phone_access_field" value="0" type="hidden">
                        <input name="phone_access_field" class="tos" value="1" {{#selected_access_phone}}checked="checked"{{/selected_access_phone}} id="phone_access_field" type="checkbox"> Ja, Testpanel mag mij telefonisch benaderen.
                    </div>
                </div>
				<div class="row-fluid">
					<div class="span12">
						<input class="btn btn-primary" type="submit" value="Opslaan">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="product_sections" class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Review Secties</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control group span12">
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Sectie vraag aan moeder</th>
								<th style="width: 100px;">Verwijderen</th>
							</tr>
							</thead>
							<tbody data-bind="foreach: sections">
							<tr>
								<td>
									<input data-bind="value: id, attr:{name:\'sections[\'+$index()+\'][id]\'}" type="hidden">
									<input data-bind="value: question, attr:{name:\'sections[\'+$index()+\'][question]\'}" class="span12" type="text">
								</td>
								<td><a data-bind="click: $root.removeSection" href="#">Verwijderen</a></td>
							</tr>
							</tbody>
						</table>
						<input class="btn btn-primary" type="submit" value="Opslaan">
						<input data-bind="click: addSection" class="btn pull-right" type="button" value="Nieuwe Sectie Toevoegen">
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="product_ratings" class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Review Scores</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control group span12">
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Score Titel</th>
								<th style="width: 100px;">Verwijderen</th>
							</tr>
							</thead>
							<tbody data-bind="foreach: ratings">
							<tr>
								<td>
									<input data-bind="value: id, attr:{name:\'ratings[\'+$index()+\'][id]\'}" type="hidden">
									<input data-bind="value: rating_title, attr:{name:\'ratings[\'+$index()+\'][rating_title]\'}" class="span12" type="text">
								</td>
								<td><a data-bind="click: $root.removeRating" href="#">Verwijderen</a></td>
							</tr>
							</tbody>
						</table>
						<input class="btn btn-primary" type="submit" value="Opslaan">
						<input data-bind="click: addRating" class="btn pull-right" type="button" value="Nieuwe Score Toevoegen">
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="product_remarks" class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Opmerkingen</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control group span12">
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Opmerking</th>
								<th style="width: 200px;">Type</th>
								<th style="width: 100px;">Verwijderen</th>
							</tr>
							</thead>
							<tbody data-bind="foreach: remarks">
							<tr>
								<td>
									<input data-bind="value: id, attr:{name:\'remarks[\'+$index()+\'][id]\'}" type="hidden">
									<input data-bind="value: remark, attr:{name:\'remarks[\'+$index()+\'][remark]\'}" class="span12" type="text">
								</td>
								<td>
									<select data-bind="value: type, attr:{name:\'remarks[\'+$index()+\'][type]\'}">
										<option value="positive">Positief</option>
										<option value="negative">Negatief</option>
									</select>
								</td>
								<td><a data-bind="click: $root.removeRemark" href="#">Verwijderen</a></td>
							</tr>
							</tbody>
						</table>
						<input class="btn btn-primary" type="submit" value="Opslaan">
						<input data-bind="click: addRemark" class="btn pull-right" type="button" value="Nieuwe Opmerking Toevoegen">
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="media_list" class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Media</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control group span12">
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Voorbeeld</th>
								<th>Title</th>
								<th>URL</th>
								<th >Type</th>
								<th>Uploaddatum</th>
								<th>Verwijderen</th>
							</tr>
							</thead>
							<tbody>
							{{#media_list}}
							<tr>
								<td><img src="{{sample}}" style="max-width: 120px; max-height: 120px;"></td>
								<td>
									<input name="media[{{id}}][id]" type="hidden" value="{{id}}">
									<input name="media[{{id}}][title]" class="input-append focused" id="title" type="text" value="{{title}}">
								</td>
								<td><input name="media[{{id}}][path]" class="input-append focused" id="url" type="text" value="{{path}}"></td>
								<td>
									<select style="width: 100px;" id="type" name="media[{{id}}][type]">
										<option value="image" {{#is_image}}selected="selected"{{/is_image}}>Afbeelding</option>
										<option value="video" {{#is_video}}selected="selected"{{/is_video}}>Video</option>
									</select>
								</td>
								<td>{{created}}</td>
								<td><a href="/admin/media/delete/{{id}}?redirect=/admin/review-product/{{product.id}}#media_list">Verwijderen</a></td>
							</tr>
							{{/media_list}}
							</tbody>
						</table>
					</div>
				</div>
				<div class="row-fluid">
					<div class="control group span12">
						<label class="control-label">Nieuwe media toevoegen</label>
						<table class="table table-bordered">
							<thead>
							<tr>
								<th>Title</th>
								<th>URL</th>
								<th>Upload</th>
								<th>Type</th>
							</tr>
							</thead>
							<tr>
								<td>
									<input name="media[new][id]" type="hidden">
									<input name="media[new][title]" type="text">
								</td>
								<td><input name="media[new][path]" type="text"></td>
								<td><input class="fileupload" type="file" name="media"></td>
								<td>
									<select name="media[new][type]">
										<option value="image">Afbeelding</option>
										<option value="video">Video</option>
									</select>
								</td>
							</tr>
							</tbody>
						</table>
						<input class="btn btn-primary" type="submit" value="opslaan">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Seo Instellingen</h2>
				<div class="box-icon">
					<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="icon-remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="meta_title">Meta Titel</label>
						<div class="controls">
							<input class="span12" name="meta_title" id="meta_title" type="text" value="{{meta_title}}">
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="control-group span12">
						<label class="control-label" for="meta_description">Meta Omschrijving</label>
						<div class="controls">
							<textarea name="meta_description" class="input-block-level" id="meta_description" rows="8">{{meta_description}}</textarea>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<input class="btn btn-primary" type="submit" value="Opslaan">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="icon-star edit"></i><span class="break"></span>Gekozen testmoeders</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class="row-fluid">
				<div class="span12">
					<div class="control-group">
						<p>in dit overzicht vind je de gekozen testmoeder.</p>
						<table class="table table-striped table-bordered">
							<thead>
							<tr>
								<th>Naam</th>
								<th>Email</th>
								<th>Eindcijfer</th>
								<th>Acties</th>
							</tr>
							</thead>
							<tbody>
							{{#approved_reviews}}
							<tr>
								<td><a href="/admin/user/{{user.id}}">{{user.first_name}} {{user.middle_name}} {{user.last_name}}</a></td>
								<td>{{user.email}}</td>
								<td>{{review.rating_overal}}</td>
								<td>
									<a class="btn" target="_blank" href="/review/{{review.slug}}">
										<i class="halflings-icon link"></i>
									</a>
									<a class="btn" href="/admin/review/{{review.id}}">
										<i class="halflings-icon edit"></i>
									</a>
								</td>
							</tr>
							{{/approved_reviews}}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<form action="" method="post" enctype="multipart/form-data">
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="icon-user edit"></i><span class="break"></span>Reviews</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class="row-fluid">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Volledige naam</th>
							<th>Email</th>
							<th>Status</th>
							<th>Acties</th>
						</tr>
					</thead>
					<tbody>
						{{#reviews}}
						<tr>
							<td><a href="/admin/user/{{user.id}}">{{user.first_name}} {{user.middle_name}} {{user.last_name}}</a></td>
							<td>{{user.email}}</td>
							<td>{{review.status}}</td>
							<td>
								<a class="btn" href="/admin/review/{{review.id}}">
									<i class="halflings-icon edit"></i>
								</a>
							</td>
						</tr>
						{{/reviews}}
					</tbody>
				</table>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<input name="reject-all-waiting" class="btn btn-primary" type="submit" value="Alle wachtende reviews afkeuren">
				</div>
			</div>

		</div>
	</div>
</div>
</form>
';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="span8">';
                $buffer .= "\n";
                $buffer .= $indent . '		<h1>Testpanel Bewerken</h1>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="span4">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="pull-right">';
                $buffer .= "\n";
                $buffer .= $indent . '            <a class="btn" href="/admin/export-product/';
                $value = $context->find('id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">Exporteer inschrijvingen</a>&nbsp;';
                $buffer .= "\n";
                $buffer .= $indent . '			<a class="btn right" style="margin-left: 10px;" href="/admin/review-products">Terug</a>';
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
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Standaard</h2>';
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
                $value = $context->find('title');
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
                $buffer .= $indent . '						<label class="control-label" for="slug">Url Slug</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="slug" class="span12 focused" id="slug" type="text" value="';
                $value = $context->find('slug');
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
                $buffer .= $indent . '						<label class="control-label" for="category_id">Categorie</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<select class="span12" id="category_id" name="category_id">';
                $buffer .= "\n";
                // 'categories' section
                $buffer .= $this->sectionCb63ae2a78af63ede916e36a72e1f5f5($context, $indent, $context->find('categories'));
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
                $buffer .= $indent . '							<textarea name="description" class="input-block-level tinymce" id="description" rows="8">';
                $value = $context->find('description');
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
                $buffer .= $indent . '					<div class="control-group span12">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="media_short">Korte Tekst bij de media</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<textarea name="media_short" class="input-block-level" id="media_short" rows="2">';
                $value = $context->find('media_short');
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
                $buffer .= $indent . '					<div class="control-group span12">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="conclusion">Algemene Conclusie <small>(De Algemene Conclusie van Alle Reviews)</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<textarea name="conclusion" class="input-block-level" id="conclusion" rows="8">';
                $value = $context->find('conclusion');
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
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="question_extra1">Extra Vraag 1 <small>Laat leeg om niet te gebruiken</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="question_extra1" class="span12" id="question_extra1" type="text" value="';
                $value = $context->find('question_extra1');
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
                $buffer .= $indent . '						<label class="control-label" for="question_extra2">Extra Vraag 2 <small>Laat leeg om niet te gebruiken</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="question_extra2" class="span12" id="question_extra2" type="text" value="';
                $value = $context->find('question_extra2');
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
                $buffer .= $indent . '						<label class="control-label" for="question_extra3">Extra Vraag 3 <small>Laat leeg om niet te gebruiken</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="question_extra3" class="span12" id="question_extra3" type="text" value="';
                $value = $context->find('question_extra3');
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
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span4">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="application_start_date">Inschrijvingen Start Datum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="application_start_date" class="datepicker span12" id="application_start_date" type="text" value="';
                $value = $context->find('application_start_date');
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
                $buffer .= $indent . '						<label class="control-label" for="application_end_date">Inschrijvingen Eind Datum</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input name="application_end_date" class="datepicker span12" id="application_end_date" type="text" value="';
                $value = $context->find('application_end_date');
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
                $buffer .= $indent . '						<label class="control-label" for="status">Status</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<select class="span12" id="status" name="status">';
                $buffer .= "\n";
                // 'statuses' section
                $buffer .= $this->sectionFfd03186996640c052d5549c964026e0($context, $indent, $context->find('statuses'));
                $buffer .= $indent . '							</select>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group span12">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="image">Voorbeeld Foto <small>Probeer de grote en verhoudingen van 200x200 aan te houden</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<div class="uploader">';
                $buffer .= "\n";
                $buffer .= $indent . '								<input name="image" id="image" type="file">';
                $buffer .= "\n";
                $buffer .= $indent . '							</div>';
                $buffer .= "\n";
                $buffer .= $indent . '						</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '					<div>';
                $buffer .= "\n";
                $buffer .= $indent . '						<img class="img-polaroid" width="150" src="';
                $value = $context->find('mp_base_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/';
                $value = $context->find('image_url');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="Voorbeeld Foto">';
                $buffer .= "\n";
                $buffer .= $indent . '						<br/>';
                $buffer .= "\n";
                $buffer .= $indent . '						<br/>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '                <div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '                    <div class="span12">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <input name="phone_access_field" value="0" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '                        <input name="phone_access_field" class="tos" value="1" ';
                // 'selected_access_phone' section
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $context->find('selected_access_phone'));
                $buffer .= ' id="phone_access_field" type="checkbox"> Ja, Testpanel mag mij telefonisch benaderen.';
                $buffer .= "\n";
                $buffer .= $indent . '                    </div>';
                $buffer .= "\n";
                $buffer .= $indent . '                </div>';
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
                $buffer .= "\n";
                $buffer .= $indent . '	<div id="product_sections" class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Review Secties</h2>';
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
                $buffer .= $indent . '						<table class="table table-striped table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Sectie vraag aan moeder</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th style="width: 100px;">Verwijderen</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tbody data-bind="foreach: sections">';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: id, attr:{name:\'sections[\'+$index()+\'][id]\'}" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: question, attr:{name:\'sections[\'+$index()+\'][question]\'}" class="span12" type="text">';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a data-bind="click: $root.removeSection" href="#">Verwijderen</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '						</table>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="Opslaan">';
                $buffer .= "\n";
                $buffer .= $indent . '						<input data-bind="click: addSection" class="btn pull-right" type="button" value="Nieuwe Sectie Toevoegen">';
                $buffer .= "\n";
                $buffer .= $indent . '						<br>';
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
                $buffer .= "\n";
                $buffer .= $indent . '	<div id="product_ratings" class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Review Scores</h2>';
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
                $buffer .= $indent . '						<table class="table table-striped table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Score Titel</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th style="width: 100px;">Verwijderen</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tbody data-bind="foreach: ratings">';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: id, attr:{name:\'ratings[\'+$index()+\'][id]\'}" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: rating_title, attr:{name:\'ratings[\'+$index()+\'][rating_title]\'}" class="span12" type="text">';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a data-bind="click: $root.removeRating" href="#">Verwijderen</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '						</table>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="Opslaan">';
                $buffer .= "\n";
                $buffer .= $indent . '						<input data-bind="click: addRating" class="btn pull-right" type="button" value="Nieuwe Score Toevoegen">';
                $buffer .= "\n";
                $buffer .= $indent . '						<br>';
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
                $buffer .= "\n";
                $buffer .= $indent . '	<div id="product_remarks" class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Product Opmerkingen</h2>';
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
                $buffer .= $indent . '						<table class="table table-striped table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Opmerking</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th style="width: 200px;">Type</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th style="width: 100px;">Verwijderen</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tbody data-bind="foreach: remarks">';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: id, attr:{name:\'remarks[\'+$index()+\'][id]\'}" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input data-bind="value: remark, attr:{name:\'remarks[\'+$index()+\'][remark]\'}" class="span12" type="text">';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<select data-bind="value: type, attr:{name:\'remarks[\'+$index()+\'][type]\'}">';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="positive">Positief</option>';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="negative">Negatief</option>';
                $buffer .= "\n";
                $buffer .= $indent . '									</select>';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><a data-bind="click: $root.removeRemark" href="#">Verwijderen</a></td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '						</table>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="Opslaan">';
                $buffer .= "\n";
                $buffer .= $indent . '						<input data-bind="click: addRemark" class="btn pull-right" type="button" value="Nieuwe Opmerking Toevoegen">';
                $buffer .= "\n";
                $buffer .= $indent . '						<br>';
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
                $buffer .= "\n";
                $buffer .= $indent . '	<div id="media_list" class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Media</h2>';
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
                $buffer .= $indent . '						<table class="table table-striped table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Voorbeeld</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Title</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>URL</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th >Type</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Uploaddatum</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Verwijderen</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tbody>';
                $buffer .= "\n";
                // 'media_list' section
                $buffer .= $this->section4cb280acd19a858efb0b7c25af949a67($context, $indent, $context->find('media_list'));
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
                $buffer .= $indent . '						<label class="control-label">Nieuwe media toevoegen</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<table class="table table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Title</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>URL</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Upload</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Type</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<input name="media[new][id]" type="hidden">';
                $buffer .= "\n";
                $buffer .= $indent . '									<input name="media[new][title]" type="text">';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><input name="media[new][path]" type="text"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td><input class="fileupload" type="file" name="media"></td>';
                $buffer .= "\n";
                $buffer .= $indent . '								<td>';
                $buffer .= "\n";
                $buffer .= $indent . '									<select name="media[new][type]">';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="image">Afbeelding</option>';
                $buffer .= "\n";
                $buffer .= $indent . '										<option value="video">Video</option>';
                $buffer .= "\n";
                $buffer .= $indent . '									</select>';
                $buffer .= "\n";
                $buffer .= $indent . '								</td>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '						</table>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input class="btn btn-primary" type="submit" value="opslaan">';
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
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '				<h2><i class="halflings-icon edit"></i><span class="break"></span>Seo Instellingen</h2>';
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
                $buffer .= $indent . '					<div class="control-group span12">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label class="control-label" for="meta_title">Meta Titel</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<input class="span12" name="meta_title" id="meta_title" type="text" value="';
                $value = $context->find('meta_title');
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
                $buffer .= $indent . '						<label class="control-label" for="meta_description">Meta Omschrijving</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<div class="controls">';
                $buffer .= "\n";
                $buffer .= $indent . '							<textarea name="meta_description" class="input-block-level" id="meta_description" rows="8">';
                $value = $context->find('meta_description');
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
                $buffer .= "\n";
                $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '			<h2><i class="icon-star edit"></i><span class="break"></span>Gekozen testmoeders</h2>';
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
                $buffer .= $indent . '				<div class="span12">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="control-group">';
                $buffer .= "\n";
                $buffer .= $indent . '						<p>in dit overzicht vind je de gekozen testmoeder.</p>';
                $buffer .= "\n";
                $buffer .= $indent . '						<table class="table table-striped table-bordered">';
                $buffer .= "\n";
                $buffer .= $indent . '							<thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tr>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Naam</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Email</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Eindcijfer</th>';
                $buffer .= "\n";
                $buffer .= $indent . '								<th>Acties</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '							</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '							<tbody>';
                $buffer .= "\n";
                // 'approved_reviews' section
                $buffer .= $this->section74c90f0dd36730ddd31ea246d77921ce($context, $indent, $context->find('approved_reviews'));
                $buffer .= $indent . '							</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '						</table>';
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
                $buffer .= $indent . '</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '<form action="" method="post" enctype="multipart/form-data">';
                $buffer .= "\n";
                $buffer .= $indent . '<div class="row-fluid sortable ui-sortable">';
                $buffer .= "\n";
                $buffer .= $indent . '	<div class="box span12">';
                $buffer .= "\n";
                $buffer .= $indent . '		<div class="box-header" data-original-title>';
                $buffer .= "\n";
                $buffer .= $indent . '			<h2><i class="icon-user edit"></i><span class="break"></span>Reviews</h2>';
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
                $buffer .= $indent . '							<th>Volledige naam</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							<th>Email</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							<th>Status</th>';
                $buffer .= "\n";
                $buffer .= $indent . '							<th>Acties</th>';
                $buffer .= "\n";
                $buffer .= $indent . '						</tr>';
                $buffer .= "\n";
                $buffer .= $indent . '					</thead>';
                $buffer .= "\n";
                $buffer .= $indent . '					<tbody>';
                $buffer .= "\n";
                // 'reviews' section
                $buffer .= $this->section92391f7ed5126fff0cd0a50c9598a682($context, $indent, $context->find('reviews'));
                $buffer .= $indent . '					</tbody>';
                $buffer .= "\n";
                $buffer .= $indent . '				</table>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="row-fluid">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="span12">';
                $buffer .= "\n";
                $buffer .= $indent . '					<input name="reject-all-waiting" class="btn btn-primary" type="submit" value="Alle wachtende reviews afkeuren">';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '		</div>';
                $buffer .= "\n";
                $buffer .= $indent . '	</div>';
                $buffer .= "\n";
                $buffer .= $indent . '</div>';
                $buffer .= "\n";
                $buffer .= $indent . '</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}