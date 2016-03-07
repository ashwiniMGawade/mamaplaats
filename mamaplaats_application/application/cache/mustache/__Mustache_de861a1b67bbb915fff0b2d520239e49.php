<?php

class __Mustache_de861a1b67bbb915fff0b2d520239e49 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="data-form">';
        $buffer .= "\n";
        $buffer .= $indent . '	<header class="heading-box">';
        $buffer .= "\n";
        $buffer .= $indent . '		<h1>Blog Schrijven</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '	</header>';
        $buffer .= "\n";
        // 'profile_complete' inverted section
        $value = $context->find('profile_complete');
        if (empty($value)) {
            
            $buffer .= $indent . '	<div class="alert alert-info">';
            $buffer .= "\n";
            $buffer .= $indent . '		Voordat je een blog kan schrijven is het nodig dat je eerst een <a href="/user/update/personal_info">Profiel Foto</a> en iets';
            $buffer .= "\n";
            $buffer .= $indent . '		<a href="/user/update/own_detail">Over Jezelf</a> toevoegen zodat andere moeders dit onder je blog kunnen zien.';
            $buffer .= "\n";
            $buffer .= $indent . '	</div>';
            $buffer .= "\n";
        }
        // 'profile_complete' section
        $buffer .= $this->section90e3394780c645ed5619a74e35154351($context, $indent, $context->find('profile_complete'));
        $buffer .= $indent . '</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

    private function section034a8285399f23acb816ecdc175f688b(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="alert alert-success">
				Uw Blog is op dit moment gepubliceerd. Andere gebruikers kunnen deze nu op de site zien.
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="alert alert-success">';
                $buffer .= "\n";
                $buffer .= $indent . '				Uw Blog is op dit moment gepubliceerd. Andere gebruikers kunnen deze nu op de site zien.';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section868a134409dfa26dc5cbbc2d0330d2d6(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="alert alert-info">
				Je blog is opgeslagen als concept. Je moet alle velden invoeren om je blog kunnen publiceren.
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="alert alert-info">';
                $buffer .= "\n";
                $buffer .= $indent . '				Je blog is opgeslagen als concept. Je moet alle velden invoeren om je blog kunnen publiceren.';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7c821876eb5e31c33a67d6479078745(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '{{message}}<br />';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $value = $context->find('message');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '<br />';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6aa5d1b74a8fa76de2fd70fb80f1822(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
			<div class="alert alert-{{type}}">
				{{#messages}}{{message}}<br />{{/messages}}
			</div>
			';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '			<div class="alert alert-';
                $value = $context->find('type');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $buffer .= $indent . '				';
                // 'messages' section
                $buffer .= $this->sectionA7c821876eb5e31c33a67d6479078745($context, $indent, $context->find('messages'));
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section79252d2b10d54fd6afdf6b2819edbe1c(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<option value="{{value}}"
							{{#selected}}selected{{/selected}}
							{{#disabled}}disabled{{/disabled}}>{{& text}}</option>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<option value="';
                $value = $context->find('value');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $buffer .= "\n";
                $buffer .= $indent . '							';
                // 'selected' section
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $context->find('selected'));
                $buffer .= "\n";
                $buffer .= $indent . '							';
                // 'disabled' section
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $context->find('disabled'));
                $buffer .= '>';
                $value = $context->find('text');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</option>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA753f48e7dadc4e3c039a20fa24a25f4(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
							<img src="{{blog.thumbnail}}">
							';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '							<img src="';
                $value = $context->findDot('blog.thumbnail');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e1bc06eb7b5417eff1c923ddc841349(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="/user/blog/delete/{{blog.id}}" class="btn" onclick="return confirm(\'Weet je zeker dat je \\\'{{blog.title}}\\\' wil verwijderen?\');">Verwijder</a>
						';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '                            <a href="/user/blog/delete/';
                $value = $context->findDot('blog.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn" onclick="return confirm(\'Weet je zeker dat je \\\'';
                $value = $context->findDot('blog.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\\\' wil verwijderen?\');">Verwijder</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c6b43d48da8ac15217e14fd87b1f289(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
						<a href="/blog/{{blog.slug}}" class="btn" target="_blank">Blog Bekijken</a>
                        ';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '						<a href="/blog/';
                $value = $context->findDot('blog.slug');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn" target="_blank">Blog Bekijken</a>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90e3394780c645ed5619a74e35154351(Mustache_Context $context, $indent, $value) {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			{{#is_published}}
			<div class="alert alert-success">
				Uw Blog is op dit moment gepubliceerd. Andere gebruikers kunnen deze nu op de site zien.
			</div>
			{{/is_published}}
			{{^is_published}}
			{{#blog.id}}
			<div class="alert alert-info">
				Je blog is opgeslagen als concept. Je moet alle velden invoeren om je blog kunnen publiceren.
			</div>
			{{/blog.id}}
			{{/is_published}}
			{{#has_messages}}
			<div class="alert alert-{{type}}">
				{{#messages}}{{message}}<br />{{/messages}}
			</div>
			{{/has_messages}}
			<div class="form-item">
				<label for="title">Titel van je blog * <small>Tussen 20 en 55 tekens</small></label>
				<input type="text" name="title" id="title" placeholder="Een duidelijke en unieke titel voor je blog" value="{{blog.title}}" maxlength="55">
			</div>

			<div class="form-item">
				<label for="category">In welke categorie behoort deze blog?</label>
				<div class="select-wrap">
					<select id="category" name="category_id">
						{{#categories}}
						<option value="{{value}}"
							{{#selected}}selected{{/selected}}
							{{#disabled}}disabled{{/disabled}}>{{& text}}</option>
						{{/categories}}
					</select>
				</div>
			</div>

			<div class="form-item">
				<label for="excerpt">Inleiding * <small>Tussen 70 en 140 tekens</small></label>
				<textarea class="textarea_count" name="excerpt" id="excerpt" placeholder="Een duidelijke en korte inleiding waarover je blog gaat" maxlength="140">{{blog.excerpt}}</textarea>
			</div>

			<div class="form-item">
				<label for="redactor_blog">Je blog * <small>Min. 200 woorden</small></label>
				<textarea id="redactor_blog" name="content" data-blog-id="{{blog.id}}">{{{blog.content}}}</textarea>
			</div>

			<div class="row form-item">
				<div class="col-sm-8">
					<div class="form-item">
						<label>Selecteer bijpassende foto</label>
						<input id="blog-image-upload" class="file-ignore" type="file" name="file">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-item">
						<label>Jouw huidige foto</label>
						<span class="span12">
							{{#blog.thumbnail}}
							<img src="{{blog.thumbnail}}">
							{{/blog.thumbnail}}
							{{^blog.thumbnail}}
							Nog geen foto
							{{/blog.thumbnail}}
						</span>
					</div>
				</div>
			</div>

			<div class="row form-item">
				<div class="col-sm-4">
					<div class="form-item blog-form-btns">
						<button class="btn" type="submit" name="status" value="publish">Opslaan en Publiceren</button>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-item blog-form-btns">
						{{#is_draft}}
                            <a href="/user/blog/delete/{{blog.id}}" class="btn" onclick="return confirm(\'Weet je zeker dat je \\\'{{blog.title}}\\\' wil verwijderen?\');">Verwijder</a>
						{{/is_draft}}
                        {{#is_published}}
						<a href="/blog/{{blog.slug}}" class="btn" target="_blank">Blog Bekijken</a>
                        {{/is_published}}
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-item blog-form-btns">
						<button class="btn" type="submit" name="status" value="draft">Als Concept Opslaan</button>
					</div>
				</div>
			</div>
		</fieldset>
	</form>
	';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source))
                ->renderInternal($context, $indent);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '	<form action="" method="post" enctype="multipart/form-data">';
                $buffer .= "\n";
                $buffer .= $indent . '		<fieldset>';
                $buffer .= "\n";
                // 'is_published' section
                $buffer .= $this->section034a8285399f23acb816ecdc175f688b($context, $indent, $context->find('is_published'));
                // 'is_published' inverted section
                $value = $context->find('is_published');
                if (empty($value)) {
                    
                    // 'blog.id' section
                    $buffer .= $this->section868a134409dfa26dc5cbbc2d0330d2d6($context, $indent, $context->findDot('blog.id'));
                }
                // 'has_messages' section
                $buffer .= $this->sectionC6aa5d1b74a8fa76de2fd70fb80f1822($context, $indent, $context->find('has_messages'));
                $buffer .= $indent . '			<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="title">Titel van je blog * <small>Tussen 20 en 55 tekens</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<input type="text" name="title" id="title" placeholder="Een duidelijke en unieke titel voor je blog" value="';
                $value = $context->findDot('blog.title');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" maxlength="55">';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="category">In welke categorie behoort deze blog?</label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="select-wrap">';
                $buffer .= "\n";
                $buffer .= $indent . '					<select id="category" name="category_id">';
                $buffer .= "\n";
                // 'categories' section
                $buffer .= $this->section79252d2b10d54fd6afdf6b2819edbe1c($context, $indent, $context->find('categories'));
                $buffer .= $indent . '					</select>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="excerpt">Inleiding * <small>Tussen 70 en 140 tekens</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea class="textarea_count" name="excerpt" id="excerpt" placeholder="Een duidelijke en korte inleiding waarover je blog gaat" maxlength="140">';
                $value = $context->findDot('blog.excerpt');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<label for="redactor_blog">Je blog * <small>Min. 200 woorden</small></label>';
                $buffer .= "\n";
                $buffer .= $indent . '				<textarea id="redactor_blog" name="content" data-blog-id="';
                $value = $context->findDot('blog.id');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $context->findDot('blog.content');
                if (!is_string($value) && is_callable($value)) {
                    $value = $this->mustache
                        ->loadLambda((string) call_user_func($value))
                        ->renderInternal($context, $indent);
                }
                $buffer .= $value;
                $buffer .= '</textarea>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="row form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="col-sm-8">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label>Selecteer bijpassende foto</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<input id="blog-image-upload" class="file-ignore" type="file" name="file">';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '						<label>Jouw huidige foto</label>';
                $buffer .= "\n";
                $buffer .= $indent . '						<span class="span12">';
                $buffer .= "\n";
                // 'blog.thumbnail' section
                $buffer .= $this->sectionA753f48e7dadc4e3c039a20fa24a25f4($context, $indent, $context->findDot('blog.thumbnail'));
                // 'blog.thumbnail' inverted section
                $value = $context->findDot('blog.thumbnail');
                if (empty($value)) {
                    
                    $buffer .= $indent . '							Nog geen foto';
                    $buffer .= "\n";
                }
                $buffer .= $indent . '						</span>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= "\n";
                $buffer .= $indent . '			<div class="row form-item">';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="form-item blog-form-btns">';
                $buffer .= "\n";
                $buffer .= $indent . '						<button class="btn" type="submit" name="status" value="publish">Opslaan en Publiceren</button>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="form-item blog-form-btns">';
                $buffer .= "\n";
                // 'is_draft' section
                $buffer .= $this->section7e1bc06eb7b5417eff1c923ddc841349($context, $indent, $context->find('is_draft'));
                // 'is_published' section
                $buffer .= $this->section5c6b43d48da8ac15217e14fd87b1f289($context, $indent, $context->find('is_published'));
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				<div class="col-sm-4">';
                $buffer .= "\n";
                $buffer .= $indent . '					<div class="form-item blog-form-btns">';
                $buffer .= "\n";
                $buffer .= $indent . '						<button class="btn" type="submit" name="status" value="draft">Als Concept Opslaan</button>';
                $buffer .= "\n";
                $buffer .= $indent . '					</div>';
                $buffer .= "\n";
                $buffer .= $indent . '				</div>';
                $buffer .= "\n";
                $buffer .= $indent . '			</div>';
                $buffer .= "\n";
                $buffer .= $indent . '		</fieldset>';
                $buffer .= "\n";
                $buffer .= $indent . '	</form>';
                $buffer .= "\n";
                $context->pop();
            }
        }
    
        return $buffer;
    }
}