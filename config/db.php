<?php

require 'constants.php';

$conn= new mysqli(DB_HOST1, DB_USER1, DB_PASS1, DB_NAME1);



if($conn -> connect_error){
    die('Database error:'.$conn->connect_error);
}