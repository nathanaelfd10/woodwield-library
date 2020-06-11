<?php

include 'connect.php';

if(isset($_POST['updatedata'])){
    $id = $_POST['book_id'];
    $name = $_POST['book_name'];
    $author = $_POST['book_author'];
    $date = $_POST['book_date'];
    $category = $_POST['book_category'];
    $availability = $_POST['book_availability'];
    $desc = $_POST['book_desc'];

    $query = "UPDATE tbl_book SET book_id='$id', book_name='$name', book_author='$author', book_date='$date', book_category='$category', book_availability='$availability', book_desc='$desc' WHERE book_id='$id'"; 
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