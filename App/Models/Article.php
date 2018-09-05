<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 05.09.2018
 * Time: 11:51
 */

namespace App\Models;

use App\Db;

class Article
{
    public $id;
    public $title;
    public $content;

//    public static $table = 'news';
    public const TABLE = 'news';

    public static function findAll()
    {
        $db = new Db();

        return $db->query(
             'SELECT * FROM ' .
//            Article::TABLE , [],
            self::TABLE , [],
//            '\App\Models\Article'
//            Article::class
            self::class
        );
    }
}