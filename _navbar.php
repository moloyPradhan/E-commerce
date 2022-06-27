<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/login-form.css">
    
</head>

<body>
    <header>
        <nav>
            <div class="navbar">
                <div class="nav-logo">
                    <h1>|| E-Commerce ||</h1>
                </div>
                <div class="left-nav">
                    <ul>
                        <li><a href="">about</a></li>
                        <li><a href="">Be a member</a></li>
                        <li><a href="">services</a></li>
                        <li><a href="">Feedback</a></li>
                    </ul>
                </div>
                <div class="right-nav">
                    <input type="text" placeholder="Search">
                    <button class="btn" id="login-btn">Login</button>
                    <a href="register.php"><button class="btn">Register</button></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="login-form">
        <!-- animation-login -->
        <div class="login-form-img">
            <h1>Login</h1>
            <p>Get access to your orders,wishlist and recomendation</p>
            <img src="icon/locked.png" alt="login-form-image">
        </div>
        <div class="box">
            <form action="login.php" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <p>By continuing you agreed the <a href="">Terms</a> &
                    <a href="">Privacy Policy</a>
                </p>
                <button type="submit" class="login-btn">Login</button>
                <h4>New Here? <a href="register.html">Create an account !</a></h4>
            </form>
        </div>
        <div class="close-btn">
            <p>X</p>
        </div>
    </div>

    <script src="js/login-form.js"></script>
</body>

</html>