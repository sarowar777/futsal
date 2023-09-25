<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="view.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Futsal Information</title>
  <?php include 'viewcss.php'?>
</head>

<body>
  <div class="background">
    <div class="top-area">
      <nav>
        <div class="navbar">
          <div class="logo"><img src="pictures/kickers logo.png"></div>
          <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="booking.php">Futsal</a></li>
            <li><a href="#">Booking</a></li>
            <li><a href="finder.php">Finder</a></li>
            <li><a href="#contact">Contact</a></li>
            <div class="cancel-btn">
              <i class="fas fa-times"></i>
            </div>
          </ul>
          <!--notification!-->
          <div class="action2">
            <div class="notification">
              <img src="pictures/bell5.png">
            </div>
          </div>
          <!--profile!-->
          <div class="action">
            <div class="profile" onclick=" menu1Toggle()">
              <img src="pictures/user1.png">
            </div>
            <div class="menu1" id="menu1">

              <!-- <ul>
              <li><a href="#"><?php echo  $_SESSION['username'] ?></a></li>
              <hr>
              <li><img src="pictures/edit.png"><a href="#" onclick="toggle()">Edit profile</a></li>
              <li><img src="pictures/settings.png"><a href="#">Settings</a></li>
              <li><img src="pictures/question.png"><a href="#contact">Help</a></li>
              <li><img src="pictures/log-out.png"><a href="logout.php">Logout</a></li>
            </ul> -->
            </div>
          </div>

          <div class="menu-btn">
            <i class="fas fa-bars"></i>
          </div>
      </nav>
    </div>


    <div class="content-area">
      <div class="futsal-view">
        <section class="futsalname">
          <button class="backbtn" onclick="viewfunc()" ><i class="fa-solid fa-arrow-left-long" style="color: #ff9500;"></i></i></button>
        </section>
        <section class="futsalinfo">
          <img src="pictures/dhukhu.jpg">
          <div class="aboutfutsal">
            <h2>Sankhamul Futsal</h2>
            <p><i class="fa-solid fa-location-dot" style="color: #ff9500;"></i> Sankhamul, Kathmandu</p>
            <p><i class="fa-solid fa-phone" style="color: #ff9500;"></i> +977 981235467,01-1234567</p>
            <p><i class="fa-solid fa-star" style="color: #ff9500;"></i> 4.9</p>


            <span class="facilities">Facilities :</span>
            <div class="facility">
              <ul class="list1">
                <li><i class="fa-solid fa-car" style="color: #f19e0e;"></i> Parking Spot</li>
                <li><i class="fa-solid fa-person-booth" style="color: #f19e0e;"></i> Changing Room</li>
              </ul>
              <ul class="list2">
                <li><i class="fa-solid fa-camera" style="color: #f19e0e;"></i> CCTV</li>
                <li><i class="fa-solid fa-couch" style="color: #f19e0e;"></i>Waiting Area</li>
              </ul>
            </div>


            <span class="prices">Price :</span>
            <div class="price">
              <p><i class="fa-solid fa-wallet" style="color: #ff9500;"></i> Rs 1400/Hour (Time: 9 Am - 4 Pm)</p>
              <p><i class="fa-solid fa-wallet" style="color: #ff9500;"></i> Rs 1800/Hour (Time: 4 Pm - 9 Pm)</p>
            </div>
          </div>
        </section>
          <div class="description">
            <h2>Description</h2>
            <p> Sankhamul Futsal, nestled in the heart of the bustling city, is a vibrant hub for futsal enthusiasts.
              This indoor arena offers an electrifying futsal experience with its well-maintained court and modern
              facilities. Players of all skill levels gather at Sankhamul Futsal to engage in fast-paced matches,
              showcasing their agility and teamwork. The echoes of precise passes and skillful dribbles reverberate
              within its walls, creating an atmosphere of excitement and camaraderie. Whether for competitive leagues or
              casual games, Sankhamul Futsal stands as a premier destination for those seeking the thrill of futsal in
              an urban setting.</p>
          </div>
          <section class="review-section">
            <h2>Reviews and Ratings</h2>
            <div class="reviews">
              <div class="review">
                <div class="review-header">
                  <div class="user-avatar">
                    <img src="pictures/user1.png" alt="User Avatar">
                  </div>
                  <div class="user-info">
                    <p class="user-name">Nayandeep Shrestha</p>
                    <p class="review-date">August 30, 2023</p>
                  </div>
                </div>
                <p class="review-text">Futsal, the dynamic and exhilarating variant of soccer, has captured my heart and
                  left me utterly amazed by its unique blend of speed, skill, and strategy. As a passionate soccer
                  enthusiast, I ventured into the world of futsal with high expectations, and I can confidently say that
                  this sport exceeded them in every possible way.</p>
                <div class="rating">
                  <span class="rating-stars">
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                  </span>
                  <span class="rating-value">4.0</span>
                </div>
              </div>
            </div>
            <div class="reviews">
              <div class="review">
                <div class="review-header">
                  <div class="user-avatar">
                    <img src="pictures/user1.png" alt="User Avatar">
                  </div>
                  <div class="user-info">
                    <p class="user-name">Sarowar Malla</p>
                    <p class="review-date">August 31, 2023</p>
                  </div>
                </div>
                <p class="review-text">Futsal, the dynamic and exhilarating variant of soccer, has captured my heart and
                  left me utterly amazed by its unique blend of speed, skill, and strategy. As a passionate soccer
                  enthusiast, I ventured into the world of futsal with high expectations, and I can confidently say that
                  this sport exceeded them in every possible way.</p>
                <div class="rating">
                  <span class="rating-stars">
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                    <i class="fas fa-star filled" style="color: #f19e0e;"></i>
                  </span>
                  <span class="rating-value">5.0</span>
                </div>
              </div>
            </div>
          </section>
        <!-- <button id="loadmore">Load More <i class="fa-solid fa-angles-down" style="color: #f19e0e;"></i></button> -->
      </div>
    </div>
    <script>
      function viewfunc(){
     window.open("booking.php","_self");
   }
    </script>
</body>

</html>