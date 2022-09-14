<?php

require 'constants.php';

$pro= new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$connection = mysqli_connect($)

if($pro -> connect_error){
    die('Database error:'.$pro->connect_error);
}