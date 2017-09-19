<?php

namespace App;
use PDO;

class Db {

    protected $host = 'localhost';
    protected $db   = 'onemoreframework';
    protected $user = 'root';
    protected $pass = '';
    protected $charset = 'utf8';

    protected $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    protected $dsn;
    protected $dbh; // database handler


    public function __construct() {
        $this->dsn = "mysql:host=$this->host; dbname=$this->db; charset=$this->charset";
        $this->dbh = new \PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }

    public function execute($sql){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
            if (false !== $res){
                return $sth->fetchAll();
            } else {
                return [];
            }
    }
}