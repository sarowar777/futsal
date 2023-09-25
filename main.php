<?php 
include 'dbcon.php';

?>
<!DOCTYPE html>
<html>
<body>

<form action="main.php" method="post" enctype="multipart/form-data">
<input type="text" name="idFut" id="idFut" placeholder="enter futsal id">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="time" class="time">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
if($_POST['submit']){
  $id1=$_POST['idFut']; 
$filename=$_FILES["fileToUpload"]["name"];
$tempname=$_FILES["fileToUpload"]["tmp_name"];
$folder="futsalimage/".$filename;
move_uploaded_file($tempname,$folder);
if($id1!="" && $filename!=""){
  $insert1 = "Update futsaltable SET futsal_Image='$folder' where futsal_ID='$id1'";
  $result1 = $conn->query($insert1);
  if($result1){
    echo "inserted";
  }
}
}
?>