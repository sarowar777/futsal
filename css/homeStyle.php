<!DOCTYPE html>
<html>

<head>
  <title></title>
  <style type="text/css">
    /* Google Font CDN Link */
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap'); */
    @import url('https://fonts.googleapis.com/css?family=Alex+Brush|Great+Vibes|PT+Sans+Narrow:400,700');

    /* @font-face
{
	font-family: 'Edward';
	src: url(../font/edwardian_script_itc.ttf) format('truetype'),
	url(../font/edwardian_script_itc.otf) format('opentype');
} */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      scroll-behavior: smooth;
    }

    body {
      font-family: 'PT Sans Narrow', sans-serif;
      font-size: 14px;

    }

    /* Custom Scroll Bar CSS */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
      background: #a0a1a3;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #84858a;
    }

    /* navbar styling */
    nav {
      position: fixed;
      font-size: 26px;
      font-weight: bold;
      width: 100%;
      padding: 20px 0;
      z-index: 998;
      transition: all 0.3s ease;
      font-family: 'PT Sans Narrow', sans-serif;
      color: #F0F8FF;
    }

    nav.sticky {
      background: rgba(0, 0, 0, 0.85);
     
      padding: 13px 0;
    }

    nav .navbar {
      width: 90%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: auto;
    }

    nav .navbar .logo {
      display: flex;
      position: relative;

    }

    nav .navbar .logo img {
      width: 70px;
    }

    nav.sticky .navbar .logo a {
      color: #fff;
    }

    nav .navbar .menu {
      display: flex;
      position: relative;
      right: -240px;
    }

    nav .navbar .menu li {
      list-style: none;
      margin: 0 8px;

    }

    .navbar .menu a {
      font-size: 25px;
      font-weight: 900;
      color: white;
      padding: 6px 0;
      transition: all 0.4s ease;
    }

    .navbar .menu a:hover {
      color: #b49383;
    }

    nav.sticky .menu a {
      color: #FFF;
    }

    nav.sticky .menu a:hover {
      color: #b49383;
    }

    .navbar .media-icons a {
      color: #4070f4;
      font-size: 18px;
      margin: 0 6px;
    }

    nav.sticky .media-icons a {
      color: #FFF;
    }


    /* Side Navigation Menu Button CSS */
    nav .menu-btn,
    .navbar .menu .cancel-btn {
      position: absolute;
      color: #fff;
      right: 30px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: none;
    }

    nav .menu-btn {
      color: #4070f4;
    }

    nav.sticky .menu-btn {
      color: #FFF;
    }

    .navbar .menu .menu-btn {
      color: #fff;
    }

    /* home section styling */
    .home {
      height: 100vh;
      width: 100%;
      background: url("pictures/photo14.jpg") no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      font-family: 'Ubuntu', sans-serif;
      
     
    }

    .home .home-content {
      width: 90%;
      height: 100%;
      margin: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      
         
    }
    .text1{
      top:-20px;
      width: 650px;
      left: 650px;
      position: relative;
    }
  

    .home .text-one {
      position: relative;
      font-size: 40px;
      color: white;
     left: 180px;

     
    }

    .home .text-two {
      position: relative;
      color: #92acbc;
      font-size: 55px;
      font-weight: 600;
      
      text-align: center;
      left: -90px;
    
    }

    .home .text-three {
      position: relative;
      left: -18px;
      font-size: 60px;
      margin: 5px 0;
      color: #b9becd;
      align-items: center;
    }

    .home .text-four {
      font-size: 23px;
      margin: 5px 0;
      color: #0E2431;
    }

    .home .button {
      top:10px;
      position: relative;
      width: 300px;
      margin: 14px 0;
      left: 810px;
    }

    .home .button button {
      outline: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-size: 25px;
      font-weight: 400;
      background: #4070f4;
      color: #fff;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all 0.4s ease;
    }

    .home .button button:hover {
      border-color: #4070f4;
      background-color: #fff;
      color: #4070f4;
    }

    /* About Section Styling */
    /* Those Elements Where We Have Apply Same CSS,
 I'm Selecting Directly 'Section Tag' and 'Class'  */
    section {
      padding-top: 40px;
    }

    section .content {
      width: 80%;
      margin: 40px auto;
      font-family: 'Poppins', sans-serif;
    }

    .about .about-details {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    section .title {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
    }

    section .title span {
      color: #0E2431;
      font-size: 30px;
      font-weight: 600;
      position: relative;
      padding-bottom: 8px;
    }

    section .title span::before,
    section .title span::after {
      content: '';
      position: absolute;
      height: 3px;
      width: 100%;
      background: #4070f4;
      left: 0;
      bottom: 0;
    }

    section .title span::after {
      bottom: -7px;
      width: 70%;
      left: 50%;
      transform: translateX(-50%);
    }

    .about .about-details .left {
      width: 45%;
    }

    .about .left img {
      height: 400px;
      width: 400px;
      object-fit: cover;
      border-radius: 12px;
    }

    .about-details .right {
      width: 55%;
    }

    section .topic {
      color: #0E2431;
      font-size: 25px;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .about-details .right p {
      text-align: justify;
      color: #0E2431;
    }

    section .button {
      margin: 16px 0;
    }

    section .button button {
      outline: none;
      padding: 8px 16px;
      border-radius: 4px;
      font-size: 25px;
      font-weight: 400;
      background: #4070f4;
      color: #fff;
      border: 2px solid transparent;
      cursor: pointer;
      transition: all 0.4s ease;
    }

    section .button button:hover {
      border-color: #4070f4;
      background-color: #fff;
      color: #4070f4;
    }


    /* My Services CSS */
    .services{
      height: 850px;
    }
    .services .boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .services .boxes .box {
      margin: 20px 0;
      width: calc(100% / 3 - 20px);
      text-align: center;
      border-radius: 12px;
      padding: 30px 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
      cursor: default;
      transition: all 0.4s ease;
    }

    

    /* Contact Me CSS */
    .contact {
      background: #F0F8FF;
    }

    .contact .content {
      margin: 0 auto;
      padding: 30px 0;
    }

    .contact .text {
      width: 80%;
      text-align: center;
      margin: auto;
    }

    /* Footer CSS */
    footer {
      background: #232323;
      padding: 15px 0;
      text-align: center;
      font-family: 'Poppins', sans-serif;
    }

    footer .text span {
      font-size: 17px;
      font-weight: 400;
      color: #fff;
    }

    footer .text span a {
      font-weight: 500;
      color: #FFF;
    }

    footer .text span a:hover {
      text-decoration: underline;
    }

    /* Scroll TO Top Button CSS */
    .scroll-button a {
      position: fixed;
      bottom: 20px;
      right: 20px;
      color: #fff;
      background: #4070f4;
      padding: 7px 12px;
      ;
      font-size: 18px;
      border-radius: 6px;
      box-shadow: rgba(0, 0, 0, 0.15);
      display: none;
    }

    /* Responsive Media Query */
    @media (max-width: 1190px) {
      section .content {
        width: 85%;
      }
    }

    @media (max-width: 1000px) {
      .about .about-details {
        justify-content: center;
        flex-direction: column;
      }

      .about .about-details .left {
        display: flex;
        justify-content: center;
        width: 100%;
      }

      .about-details .right {
        width: 90%;
        margin: 40px 0;
      }

      .services .boxes .box {
        margin: 20px 0;
        width: calc(100% / 2 - 20px);
      }
    }

    @media (max-width: 900px) {
      .about .left img {
        height: 350px;
        width: 350px;
      }
    }

    @media (max-width: 750px) {
      nav .navbar {
        width: 90%;
      }

      nav .navbar .menu {
        position: fixed;
        left: -100%;
        top: 0;
        background: #0E2431;
        height: 100vh;
        max-width: 400px;
        width: 100%;
        padding-top: 60px;
        flex-direction: column;
        align-items: center;
        transition: all 0.5s ease;
      }

      .navbar.active .menu {
        left: 0;
      }

      nav .navbar .menu a {
        font-size: 23px;
        display: block;
        color: #fff;
        margin: 10px 0;
      }

      nav.sticky .menu a:hover {
        color: #4070f4;
      }

      nav .navbar .media-icons {
        display: none;
      }

      nav .menu-btn,
      .navbar .menu .cancel-btn {
        display: block;
      }

      .home .text-two {
        font-size: 65px;
      }

      .home .text-three {
        font-size: 35px;
      }

      .skills .skills-details {
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }

      .skills-details .text {
        width: 100%;
        margin-bottom: 50px;
      }

      .skills-details .boxes {
        justify-content: center;
        align-items: center;
        width: 100%;
      }

      .services .boxes .box {
        margin: 20px 0;
        width: 100%;
      }

      .contact .text {
        width: 100%;
      }
    }

    @media (max-width: 500px) {
      .home .text-two {
        font-size: 55px;
      }

      .home .text-three {
        font-size: 33px;
      }

      .skills-details .boxes .per {
        font-size: 50px;
        color: #4070f4;
      }
    }

    /*rightbar*/
    .action {
      position: relative;
      top: 5px;
      right: -20px;

    }

    .action .profile {
      position: relative;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;

    }

    .action .profile img {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;

    }

    .action .menu1 {
      position: absolute;
      top: 80px;
      right: -20px;
      padding: 10px 20px;
      background: #E8E9EB;
      width: 230px;
      box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      display: none;
      opacity: 0;



    }
    
    .action .menu1.active1 {
      display: block;
      opacity: 1;
    }

    .action .menu1 ul li {
      list-style: none;
      padding: 10px 0;
      border-top: 1px solid rgba(0, 0, 0, 0.15);

      align-items: center;
      justify-content: center;

    }

    .action .menu1 ul li img {
      width: 30px;
      margin-right: 20px;
      opacity: 0.5;
      transition: 0.5s;
    }

    .action .menu1 ul li:hover img {
      opacity: 1;
    }

    .action .menu1 ul li a {
      display: inline-block;
      text-decoration: none;
      color: #555;
      font-weight: 500;
      transition: 0.5s;
    }

    .action .menu1 ul li:hover a {
      color: #ff5d94;
    }

    .action .menu1::before {
      content: '';
      position: absolute;
      top: -10px;
      right: 33px;
      width: 20px;
      height: 20px;
      background-color: #E8E9EB;
      transform: rotate(45deg);
    }

    /*notification*/
    .action2 {
      position: relative;
      top: 5px;
      right: -370px;
    }

    .action2 .notification {
      position: relative;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }

    .action2 .notification img {
      position: relative;

      width: 100%;
      height: 100%;

    }



    /*blog 1*/

    .main {
      top:20px;
  height: 730px;
  width: 1650px;
}
.main img{
  object-fit: cover;
}
    .wrapper,
.slide {
  position: relative;
  width: 100%;
  height: 100%;
}
.slide {
  overflow: hidden;
}
.slide::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 10;
}
.slide .image {
  height: 100%;
  width: 100%;
  object-fit: cover;
}
.slide .image-data {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
  z-index: 100;
}
.image-data span.text {
  font-size: 14px;
  font-weight: 400;
  color: #fff;
}
.image-data h2 {
  font-size: 45px;
  font-weight: 600;
  color: #fff;
}
a.button {
  display: inline-block;
  padding: 10px 20px;
  border-radius: 25px;
  color: #fff;
  background: #c87e4f;
  text-decoration: none;
  margin-top: 25px;
  transition: all 0.3s ease;
}
a.button:hover {
  color: #333;
  background-color: #fff;
}

/* swiper button css */
.nav-btn {
  height: 50px;
  width: 50px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.3);
}
.nav-btn:hover {
  background: rgba(255, 255, 255, 0.4);
}
.swiper-button-next {
  right: 50px;
}
.swiper-button-prev {
  left: 50px;
}
.nav-btn::before,
.nav-btn::after {
  font-size: 25px;
  color: #fff;
}
.swiper-pagination-bullet {
  opacity: 1;
  height: 12px;
  width: 12px;
  background-color: #fff;
  visibility: hidden;
}
.swiper-pagination-bullet-active {
  border: 2px solid #fff;
  background-color: #c87e4f;
}

@media screen and (max-width: 768px) {
  .nav-btn {
    visibility: hidden;
  }
  .swiper-pagination-bullet {
    visibility: visible;
  }
}
/*blog*/
.blog{
  width: 100%;
  height: 850px;
  position: relative;
  
}
.container{
    position: absolute;
    left:50%;
   top: 450px;
    transform: translate(-50%,-50%);
    width:1200px;
    height:800px;
    padding:50px;
    background-color: #f5f5f5;
    box-shadow: 0 30px 50px #dbdbdb;
}
#slide1{
    width:max-content;
    margin-top:50px;
}
.item{
    width:200px;
    height:300px;
    background-position: 50% 50%;
    display: inline-block;
    transition: 0.5s;
    background-size: cover;
    position: absolute;
    z-index: 1;
    top:50%;
    transform: translate(0,-50%);
    border-radius: 20px;
    box-shadow:  0 30px 50px #505050;
}
.item:nth-child(1),
.item:nth-child(2){
    left:0;
    top:0;
    transform: translate(0,0);
    border-radius: 0;
    width:100%;
    height:100%;
    box-shadow: none;
}
.item:nth-child(3){
    left:50%;
}
.item:nth-child(4){
    left:calc(50% + 220px);
}
.item:nth-child(5){
    left:calc(50% + 440px);
}
.item:nth-child(n+6){
    left:calc(50% + 660px);
    opacity: 0;
}
.item .content{
    position: absolute;
    top:50%;
    left:100px;
    width:300px;
    text-align: left;
    padding:0;
    color:#eee;
    transform: translate(0,-50%);
    display: none;
    font-family: system-ui;
}
.item:nth-child(2) .content{
    display: block;
    z-index: 11111;
}
.item .name{
    font-size: 40px;
    font-weight: bold;
    opacity: 0;
    animation:showcontent 1s ease-in-out 1 forwards
}
.item .des{
  font-size: 20px;
  font-weight: bold;
   color: #FDFEFF;
    margin:20px 0;
    opacity: 0;
    animation:showcontent 1s ease-in-out 0.3s 1 forwards
}
.item button{
    padding:10px 20px;
    border:none;
    opacity: 0;
    animation:showcontent 1s ease-in-out 0.6s 1 forwards
}
.item button:hover{
  background: #c87e4f;
}

@keyframes showcontent{
    from{
        opacity: 0;
        transform: translate(0,100px);
        filter:blur(33px);
    }to{
        opacity: 1;
        transform: translate(0,0);
        filter:blur(0);
    }
}
.buttons{
    position: absolute;
    bottom:30px;
    z-index: 222222;
    text-align: center;
    width:100%;
}
.buttons button{
    width:50px;
    height:50px;
    border-radius: 50%;
    border:1px solid #555;
    transition: 0.5s;
}.buttons button:hover{
    background-color: #bac383;
}


/*popup*/
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 1600px; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}




/*-----------------------------USER INFO-----------------------------*/
.user-info {
  position: relative;
    height: 550px;
    width: 400px;
    background-color: #fff;
    border: 2px solid #ccc;
    overflow: hidden;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    top:100px;
    /* padding-left: 110px;
    padding-top: 20px;
    padding-right: 50px;
    padding-bottom: 100px; */
    /* margin-top: 10px;
    margin-left: 10px; */
    /* margin-left: 690px; */
    /* margin-right: 40px;
    margin-bottom: 70px; */
  }


  .user-info img {
    width: 200px;
    height: 200px;
    border:2.5px solid #ccc;
    box-shadow: 0 10px 8px -5px black;
    border-radius: 50%;
    margin-top: 0px;
    margin-bottom: 70px;
  }
  
  .user-info h3 {
    margin-top: 0px;
    margin-bottom: 5px;
  }
  
  .user-info p {
    margin-top: 20px;
    margin-bottom: 40px;
  }
  .area_content{
    display: flex;
    flex-direction: column;
  }
  #input-file{
    display: block;
    text-align: center;
    width: 200px;
    background: blue;
    color: white;
    padding: 12px;
    margin-top:60px;
    
    border-radius: 10px;
    cursor: pointer;
}
input[type="file"]{
    display: none;
}


/*--------- finder table body ----------*/
.bookBody {
    font-family: 'Poppins', sans-serif;
    background-color: #F2F3F7;
    padding: 80px 0;
}

.bookContainer {
    width: 90%;
    margin-left: 5%;
    padding: 25px;
    background-color: white;
    font-size: 1rem;
}



/*------------ accept, edit, delete button -------------*/
.acceptBadge,
.editBadge,
.deleteBadge {
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.acceptBadge:hover,
.editBadge:hover,
.deleteBadge:hover {
    background-color: transparent;
}

.acceptBadge {
    background-color: #DAF4EB;
    color: #37c491;
}

.acceptBadge:hover {
    border: #37c491 solid 1px;
}

.editBadge {
    background-color: #cbd5f6c8;
    color: rgb(110, 122, 255);
}

.editBadge:hover {
    border: rgb(110, 122, 255) solid 1px;
}

.deleteBadge {
    background-color: #FDE4E4;
    color: #F57A78;
}

.deleteBadge:hover {
    border: solid 1px #F57A78;
}

.modalBook{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 10px;
  width: 100%; /* Full width */
  height: 1200px; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  /* background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);  */
 
}

/* Modal Content */
.modalBook-content {
  position: absolute;
  height: 650px;
  background-color: #fefefe;
  /* margin: auto; */
  padding: 20px;
  border: 1px solid #888;
  width: 100%;

 
}
.modalBook-content h3{
  text-align: center;
  font-weight: bold;
  font-size: 32px;

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 38px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
  </style>
</head>

</html>