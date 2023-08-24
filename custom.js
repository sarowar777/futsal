$(document).ready(function () {
 $('.fullName').blur(function (e) { 
  e.preventDefault();
  var fullname=$('.fullName').val();
  if($.trim(fullname).length==0){
   error_fullname="Please enter name";
   $('#error_fullname').text(error_fullname);
  }
  else{
    error_fullname="";
   $('#error_fullname').text(error_fullname);
  
  }
});
  $('.email_id').blur(function (e) { 
    e.preventDefault();
    var email_filter=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-0-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email=$('.email_id').val();
    if($.trim(email).length==0){
     error_email="Please enter email";
     $('#error_email').text(error_email);
    }
    else if(!(email_filter.test(email))){
      error_email="Please enter valid email";
     $('#error_email').text(error_email);
    }
    else{
      error_email="";
     $('#error_email').text(error_email);
    
    }
 });
 $('.phone').blur(function (e) { 
  e.preventDefault();
  var phone_filter=/^([9]{1})+([7-8]{1})+([0-9]{8})+$/;
  var phone=$('.phone').val();
  if($.trim(phone).length==0){
   error_phone="Please enter phone number";
   $('#error_phone').text(error_phone);
  }
  else if(!(phone_filter.test(phone))){
    error_phone="Please enter valid phone number";
   $('#error_phone').text(error_phone);
  }
  else{
    error_phone="";
   $('#error_phone').text(error_phone);
  
  }
});

$('.password').blur(function (e) { 
  e.preventDefault();
  var password=$('.password').val();
  var password_filter=/^([a-zA-Z0-9-@]{8,16})+$/;
  if($.trim(password).length==0){
   error_password="Please enter password";
   $('#error_password').text(error_password);
  }
  else if(!password_filter.test(password)){
    error_password="Password must contain atleast 8 characters";
    $('#error_password').text(error_password);

  }
  else{
    error_password="";
   $('#error_password').text(error_password);
  
  }
});
$('.cpassword').blur(function (e) { 
  e.preventDefault();
  var cpassword=$('.cpassword').val();
  if($.trim(cpassword).length==0){
   error_cpassword="Please enter password";
   $('#error_cpassword').text(error_cpassword);
  }
  else{
    error_cpassword="";
   $('#error_cpassword').text(error_cpassword);
  
  }
});
 
 $('.cpassword').keyup(function (e) { 
  var cpass=$('.cpassword').val();
  var pass=$('.password').val();
  if($.trim(cpass).length==0){
    error_cpassword="Please enter password";
    $('#error_cpassword').text(error_cpassword);
   }
  else if(cpass!=pass){
    $('#error_cpassword').html('**Password are not matching');
    return false;
  }
  else{
    $('#error_cpassword').html('');
    return true;
  }
 });
//email validation from database
$('.email_id').keyup(function(e){
  var email1=$('.email_id').val();
  $.ajax({
    type: "POST",
    url: "login.php",
    data: {
      "check_submit_btn":1,
      "email_id":email1,
    },
   
    success: function (data) {
      $
    }
  });
});

});
   
