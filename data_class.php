<?php
session_start();
include("db.php");


class data extends db{
    private $bookpic;
    private $bookname;
    private $bookdetail;
    private $bookaudor;
    private $bookpub;
    private $branch;
    private $bookprice;
    private $bookquantity;
    private $type;

    private $book;
    private $userselect;
    private $days;
    private $getdate;
    private $returnDate;

function __construct(){
    // echo "working";
}
function adminlogin($t1,$t2){
$q="SELECT * FROM admin where email='$t1' and Pass='$t2' ";
$recordSet=$this->connection->query($q);
$result=$recordSet->rowCount();

if($result >0){
    foreach($recordSet->fetchAll() as $row) {
        $logid=$row['id'];
        $_SESSION["adminid"]=$logid; 
        header("Location:admin_service_dashboard.php");
    }

}
elseif($resilt <=0){
    
    header("Location:index.php?msg=Invalid Credentials");
}
}
function userlogin($t1,$t2){
    $q="SELECT * FROM 	userdata where email='$t1' and Pass='$t2' ";
    $recordSet=$this->connection->query($q);
    $result=$recordSet->rowCount();
    
    if($result >0){
        foreach($recordSet->fetchAll() as $row) {
            $logid=$row['id'];
           
            header("Location:admin_service_dashboard.php");
        }
    
    }
    elseif($resilt <=0){
        
        header("Location:index.php?msgstu=Invalid Credentials");
    }
    }

function addnewuser($name,$password,$email,$branch,$sec){
$this->name=$name;
$this->password=$password;
$this->email=$email;
$this->branch=$branch;
$this->sec=$sec;


$q="INSERT INTO userdata(id, name, email, password,branch,sec)VALUES('','$name','$email','$password','$branch','$sec')";

if($this->connection->exec($q)) {
    header("Location:/admin_service_dashboard.php?msg=New Add done");
}

else {
    header("Location:/admin_service_dashboard.php?msg=Register Fail");
}

}



}