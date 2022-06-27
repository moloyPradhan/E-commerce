<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/nav2.css">
    <link rel="stylesheet" href="css/section-items.css">
    <link rel="stylesheet" href="css/login-form.css">
    <link rel="stylesheet" href="css/deal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/spinner.css">
    <link rel="stylesheet" href="css/user-panel.css">
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
                    <a href="logout.php"><button class="btn">Logout</button></a>
                </div>

                <div class="user" id="user">
                    <img src="icon/user.png" alt="">
                </div>


            </div>
        </nav>
    </header>

    <main>
        <section id="items-section">

            <div class="items">

                <div class="item">
                    <a href=""><img src="image/top.png" alt="" srcset=" "></a>
                    <p><a href="">Top Offers</a></p>
                </div>

                <div class="item">
                    <img src="image/mobile.png" alt="" srcset=" ">
                    <p>Mobile </p>
                </div>
                <div class="item">
                    <img src="image/electronic.png" alt="" srcset=" ">
                    <p>Electronics </p>
                </div>
                <div class="item">
                    <img src="image/applience.png" alt="" srcset=" ">
                    <p>Applience</p>
                </div>
                <div class="item">
                    <img src="image/toys.png" alt="" srcset=" ">
                    <p>Beauty, Toys & More</p>
                </div>
                <div class="item">
                    <img src="image/fashion.png" alt="" srcset=" ">
                    <p>Fashion </p>
                </div>
                <div class="item">
                    <img src="image/furnichar.png" alt="" srcset=" ">
                    <p>Furnichar </p>
                </div>
                <div class="item">
                    <img src="image/grocery.png" alt="" srcset=" ">
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
                <h1>Footwears</h1>
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


    <!-- loading screen -->
    <div class="loading" id="loading">
        <img src="image/image.gif" alt="" srcset="">
    </div>


    <!-- user-panel -->

    <div class="user-panel" id="user-panel">
        <div class="close">
            <button id="close-btn">X</button>
        </div>
        <div class="profile">
            <img src="icon/user.png" alt="">
            <span><?php echo ($login_session); ?></span>
        </div>
        <div class="todos">
            <a href=""><p>Edit Profile</p></a>
            <a href=""><p>Cart Item</p></a>
            <a href=""><p>WishList</p></a>
            <a href=""><p>History</p></a>
            <a href=""><p>Settings</p></a>

        </div>

    </div>



    <script src="js/jquery.js"></script>
    <script src="js/user-panel.js"></script>
    <script>
        setTimeout(function() {
            $('#loading').addClass('hidden');
        }, 500);
    </script>
</body>

</html>