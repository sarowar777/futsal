<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Home</title>

  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        </script>
  <?php include 'css/homeStyle.php' ?>
</head>

<body >
  <?php include 'dbcon.php';

  ?>
 
  <!-- Move to up button -->
  <div class="scroll-button">
    <a href="#home"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- navgaition menu -->
  <nav>
    <div class="navbar" id="navbar">
      <div class="logo"><img src="pictures/kickers logo.png"></div>
      <ul class="menu">
        <li><a href="#home">Home</a></li>
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
  
  



  <!-- Home Section Start -->
  <section class="home" id="home">
    <div class="home-content">
      <div class="text1">
        <div class="text-one">Hello,</div>
        <div class="text-two"> <?php echo  $_SESSION['username'] ?></div>
        <div class="text-three">Welcome to kickers</div>

      </div>
      <div class="button">
        <button>Enjoy!!</button>
      </div>
    </div>
  </section>

  <!-- Blog Start -->
  <div class="blog">
    <div class="container">
      <div id="slide1">
        <div class="item" style="background-image: url(../Kickers/pictures/mautd.jpg);">
          <div class="content">
            <div class="name">Premier League</div>
            <div class="des">12 years since THIS result 🤯
            </div>
            <button>See more</button>
          </div>
        </div>
        <div class="item" style="background-image: url(../Kickers/pictures/bruno.jpg);">
          <div class="content">
            <div class="name">Premier League</div>
            <div class="des">Comeback King 👑</div>
            <button>See more</button>
          </div>
        </div>
        <div class="item" style="background-image: url(../Kickers/pictures/virgil.jpg);">
          <div class="content">
            <div class="name">Premier League</div>
            <div class="des">Virgil van Dijk receives his first red card in 177 league appearances 🟥</div>
            <button>See more</button>
          </div>
        </div>
        <div class="item" style="background-image: url(../Kickers/pictures/nepal.jpg);">
          <div class="content">
            <div class="name">International</div>
            <div class="des">NEPAL'S NEXT MATCHES 🔜</div>
            <button>See more</button>
          </div>
        </div>
        <div class="item" style="background-image: url(../Kickers/pictures/pogba.jpg);">
          <div class="content">
            <div class="name">Seria A</div>
            <div class="des">Paul Pogba is ready for more at Juventus 😈</div>
            <button>See more</button>
          </div>
        </div>

      </div>
      <div class="buttons">
        <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
        <button id="next"><i class="fa-solid fa-angle-right"></i></button>
      </div>
    </div>
  </div>




  <!-- My Services Section Start -->
  <section class="services" id="services">
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="pictures/nepalwomen.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text"></span>
            <h2>
              Nepal Women's Team Remains Constant <br />
              In FIFA World Ranking
            </h2>
            <a href="#" class="button">READ MORE</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="pictures/sabitra.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text"></span>
            <h2>
              Hapoel Raanana Women FC Fails <br />
              To Enter Final
            </h2>
            <a href="#" class="button">READ MORE</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="pictures/kailali.jpg" alt="" class="image" />
          <div class="image-data">
            <span class="text"></span>
            <h2>
              Star City, Dhangadhi Enters Final Of 3rd JAG Shakti Gold <br />
              TMT Sudurpaschim Gauriganga Gold Cup
            </h2>
            <a href="#" class="button">READ MORE</a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
  </section>



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
 

 

    <!--modal for booking!-->
    <div id="modalBook" class="modalBook">
        <!-- Modal content -->
        <div class="modalBook-content">
            <span class="close">&times;</span>
            
            <h3>My Booking</h3>
            <div class="bookBody">
                <div class="bookContainer">
                    <table id="myTableBook" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Futsal</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Request</th>
                                <th>Actions</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr id="1">
                                <td class="row-data">2023-04-28</td>
                                <td class="row-data">10:00 - 11:00</td>
                                <td class="row-data">Sankhamul Futsal</td>
                                <td class="row-data">5A</td>
                                <td class="row-data">1500</td>
                                <td class="row-data">Sankhamul</td>
                                <td>
                                    <button class="acceptBadge" onclick="requestSend()">Pending</button>
                                </td>
                                <td>
                                    <button class="deleteBadge">Cancel</button>
                                </td>
                            </tr>
                            <tr id="2">
                                <td class="row-data">2023-04-25</td>
                                <td class="row-data">11:00 - 12:00</td>
                                <td class="row-data">Dhukhu Futsal</td>
                                <td class="row-data">5A</td>
                                <td class="row-data">1800</td>
                                <td class="row-data">Lazimpat</td>
                                <td>
                                    <button class="acceptBadge" onclick="requestSend()">Accepted</button>
                                </td>
                                <td>
                                    <button class="deleteBadge">Cancel</button>
                                </td>
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Futsal</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Location</th>
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
      const toggleMenu1=document.querySelector('.menu1');
      toggleMenu1.classList.add('active1');
     
    }
  </script>

  <!-- Swiper JS -->
  <script src="links/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <!--blog script!-->
  <script>
    document.getElementById('next').onclick = function() {
      let lists = document.querySelectorAll('.item');
      document.getElementById('slide1').appendChild(lists[0]);
    }
    document.getElementById('prev').onclick = function() {
      let lists = document.querySelectorAll('.item');
      document.getElementById('slide1').prepend(lists[lists.length - 1]);
    }
  </script>

<script>
  //-----------------------------Upload image-------------------------------//
let profilePic=document.getElementById("profile-pic");
let inputFile=document.getElementById("input-file");
inputFile.onchange=function(){
    profilePic.src=URL.createObjectURL(inputFile.files[0]);
}
</script>
 

</body>

</html>