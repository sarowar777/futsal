<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Alex+Brush|Great+Vibes|PT+Sans+Narrow:400,700');
/* @font-face {
  font-family: 'Edward';
  src: url(../font/edwardian_script_itc.ttf) format('truetype'),
    url(../font/edwardian_script_itc.otf) format('opentype');
} */

body {
  margin: 0;
  padding: 0;
  font-family: 'PT Sans Narrow', sans-serif;
}

.background {
  background-color: rgb(24, 24, 24);
  ;
}

nav {
  position: fixed;
  font-size: 26px;
  font-weight: bold;
  width: 100%;
  padding: 20px 0;
  transition: all 0.3s ease;
  font-family: 'PT Sans Narrow', sans-serif;
  color: #F0F8FF;
  height: 100px;

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
  left: 200px;
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
  text-decoration: none;
}

.navbar .menu a:hover {
  color: #ff9900;
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

.action {
  position: relative;
  top: 5px;
  left: 30px;

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

/*notification*/
.action2 {
  position: relative;
  top: 5px;
  left: 380px;
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

.backbtn{
  display: inline-block;
  background:none;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 24px;
  padding-top: 10px;
  margin-bottom: -10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.top-area {
  position: fixed;
  top: 0;
  background-color: rgb(24, 24, 24);
  height: 150px;
  width: 100%;
  z-index: 1;
}


.content-area {
  position: fixed;
  bottom: 0;
  top: 150px;
  background-color: #ff9900;
  padding: 6px;
  width: calc(100% - 12px); 
  height: 800px;
}

.futsal-view {
  background-color: white;
  height: 500px;
  margin-top: 15px;
  margin-bottom: 15px;
  margin-right: 15px;
  margin-left: 15px;
  border-radius: 20px;
  padding-right: 20px;
  overflow-y: auto;
  height: 720px;
}

.futsalname {
  padding-top: 2px;
  padding-left: 25px;
  line-height: 1px;
}

.futsalinfo{
  display: flex;
  flex-direction: row;
  flex: 1;
  justify-content: flex-start;
  padding-top: 20px;
  padding-left: 20px;
  gap: 40px;
 

}

.futsalinfo img{
  position: relative;
 width: 1000px;
 height: 650px;
 border-radius: 30px;
}

.aboutfutsal{
  position: relative;
  left: 60px;
  width: 690px;
  height: auto;
  background-color: #cac9c9;
  border-radius: 30px;
  box-sizing: border-box;
}

.aboutfutsal h2{
  font-size: 32px;
  padding-left: 20px;
}

.aboutfutsal p{
  padding-left: 20px;
  font-size: 25px;
  font-weight: bold;
}

.facilities{
  padding-left: 20px;
  font-size: 25px;
  font-weight: bold;
}

.facility{
  padding-top: 0px;
  display: flex;
  flex-direction: row;
  gap: 75px;
 padding-left: 20px;
}

.facility li{
  list-style: none;
  font-size: 25px;
  font-weight: bold;
}

.list1 li i{
  margin-right: 10px;
}

.list2 li i{
  margin-right: 10px;
}

.prices{
  padding-left: 20px;
  font-size: 25px;
  font-weight: bold;
}

.price{
  display: flex;
  flex-direction: row;
  padding-left: 20px;
  font-size: 25px;
}

.price p{
  font-size: 22px;
}

.description{
  padding-left: 20px;
  height: auto;
  width: auto;
  font-size: 32px;
}

.description p{
  padding-left: 20px;
  font-size: 26px;
  font-weight: bold;
}

.futsalinfo,
.description {
  overflow-y: auto;
  max-height: calc(100vh - 150px); 
}

/* Styling for the review section */
.review-section {
  padding-left: 20px;
  background-color: white;
  border-radius: 20px;
}

.review-section h2 {
  font-size: 25px;
  margin-bottom: 10px;
}

.reviews {
  margin-top: 10px;
  padding-left: 20px;
  
}

.review {
  border-bottom: 1px solid #ccc;
  padding: 10px 0;

}

.review-header {
  display: flex;
  align-items: center;
}

.user-avatar img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

.user-info .user-name {
  font-weight: bold;
  margin: 0;
}

.review-date {
  font-size: 14px;
  color: #888;
  margin: 0;
  font-weight: bold;
}

.review-text {
  margin-top: 10px;
  font-size: 20px;
  font-weight: bold;
}

.rating {
  margin-top: 10px;
  font-size: 20px;
}

.rating-value {
  font-weight: bold;
  margin-left: 5px;
}

.futsal-view::-webkit-scrollbar {
  display: none; 
}

#loadmore{
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: 20px;
  padding: 10px 20px;
  background: none;
  font-size: 15px;
  font-weight: bold;
  border: none;
  border-radius: 5px;
  color: rgb(2, 2, 2);
  cursor: pointer;
  transition: background-color 0.3s ease;
}


  </style>
</head>
<body>
  
</body>
</html>