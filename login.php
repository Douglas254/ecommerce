<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>
    <body>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h1>Login Form</h1>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="Password"/>
                            </div>
                                <input type="submit" value="Login" name="login" class="btn btn-primary" />
                        </form>
                    </div>
                    <div class="panel-footer text-right">
                        <center><b>If new register <a href="registration.html">here</a></b></center> </br> <small>Douglas254 &copy; Shopping Mall</small>
                    </div>

                        <?php
                        session_start();
                            if(isset($_POST['login']))
                            {   
                                $error="";
                                $username=$_POST['Username'];
                                $password=$_POST['Password'];
                                $conn = mysqli_connect('localhost','root','','ecommerce');
                                if(!$conn){
                                    die("could not connect".Mysqli_error());
                                }
                                else{
                                    // echo "Connected successful";
                                    $sql = "select * from user_info where username='$username' and password='$password'";
                                    $query = mysqli_query($conn,$sql);
                                    $count=mysqli_num_rows($query); //returns number of rows in the database having username and password entered
                                    if($count=='1')
                                    {
                                        // echo "Login successful";
                                        $_SESSION['login_user']=$username;// registers a session
                                        header("location:index.php");
                                    }
                                    else{
                                        $error="Please check your username and password";
                                    }
                                }
                                ?>
                                <span class="error" style="color:red;box-shadow:10px 10px 10px red;font-weight:bold;font-size:15px"><?php  echo $error;  ?></span>
                                <?php
                            }
                        ?>
                        
                </div>
            </div>
        </div>
    </body>
</html>
