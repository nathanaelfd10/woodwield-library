<?php

include 'connect.php';

if(isset($_POST['simpan'])){
    $id = $_POST['book_id'];
    $name = $_POST['book_name'];
    $author = $_POST['book_author'];
    $date = $_POST['book_date'];
    $category = $_POST['book_category'];
    $desc = $_POST['book_desc'];



    $query = "INSERT INTO tbl_book (book_id,book_name,book_author,book_date,book_category,book_desc) VALUES 
    ('".$id."','".$name."','".$author."','".$date."','".$category."','".$desc."')";
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