<?php
include 'dbcon.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sqlLoc = "SELECT futsal_Place FROM futsaltable WHERE futsal_ID = $id";
    $result1 = $conn->query($sqlLoc);

    if ($row = $result1->fetch_assoc()) {
        $response = array('location' => $row['futsal_Place']);
        echo json_encode($response);
    } else {
        // Handle no location found
        echo json_encode(array('location' => 'Location not found'));
    }
} else {
    // Handle invalid request
    echo json_encode(array('location' => 'Invalid request'));
}

?>
