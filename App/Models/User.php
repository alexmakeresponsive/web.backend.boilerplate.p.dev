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

class User extends Model
{
    public $id;
    public $email;
    public $name;

//    public static $table = 'news';
    public const TABLE = 'users';


    public function getModelName()
    {
        // TODO: Implement getModelName() method.
    }
}