<?php
include 'dbcon.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
if (!isset($_SESSION['userId'])) {
    header('location:login.php');
}
$query_futsal = "select * from futsaltable";
$result = $conn->query($query_futsal);

if (isset($_POST['bookButton'])) {
    $userid = mysqli_real_escape_string($conn, $_SESSION['userId']);
    $futsalid = mysqli_real_escape_string($conn, $_POST['futsalsid']);
    $futsalType = mysqli_real_escape_string($conn, $_POST['futsalSize']);
    $bdate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $startTime = mysqli_real_escape_string($conn, $_POST['starttime']);
    $endTime = mysqli_real_escape_string($conn, $_POST['endtime']);

    $insertquery = "INSERT INTO bookingdetails(user_Id,futsal_Id,futsal_type,b_Date,start_time,end_time) VALUES ('$userid','$futsalid','$futsalType','$bdate','$startTime','$endTime')";
    $iquery = $conn->query($insertquery);
    if ($iquery) {
?>
        <script>
            Swal.fire({
                title: "Booking Requested",
                text: "Please check your status in booking",
                icon: "success",
            });
        </script>
    <?php

    } else {
    ?>
        <script>
            Swal.fire({
                title: "Registration failed",
                text: "Please try again",
                icon: "error",
            });
        </script>
<?php
    }
}
if (isset($_POST['cancelBooking'])) {
    $decline = $_POST['declineBooking'];
  
    $queryDecline = "UPDATE bookingdetails SET status='Cancelled' WHERE booking_ID='$decline'";
    $resultDecline = $conn->query($queryDecline);
  }
  if (isset($_POST['deleteCancelled'])) {
    $bid = $_POST['declineBooking'];
    $query1 = "DELETE FROM bookingdetails WHERE booking_ID='$bid'";
    $result1 = $conn->query($query1);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="bookinglits.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="bookingPopup.css">


    <!-- jquery cdn-->
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- datable cdn -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <!--Datatable style-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <!--Initializing datatables-->
    <script>
        $(document).ready(function() {
            $('#myTableBook').DataTable();
        });
        $(document).ready(function() {
            $('#dashTable1').DataTable();
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <title>Futsal</title>
    <?php include 'bookinglist.php' ?>
    <!-- <?php include 'dash2.php' ?> -->

</head>

<body>
    <div class="background-container">
        <!-------------------------Top container----------------------------------->
        <nav>
            <div class="navbar">
                <div class="logo"><img src="pictures/kickers logo.png"></div>
                <ul class="menu">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="booking.php">Booking</a></li>
                  
                    <li><a href="finder.php">Finder</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <div class="cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                </ul>
                <div class="action2">
                    <!-- <div class="notification">
                        <img src="pictures/bell5.png">
                    </div> -->
                </div>
                <!--profile!-->
                <div class="action">
                    <div class="profile" onclick=" menu1Toggle()">
                        <img src="pictures/user1.png">
                    </div>
                    <div class="menu1" id="menu1">

                        <ul>
                            <li><a href="#"><?php echo  $_SESSION['username'] ?></a></li>
                            <!-- <hr class="hori"> -->
                            <li><img src="pictures/edit.png"><a href="#" id="edit">Edit profile</a></li>
                            <li><img src="pictures/settings.png"><a href="#">Settings</a></li>
                            <li><img src="pictures/question.png"><a href="#contact">Help</a></li>
                            <li><img src="pictures/log-out.png"><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <!------------------------Bottom Container---------------------------------->
        <div class="container bottom-container">

            <!-------------------------------Search Box---------------------------------->
            <div class="search-area">
                <input type="text" id="liveSearch" placeholder="Search Futsal">
                <button>Search</button>
            </div>

            <!---------------------------Filter Area-------------------------------------->
            <div class="filter-icon" id="filterIcon">
                <i class="fa-solid fa-sliders" style="color: #ff9500;"></i>
            </div>
            <div class="filter-icon1" id="filterIcon1">
                <button id="mybooking" onclick="document.getElementById('timePopup1').style.display='block'">Booking</button>
            </div>



            <div class="filter-panel" id="filterpanel">
                <div class="filter-section">

                    <!--Location-->
                    <label for="districtfilter">District :</label>
                    <select name="district" id="district">
                        <option value="district">--Select District--</option>
                    </select>
                    <label for="cityfilter">City :</label>
                    <select name="city" id="city">
                        <option value="city">--Select City--</option>
                    </select>
                </div>

                <div class="filter-section">
                    <!--Date-->
                    <label for="date">Date:</label>
                    <input type="date" id="date" class="date-picker">

                    <!--TYPE-->
                    <label for="type">Type:</label>
                    <select name="type" id="type">
                        <option value="type">7A</option>
                        <option value="type">5A</option>
                    </select>

                </div>

                <div class="filter-section">
                    Start Time :
                    <!-- <input id="demo-one-input" placeholder="Please select time...." required /> -->
                    <input type="time" class="time-picker" name="timeStart">
                    End Time :
                    <input type="time" class="time-picker" name="timeEnd">
                </div>

                <button id="applyFilter">Apply Filter</button>
            </div>
        </div>

        <!--------------------------------------- Futsal Info Section ------------------------->
        <div class="futsal-info-container">
            <?php


            while ($row = $result->fetch_assoc()) {

            ?>
                <!--------------------------- Row 1------------------------------->
                <div class="futsal-row" id="futsal-row">

                    <div class="futsal-info">
                        <div class="futsal-image">
                            <img src="<?php echo $row["futsal_Image"]; ?>">
                        </div>
                        <div class="futsal-details">
                            <h3><?php echo $row["futsal_Name"]; ?></h3>
                            <p><i class="fa-solid fa-location-dot" style="color: #ff9500;"></i> <?php echo $row["futsal_Place"]; ?></p>
                            <div class="rating">

                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span>
                            </div>
                            <p><?php echo $row["futsal_Price"]; ?></p>
                        </div>
                        <div class="choose-button">
                            <button id="view-button" onclick="openview()">View</button>
                            <button id="book-button" onclick="document.getElementById('Popup').style.display='block'" class="book-button" data-id="<?php echo $row["futsal_ID"]; ?>">Book</button>

                        </div>
                    </div>


                </div>


            <?php
            }
            ?>
        </div>

    </div>

    <div id="Popup" class="backdrop">
        <div class="popupContainer">

            <div class="popupWrap">
                <span class="closePopup" onclick="document.getElementById('Popup').style.display='none'">✕</span>
                <h4 class="popupHeader">
                    Book Futsal
                </h4>
                <div class="bookingDivider"></div>
                <form action="booking.php" method="POST" class="popupForm" id="bookForm">
                    <label for="futsalName" class="popupFormField">
                        <span style="font-weight: 600;"> Futsal</span>
                        <select name="type" id="fustalName" style="background:#D5D3FF;border:1px solid grey;border-radius:10px;" required>
                            <?php
                            $futsal_search = "select * from futsaltable";
                            $resultSearch = $conn->query($futsal_search);
                            while ($row = $resultSearch->fetch_assoc()) {
                            ?>
                                <option placeholder="select" value="<?php echo $row["futsal_ID"]; ?>"><?php echo $row["futsal_Name"]; ?></option>

                            <?php } ?>
                        </select>

                        <input type="hidden" name="futsalsid" id="futsalsid" value="">
                    </label>

                    <label for="futsalLocation" class="popupFormField">
                        <span style="font-weight: 600; ">Location</span>
                        <input type="text" style="font-size:24px; color:black;" name="futsalLocation" id="futsalLocation" value="" disabled required>
                    </label>
                    <hr>
                    <label for="futsalSize" class="popupFormField">
                        <span style="font-weight: 600;">Size</span>
                        <select name="futsalSize" id="futsalSize" multiple required>
                            <option value="5A" style="margin-right: 20px;">5A</option>
                            <option value="7A">7A</option>
                        </select>

                    </label>
                    <hr>
                    <label for="date" class="popupFormField" id="time">
                        <span style="font-weight: 600;"> Date</span>
                        <input type="date" name="bdate" id="bdate" required>

                    </label>
                    <hr>
                    <label for="demo-one-input" class="popupFormField">
                        <span style="font-weight: 600;">Start Time:</span>
                        <input type="time" name="starttime" style="border:1px solid grey;border-radius:10px;width:130px;" required>
                        <span style="font-weight: 600;">End Time:</span>
                        <input type="time" name="endtime" style="border:1px solid grey;border-radius:10px;width:130px;" required>
                    </label>
                    <hr>
                    <label for="futsalField" class="futsalField">
                        <span style="font-weight: 600;">Price</span>
                        <p>NPR 1200/hr(7am-4pm), NPR 1500/hr(4pm-8pm)</p>

                    </label>
                    <button type="submit" class="bookButton" name="bookButton">Book Now</button>
                </form>
            </div>
        </div>
    </div>


    <div id="timePopup1" class="timeBackdrop1">
        <div class="timePopupContainer1">
            <span class="closePopup" onclick="document.getElementById('timePopup1').style.display='none'">✕</span>
            <h4 class="timeHeader">
                My Booking
            </h4>
            <div class="divider"></div>

            <table id="dashTable1" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Futsal</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Request</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $id = $_SESSION['userId'];
                    $futsalquery = "SELECT  bookingdetails.booking_ID, futsaltable.futsal_Name,futsaltable.futsal_Place,bookingdetails.futsal_Id,bookingdetails.futsal_type,bookingdetails.start_time,bookingdetails.end_time,bookingdetails.b_Date,bookingdetails.status
                    FROM bookingdetails
                    INNER JOIN futsaltable ON bookingdetails.futsal_Id = futsaltable.futsal_ID WHERE bookingdetails.user_Id='$id'";

                    $result = $conn->query($futsalquery);


                    if ($result) {
                        foreach ($result as $row) {
                    ?>
                            <tr>
                                <td><?= $row['b_Date'] ?></td>
                                <td><?= $row['start_time'] ?> TO <?= $row['end_time'] ?></td>
                                <td><?= $row['futsal_Name'] ?></td>
                                <td><?= $row['futsal_Place'] ?></td>
                                <td><?= $row['futsal_type'] ?></td>


                                <td>
                                    <?= $row['status'] ?>

                                </td>
                                <td>
                                    <form action="booking.php" method="POST">
                                    <input type="hidden" name="declineBooking" value="<?php echo $row['booking_ID'] ?>">
                                        <?php 
                                        $status=$row['status'];
                                        if($status=="Cancelled"){
                                            echo "<button name='deleteCancelled' class='deleteBadge'>Delete</button>";
                                        }else{
                                            echo "<button name='cancelBooking'class='cancelBadge' >Cancel</button>";
                                        }
                                        ?>

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
                        <th>Time</th>
                        <th>Futsal</th>
                        <th>Location</th>
                        <th>Type</th>
                        <th>Request</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <!--modal for booking!-->
   
        <script>
            // Get the modal

            var modal1 = document.getElementById("modalBook");

            // Get the button that opens the modal
            var btn1 = document.getElementById("ViewBook");

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
        <script src="script.js"></script>
        <script src="bookinglits.js"></script>

        <script>
            document.addEventListener("click", function(event) {
                var profileDiv = document.querySelector(".profile");
                var targetElement = event.target;

                // Check if the clicked element is not a child of the profile div
                if (!profileDiv.contains(targetElement)) {
                    // Close the profile div
                    menu1.style.display = "none";

                }
                if (profileDiv.contains(targetElement)) {
                    // Close the profile div
                    menu1.style.display = "block";

                }


            });

            function menu1Toggle() {
                const toggleMenu1 = document.querySelector('.menu1');
                toggleMenu1.classList.add('active1');

            }
        </script>

        <script>
            function openview() {
                window.open("view.php", "_self");
            }
        </script>
        <!--live search!-->
        <script type="text/javascript">
            $(document).ready(function() {
                $("#liveSearch").keyup(function() {
                    var input1 = $(this).val();
                    $.ajax({
                        method: 'POST',
                        url: 'searchajax.php',
                        data: {
                            name: input1
                        },
                        success: function(response) {

                        }
                    });


                });
            });
        </script>
       

        <!--futsal name validation-->

        <script>
            $(document).ready(function() {
                $('#fustalName').change(function() {
                    var fid = $(this).val();

                    $.ajax({
                        type: 'POST',
                        url: 'fetch.php',
                        data: {
                            id: fid
                        },
                        dataType: 'json', // Expect JSON response
                        success: function(data) {
                            if (data.location) {
                                $('#futsalLocation').val(data.location);
                                $('#futsalsid').val(fid);
                            } else {
                                $('#futsalLocation').val('Location not found'); // Handle no location case
                            }
                        },
                        error: function() {
                            $('#futsalLocation').val('Error fetching location'); // Handle error case
                        }
                    });
                });
            });
        </script>




</body>

</html>