<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'blogweb';

$conn = new MySQLi($host,$user,$pass,$dbname);

if ($conn -> connect_error){
    die('Database connection error : '.$conn ->connect_error);
}

?>