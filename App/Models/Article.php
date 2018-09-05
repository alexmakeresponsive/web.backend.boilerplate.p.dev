<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 05.09.2018
 * Time: 11:51
 */

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public $id;
    public $title;
    public $content;

//    public static $table = 'news';
    public const TABLE = 'news';


    public function getModelName()
    {
        // TODO: Implement getModelName() method.
    }
}