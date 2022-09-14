<?php
session_start();
include('../config/dbpr.php');

$errors = array();
$pname= "";
$pcost= "";



if(isset($_POST['edit-btn'])){

    $id= $_POST['edit_id'];
    echo $id;

    


}

