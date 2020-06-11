<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- ICON <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" /> -->
<title>Browse</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/main-1.css">
<style>

body {
  background-image: url('/images/bg-10.jpg');
  background-color: #89FAD0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.jumbotron-header{
    margin-top:7vh;
    font-size: 4em;
}

.card {
    background-color:#eeeeee;
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:4vh;
    margin-left: 3vh;
    margin-right:3vh;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);;
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #eeeeee;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}

#carousel {
  position: absolute;
  height: 200px;
  width: 810px;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.arrow {
  position: absolute;
  width: 30px;
  height: 30px;
  background-color: white;
  text-align: center;
  font-size: 25px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 20px;
  color: #228291;
  line-height: 30px;
  margin-top: 85px;
  z-index: 1000;
}

.arrow-right {
  left: 780px;
}

.item {
  text-align: center;
  color: white;
  font-size: 40px;
  position: absolute;
  transition: height 1s, width 1s, left 1s, margin-top 1s, line-height 1s, background-color 1s;
  
}

.level-2 {
  height: 150px;
  width: 110px;
  line-height: 150px;
  background-color: #228291;
  left: 650px;
  margin-top: 25px;
}

.level-1 {
  height: 180px;
  width: 130px;
  line-height: 180px;
  background-color: #6796E5;
  left: 500px;
  margin-top: 10px;
}

.level0 {
  height: 200px;
  width: 150px;
  line-height: 200px;
  background-color: #4EC9E1;
  left: 330px;
}

.level1 {
  height: 180px;
  width: 130px;
  line-height: 180px;
  background-color: #6796E5;
  margin-top: 10px;
  left: 180px;
}

.level2 {
  height: 150px;
  width: 110px;
  line-height: 150px;
  background-color: #228291;
  margin-top: 25px;
  left: 50px;
}

.left-enter {
  opacity: 0;
  left: -60px;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
}

.left-enter.left-enter-active {
  opacity: 1;
  left: 50px;
  height: 150px;
  width: 110px;
  line-height: 150px;
  margin-top: 25px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.left-leave {
  opacity: 1;
  left: 650px;
  height: 150px;
  width: 110px;
  line-height: 150px;
  margin-top: 25px;
}

.left-leave.left-leave-active {
  left: 780px;
  opacity: 0;
  height: 120px;
  line-height: 120px;
  margin-top: 40px;
  width: 90px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.right-enter {
  opacity: 0;
  left: 760px;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
}

.right-enter.right-enter-active {
  left: 650px;
  opacity: 1;
  height: 150px;
  margin-top: 25px;
  line-height: 150px;
  width: 110px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.right-leave {
  left: 50px;
  height: 150px;
  opacity: 1;
  margin-top: 25px;
  line-height: 150px;
  width: 110px;
}

.right-leave.right-leave-active {
  left: -60px;
  opacity: 0;
  height: 120px;
  width: 90px;
  line-height: 120px;
  margin-top: 40px;
  transition: left 1s, opacity 1s, height 1s, width 1s, margin-top 1s, line-height 1s;
}

.noselect {
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.btn-card {
    height:4vh;
}

@media (min-width: 1200px){}
.container{
    background-color:rgba(3,3,3,0.85);
    border-radius:25px 25px 25px 25px;
    max-width: 155vh;
}

.jumbotron-browse{
    margin-top:20vh;
    margin-bottom:0vh;
    border-radius:25px 25px 25px 25px;
    background-color:rgba(0,0,0,0.0);
}

.search-field {
  display: block;
  margin : 0 auto;
  width: 130px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.search-field:focus {
  width: 30%;
}

}


</style>
</head>

<body>


<?php include 'navbar.php';?>

<div class="container container-card">
<div class="jumbotron jumbotron-browse text-light text-center">
  <h1 class="jumbotron-header">Explore our collection</h1>

  <form class="navbar-form search-field" method="GET" name="form1">
      <input class="form-control" type="text" name="keywords" placeholder="Search books.." required="">
      <button type="submit" class="btn btn-outline-dark" name="search">
      <i class="fas fa-search"></i>
      </button>
  </form>
</div>
        <div class="row">


<!-- headache ahead -->

<?php

      include 'connect.php';
    
      if(isset($_GET['search']))
		{

			$q=mysqli_query($connect,"SELECT * from tbl_book where book_name like '%$_GET[keywords]%' ");

      ?>

      <?php
			if(mysqli_num_rows($q)==0)
			{
				?>
        <a class="btn btn-outline-light" href="/browse.php" role="button" style="margin-left:2em; margin-bottom: 2em;">Back</a>
        <p style="color:white; margin-left: 2em;">No books found.</p>
        </div>
        <?php
			}
			else {

        ?> 
            <div>
                <a class="btn btn-outline-light" href="/browse.php" role="button">Back</a>
            </div>
        <?php
			while($row=mysqli_fetch_assoc($q)) { ?>
        


        <div class="col-sm-6 col-md-4 col-lg-3 mt-4 align-item-md-center justify-content-md-center">
        <div class="card">
            <img class="card-img-top" src="/images/book_thumbnail/<?php echo $row['img_path'];?>">
            <div class="card-block">
                <h4 class="card-title"><?php echo $row['book_name']; ?></h4>
                <div class="meta">
                    <a href="#"><?php echo $row['book_category']; ?></a>
                </div>
                <div class="card-text">
                    <?php echo $row['book_desc']; ?>
                </div>
            </div>
            <div class="card-footer">
                <span class="float-left">Available:&nbsp</span>
                <span><i class=""></i><?php echo $row['book_availability']; ?></span>
                <span class="float-right"><button type="button" class="btn btn-outline-danger btn-card" placeholder>More</button></span>
            </div>
        </div>
    </div>

    <?php
		  	}
			}
    } 
    /*if button is not pressed.*/ 
    else 
    {
      $res=mysqli_query($connect,"SELECT * FROM `tbl_book` ORDER BY `tbl_book`.`book_name` ASC;");

      echo "<table class='table table-bordered table-hover' >";

      while($row=mysqli_fetch_assoc($res)) 
      {
  	?>
      
      <div class="col-sm-6 col-md-4 col-lg-3 mt-4 align-item-md-center justify-content-md-center">
                <div class="card">
                    <img class="card-img-top" src="/images/book_thumbnail/<?php echo $row['img_path'];?>">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $row['book_name']; ?></h4>
                        <div class="meta">
                            <a href="#"><?php echo $row['book_category']; ?></a>
                        </div>
                        <div class="card-text">
                            <?php echo $row['book_desc']; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <span class="float-left">Available:&nbsp</span>
                        <span><i class=""></i><?php echo $row['book_availability']; ?></span>
                        <span class="float-right"><a class="btn btn-outline-danger" href="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf" role="button">Read</a></span>
                    </div>
                </div>
            </div>


      <?php
	
			}
		}

	?>

                    
</div>
</div>






<?php include 'login_modal.php'; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>