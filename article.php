<?php
header('Content-Type: text/html; charset=utf-8');
require __DIR__ . '/autoload.php';


$view = new App\View();
$view->article = \App\Models\Article::findById($_GET['id']);
$view->render(__DIR__ . '/App/Views/article.php');

//echo '<pre>';
//var_dump( $view->article );
//echo '</pre>';

