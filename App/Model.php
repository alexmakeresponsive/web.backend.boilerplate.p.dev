<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 05.09.2018
 * Time: 12:36
 */

namespace App;


abstract class Model
{
    public const TABLE = '';

    public abstract function getModelName();

    public static function findAll()
    {
        //self - раннее статическое связывание
        //ыефешс - позднее статическое связыавние
        //всего 3 стадии компиялции PHP
        //ORM - object relation mapping

        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query(
            $sql , [], static::class
        );
    }
}