<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Kickers</title>
    <?php include 'css/style.php' ?>

</head>

<body>
    <?php
    include 'dbcon.php';
    include 'checkavailability.php';
    if (isset($_POST['check_submit_btn'])) {
        $email = $_POST['email_id'];
        $emailquery = "select * from usertable where user_Email='$email'";
        $result = $conn->query($emailquery);
        if ($result->num_rows > 0) {
            echo "Email Already exist!";
        } else {
        }
    }
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['fname']);
        $email = mysqli_real_escape_string($conn, $_POST['emailAddress']);
        $phone = mysqli_real_escape_string($conn, $_POST['phoneNO']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['confirmPass']);

        //password should be in hashing format
        //password encryption
        // $pass = password_hash($password, PASSWORD_BCRYPT);
        // $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        $pass = $password;
        $cpass = $cpassword;

        $emailquery = "select * from usertable where user_Email='$email'";
        $result = $conn->query($emailquery);
        if ($result->num_rows > 0) {
            //echo "Email already exists";

        } else {
            if ($password == $cpassword) {
                $insertquery = "insert into usertable(user_Name,user_Email,user_Phone,user_Password,user_Cpassword) VALUES ('$username','$email','$phone','$pass','$cpass')";
                $iquery = $conn->query($insertquery);
                if ($iquery) {
    ?>
                    <script>
                        swal("Registration Successfull", "Welcome to Kickers", "success");
                    </script>
                <?php

                } else {
                ?>
                    <script>
                        swal("Registration failed", "Please try again", "error");
                        console.log("failed");
                    </script>
    <?php
                }
            } else {
                echo "password are not matching";
            }
        }
    }

    ?>
    <!--for login-->
    <?php
    if (isset($_POST['submit1'])) {
        $email1 = $_POST['signin_email'];
        $password1 = $_POST['signin_pass'];

        $email_search = "select * from usertable where user_Email='$email1'and user_Password='$password1'";
        $result = $conn->query($email_search);
        if ($result->num_rows) {
            // $email_pass = $result->fetch_assoc();
            // //corresponding password fetch
            // $db_pass = $email_pass['user_Password'];
            // //password checker
            // $pass_decode = password_verify($password1, $db_pass);
            // if ($pass_decode) {
            //     echo "login successful";
            // } else {
            //     echo "password Incorrect";
            // }
    ?>

            <script>
                location.replace("home.php")
            </script>
        <?php
        } else {
        ?>
            <script>
                swal("Login failed", "Please check email and password", "error");
            </script>
    <?php
        }
    }

    ?>
    <div class="container">
        <div class="box">
            <!------------------ Login Box --------------------->
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" id="form1">
                <div class="box-login" id="login">
                    <div class="top-header">
                        <h3>Hello, Again</h3>
                        <small>We are happy to have you back.</small>
                    </div>
                    <div class="input-group">
                        <div class="inputField">
                            <input type="text" name="signin_email" class="input-box" id="logEmail" required>
                            <label for="logEmail">Email address</label>

                        </div>
                        <div class="inputField">
                            <input type="password" name="signin_pass" class="input-box" id="logPassword" required>
                            <label for="logPassword">Password</label>
                            <div class="eye-area">
                                <div class="eye-box" onclick="myLogPassword()">
                                    <i class="fa-regular fa-eye" id="eye"></i>
                                    <i class="fa-regular fa-eye-slash" id="eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="remember">
                            <input type="checkbox" id="formCheck" class="check">
                            <label for="formCheck"> Remember Me</label>
                        </div>
                        <div class="inputField">
                            <input type="submit" name="submit1" class="input-submit" value="Sign In">
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-------------------- Register --------------------------->
            <form action="login.php" method="POST" id="form">
                <div class="boxregister" id="register">
                    <div class="top-header">
                        <h3>Sign Up, Now</h3>
                        <small>We are happy to have you with us.</small>
                    </div>
                    <div class="input-group">
                        <div class="inputField">
                            <input type="text" name="fname" class="input-box fullName" id="regUser" autocomplete="off" required>
                            <label for="regUser">Full Name</label>

                            <small id="error_fullname"></small>
                        </div>
                        <div class="inputField">
                            <input type="text" name="emailAddress" class="input-box email_id" id="regEmail" oninput="checkEmail()" required autocomplete="off">
                            <label for="regEmail">Email Address</label>

                            <small id="error_email"></small>
                        </div>
                        <div class="inputField">
                            <input type="text" name="phoneNO" class="input-box phone" id="regPhone" required maxlength="10" oninput="checkPhone()">
                            <label for="regPhone">Phone Number</label>

                            <small id="error_phone"></small>
                        </div>

                        <div class="inputField">
                            <input type="password" name="pass" class="input-box password" id="regPassword" required>
                            <label for="regPassword">Password</label>

                            <small id="error_password"></small>

                        </div>
                        <div class="inputField">
                            <input type="password" name="confirmPass" class="input-box cpassword" id="regCPassword" required>
                            <label for="regCPassword">Confirm Password</label>

                            <small id="error_cpassword"></small>

                        </div>


                        <div class="remember">
                            <input type="checkbox" id="formCheck-2" class="check">
                            <label for="formCheck-2"> Remember Me</label>
                        </div>
                        <div class="inputField">
                            <input type="submit" class="input-submit" value="Sign In" name="submit">
                        </div>

                    </div>
                </div>
            </form>
            <!------------------------ Switch -------------------------->

            <div class="switch">
                <a href="#" class="login" onclick="login()">Login</a>
                <a href="#" class="register" onclick="register()">Register</a>
                <div class="btn-active" id="btn"></div>
            </div>
        </div>
    </div>


    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function login() {
            x.style.left = "37px";
            y.style.right = "-450px";
            z.style.left = "0px";
        }

        function register() {
            x.style.left = "-400px";
            y.style.right = "32px";
            z.style.left = "150px";
        }
        // view password codes


        function myLogPassword() {
            var a = document.getElementById('logPassword');
            var b = document.getElementById('eye');
            var c = document.getElementById('eye-slash');
            if (a.type === "password") {
                a.type = "text"
                b.style.opacity = "0";
                c.style.opacity = "1";
            } else {
                a.type = "password"
                b.style.opacity = "1";
                c.style.opacity = "0";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="custom.js"></script>
    <script>
        function checkEmail() {
            jQuery.ajax({
                url: "checkavailability.php",
                data: 'email=' + $('#regEmail').val(),
                type: "POST",
                success: function(data) {
                    $("#error_email").html(data);
                },
                error: function() {}
            });
        }
    </script>
    <script>
        function checkPhone() {
            jQuery.ajax({
                url: "checkavailability.php",
                data: 'phone=' + $('#regPhone').val(),
                type: "POST",
                success: function(data) {
                    $("#error_phone").html(data);
                },
                error: function() {}
            });
        }
    </script>
</body>

</html>