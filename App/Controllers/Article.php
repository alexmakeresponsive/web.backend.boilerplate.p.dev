<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 20:09
 */

namespace App\Controllers;

use App\View;

class Article
{
    public function action()
    {
        $view = new View();
        $view->article = \App\Models\Article::findById($_GET['id']);
        $view->render(__DIR__ . '/../Views/article.php');
    }
}