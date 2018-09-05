<?php
/**
 * Created by PhpStorm.
 * User: gorchakovalexandr
 * Date: 04.09.2018
 * Time: 13:55
 */

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];

        $this->dbh = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['db'],
            $config['user'],
            $config['password']
        );
        $this->dbh->exec("set names utf8");

    }

    public function query( $sql, $data=[], $class )
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        $data = $sth->fetchAll();

        $ret =[];

        foreach ($data as $row) {
            $item = new $class;

            foreach ($row as $key=>$value) {
                if (is_numeric($key)) {
                    continue;
                }
                $item->$key = $value;
            }

            $ret[] = $item;
        }

        return $ret;
    }
}