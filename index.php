<?php
header('Content-Type: text/html; charset=utf-8');



require __DIR__ . '/autoload.php';


//$article = new App\Models\Article();
//$result = $article->findAll();

$news = \App\Models\Article::findAll();
$users = \App\Models\User::findAll();

echo '<pre>';
var_dump($users);
echo '</pre>';