<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/autoload.php';


$ctrl = new \App\Controllers\Article();
$ctrl->action();

//echo '<pre>';
//var_dump( $view->article );
//echo '</pre>';

