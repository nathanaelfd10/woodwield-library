
<?php
      include 'connect.php';
    
      if(isset($_GET['submit']))
		{

			$q=mysqli_query($connect,"SELECT * from tbl_book where book_name like '%$_GET[search]%' ");

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
			while($row=mysqli_fetch_assoc($q)) { ?>

        <div class="col-sm-6 col-md-4 col-lg-3 mt-4 align-item-md-center justify-content-md-center">
        <div class="card">
            <img class="card-img-top" src="https://picsum.photos/200/150/?random">
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
                    <img class="card-img-top" src="https://picsum.photos/200/150/?random">
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
      
      ?>