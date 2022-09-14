<?php 
//session_start();
include('authController.php');
//include('add.php');
//include('../config/db.php');

if($pro){

}
else{
    header("location:../config/dbpr.php");
}
if(!$_SESSION['username']){
    header('location: login.php');
}

?>