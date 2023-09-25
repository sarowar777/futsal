<?php
include 'dbcon.php';
$name=$_POST['name'];
 $sql_query="select * from futsaltable WHERE futsal_Name LIKE '$name'";
 $result12= $conn->query($sql_query);
 while( $row12=$result12->fetch_assoc())  {

 }
?>