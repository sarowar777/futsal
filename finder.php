<?php
 include 'dbcon.php';


session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
if (!isset($_SESSION['userId'])) {
  header('location:login.php');
}
if (isset($_POST['sendRequest'])) {
  $sendRequest = $_POST['finderid'];
  $finderuserid = $_POST['finderuserid'];
  $userids=$_SESSION['userId'];
  $querySend = "UPDATE finder SET request='Pending',user_ID2='$userids' WHERE finder_ID='$sendRequest'";
  $resultSend = $conn->query($querySend);


}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Finder</title>
  <!-- <link rel="stylesheet" href="blog.css" />
    <link rel="stylesheet" href="opponentFinder.css" /> -->
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Time custom cdn-->
  <link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
  <script src="js/mobiscroll.javascript.min.js"></script>

  <!-- jquery cdn-->
  <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- datable cdn -->
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
  <!--Datatable style-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
  <!--Initializing datatables-->
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
    $(document).ready(function() {
      $('#myTable1').DataTable();
    });
    $(document).ready(function() {
      $('#myTable2').DataTable();
    });
  </script>
  <?php include 'css/homeStyle.php' ?>
  <?php include 'opponentFinder.php' ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav class="navMenu">
    <div class="navbar" id="navbar">
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
      <!--notification!-->
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
            <hr>
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
  <header class="finderHeader">
    <h3>Opponent Finder</h3>
    <!-- <div class="divider"></div> -->
    <div class="findForm">
      <form action="dashin.php" method="POST" id="findForm">
        <div class="findFormFields">
          <div class="findFormField">
            <input type="text" name="futsalName" id="futsalName" placeholder="Enter futsal name.." required>
          </div>
          <div class="findFormField">
            <input type="text" name="futsalLocation" id="futsalLocation" placeholder="Enter futsal location.." required>
          </div>
          <div class="findFormField">
            <select name="futsalSize" id="futsalSize" required>
              <option value="5A">5A</option>
              <option value="7A">7A</option>
            </select>
          </div>
          <div class="findFormField">
            <input placeholder="Enter booked date.." type="text" onfocus="(this.type = 'date')" id="date" style=" width: 140px; overflow: hidden;" name="bookDate" required>
          </div>
          <div class="findFormField">
            <!-- <input id="demo-one-input" placeholder="Please select time...." required /> -->
            <input placeholder="Enter start time." type="text" onfocus="(this.type = 'time')" id="startTime" name="startTime" style=" width: 140px; overflow: hidden;"  required>
          </div>
          <div class="findFormField">
            <!-- <input id="demo-one-input" placeholder="Please select time...." required /> -->
            <input placeholder="Enter end time." type="text" onfocus="(this.type = 'time')" id="endTime" style=" width: 140px; overflow: hidden;" name="endTime" required>
          </div>
          <button type="submit" class="sendButton" name="sendButton">Send</button>
         
        </div>
      </form>
      <button type="text" class="ViewButton" id="ViewButton" onclick="openmodal()">View</button>
    </div>
  </header>

  <div class="finderBody">
    <div class="finderContainer">
      <table id="myTable" class="display" style="width:100%">
        <thead>
          <tr>
            <th>User</th>
            <th>Phone No.</th>
            <th>Futsal</th>
            <th>Location</th>
            <th>Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Request</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
           $id = $_SESSION['userId'];
           $finderquery11 = "SELECT  finder.finder_ID,finder.user_Id, usertable.user_Name,usertable.user_Phone,finder.futsal_Name,finder.futsal_Location,finder.futsal_type,finder.book_Date,finder.start_Time,finder.end_Time,finder.request
      FROM finder
      INNER JOIN usertable ON finder.user_Id = usertable.user_ID";

           $result11 = $conn->query($finderquery11);


           if ($result11) {
             foreach ($result11 as $row) {
           ?>
               <tr>
                 <td><?= $row['user_Name'] ?></td>
                 <?php 
                  if($row['request']=="Accepted"){
                   ?>
                   <td><?= $row['user_Phone'] ?></td>
                   <?php
                  }
                  else{
                    ?>
                    <td></td>
                    <?php
                  }
                 ?>
                 
                
              
                 
                 <td><?= $row['futsal_Name'] ?></td>
                 <td><?= $row['futsal_Location'] ?></td>
                 <td><?= $row['futsal_type'] ?></td>
                 <td><?= $row['book_Date'] ?></td>
                 <td><?= $row['start_Time'] ?> TO <?= $row['end_Time'] ?></td>
                 <td>
                   <?= $row['request'] ?>

                 </td>
                 <td>
                   <form action="finder.php" method="POST">
                   <input type="hidden" name="finderid" value="<?php echo $row['finder_ID'] ?>">
                   <input type="hidden" name="finderuserid" value="<?php echo $row['user_Id'] ?>">
                   <?php
                   $status=$row['request'];
                   
                   if($row['user_Id']==$_SESSION['userId']){
                    echo "<button class='editBadge' onclick='edit()'>Edit</button>
                    <button class='deleteBadge'>Delete</button>";

                   }
                   elseif($status=="NULL"){
                    echo "<button name='sendRequest'class='sendBadge'>Send</button> ";
                   }
                   elseif($status=="Pending"){
                    echo "<button class='cancelBadge'>Cancel</button> ";
                   }
                   elseif($status=="Accepted"){
                    echo "<button>Cancel</button> ";
                   }
                   elseif($status=="Declined"){
                    echo "<button>Delete</button> ";
                   }
                   else{
                    echo "Invalid";
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
          <tr id="1">
            <td class="row-data">Shyam Shrestha</td>
            <td class="row-data"></td>
            <td class="row-data">Sankhamul Futsal</td>
            <td class="row-data">Sankhamul</td>
            <td class="row-data">5A</td>
            <td class="row-data">2023-08-25</td>
            <td class="row-data">08:00 - 9:00</td>
            <td>
              <!-- <button class="acceptBadge" onclick="requestSend()">Send</button> -->
            </td>
            <td>
              <button class="editBadge" onclick="edit()">Edit</button>
              <button class="deleteBadge">Delete</button>
            </td>
          </tr>
         
          </tr>
          
        </tbody>
        <tfoot>
          <tr>
            <th>User</th>
            <th>Phone No.</th>
            <th>Futsal</th>
            <th>Location</th>
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


  <div id="Popup" class="backdrop">
    <div class="popupContainer">
      <div class="popupWrap">
        <span class="closePopup" onclick="document.getElementById('Popup').style.display='none'" style="margin-left: 20px;">✕</span>
        <form action="dashin.php" method="POST" id="editForm">
          <div class="editFormFields">
            <input type="hidden" name="row-id">
            <div class="editFormField">
              <input type="text" name="futsalName" id="futsalName" placeholder="Enter futsal name.." required>
            </div>
            <div class="editFormField">
              <input type="text" name="futsalLocation" id="futsalLocation" placeholder="Enter futsal location.." required>
            </div>
            <div class="editFormField">
              <select name="futsalSize" id="futsalSize" required>
                <option value="5A">5A</option>
                <option value="7A">7A</option>
              </select>
            </div>
            <div class="editFormField">
              <input placeholder="Enter booked date.." type="text" onfocus="(this.type = 'date')" id="date" style=" width: 140px; overflow: hidden;" required>
            </div>
            <div class="editFormField">
              <input id="demo-one-input" placeholder="Please select time...." required />
            </div>
            <button type="submit" class="editButton">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Contact Me section Start -->
  <section class="contact" id="contact">
    <div class="content">
      <div class="title"><span>Contact US</span></div>
      <div class="text">
        <div class="topic">Have Any Problem?</div>
        <p>Send us mail at Kickers@gmail.com or contact technical support for the assistance.Thank You!</p>
        <div class="button">
          <button>Let's Chat</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section Start -->
  <footer>
    <div class="text">
      <span>Created By <a href="#">Kickers</a> | &#169; 2023 All Rights Reserved</span>
    </div>
  </footer>
  <div id="myModal1" class="modal1">
  
  <!-- Modal content -->
  <div class="modal-content">

    <span class="close">&times;</span>

    <div class="finderBody">
    <h3>Opponent Request</h3>
    <div class="finderContainer">
    
      <table id="myTable2" class="display" style="width:100%">
        <thead>
          <tr>
            <th>User</th>
            <th>Phone No.</th>
            <th>Futsal</th>
            <th>Location</th>
            <th>Type</th>
            <th>Date</th>
            <th>Time</th>
            <th>Request</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
       
          <tr id="1">
            <td class="row-data">Tiger Nixon</td>
            <td class="row-data"></td>
            <td class="row-data">Sankhamul Futsal</td>
            <td class="row-data">Sankhamul</td>
            <td class="row-data">5A</td>
            <td class="row-data">2023-04-25</td>
            <td class="row-data">10:00 - 11:00</td>
            <td>
              <button class="pendingBadge" onclick="requestSend()">Pending</button>
            </td>
            <td>
              <button class="editBadge" onclick="edit()">Accept</button>
              <button class="deleteBadge">Cancel</button>
            </td>
          </tr>
          
          
        </tbody>
        <tfoot>
          <tr>
            <th>User</th>
            <th>Phone No.</th>
            <th>Futsal</th>
            <th>Location</th>
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
    

  </div>
  
  <script>
  // Get the modal
var modal = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("ViewButton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>
  <script>
    const requestSend = () => {
      //this gives id of tr whose button was clicked
      var rowId = event.target.parentNode.parentNode.id;

      /*returns array of all elements with
      "row-data" class within the row with given id*/
      var data = document.getElementById(rowId).querySelectorAll(".row-data");

      var user = data[0].innerHTML;
      var futsalName = data[1].innerHTML;
      var location = data[2].innerHTML;
      var type = data[3].innerHTML;
      var date = data[4].innerHTML;
      var time = data[5].innerHTML;

      console.log("user: " + user + " " +
        "futsal: " + futsalName + " " +
        "location:  " + location + " " +
        "type: " + type + " " +
        "date: " + date + " " +
        "time: " + time + " ")
    }

    //edit button functionality
    const edit = () => {
      //this gives id of tr whose button was clicked
      var rowId = event.target.parentNode.parentNode.id;

      /*returns array of all elements with
      "row-data" class within the row with given id*/
      var data = document.getElementById(rowId).querySelectorAll(".row-data");

      /* filling the update form with row data */
      var editForm = document.forms['editForm'];
      editForm.elements['row-id'].value = rowId;
      editForm.elements['futsalName'].value = data[1].innerHTML;
      editForm.elements['futsalLocation'].value = data[2].innerHTML;
      editForm.elements['futsalSize'].value = data[3].innerHTML;
      editForm.elements['date'].value = data[4].innerHTML;
      editForm.elements['demo-one-input'].value = data[5].innerHTML;
      document.getElementById('Popup').style.display = 'block';
    }

    //update button functionality
    let editForm = document.getElementById("editForm");
    editForm.addEventListener("submit", (e) => {
      e.preventDefault();
      /* getting the updated form*/
      var editForm = document.forms['editForm'];

      /*selecting the row to be updated */
      var rowId = editForm.elements["row-id"].value;
      var data = document.getElementById(rowId).querySelectorAll(".row-data");

      /* filling the row with updated data*/
      data[1].innerHTML = editForm.elements['futsalName'].value;
      data[2].innerHTML = editForm.elements['futsalLocation'].value;
      data[3].innerHTML = editForm.elements['futsalSize'].value;
      data[4].innerHTML = editForm.elements['date'].value;
      data[5].innerHTML = editForm.elements['demo-one-input'].value;

      document.getElementById('Popup').style.display = 'none'
    });

    //delete button functionality
    $(document).ready(function() {
      $("#myTable").on('click', '.deleteBadge', function() {
        $(this).closest('tr').remove();
      });
    });

  
  </script>
  <script src="script.js"></script>
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
</body>

</html>