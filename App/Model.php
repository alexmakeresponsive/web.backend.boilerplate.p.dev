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

    public function insertOne()
    {
        //этот метод был написан согласно паттерну ActiveRecord

        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ( $fields as $name => $value ) {
            if ( $name === 'id' ) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE .
                      '('.
                    implode(',', $cols) .')
                VALUES ('.
                    implode(',', array_keys($data)) .')';

//        var_dump($sql);

        $db = new Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastID();
    }
}