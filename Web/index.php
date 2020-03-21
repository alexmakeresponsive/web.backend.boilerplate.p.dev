<?php
header('Content-Type: text/html; charset=utf-8');

//var_dump(__DIR__);
require __DIR__ . '/../App/autoload.php';


$ctrl = $_GET['ctrl']  ?? 'Index';
$class = '\App\Controllers\\' . $ctrl;

$ctrl  = new $class;
$ctrl();


//echo '<pre>';
//var_dump( $view->articles );
//echo '</pre>';

//$view->foo = 'some str';
//var_dump(count($view));

