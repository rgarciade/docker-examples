<?php
include_once  __DIR__ ."/../../constants.php";
function connection(){ 
    $connection = mysqli_connect(HOST, PASSWORD, USER);
    return $connection;
}