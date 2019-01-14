<?php
/**
 * Created by PhpStorm.
 * User: Gudz.DO
 * Date: 14.01.2019
 * Time: 12:54
 */

namespace DB;


class DB
{

    protected $dbh;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
        $this->dbh = new \PDO($dsn, $config['user'], $config['password']);
    }

    public function execute(string $sql)
    {
        $affected = $this->dbh->exec($sql);
        if ($affected === false) {
            $err = $this->dbh->errorInfo();
            if ($err[0] === '00000' || $err[0] === '01000') {
                return true;
            }
            return false;
        }
        return true;
    }

    public function query(string $sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)){
            return $sth->fetchAll();
        };
        return false;
    }

}