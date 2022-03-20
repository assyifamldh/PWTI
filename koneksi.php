<?php

$host     = 'localhost';
$user     = 'root'; 
$password = '';  
$db       = 'pelanggan'; 

$db_connect = mysqli_connect($host, $user, $password, $db);
if(!$db_connect){
  die('Tidak dapat terhubung ke database:' .mysql_error());
}