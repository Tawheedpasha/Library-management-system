<?php
echo "submited";

include("data_class.php");

$name=$_POST['addname'];
$password= $_POST['addpass'];
$email= $_POST['addemail'];
$branch= $_POST['branch'];
$sec= $_POST['sec'];


$obj=new data();
$obj->setconnection();
$obj->addnewuser($name,$password,$email,$branch,$sec);
?>