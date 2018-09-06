<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 20:09
 */

namespace App\Controllers;

use App\Controller;

class Article extends Controller
{
    protected function handle()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->render(__DIR__ . '/../Views/article.php');
    }
}