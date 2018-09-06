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
class View implements \Countable
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

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count( $this->data );
    }
}