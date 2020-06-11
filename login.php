<?php
include 'connect.php';
if(isset($_POST['login']))
{
  $count=0;
  $res=mysqli_query($connect,"SELECT * FROM `tbl_user` WHERE username='$_POST[username]' && password='$_POST[password]';");
  
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);

  if($count==0)
  {
    ?>
          <!--
          <script type="text/javascript">
            alert("The username and password doesn't match.");
          </script> 
          -->
      <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
        <strong>The username and password doesn't match</strong>
      </div>    
    <?php
  }
  else
  {
    $_SESSION['loggedin'] = $_POST['username'];
    $_SESSION['pic']= $row['pic'];

    ?>
      <script type="text/javascript">
        window.location="index.php"
      </script>
    <?php
  }
}

?>