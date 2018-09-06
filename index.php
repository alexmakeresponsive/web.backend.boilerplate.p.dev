<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/autoload.php';


$view = new App\View();
$view->articles = \App\Models\Article::findAll();
$view->render( __DIR__ . '/App/Templates/index.php' );

//echo '<pre>';
//var_dump( $view->articles );
//echo '</pre>';
//$view->foo = 'some str';
//var_dump(count($view));

