<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 05.09.2018
 * Time: 11:51
 */

namespace App\Models;

use App\Db;

class User
{
    public $id;
    public $email;
    public $name;

//    public static $table = 'news';
    public const TABLE = 'users';

    public static function findAll()
    {
        $db = new Db();

        return $db->query(
             'SELECT * FROM ' .
            self::TABLE , [],
            self::class
        );


    }
}