<?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- ICON <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" /> -->
<title>Browse</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/manage.css">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>

body {
  background-image: url('/images/bg-manage.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.jumbotron-header{

    margin-top:7vh;
    font-size: 4em;
}

.btn-card {
    height:4vh;
}

.push-spaces{
            margin-top:39vh;
            margin-left:32vh;
          }

          .navbar{
            margin-bottom:0px;
            background-color:rgba(255,255,255,0.0);
          }

          .btn-main{
            width:15vh;
          }
          
          .btn-secondary{
            width:15vh;
            color: white;
          }
          
          .nav-item{
            width:12vh;
          }

            .pic{
              width:1.5em;
              border-radius:100%;
            }

            .dark-bg{
              background-color:rgba(3,3,3,0.8);
              color:#111;
            }

@media (min-width: 1200px){}
.container{
    background-color:rgba(3,3,3,0.85);
    border-radius:25px 25px 25px 25px;
    max-width: 155vh;
}

}

</style>
</head>

<body>



<?php 
$admin = 'admin';
if ($_SESSION['user_category'] == $admin){
  ?>

<div class="container container-card">
<div class="jumbotron text-light text-center">
  <h1 class="jumbotron-header">Manage</h1>
  

</div>

<!-- Create, Read, Update, Delete -->


    <!--pat made a change in id name and tambah data -> add data because our web is in english okie? -->

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_data" style="margin-bottom:2em"> Add Data </button>
    <div class="container-xl centered" style="background-color:rgba(0,0,0,0.0);">
        <div class="row">
        
          <table>
        </div>
      </div>
    </div>
  


      <table class="table bg-dark text-light">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="">Book ID</th>
      <th scope="col" style="">Book Name</th>
      <th scope="col" style="">Author Name</th>
      <th scope="col" style="">Publish Date</th>
      <th scope="col" style="">Category</th>
      <th scope="col" style="">Availability</th>
      <th scope="col" style="">Desc</th>
      <th scope="col" style="">Edit</th>
      <th scope="col" style="">Delete</th>
    </tr>
    
    <?php

    include 'connect.php';
    $query = "SELECT * FROM tbl_book";
    $query_run = mysqli_query($connect, $query);  
                        if($query_run){
                                        foreach($query_run as $row)
                                        {
                                ?>
                                    <tr>
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_name']; ?></td>
                                    <td><?php echo $row['book_author']; ?> </td>
                                    <td><?php echo $row['book_date']; ?></td>
                                    <td><?php echo $row['book_category']; ?></td>
                                    <td><?php echo $row['book_availability'];?> </td>
                                    <td><?php echo $row['book_desc'];?> </td>
                                    <td>
                                    <button type="button" class="btn btn-light editbtn">Edit</button>
                                    </td>
                                    <td>
                                    <!--changed from hapus to delete-->
                                    <button type="button" class="btn btn-danger deletebtn">Delete</button>
                                    </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else{
                                echo "no record found";
                            }                       

                        ?> 
</table>
               
</div>
</div>



      
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <!--pat changed tambah data to edit data -->
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update.php" method="POST">
      <div class="modal-body">
          <input type="hidden" name="update" id="update">
        <div class="form-group">
            <label >Book ID</label>
            <input type="text" name = "book_id" id="book_id" class="form-control" placeholder="Book ID">
        </div>
        
        <div class="form-group">
            <label >Book Name</label>
            <input type="text" name = "book_name" id="book_name" class="form-control" placeholder="Book Title">
        </div>

        <div class="form-group">
            <label >Author Name</label>
            <input type="text" name = "book_author" id="book_author" class="form-control" placeholder="Author">
        </div>

        <div class="form-group">
            <label >Publish Date</label>
            <input type="text" name = "book_date" id="book_date" class="form-control" placeholder="Date">
        </div>

        <div class="form-group">
            <label >Category</label>
            <input type="text" name = "book_category" id="book_category" class="form-control" placeholder="Category">
        </div>

        <div class="form-group">
            <label >Availability</label>
            <input type="text" name = "book_availability" id="book_availability" class="form-control" placeholder="availability">
        </div>

        <div class="form-group">
            <label>Desc</label>
            <input type="text" name = "book_desc" id="book_desc" class="form-control" placeholder="desc">
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="submit" name ="updatedata" class="btn btn-outline-dark">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="add_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="insert.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label >Book ID</label>
            <input type="text" name = "book_id" class="form-control" placeholder="Insert Book ID">
        </div>
        
        <div class="form-group">
            <label >Book Name</label>
            <input type="text" name = "book_name" class="form-control" placeholder="Insert Book Name">
        </div>

        <div class="form-group">
            <label >Author Name</label>
            <input type="text" name = "book_author" class="form-control" placeholder="Insert Author Name">
        </div>

        <div class="form-group">
            <label >Publish Date</label>
            <input type="text" name = "book_date" class="form-control" placeholder="Insert Publish Date">
        </div>

        <div class="form-group">
            <label >Category</label>
            <input type="text" name = "book_category" class="form-control" placeholder="Insert Book Category">
        </div>

        <div class="form-group">
            <label >Availability</label>
            <input type="text" name = "book_availability" id="book_availability" class="form-control" placeholder="availability">
        </div>

        <div class="form-group">
            <label >Desc</label>
            <input type="text" name = "book_desc" class="form-control" placeholder="Insert Book desc">
        </div>

       <!--changed to english--> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name ="simpan" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--changed to english-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete.php" method="POST">
      <div class="modal-body">
          <input type="hidden" name="delete" id="delete">
        
          <h4>Are you sure you want to delete this data?</h4>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <button type="submit" name ="deletedata" class="btn btn-danger ">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script> 
$(document).ready(function(){
 $('.editbtn').on('click', function(){

        $('#editmodal').modal('show');
           
 
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          console.log(data);
          
          $('#book_id').val(data[0]);
          $('#book_name').val(data[1]);
          $('#book_author').val(data[2]);
          $('#book_date').val(data[3]);
          $('#book_category').val(data[4]);
          $('#book_desc').val(data[5]);
 });
});

</script>



<script>

$(document).ready(function(){
 $('.deletebtn').on('click', function(){

        $('#deletemodal').modal('show');
           
 
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

          console.log(data);
          
          $('#delete').val(data[0]);

 });
});

</script>



<?php
  include 'login_modal.php';
} else { ?>
  <div class="container" style="background-color:rgba(0,0,0,0.4)">
  <h1 style="color:red; margin-top:50vh;">You must be logged in as admin in order to view this page.</h1>
  <a href="/index.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Return to home</a>
  </div>
  <?php include 'login_modal.php'; ?>
   
  <?php } ?>
</body>
</html>