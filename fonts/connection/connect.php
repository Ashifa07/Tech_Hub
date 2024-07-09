<?php

//main connection file for both admin & fornt end
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "code_camp_bd_fos"; //database

//create connection
$db = mysqli_connect($servername, $username, $password, $dbname); //connecting
//check connection
if ($db) {      //checking connection to DB
    die("Connection failed:" .mysqli_connect_error());
}

?>