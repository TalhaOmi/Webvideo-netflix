<?php
ob_start();     //Turns on output for buffering

session_start();

date_default_timezone_set("Etc/GMT+6");

try{
   $con = new PDO("mysql:dbname=videoweb; host=localhost", "root","") ;  //con is the connection with the database,pdo=php date object
   $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){

    exit("connection failed: " . $e->getMessage());

}



?>