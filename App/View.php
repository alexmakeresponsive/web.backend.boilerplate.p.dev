<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 17:34
 */

namespace App;


class View
{
    protected $data = [];

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->data[$name];
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function render($template)
    {
        include $template;
    }
}