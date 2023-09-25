<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include 'app.php';
include_once('futsaldata.php');
if (isset($_POST['saveAvailability'])) {
  $inputData = [
    'dateavail' => validateInput($db->conn, $_POST['dateAvail']),
    'id' => $_SESSION['userid'],
    'starttime' => validateInput($db->conn, $_POST['startTime']),
    'endtime' => validateInput($db->conn, $_POST['endTime']),
    'futsaltype' => validateInput($db->conn, $_POST['type']),
    'price' => validateInput($db->conn, $_POST['price']),


  ];
  $futsal = new futsaldata($_SESSION['userid']);
  $result = $futsal->create($inputData);
  if ($result) {
 
    header('location:dashboard.php');
  } else {
    echo "failed";
  }
 
}
if(isset($_POST['sendButton'])){
  $inputFinderData=[
    'userid' => $_SESSION['userId'],
    'futsalName' => validateInput($db->conn, $_POST['futsalName']),
    'futsalLocation' => validateInput($db->conn, $_POST['futsalLocation']),
    'futsalType' => validateInput($db->conn, $_POST['futsalSize']),
    'dateavail' => validateInput($db->conn, $_POST['bookDate']),
  'starttime' => validateInput($db->conn, $_POST['startTime']),
  'endtime' => validateInput($db->conn, $_POST['endTime']),
  


];
$finder = new futsaldata($_SESSION['userId']);
$resultFinder = $finder->findOpp($inputFinderData);
if ($resultFinder) {

  header('location:finder.php');
} else {
  echo "failed";
}
}
?>