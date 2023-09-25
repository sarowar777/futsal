<?php 
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','kickers');
include_once('dbconnection.php');
$db=new dbconnection;

function validateInput($dbcon,$input){
  return mysqli_real_escape_string($dbcon,$input);
}
?>