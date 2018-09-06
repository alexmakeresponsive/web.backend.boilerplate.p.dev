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
    public function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->render(__DIR__ . '/../Views/article.php');
    }
}