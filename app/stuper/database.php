<?php

class database {

    private $host;
    private $dbname;
    private $user;
    private $password;
    public $bdd;

    public function __construct()
    {
        $this->host = "localhost:8889";
        $this->dbname = "admin-mustii";
        $this->user = "root";
        $this->password = "root";
        $this->bdd = $this->connect();
    }

    public function connect()
    {
        try
        {
           return new PDO('mysql:host='. $this->host .';dbname='. $this->dbname .';charset=utf8', $this->user, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

    }
}
