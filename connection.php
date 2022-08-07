<?php
$con = mysqli_connect('localhost','root','','cart_db');

if(mysqli_connect_errno()){
    die("Cannot Connect to Database".mysqli_connect_errno());
}

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/php_assignment/upload/");
define("FETCH_SRC","http://127.0.0.1/php_assignment/upload/")

?> 