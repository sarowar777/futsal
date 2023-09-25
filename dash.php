<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url("https://fonts.googleapis.com/css?family=Ubuntu");
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Ubuntu', sans-serif;
}

:root {
  --blue: #287bff;
  --white: #f0f0f0;
  --grey: #f5f5f5;
  --black1: #222;
  --black2: #999;
}

body {
  min-height: 100vh;
  overflow-x: hidden;
  background-color: #f0f0f0;

}

.container {
  position: relative;
  width: 100%;
}

.navigation {
  position: fixed;
  width: 300px;
  height: 100%;
  background: var(--blue);
  border-left: 10px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
}

.navigation.active {
  width: 80px;
}

.navigation ul {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.navigation ul li {
  position: relative;
  width: 100%;
  list-style: none;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;

}

.navigation ul li:hover {
  background: var(--white);
}

.navigation ul li:nth-child(1) {
  margin-bottom: 40px;
  pointer-events: none;
}

.navigation ul li:nth-child(7) {
  top: 210px;

}

.navigation ul li a {
  position: relative;
  display: block;
  width: 100%;
  display: flex;
  text-decoration: none;
  color: var(--white);
}

.navigation ul li a:hover {
  color: var(--blue);
}

.navigation ul li a .icon {
  position: relative;
  display: block;
  min-width: 60px;
  line-height: 70px;
  text-align: center;
}

.navigation ul li a .icon ion-icon {
  font-size: 1.25em;
}

.navigation ul li a .title {
  position: relative;
  display: block;
  padding: 0 10px;
  height: 60px;
  line-height: 60px;
  text-align: start;
  white-space: nowrap;
}


/* curve outside */
.navigation ul li:hover a::before {
  content: '';
  position: absolute;
  right: 0;
  top: -50px;
  width: 50px;
  height: 50px;
  background: transparent;
  border-radius: 50%;
  box-shadow: 35px 35px 0 10px var(--white);
  pointer-events: none;
}

.navigation ul li:hover a::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: -50px;
  width: 50px;
  height: 50px;
  background: transparent;
  border-radius: 50%;
  box-shadow: 35px -35px 0 10px var(--white);
  pointer-events: none;
}

/* */
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background: var(--white);
  transition: 0.5s;
}

.main.active {
  width: calc(100% - 80px);
  left: 70px;
}

.topbar {
  width: 100%;
  height: 60px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
}

.toggle {
  position: relative;
  top: 0;
  width: 60px;
  height: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.75rem;
  cursor: pointer;
}

.noti {
  position: relative;
  height: 40px;
  min-width: 40px;
  display: flex;
  cursor: pointer;
  left: 490px;

}

.noti img {
  top: 10px;
  height: 50px;
}

.noti span {
  background: #f00;
  padding: 7px;
  border-radius: 50%;
  color: #fff;
  vertical-align: bottom;
  height: 25px;
  margin-left: -25px;
}



.notifi-wrap {
  position: absolute;
  top: 65px;
  right: 10px;
  width: 320px;
  max-height: 0px;
  overflow: scroll;
  overflow-x: hidden;

}

.notifi-box {
  background: #fff;
  padding: 20px;
  width: 320px;
  border-radius: 10px;
  margin-top: 13px;
  height: 69%;

}

.notifi-wrap img {
  width: 60px;
  border-radius: 50%;
  cursor: pointer;
}

.notifi-wrap h2 {
  font-size: 18px;
  padding: 10px;

}

.notifi-wrap h2 span {
  color: #f00;
}

.notifi-item {
  display: flex;
  padding: 15px 5px;
  cursor: pointer;
}

.notifi-item .text h4 {
  color: #777;
  font-size: 14px;
  margin-top: 10px;
  margin-left: 10px;
  line-height: 20px;
}

.notifi-item .text p {
  margin-left: 10px;
  font-size: 16px;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
  margin-top: 10px;


}

/* Track */
::-webkit-scrollbar-track {
  background: #f0f0f0;
  border-radius: 40px;
  margin-top: 30px;
  margin-bottom: 20px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;

}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.notifi-wrap .notifi-box::before {
  content: "";
  position: absolute;

  left: 66%;
  bottom: 520px;
  transform: translateX(-50%);
  z-index: 2;
  border: 15px solid;
  border-color: transparent transparent rgb(255, 255, 255) transparent;



}

.notifi-wrap.open-noti {

  max-height: 535px;
  z-index: 4;

  /* border-radius: 10px; */

}

/*profile dropdown css */
.user {
  top:10px;
  position: relative;
  min-width: 55px;
  height: 55px;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
  display: flex;
  right: 30px;
}

.user #pro {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.user img{
  position: relative;
  width: 50px;
  height: 60px;
}


.sub-menu-wrap {
  position: absolute;
  top: 75px;
  right: 10px;
  width: 320px;
  max-height: 0px;
  overflow: hidden;



}

.sub-menu-wrap .sub-menu::before {
  content: "";
  position: absolute;

  left: 84%;
  bottom: 335px;
  transform: translateX(-50%);
  z-index: 2;
  border: 15px solid;
  border-color: transparent transparent white transparent;
  overflow: hidden;


}

.sub-menu-wrap.open-menu {
  top: 60px;
  max-height: 410px;

  border-radius: 14%;
  z-index: 10;

}

.sub-menu {
  background: #fff;
  padding: 20px;
  margin: 10px;
}

.user-info {
  display: flex;
  align-items: center;
}

.user-info h2 {
  font-weight: 400;
}

.user-info img {
  width: 64px;
  border-radius: 53%;
  height: 58px;
  margin-right: 15px;

}

.sub-menu hr {
  border: 0;
  height: 1px;
  width: 100%;
  background: #ccc;
  margin: 15px 0 10px;
}

.sub-menu-link {
  display: flex;
  ;
  align-items: center;
  text-decoration: none;
  color: #525252;
  margin: 12px 0;
}

.sub-menu-link p {
  width: 100%;
}

.sub-menu-link img {
  width: 40px;
  background-color: #e5e5e5;
  border-radius: 50%;
  padding: 8px;
  margin-right: 15px;
}

.sub-menu-link span {
  font-size: 22px;
  transition: transform 0.5s;
}

.sub-menu-link:hover span {
  transform: translate(5px);
}

.sub-menu-link:hover p {
  font-weight: 600;
}

/* cardbox mid div */
.cardBox {
  position: relative;
  width: 80%;
  padding: 20px;
  grid-template-columns: repeat(1, 1fr);
  display: grid;
  grid-gap: 40px;
  height: 80%;
  margin-left: 120px;

}

.cardBox .card {
  position: relative;
  background: var(--white);
  padding: 10px;
  box-shadow: 0 7px 25px rgba(127, 126, 126, 0.88);
  border-radius: 20px;
  display: flex;
  justify-content: space-between;
  cursor: pointer;

}

.cardBox .card .numbers {
  position: relative;
  font-weight: 400;
  font-size: 2.0rem;
  color: var(--blue);
}

.cardBox .card .cardName {

  font-size: 1.1em;
  margin-top: 5px;
}

.cardBox .card .iconBx {
  font-size: 4.5em;
  top: 50px;
  color: var(--black2);
}









  </style>
  <title>Admin</title>
</head>
<body>
  
</body>
</html>