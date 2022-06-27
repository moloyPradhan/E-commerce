<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>items</title>
    <link rel="stylesheet" href="css/items.css">
</head>
<body>
    <?php include "_navbar.php" ?>
<div class="container">
    <?php 
        $con=mysqli_connect("localhost","root","","e-com");
        if(!$con){
            die("Could Not Connect".mysqli_connect_error());
        }
        $sql="Select * from items ";
        $result=mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){  
            echo"<div class='row'>";
            echo" <img src='image/mobile.png' alt='mobile'>";
            echo "<h3 id='name'>".$row['name']."</h3>";
            echo "
            <span>
                      <span id='price'><s>".$row['price']."</s></span>";
                echo "<sub id='discount'> ".$row['discount']."% </sub>";
                echo "<span id='payment'><b> ".$row['payment']." r.s/- </b></span>
            </span>";
            echo'
            <span>
                <button id="cart" type="submit" class="item-btn">Add To Cart</button>
                <button id="wish" type="submit" class="item-btn">Add To Wishist</button>    
            </span>
            </div>';  
        }
        ?>
</div>
</body>
</html>