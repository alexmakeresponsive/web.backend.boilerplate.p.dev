<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 04.09.2018
 * Time: 13:48
 */

function __autoload($class)
{
    require __DIR__ . '/../' .str_replace('\\', '/', $class) . '.php';
}