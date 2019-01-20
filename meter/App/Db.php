<?php

namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = Config::getConfig();

        $dsn = 'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'];
        $this->dbh = new \PDO($dsn, $config->data['db']['user'], $config->data['db']['password']);
    }

    public function execute(string $sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query(string $sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth->execute($data)){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        };
        return false;
    }

    /**
     * @return integer
     */
    public function lastId()
    {
        return (int)$this->dbh->lastInsertId();
    }

}