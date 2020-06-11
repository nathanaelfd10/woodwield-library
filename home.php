
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main-1.css">

<style>

#scroll {
    position:fixed;
    right:10px;
    bottom:10px;
    cursor:pointer;
    width:50px;
    height:50px;
    background-color:#3498db;
    text-indent:-9999px;
    display:none;
    -webkit-border-radius:60px;
    -moz-border-radius:60px;
    border-radius:60px
}
#scroll span {
    position:absolute;
    top:50%;
    left:50%;
    margin-left:-8px;
    margin-top:-12px;
    height:0;
    width:0;
    border:8px solid transparent;
    border-bottom-color:#ffffff;
}
#scroll:hover {
    background-color:#e74c3c;
    opacity:1;filter:"alpha(opacity=100)";
    -ms-filter:"alpha(opacity=100)";
}

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 1;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bgimg-1 {
  background-image: url("../images/bg-8.jpg");
  opacity: 0,45;
  min-height: 60%;
  padding:50px 80px;
}

.bgimg-2 {
  background-image: url("../images/bg-7.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("../images/bg.jpg");
  min-height: 400px;
  
}



.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
  font-size: 70%;
}

.caption span.border {

  color: #fff;
  padding: 28px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #000;
}

.container{
  padding:50px 50px 90px 90px;
}

.container-right{
  padding:50px 50px 90px 90px;
  margin-left: 45%;
  text-align: right;
}


body {
		font-family: 'Varela Round', sans-serif;
	}


</style>
</head>
<body>

<?php include 'navbar_guest.php';?>


<div class="bgimg-1">
  <div class="caption">
  <span class="border">WOODWIELD</span>
  </div>
</div>



<div style="color: #777;background-color:#fff;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center">Books to the Ceiling</h3>
  <p style="text-align:center">
  "Books to the ceiling, <br>
Books to the sky, <br>
My piles of books are a mile high. <br>
How I love them! <br>
How I need them! <br>
I’ll have a long beard by the time I read them." <br> </p>

<p style="text-indent:55%">&#8212 Arnold Lobel </p>
</div>

<?php include 'login_modal.php';?>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>