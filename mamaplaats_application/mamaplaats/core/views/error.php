<?php

$view = new View_HTTP_500();
$view->message = $message;

$kostache = Kostache_Layout::factory();
echo $kostache->render($view);