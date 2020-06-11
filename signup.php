<?php

include 'connect.php';

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['user_email'];
    $pic = "default.png";


    $query = "INSERT INTO tbl_user (username,password,user_email,pic) VALUES 
    ('".$username."','".$password."','".$email."','".$pic."')";

    $query_run = mysqli_query($connect, $query);
    if($query_run){
        echo '<script> alert("You have successfully signed up); </script>';
        header("location: index.php");
    }else{
        echo '<script> alert("Duplicate username, sign up failed."); </script>';
        die(mysqli_error($connect));
    }
}


?>