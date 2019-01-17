<?php

namespace App\Models;


class DB
{

    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../../../config.php')['db'];
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
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        };
        return false;
    }

}