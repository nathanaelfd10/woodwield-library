<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
          .intro{
            font-family: 'Gill Sans', sans-serif;
          }
          .jumbotron{
            background: url("/images/bg-9.jpg") no-repeat center;
            background-size: cover; 
            color: white;
            overflow:hidden;
            height:100vh;
            margin-bottom: -500px;
            z-index: -1;
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

    </style>

</head>
<body>

<?php include 'navbar.php'; ?>


  <div class="jumbotron jumbotron-fluid">
    <div class="container push-spaces">
      <h1 class="display-4 intro">Explore our <br> Library</h1>
      <p class="lead intro">Find your favourite books here.</p>
      <a class="btn btn-danger btn-main intro" href="browse.php" role="button">Browse</a>
      <a class="btn btn-outline-danger btn-secondary intro" href="/about.php" role="button">About</a>
    </div>
  </div>



<?php include 'login_modal.php';
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>