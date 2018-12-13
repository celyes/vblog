<?php 

namespace App;

use PDO;

class Config{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "test";
    public $connect;
    public function dbconnect(){
        $this->connect = null;
        try{
            $this->connect = new PDO('mysql:host='.$this->host.';charset=utf8; dbname='.$this->dbname, $this->user, $this->pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
            // echo "Connected successfully";
        
        }catch(PDOException $e){
        
            echo "Error : ".$e->getMessage();
        
        }   
        return $this->connect;
    }
}