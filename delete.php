<?php

include 'connect.php';

if(isset($_POST['deletedata'])){
    $id = $_POST['delete'];

    $query = "DELETE FROM tbl_book WHERE book_id='$id'";
    $query_run = mysqli_query($connect, $query);
    
    if($query_run){
        echo '<script> alert("Data Updated); </script>';
        header("location: manage.php");
    }else{
        echo '<script> alert("Data Not Updated"); </script>';
        die(mysqli_error($connect));
    }
}


?>