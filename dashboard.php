<?php
include 'dbcon.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}

if (isset($_POST['delete_slot'])) {
  $bid = $_POST['delete1'];
  $query = "DELETE FROM availablebooking where futsal_Bid='$bid'";
  $result = $conn->query($query);
}
if (isset($_POST['accept12'])) {
  $accept = $_POST['accept1'];

  $queryAccept = "UPDATE bookingdetails SET status='Approved' WHERE booking_ID='$accept'";
  $resultAccept = $conn->query($queryAccept);
}


if (isset($_POST['cancelBooking'])) {
  $delete = $_POST['deleteBooking'];

  $queryDelete = "UPDATE bookingdetails SET status='Cancelled' WHERE booking_ID='$delete'";
  $resultDelete = $conn->query($queryDelete);
}

if (isset($_POST['declinerequest'])) {
  $decline = $_POST['declineBooking'];

  $queryDecline = "UPDATE bookingdetails SET status='Declined' WHERE booking_ID='$decline'";
  $resultDecline = $conn->query($queryDecline);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- jquery cdn-->
  <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- datable cdn -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <!--Datatable style-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <!--Initializing datatables-->
  <script>
    $(document).ready(function() {
      $('#dashTable').DataTable();
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#dashTable1').DataTable();
    });
    $(document).ready(function() {
      $('#dashTable2').DataTable();
    });
  </script>
  <?php include 'dash.php' ?>
  <?php include 'dash2.php' ?>
  <?php include 'futsaldata.php' ?>

  <title>Admin</title>
</head>

<body>
  <?php include 'dbconnection.php'; ?>


  <div class="container">
    <div class="navigation" id="navigation">
      <ul>
        <li>
          <a href="#">
            <img src="pictures/kickers logo.png">
          </a>
        </li>
        <li>
          <a href="dashboard.php">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title" class="active">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><ion-icon name="alert-circle-outline"></ion-icon></span>
            <span class="title">Report</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
            <span class="title">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="topbar">
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>
        <h3><u><?php echo $_SESSION['username'] ?></u></h3>

        <div class="user">
          <img src="pictures/cupon.JPG" id="pro" />
        </div>
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="pictures/cupon.JPG" />
              <h4>David DeGea</h4>
            </div>
            <hr />
            <a href="#" class="sub-menu-link">
              <img src="profile.png" />
              <p>Edit Profile</p>
              <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="setting.png" />
              <p>Settings & Privacy</p>
              <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="help.png" />
              <p>Help & Support</p>
              <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="logout.png" />
              <p>Logout</p>
              <span><ion-icon name="chevron-forward-outline"></ion-icon></span>
            </a>
          </div>
        </div>
      </div>
      <!-- mid div start -->

      <div class="dashInner">
        <h2>Dashboard</h2>
        <div class="timeSlots">
          <div class="timeSlotHeader">
            <h3>Available Time</h3>
            <button onclick="document.getElementById('timePopup').style.display='block'">Update</button>
            <h3>My Updated Time</h3>
            <button onclick="document.getElementById('timePopup2').style.display='block'">View</button>
            <h3>Booking</h3>
            <button onclick="document.getElementById('timePopup1').style.display='block'">Show</button>
          </div>
          <div class="timeSlot">

          </div>
        </div>
        <div class="divider"></div>
        <div class="requestTable">
          <h3>Request Table</h3>
          <table id="dashTable" class="display" style="width:100%">
            <thead>
              <tr>
                <th>User</th>
                <th>Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $id = $_SESSION['userid'];
              $futsalquery = "SELECT  bookingdetails.booking_ID, usertable.user_Name,bookingdetails.futsal_Id,bookingdetails.futsal_type,bookingdetails.start_time,bookingdetails.end_time,bookingdetails.b_Date,bookingdetails.status
         FROM bookingdetails
         INNER JOIN usertable ON bookingdetails.user_Id = usertable.user_ID WHERE bookingdetails.status='Pending'";

              $result = $conn->query($futsalquery);


              if ($result) {
                foreach ($result as $row) {
              ?>
                  <tr>
                    <td><?= $row['user_Name'] ?></td>
                    <td><?= $row['futsal_type'] ?></td>
                    <td><?= $row['b_Date'] ?></td>
                    <td><?= $row['start_time'] ?> TO <?= $row['end_time'] ?></td>
                    <td>
                      <button class="pendingBadge"><?= $row['status'] ?></button>

                    </td>
                    <td>
                      <form action="dashboard.php" method="POST">
                        <input type="hidden" name="accept1" value="<?php echo $row['booking_ID'] ?>">
                        <button class="acceptBadge" name="accept12">Accept</button>
                        <input type="hidden" name="declineBooking" value="<?php echo $row['booking_ID'] ?>">
                        <button class="deleteBadge" name="declineRequest" type="submit">Decline</button>

                      </form>

                    </td>
                  </tr>

              <?php
                }
              } else {
                echo "No Record Found";
              }
              ?>

            </tbody>
            <tfoot>
              <tr>
                <th>User</th>

                <th>Type</th>
                <th>Date</th>
                <th>Time</th>
                <th>Request</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <!--ends-->
    </div>
  </div>
  <div id="timePopup" class="timeBackdrop">
    <div class="timePopupContainer">
      <span class="closePopup" onclick="document.getElementById('timePopup').style.display='none'">✕</span>
      <h4 class="timeHeader">
        Update Available Time
      </h4>
      <div class="divider"></div>
      <form action="dashin.php" method="POST" class="formUpdate">
        Date:<input type="date" name="dateAvail"><br><br>
        Start Time:<input type="time" name="startTime" value="08:00"><br><br>
        End Time:<input type="time" name="endTime" value="09:00"><br><br>
        Type: <select name="type" id="type">
          <option value="5A">5A</option>
          <option value="7A">7A</option>
        </select><br><br>
        Price:<input type="text" name="price"><br><br>
        <button class="btn btn-primary" name="saveAvailability">Submit</button>

      </form>


    </div>
  </div>

  <div id="timePopup1" class="timeBackdrop1">
    <div class="timePopupContainer1">
      <span class="closePopup" onclick="document.getElementById('timePopup1').style.display='none'">✕</span>
      <h4 class="timeHeader">
        Booking Details
      </h4>
      <div class="divider"></div>

      <table id="dashTable1" class="display" style="width:100%">
        <thead>
          <tr>
            <th>User</th>
            <th>Contact</th>
            <th>Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Request</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $id = $_SESSION['userid'];
          $futsalquery = "SELECT  bookingdetails.booking_ID, usertable.user_Name,usertable.user_Phone,bookingdetails.futsal_Id,bookingdetails.futsal_type,bookingdetails.start_time,bookingdetails.end_time,bookingdetails.b_Date,bookingdetails.status
FROM bookingdetails
INNER JOIN usertable ON bookingdetails.user_Id = usertable.user_ID WHERE bookingdetails.status='Approved' AND bookingdetails.futsal_Id = $id";

          $result = $conn->query($futsalquery);


          if ($result) {
            foreach ($result as $row) {
          ?>
              <tr>
                <td><?= $row['user_Name'] ?></td>
                <td><?= $row['user_Phone'] ?></td>
                <td><?= $row['futsal_type'] ?></td>
                <td><?= $row['b_Date'] ?></td>
                <td><?= $row['start_time'] ?> TO <?= $row['end_time'] ?></td>
                <td>
                  <button class="acceptedBadge"><?= $row['status'] ?></button>

                </td>
                <td>
                  <form action="dashboard.php" method="POST">
                    <input type="hidden" name="deleteBooking" value="<?php echo $row['booking_ID'] ?>">
                    <button class="deleteBadge" name="cancelBooking">Cancel</button>

                  </form>
                </td>
              </tr>

          <?php
            }
          } else {
            echo "No Record Found";
          }
          ?>

        </tbody>
        <tfoot>
          <tr>
            <th>User</th>
            <th>Contact</th>
            <th>Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Request</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>

    </div>
  </div>


  <div id="timePopup2" class="timeBackdrop2">
    <div class="timePopupContainer2">
      <span class="closePopup" onclick="document.getElementById('timePopup2').style.display='none'">✕</span>
      <h4 class="timeHeader">
        Updated Time
      </h4>
      <div class="divider"></div>

      <table id="dashTable2" class="display" style="width:100%">
        <thead>
          <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Time</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $id = $_SESSION['userid'];
          $futsalquery = "select * from availablebooking where futsal_Id='$id'";
          $result = $conn->query($futsalquery);


          if ($result) {
            foreach ($result as $row) {
          ?>
              <tr>
                <td><?= $row['date_Avail'] ?></td>
                <td><?= $row['futsal_Type'] ?></td>
                <td><?= $row['start_Time'] ?> TO <?= $row['end_Time'] ?></td>
                <td><?= $row['futsal_Price'] ?></td>
                <td>
                  <form action="dashboard.php" method="POST">
                    <input type="hidden" name="delete1" value="<?php echo $row['futsal_Bid'] ?>">
                    <button type="submit" name="delete_slot" class="deleteBadge" value="">Delete</button>
                  </form>

                </td>

              </tr>

          <?php
            }
          } else {
            echo "No Record Found";
          }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Time</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>

    </div>
  </div>




  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!--time update functionality-->


  <!--accept functionality-->
  <script>
    const accept = () => {

      //this gives id of tr whose button was clicked
      var rowId = event.target.parentNode.parentNode.id;
      console.log(rowId);
      document.getElementById(rowId).querySelector(".acceptedBadge").style.display = "block";
      document.getElementById(rowId).querySelector(".pendingBadge").style.display = "none";
      document.getElementById(rowId).querySelector(".acceptBadge").style.display = "none";
    };

    $(document).ready(function() {
      $("#dashTable").on('click', '.deleteBadge', function() {
        $(this).closest('tr').remove();
      });
    });
  </script>
  <script>
    // Get the modal

    var modal1 = document.getElementById("subMenu");

    // Get the button that opens the modal
    var btn1 = document.getElementById("pro");

    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn1.onclick = function() {
      modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
      modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal1) {
        modal1.style.display = "none";
      }
    }
  </script>
  <script>
    //menutoggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");
    toggle.onclick = function() {
      navigation.classList.toggle("active");
      main.classList.toggle("active");
    };

    //add hovered class
    let list = document.querySelectorAll(".navigation li");

    function activelink() {
      list.forEach((item) => item.classList.remove("hovered"));
      this.classList.add("hovered");
    }
    list.forEach((item) => item.addEventListener("mouseover", activelink));

    //for profile dropdown
  </script>



  <script>
    //for notification
    let subMenu2 = document.getElementById("notifiWrap");

    function testnoti() {
      subMenu2.classList.toggle("open-noti");
      console.log("hello1");
    }
  </script>






</body>

</html>