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
    }

    public function connect()
    {
        try
        {
            $this->bdd = new PDO('mysql:host='. $this->host .';dbname='. $this->dbname .';charset=utf8', $this->user, $this->password);
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

    }
}
