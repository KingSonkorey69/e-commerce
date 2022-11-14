<?php
require_once "config.php";
//
//This class extends the pdo 
class Database extends PDO{

    function __construct()
    {
        $dsn = 'mysql:host='. servername.';dbname='.dbname.';port=3307';
        $options = array(
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        );
        try {
            //code...
            parent::__construct($dsn, username, password, $options);
        
        } catch (PDOException $e) {
            //throw $th;
            die($e->getMessage());
        }
    }
}