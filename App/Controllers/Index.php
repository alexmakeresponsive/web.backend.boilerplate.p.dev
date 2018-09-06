<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 20:09
 */

namespace App\Controllers;

use App\View;
use App\Models\Article;

class Index
{
    public function action()
    {
        $view = new View();
        $view->articles = Article::findAll();
        $view->render(__DIR__ . '/../Views/index.php');
    }
}