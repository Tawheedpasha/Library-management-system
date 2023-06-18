<?php

include("data_class.php");

$login_email=$_GET['login_email'];
$login_password=$_GET['login_pasword'];

if($login_email==null||$login_password==null){
    $stuemailmsg="";
    $stupasdmsg="";
    if($login_email==null){
        $stuemailmsg="Email empty";
    }
    elseif($login_password==null){
        $stupasdmsg="Password empty";
    }

    header("Location:index.php?stuademailmsg=$stuemailmsg&stuadpasdmsg=$stupasdmsg");

}
elseif($login_email!=null&&$login_password!=null){
    $obj=new data();
    $obj->setconnection();
    $obj->userlogin($login_email,$login_password);
    
}