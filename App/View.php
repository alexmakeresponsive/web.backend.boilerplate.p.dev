<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 06.09.2018
 * Time: 17:34
 */

namespace App;


/**
 * Class View
 * @package App
 *
 * @property array $articles
 */
class View
{
    protected $data = [];

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
        //return false by default
        return isset($this->data[$name]);
    }

    /**
     * @deprecated
     */
    public function render($template)
    {
        include $template;
    }
}