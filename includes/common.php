<?php

session_start();
$db['db_host']= "localhost:1433";
$db['db_user']= "root";
$db['db_pass']= "";
$db['db_name']= "eco";

$connection= mysqli_connect($db['db_host'],$db['db_user'],$db['db_pass'],$db['db_name']);



?>