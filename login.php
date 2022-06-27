<html>
    <head>
        <style>
            *{margin: 0;
            padding: 0;}
            .container{
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: linear-gradient(60deg,royalblue,lightblue);
            }
            h1{
                color: #fff;
            }
            button{
                width: 200px;
                height: 40px;
                color: #fff;
                border: none;
                background:linear-gradient(60deg,royalblue,lightblue);
                margin: 30px;
                border-radius: 4px;
                font-size: 18px;
                box-shadow: 1px 1px 3px gray;
                cursor: pointer;

            }
        </style>
    </head>

<body>

    <?php
    include("config.php");
    session_start();
    $error = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "select * from user where email='$email' and password='$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $email;
            header("location:dashboard.php");
            echo " open";
        } else {
            $error = "Your Email And Password is incorrect!";
    ?>
            <div class="container">
                <h1>Your Email And Password is incorrect!</h1>
                <a href="index.html"><button>back</button></a>
            </div>

    <?php

        }
    }

    ?>

</body>

</html>