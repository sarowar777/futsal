<?php
include 'dbcon.php';
if(isset($_POST['email'])){
 
  $emailquery= "select * from usertable where user_Email='".$_POST["email"]."'";
  $result=$conn->query($emailquery);
  if($result->num_rows>0){
  echo "<small style='color: red'>Sorry email id exists</small>";
  echo "<script>$('#submit').prop('disabled',true);</script>";
   
  }
  else{
    echo "<small style='color:#16ff16'>Email id available</small>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}

//mobile number exist or not
if(isset($_POST['phone'])){
 
  $phonequery= "select * from usertable where user_Phone='".$_POST["phone"]."'";
  $result=$conn->query($phonequery);
  if($result->num_rows>0){
  echo "<small style='color: red'>Sorry phone number exists</small>";
  echo "<script>$('#submit').prop('disabled',true);</script>";
   
  }
  else{
    echo "<small style='color:#16ff16'>Phone number available</small>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>