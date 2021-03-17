<?php

    $host = "localhost"; //hosting server address
    $username = "root"; //The username of the hosting server
    $password = ""; //The password of the hosting web server
    $dbname = "ecommerce"; //The name of the database to be connected

    // declaring variable from the form input to store the connection
    $First_Name = filter_input(INPUT_POST,'First_Name');
    $Second_Name = filter_input(INPUT_POST,'Second_Name');
    $Username = filter_input(INPUT_POST,'Username');
    $Password = filter_input(INPUT_POST,'Password');
    $ID_Number = filter_input(INPUT_POST,'ID_Number');
    $Email = filter_input(INPUT_POST,'Email');
    $Phone_Number = filter_input(INPUT_POST,'Phone_Number');
    $Gender = filter_input(INPUT_POST,'Gender');
    $County = filter_input(INPUT_POST,'County');
    $Age = filter_input(INPUT_POST,'Age');

    $conn = mysqli_connect($host,$username,$password,$dbname); //Line to connect to the database
    //Checking if it is connected to the database
    if ($conn){
        // echo "Successfully Connected Database "; //used comment so as not to show database connected to the user
        $sql = "insert into user_info(First_Name,Second_Name,Username,Password,ID_Number,Email,Phone_Number,Gender,County,Age) values('$First_Name','$Second_Name','$Username','$Password','$ID_Number','$Email','$Phone_Number','$Gender','$County','$Age')";
        $query = mysqli_query($conn,$sql);
        if($query){
            //to display an allert in php
            $appreciation = "Thank you $Username for registering with us";
            echo "<script type='text/javascript'>alert('$appreciation');</script>";
        }
        else{
            //if the data has not been inserted execute the statement below
            die ("There was an error in inserting data to the database".Mysqli_error($conn));
        }
    }
    else{
        //if the database is not connected execute the code below
        die ("Could Not Connect Database".mysqli_connect_error());
    }
?>