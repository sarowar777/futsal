<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <style>
    .dashInner {
    width: 90%;
    margin-left: 5%;
    background-color: white;
    border: red;
    padding: 50px 30px;
    margin-top: 5%;
}

.pendingBadge,
.acceptBadge,
.acceptedBadge,
.deleteBadge {
    border: none;
    padding: 2px 10px;
    border-radius: 10px;
}

.acceptedBadge {
   
    background-color: #DAF4EB;
    color: #37c491;
}

.pendingBadge {
    background-color: rgb(246, 232, 178);
    color: rgb(193, 156, 36);
}


.acceptBadge {
    background-color: #cbd5f6c8;
    color: rgb(110, 122, 255);
}

.acceptBadge:hover {
    border: rgb(110, 122, 255) solid 1px;
    background-color: transparent;
    cursor: pointer;
}



.deleteBadge {
    background-color: #FDE4E4;
    color: #F57A78;
}

.deleteBadge:hover {
    border: solid 1px #F57A78;
    background-color: transparent;
    cursor: pointer;
}


.dashInner>h2 {
    margin-bottom: 50px;
}

.dashInner .divider {
    content: ' ';
    width: 100%;
    height: 2px;
    background-color: rgb(240, 232, 232);
    border-radius: 25px;
    margin: 20px 0;
}

.availableTime>h3,
.requestTable>h3 {
    margin-bottom: 30px;
}

.timeBackdrop {
    display: none;
    z-index: 1;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

.closePopup {
    color: grey;
    float: right;
    margin-right: 20px;
    margin-top: -25px;
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



.timePopupContainer {
    position: relative;
    width: 30%;
    margin-left: 40%;
    margin-top:5%;
    background-color: #DAF4EB;
    height: 85%;
    border-radius: 10px;
    padding-top: 40px;
    align-content: center;
}
.timePopupContainer1 {
    position: relative;
    width: 70%;
    margin-left: 20%;
    margin-top:10%;
    background-color: #DAF4EB;
    height: 60%;
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
}
.timePopupContainer2 {
    position: relative;
    width: 70%;
    margin-left: 20%;
    margin-top:10%;
    background-color: #DAF4EB;
    height: 60%;
    border-radius: 10px;
    padding-top: 40px;
    align-content: center;
}
.timeBackdrop2 {
    display: none;
    z-index: 1;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}
.timeHeader{
    font-size: 1.3rem;
    text-align: center;
    /* margin-top: 50px; */
}
.timePopupContainer .divider{
    content: ' ';
    width: 90%;
    height: 2px;
    background-color: rgba(174, 172, 172, 0.486);
    border-radius: 25px;
    margin: 20px auto;
}


#timeSlot{
    width: 95%;
    margin-left:4%;
}

ul {
    padding: 0;
    margin: 0;
    clear: both;
  }
  
  li{
    list-style-type: none;
    list-style-position: outside;
    padding: 10px;
    float: left;
  }
  
  input[type="checkbox"]:not(:checked), 
  input[type="checkbox"]:checked {
    position: absolute;
    left: -9999%;
  }
  
  input[type="checkbox"] + label {
    display: inline-block;
    padding: 10px;
    cursor: pointer;
    /* border: 1px solid black; */
    border-radius: 10px;
    color: black;
    background-color: white;
    margin-bottom: 10px;
  }
  
  input[type="checkbox"]:checked + label {
    border: 1px solid white;
    color: white;
    background-color: rgb(66, 65, 65);
  }

  .updateTime{
    width: 100%;
    margin-left: 10%;
    margin-top: 20px;
    border:none;
    background-color: #37c491;
    color: #DAF4EB;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 1.2rem;
}
.updateTime:hover{
    cursor:pointer;
    color:#37c491;
    border: #37c491 solid 1px;
    background-color: transparent;
}
.timeSlotHeader{
    display: flex;
    align-items: center;
    gap: 20px;
}
.timeSlotHeader>button{
    border:none;
    color: #37c491;
    background-color: #DAF4EB;
    padding: 5px 10px;
    border-radius: 25px;
    font-size: 1rem;
}
.timeSlotHeader>button:hover{
    background-color: transparent;
    border: #37c491 solid 1px;
    cursor: pointer;
}
.timeSlot{
    margin-top: 20px;
    display: flex;
    gap: 20px;
}
.timeSlot>button{
    border:none;
    border-radius: 25px;
    padding: 10px;
    font-size: 0.9rem;
    
}
.formUpdate{
  max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.formUpdate label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .formUpdate input[type="text"],
        .formUpdate input[type="date"],
        .formUpdate input[type="time"],
        .formUpdate select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
  </style>
</head>
<body>
  
</body>
</html>