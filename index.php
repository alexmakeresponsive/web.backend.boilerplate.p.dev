<?php
header('Content-Type: text/html; charset=utf-8');



require __DIR__ . '/autoload.php';


//$article = new App\Models\Article();
//$result = $article->findAll();

//$news = \App\Models\Article::findAll();
//$users = \App\Models\User::findAll();

//$article = new \App\Models\Article();
//$article->title = 'Hyundai может выпустить конкурента Toyota Land Cruiser 200';
//$article->content = 'Новая модель может появиться в линейке Hyundai минимум через три года, сообщает австралийское издание Car Sales. По информации портала, это будет полноразмерный внедорожник, главным конкурентом которого станет Toyota Land Cruiser 200. Если проект получит «зеленый свет», то основными рынками для него будут, собственно, Австралия, Ближний Восток и, возможно, США. Впрочем, в России тоже любят большие машины, так что и в нашей стране такая модель Hyundai наверняка нашла бы покупателей.';
//
//$article->insertOne();

//echo '<pre>';
//var_dump($news);
//echo '</pre>';

//$articles = \App\Models\Article::findAll();
//include __DIR__ . '/App/Templates/index.php';

$view = new App\View();
$view->articles = \App\Models\Article::findAll();
$view->render( __DIR__ . '/App/Templates/index.php' );

