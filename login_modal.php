<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:25vh">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#000">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="login" action="" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="modal-footer">
        <a href="/signup_page.php">Don't have an account? Sign up.</a>
        <button type="submit" name="submit" class="btn btn-outline-dark">Login</button>
      </div>
      </form>

      <?php
      
    if(isset($_POST['submit']))
    {
      include 'connect.php';
      $count=0;
      $res=mysqli_query($connect,"SELECT * FROM `tbl_user` WHERE username='$_POST[username]' && password='$_POST[password]';");
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>

          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {

        $_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_category'] = $row['user_category'];

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
         header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
      }
    }

      ?>
      
