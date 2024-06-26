<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background-image: url(pictures/photo10.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.box{
    display: flex;
    flex-direction: row;
    position: relative;
    padding: 60px 20px 30px 20px;
    height: 850px;
    width: 450px;
    background-color: rgba(255, 220, 220, 0.4);
    border-radius: 30px;
    -webkit-backdrop-filter: blur(15px);
    backdrop-filter: blur(15px);
    border: 3px solid rgba(255, 255, 255, 0.2);
    overflow: hidden;

}
.inputField input:focus{
    outline: 0;
    border-color: black;
}
.inputField.success input{
    border-color: #2ecc71;
} 
.inputField.error input{
    border-color: #e74c3c;
} 
.inputField i{
    right: -7px;
    top:-10px;
    
}


.inputField small{
    color: red;
    position: relative;
    left: 5px;
    
}
.inputField.error small{
    visibility: visible;
}

.box-login{
    position: absolute;
    top: 120px;
    width: 85%;
    left: 37px;
    transition: .5s ease-in-out; 
}
.boxregister{
    top:10px;
    position: absolute;
    width: 85%;
    right: -450px;
    transition: .5s ease-in-out; 
}
.top-header{
    text-align: center;
    margin: 30px 0;
}
.top-header h3{
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 8px
}
.input-group{
    width: 100%;
}
.inputField{
    width: 100%;
    margin: 12px 0;
    position: relative;
}

.input-box{
    width: 100%;
    height: 50px;
    font-size: 15px;
    color: #040404;
    border: 2px solid #777;
    border-radius: 10px;
    padding: 7px 45px 0 20px;
    background: rgba(224, 223, 223, 0.6);
    backdrop-filter: blur(2px);
   outline: none;
}
.inputField label{
    position: absolute;
    left: 20px;
    top: 15px;
    font-size: 15px;
    transition: .3s ease-in-out;
}
.input-box:focus ~ label,.input-box:valid ~ label{
    top: 2px;
    font-size: 10px;
    color: green;
    font-weight: 500;
}

.eye-area{
    position: absolute;
    top: 25px;
    right: 25px;
}
.eye-box{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
i{
    position: absolute;
    color: #444444;
    cursor: pointer;
}
#eye,#eye-2{
    opacity: 1;
}
#eye-slash,#eye-slash-2{
    opacity: 0;
}

.remember{
    display: flex;
    font-size: 13px;
    margin: 12px 0 30px 0;
    color: #000;
}
.check{
    margin-right: 8px;
    width: 14px;
}
.input-submit{
    width: 100%;
    height: 50px;
    font-size: 15px;
    font-weight: 500;
    border: none;
    border-radius: 10px;
    background: #bc6202;
    color: #fff;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.145);
    cursor: pointer;
    transition: .4s;
}
.input-submit:hover{
    background: #db3e00;
    box-shadow: 0px 4px 20px rgba(62, 9, 9, 0.32);
}
.forgot{
    text-align: center;
    font-size: 13px;
    font: 500;
    margin-top: 40px;
}
.forgot a{
    text-decoration: none;
    color: #000;
}
.switch{
    display: flex;
    position: absolute;
    bottom: 50px;
    left: 35px;
    width: 85%;
    height: 50px;
    background: rgba(255, 255, 255, 0.16);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.switch a{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    font-weight: 500;
    color: #000;
    text-decoration: none;
    width: 60%;
    border-radius: 10px;
    z-index: 10;
}
#btn{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 228px;
    height: 50px;
    background: #FF6700;
    border-radius: 10px;
    box-shadow: 2px 0px 12px rgba(0, 0, 0, 0.1);
    transition: .5s ease-in-out;
}
</style>
  </head>
</html>
