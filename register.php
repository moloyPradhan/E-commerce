<?php

$con = mysqli_connect("localhost", "root", "", "e-com");
if (!$con) {
    die("Could not connect");
}
if (isset($_POST['signUp'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = ("insert into user values('$name','$email','$mobile','$password','')");
    if (mysqli_query($con, $sql)) {

        header('location:success.php');
        
    } 
    else {
        header('location:register.php');
        echo"Register failed!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/register-form.css">
    <link rel="stylesheet" href="css/spinner.css">
    <script src="js/register.js"></script>

</head>

<body>
    <div class="loading" id="loading">
        <img src="image/image.gif" alt="" srcset="">
    </div>
    <div class="container background">
        <form action="" method="post">
            <div class="box">

                <h1>Register</h1>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
                <input type="text" name="email" id="email" placeholder="Enter Email Id" required>

                <span id="available-email"></span>
                <input type="number" name="mobile" id="mobile" size="10" placeholder="Mobile Number" required>

                <span id="available-mobile"></span>
                <input type="password" name="password" placeholder="Password" required>

                <div class="cbox">
                    <input type="checkbox" name="term" id="term" required>
                    <label for="term">Agree the Terms & Conditions</label>
                </div>
                <button type="submit" name="signUp" id="register">Sign Up</button>
                <p>Already have an account? <a href="">Login</a></p>
            </div>
        </form>
    </div>



    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("#email").keyup(function() {
                var email = $(this).val();
                $.ajax({
                    url: 'check.php',
                    method: "POST",
                    data: {
                        email_check: email
                    },
                    success: function(data) {
                        if (data != 0) {
                            $("#available-email").html("<span> This Email-Id is already registered! </span>");
                            $("#register").attr("disabled", true);
                        } else {
                            $("#available-email").html("<span></span>");
                            $("#register").attr("disabled", false);
                        }
                    }
                });
            });

            $("#mobile").keyup(function() {
                var mobile = $(this).val();
                $.ajax({
                    url: 'check.php',
                    method: "POST",
                    data: {
                        mobile_check: mobile
                    },
                    success: function(data) {
                        if (data != 0) {
                            $("#available-mobile").html("<span> Mobile Number is already registered! </span>");
                            $("#register").attr("disabled", true);
                        } else {
                            $("#available-mobile").html("<span></span>");
                            $("#register").attr("disabled", false);
                        }
                    }
                });
            });
        });

        setTimeout(function() {
            $('#loading').addClass('hidden');
        }, 200);
    </script>
</body>

</html>