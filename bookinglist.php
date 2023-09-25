<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  
@import url('https://fonts.googleapis.com/css?family=Alex+Brush|Great+Vibes|PT+Sans+Narrow:400,700');

/* @font-face {
  font-family: 'Edward';
  src: url(../font/edwardian_script_itc.ttf) format('truetype'),
    url(../font/edwardian_script_itc.otf) format('opentype');
} */
*{
  font-family: 'PT Sans Narrow', sans-serif;
}
body {
  margin: 0;
  padding: 0;
  font-family: 'PT Sans Narrow', sans-serif;
  background-color: transparent;
  background-image: url('pictures/photo15.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
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

nav {
  position: fixed;
  font-size: 20px;
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

nav .navbar .menu {
  display: flex;
  position: relative;
  left: 220px;

}

nav .navbar .menu li {
  list-style: none;
  margin: 0 8px;

}

.navbar .menu a {
  font-size: 26px;
  font-weight: 900px;
  color: white;
  padding: 6px 0;
  transition: all 0.4s ease;
  text-decoration: none;
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

/*notification*/
 .action2 {
  position: relative;
  top: 5px;
  /* left: 190px; */
}

.action2 .notification {
  position: relative;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
  left:320px;
}

.action2 .notification img {
  position: relative;
  width: 100%;
  height: 100%;

}

.action .profile {
  position: relative;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
 left: 30px;
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
      top: 110px;
      right: 50px;
      padding: 10px 20px;
      background: #E8E9EB;
      width: 230px;
      box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
      border-radius: 15px;
      display: none;
      opacity: 0;
      height: 330px;


    }
    
    .action .menu1.active1 {
      display: block;
      opacity: 1;
    }

    .action .menu1 ul li {
      position: relative;
      list-style: none;
      padding: 10px 0;
      border-top: 1px solid rgba(0, 0, 0, 0.15);
    
      /* align-items: center;
      justify-content: center; */
      left: -30px;
      font-size: 25px;
    }
    .action .menu1 ul li img {
      width: 30px;
      margin-right: 25px;
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
      left: -70px;
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




/*--------------Notification-------------*/
.action2 {
  position: relative;
  top: 5px;
  left: 50px;
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

.background-container {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  position: fixed;
}


.container {
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
}



/*--------------------TOP CONTAINER----------------------------*/
.top-container {
  background-color: transparent;
  color: white;
  position: fixed;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  box-sizing: border-box;
}

.top-container h3 {
  text-align: center;
  margin-top: 0px;
  flex: 1;
}

.back-button {
  background-color: orange;
  color: white;
  border: none;
  padding: 8px 12px;
  border-radius: 5px;
  cursor: pointer;
  position: absolute;
  left: 20px;
  top: 50px;
}


/*---------------------------------Bottom container-----------------------------------------*/
.bottom-container {
  margin-top: 120px;
  position: relative;
  width: 100%;
  height: clac(100vh-80px);
  position: fixed;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  z-index: 999;
}

/*-----------Search Box----------*/
.search-area {
  background-color: white;
  border-radius: 15px;
  padding: 10px;
  box-shadow: 10px 10px 10px(rgba(0, 0, 0, 0.1));
  display: flex;
  align-items: center;
  width: 500px;
  max-width: 500px;
  margin-left: 650px;
}

.search-area input {
  border: none;
  outline: none;
  flex-grow: 1;
  padding: 5px;
  border-radius: 10px;
}

.search-area button {
  background-color: orange;
  color: white;
  border: none;
  border-radius: 10px;
  padding: 5px 10px;
  cursor: pointer;
  margin-left: 10px;
}

/*------------------------------------------Filter-------------------------------------------------*/
.filter-icon {
  font-size: 26px;
  background-color: white;
  border-radius: 15px;
  padding: 10px;
  position: absolute;
  right: 680px;
  cursor: pointer;
 
}


.filter-section {
  position: relative;
  display: flex;
  align-items: center;
  flex-direction: row;
  gap: 15px;
  padding-bottom: 20px;
  z-index:  999999;
}

.filter-section select {
  width: 200px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

.filter-panel {

  display: none;
  margin-left: 640px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: 1px solid rgb(241, 156, 58);
  border-radius: 15px;
  padding: 15px;
  position: absolute;
  top: 90%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(5px);
  z-index:  999999;

}

.filter-panel.show {
  display: block;
  z-index: 100;

}

#district {
  width: 150px;
  margin-left: 20px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

#city {
  margin-left: 35px;
  width: 150px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

.date-picker {
  width: 130px;
  margin-left: 38px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

.time-picker {
  width: 130px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

#type {
  width: 150px;
  margin-left: 35px;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

#applyFilter {
  width: 150px;
  margin-left: 180px;
  background-color: orange;
  color: white;
  padding: 8px;
  cursor: pointer;
  border-radius: 10px;
  font-size: 15px;
  text-align: center;
  box-shadow: 0px 5px 10px 0 (0, 0, 0, 0.25);
}

/*----------------------------------------FUTSAL INFO----------------------------------*/
.futsal-info-container {
  margin-top: 240px;
  height: 550px;
  overflow-y: auto;
  margin-left: 230px;
  /* border: 2px solid green; */
  box-sizing: border-box;
  scroll-behavior: smooth;
  width: 1500px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  position: relative;
  z-index: 0;
}


.futsal-row {
  position: relative;
  top:10px;
  bottom: 10px;
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
  height: 210px;
  width: 660px;
 z-index: 1;

}


.futsal-info {
 
  background-color: rgba(36, 36, 36, 0.5);
  opacity: 1;
  color: white;
  border: 1px solid rgb(255, 166, 0);
  padding: 10px;
  border-radius: 10px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  flex: 1;
  display: flex;
  align-items: center;
  gap: 10px;
  /* border:2px solid red; */
}

.futsal-info-container::-webkit-scrollbar {
  width: 0.5rem;
}

.futsal-info-container::-webkit-scrollbar-track {
  background: transparent;
}

.futsal-image {
  flex: 1;
  max-width: 170px;
}

.futsal-image img {
  width: 100%;
  height: 180px;
  border-radius: 10px;
}

.futsal-details {
  flex: 1;
  display: flex;
  flex-direction: column;
  /* justify-content: center; */
  gap: 10px;
}

.futsal-details h3 {
  margin: 0;
  font-size: 32px;
}

.futsal-details p {
  font-size: 24px;
  margin: 0;
}

.rating {
  font-size: 24px;
  color: orange;
}

.star {

  font-size: 20px;
  margin-right: 2px;
}

.choose-button {
 
  align-items: center;
  display: flex;
  flex-direction: column;
  gap: 30px;
}

#view-button {
  background-color: orange;
  color: white;
  border: none;
  width: 90px;
  padding: 10px 18px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 25px;
}
#view-button:hover{
  background-color: white;
  color: orange;
  border:  black;
  transition: 0.2s;
}


#book-button {
  background-color: #4070f4;
  color: white;
  border: none;
  width: 90px;
  padding: 10px 18px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 25px;
  text-decoration: none;
  text-align: center;
}
#book-button:hover{
  background-color: white;
  color: #4070f4;
  border:  black;
  transition: 0.2s;
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
    background: transparent;
}
.cancelBadge {
  border: none;
    background-color: whitesmoke;
    color: red;
}

.cancelBadge:hover {
    border: solid 1px #F57A78;
    background: transparent;
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
  margin: auto;
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
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.timePopupContainer1 {
    position: relative;
    width: 90%;
    margin-left: 5%;
    margin-top:8%;
    background-color: #DAF4EB;
    height: 70%;
    border-radius: 10px;
    padding-top: 40px;
    align-content: center;
  
}
.timeBackdrop1 {
    display: none;
    z-index: 1;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(5px);
}
.timeHeader{
  text-align: center;
  font-size: 32px;
}
.filter-icon1 {
  font-size: 26px;
  width: 150px;
  height: 40px;
  /* background-color: white; */
  border-radius: 15px;
  padding: 30px;
  position: absolute;
  right: 500px;
  cursor: pointer;
 
}

#mybooking {
  font-weight: 900;
  position: relative;
  width: 100%;
   height: 55px;
  background-color: orange;
  color: white;
  border: none;
 left: -40px;
  padding: 10px 18px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  top:-30px;
}
#mybooking:hover{
  background-color: white;
  color: orange;
  border:  black;
  transition: 0.2s;
}
  </style>
</head>
<body>
  
</body>
</html>