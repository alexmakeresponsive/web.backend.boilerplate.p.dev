<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 20:09
 */

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Index extends Controller
{
    public function action()
    {
        $this->view->articles = Article::findAll();
        $this->view->render(__DIR__ . '/../Views/index.php');
    }
}