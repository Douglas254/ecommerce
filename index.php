<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Douglas Obara">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ecommerce &ndash; Website</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div>
                <a href="#"><img src="images/ecommerce-logo.png" alt="ecommerce logo" class="logo"/></a>
            </div> 
            <nav class="navbar">
                <ul>
                    <li><a href="" id="active"><i class="icon-home"></i>Home</a></li>
                    <li><a href=""><i class="icon-cog"></i>Services</a></li>
                    <li><a href=""><i class="icon-phone"></i>Contact us</a></li>
                    <button type="button" class="login-reg-btn"><i class="icon-user"></i><a href="login.php"> Log In</a></button>
                    <button class="login-reg-btn"><a href="#"><i class="icon-shopping-cart" style="font-size:15px;margin-left:10px;color:black"></i> Cart</a></button>
                </ul>
            </nav>            
        </header>
        <div class="showcase-section">
            <?php
         
                $conn=mysqli_connect('localhost','root',"",'ecommerce');  //connecting to database
                if(!$conn)
                {
                    die("could not connect".mysqli_error());
                }
                else{
                    // echo "connection successful"
                    $sql="select * from products";
                    $query=mysqli_query($conn,$sql);
                    if(!$query)
                    {
                        echo "There was an error";
                    }
                    else{
                        // echo "successfull";
                        while($row=mysqli_fetch_assoc($query)) //fetching data from the database and put in the row variable
                        { 
                            $path=$row['image'];
                            echo "<ul><li><img src='$path'></li><center><li>";
                            echo $row['product_name'];
                            echo "</li><li><strike>Ksh";
                            echo $row['old_price'];
                            echo "</li></strike><li> Ksh";
                            echo $row['new_price'];
                            echo "</li></center>";
                            echo "</ul>";
                        } 
                        
                    }
                }
            ?>
        </div>
    
        <footer>
            <a href="" ><center>Douglas254</a> &copy; 2021</center>
        </footer>
    </div>

</body>
</html>