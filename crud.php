<?php

//require the database connection
require_once "database.php";

//
//This class is to help in talking to the database and getting certain 
//results to paint on certain pages.
class Crud
{
    //
    //The properties of the class.
    private $db;
    public $data;
    function __construct()
    {
        $this->db = new Database();
    }
    //
    //This method will get all the details from the table book_info and
    //display all the books for the user to see
    function getImages($table)
    {
        //
        //Get the data from the database
        $sql = "SELECT * FROM " . $table;
        //
        //return the result.
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function getHouse($id)
    {   //
        //get the id from the database 
        $sql = "SELECT * FROM store_info WHERE store_info= $id";
        //
        //return the result
        $result = $this->db->query($sql);
        //
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}