<?php
  session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(3,3,3,0.8);">
    <a class="navbar-brand" href="index.php"><img src="/images/logo-nameless.png" style="width:1.5em;"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/browse.php">Browse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about.php">About</a>
        </li>

        <?php
        if(isset($_SESSION['login_user'])) 
        { 
        ?>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php 
        echo "<img class='pic' src='images/user/".$_SESSION['pic']."' style='width:1.5em; border-radius:100%; height:auto'>";
        ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right dark-bg" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="profile.php">View profile</a>
          <a class="dropdown-item text-light" href="manage.php">Manage Books</a>
          <a class="dropdown-item text-danger" href="logout.php">Logout</a>
        </div>
        </li>
         </li>

        <?php } else { 
          echo "<a class='nav-link' data-toggle='modal' data-target='#loginModal'>Login</a>";
           } ?>


      </ul>
    </div>
  </nav>