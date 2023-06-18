<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=epcetlibrary_management","root","");
        // echo "Connection Done";
    }catch(PDOException $e){
        // echo "Error";
        //die();

    }
}

}