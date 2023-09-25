<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

.navMenu {
    background-color: rgba(0, 0, 0, 0.85);
}

/*------------ finder title styling ------------*/
.finderHeader {
    font-family: 'Poppins', sans-serif;
    background-color: rgba(0, 0, 0, 0.85);
    text-align: center;
    height: 250px;
    color: white;
    padding-top: 140px;
    font-size: 2.5rem;
    display: flex;
    flex-direction: column;
    
}

.finderHeader>h3 {
    font-weight: 100;
    text-align: center;
}

.finderHeader .divider {
    content: " ";
    width: 100%;
    margin-top: 5px;
    height: 1.2px;
    background: white;
}


/*------------------- FInder FOrm --------------*/
.findForm {
    top: 32%;
    left: 50%;
    max-width: 1200px;
    position: absolute;
    transform: translate(-50%, -54px);
    width: calc(86.8%, - 10px);
    z-index: 3;
    display: flex;
}

.findFormFields {
    background-color: #f68205;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 rgba(26, 26, 26, 0.16);
    display: flex;
    gap: 5px;
    margin: 20px 0;
    padding: 4px;
}

.findFormField {
    background-color: white;
    border-radius: 4px;
}

.findFormField>input,
.findFormField>select {
    border: none !important;
    padding: 5px 10px;
    outline: none;
    height: 60%;
}
.editFormField select{
    border: none !important;
}
#fustalSize{
  border: none;
}

.sendButton {
    background-color: #003B95;
    border: none;
    color: white;
    padding: 0px 20px;
    border-radius: 4px;
    font-size: 1.1rem;
    font-weight: 600;
}
.ViewButton {
  position: relative;
  left: 6px;
  top:20px;
  width: 100px;
  height: 82px;

    background-color: black;
    /* border: none; */
    color: white;
    padding: 0px 20px;
    border-radius: 4px;
    font-size: 20px;
    font-weight: 600;
}



/*--------- finder table body ----------*/
.finderBody {
    font-family: 'Poppins', sans-serif;
    background-color: #F2F3F7;
    padding: 80px 0;
}

.finderContainer {
    width: 90%;
    margin-left: 5%;
    padding: 25px;
    background-color: white;
    font-size: 1rem;
}



/*------------ accept, edit, delete button -------------*/
.acceptBadge,
.pendingBadge,
.editBadge,
.deleteBadge {
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}
.cancelBadge {
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    background-color: #cbd5f6c8;
    color: red;
}
.cancelBadge:hover {
    background-color: transparent;
}
.sendBadge {
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    background-color: orange;
    color: white;
}
.sendBadge:hover {
    background-color: white;
    color: orange;
}

.acceptBadge:hover,
.pendingBadge:hover,
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

.pendingBadge {
    background-color: #F7CB73;
    color: black;
}

.pendingBadge:hover {
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


/* ------ popup ------------*/

.backdrop {
    display: none;
    z-index: 10;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.699);
}

.closePopup {
    color: grey;
    float: right;
    margin-right: 20px;
    margin-top: 22px;
    font-size: 15px;
    font-weight: bold;
    padding: 4px 6px;
    border: 1px solid grey;
    border-radius: 5px;
}

.closePopup:hover {
    color: black;
    cursor: pointer;
}

.popupContainer {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20% auto;
}

.popupWrap {
    border-radius: 10px;
    padding-left: 20px;
    width: 63.2%;
    height: 80px;
    background-color: hsl(242.73, 100%, 91.37%);
}

.editFormFields {
    background-color: #f68205;
    border-radius: 8px;
    box-shadow: 0 2px 8px 0 rgba(26, 26, 26, 0.16);
    display: flex;
    gap: 5px;
    margin: 15px 0;
    padding: 4px;
    height: 50px;
}

.editFormField {
    background-color: white;
    border-radius: 4px;
}

.editFormField>input,
.editFormField>select {
    border: none;
    padding: 5px 10px;
    outline: none;
    height: 100%;
}

.editButton {
    background-color: #003B95;
    border: none;
    color: white;
    padding: 0px 20px;
    border-radius: 4px;
    font-size: 1.1rem;
    font-weight: 600;
}

.modal1{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 10px;
  width: 100%; /* Full width */
  height: 1800px; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal1 h3{
    position: relative;
    text-align: center;
    font-weight: bold;
    font-size: 32px;
    left: 30px;
    top: -50px;
}
/* Modal Content */
.modal-content1 {
  position: absolute;
  height: 850px;
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 100%;

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





  </style>
</head>
<body>
  
</body>
</html>