<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/section-items.css">
    <link rel="stylesheet" href="css/login-form.css">
    <link rel="stylesheet" href="css/deal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/spinner.css">
</head>

<body>
    <?php include "_navbar.php" ?>
    <main>
        <section id="items-section">

            <div class="items">

                <div class="item">
                    <a href="items.php"><img src="image/top.png" alt="" srcset=" "></a>
                    <p><a href="">Top Offers</a></p>
                </div>

                <div class="item">
                    <a href="items.php"><img src="image/mobile.png" alt="" srcset=" "></a>
                    <p>Mobile </p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/electronic.png" alt="" srcset=" "></a>
                    <p>Electronics </p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/applience.png" alt="" srcset=" "></a>
                    <p>Applience</p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/toys.png" alt="" srcset=" "></a>
                    <p>Beauty, Toys & More</p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/fashion.png" alt="" srcset=" "></a>
                    <p>Fashion </p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/furnichar.png" alt="" srcset=" "></a>
                    <p>Furnichar </p>
                </div>
                <div class="item">
                    <a href="items.php"><img src="image/grocery.png" alt="" srcset=" "></a>
                    <p>Grocery </p>
                </div>

            </div>
        </section>

        <section id="deals">
            <div class="title">
                <h1>Deal Of The Day</h1>
            </div>
            <div class="images">
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">Shoes</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">Watches</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">Mobile</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName"></p>
                    <p class="price">toys</p>
                </div>
            </div>

        </section>


        <section id="deals">
            <div class="title">
                <h1>Deal Of The Day</h1>
            </div>
            <div class="images">
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">toys</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">toys</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">toys</p>
                    <p class="price">toys</p>
                </div>
                <div class="image">
                    <img src="image/toys.png" alt="" srcset="">
                    <p class="itemName">toys</p>
                    <p class="price">toys</p>
                </div>
            </div>

        </section>

    </main>
    <footer>
        <div class="grid-container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore at nesciunt tempora in, dolor quisquam excepturi. Omnis porro amet possimus, a est odit. Temporibus quae delectus debitis ipsam hic quam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore at nesciunt tempora in, dolor quisquam excepturi. Omnis porro amet possimus, a est odit. Temporibus quae delectus debitis ipsam hic quam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore at nesciunt tempora in, dolor quisquam excepturi. Omnis porro amet possimus, a est odit. Temporibus quae delectus debitis ipsam hic quam.</p>
            <div class="links">
                <img src="icon/fb.png" alt="links" srcset="">
                <img src="icon/ins.png" alt="links" srcset="">
                <img src="icon/twi.png" alt="links" srcset="">

            </div>

            <h3>MP&copy; Copyrights are reseved!</h3>

            <p>Address : Kolkata , Taratala , 765123 </p>
        </div>

    </footer>

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

    <div class="loading" id="loading">
        <img src="image/image.gif" alt="" srcset="">
    </div>

    <script src="js/login-form.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        setTimeout(function() {
            $('#loading').addClass('hidden');
        }, 300);
    </script>
</body>

</html>