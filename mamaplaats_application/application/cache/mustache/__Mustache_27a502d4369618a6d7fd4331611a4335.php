<?php

class __Mustache_27a502d4369618a6d7fd4331611a4335 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="blogger">';
        $buffer .= "\n";
        $buffer .= $indent . '    <div class="holder">';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="photo">';
        $buffer .= "\n";
        $buffer .= $indent . '            <a class="photo-wrap" href="/lid/';
        $value = $context->find('slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '                <b><img alt="';
        $value = $context->find('full_name');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" src="';
        $value = $context->find('avatar');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" width="140" height="120"></b>';
        $buffer .= "\n";
        $buffer .= $indent . '                <!--<span class="title">supermama</span>-->';
        $buffer .= "\n";
        $buffer .= $indent . '            </a>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        <h3>';
        $buffer .= "\n";
        $buffer .= $indent . '            <a href="/lid/';
        $value = $context->find('slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $buffer .= "\n";
        $buffer .= $indent . '                ';
        $value = $context->find('full_name');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= "\n";
        // 'full_name' inverted section
        $value = $context->find('full_name');
        if (empty($value)) {
            
            $buffer .= $indent . '                    &nbsp;';
            $buffer .= "\n";
        }
        $buffer .= $indent . '            </a>';
        $buffer .= "\n";
        $buffer .= $indent . '        </h3>';
        $buffer .= "\n";
        $buffer .= $indent . '        <div class="info">';
        $buffer .= "\n";
        $buffer .= $indent . '            <a href="javascript:void(0);" class="comments link-to-text">';
        $value = $context->find('comments_count');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' reacties</a> <a href="javascript:void(0);" class="followers link-to-text">';
        $value = $context->find('followers_count');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' volgers</a>';
        $buffer .= "\n";
        $buffer .= $indent . '        </div>';
        $buffer .= "\n";
        $buffer .= $indent . '        <p>';
        $value = $context->find('biography');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' <a href="/lid/';
        $value = $context->find('slug');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">Bekijk volledig profiel</a></p>';
        $buffer .= "\n";
        $buffer .= $indent . '        <a href="#" data-follow-id="';
        $value = $context->find('id');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn follow grey btn-with-stars">Wordt Gevolgd</a>';
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