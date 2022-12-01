<nav class="navbar navbar-inverse navbar-fixed-top  " role="navigation">
        <div class="container ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">resource center</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


<?php

/*
$query="SELECT * FROM catagories";
$select_all_catagories_query = mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($select_all_catagories_query)){
$cat_title=$row['cat_title'];
echo "<li><a href='#'>{$cat_title}</a></li>";

}
*/

?>

             <li>
                        <a href="includes/About.php">About</a>
                    </li>
                 
                    <li>
                        <a href="News.php">News</a>
                    </li>
                    <li>
                        <a href="contactup.php">Contact</a>
                    </li>
                    <li><a href="includes/guest_booking copy.php">
                        
    <button type="button" class="btn btn-primary navbar-btn" name="booking">
      <span class="glyphicon glyphicon-plus"></span> 
      SIGN-UP AS A GUEST HERE
    </button>
    </a>
  </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php
    if (isset($_POST['booking'])){
        header("Location: guest_booking.php");
    }
    ?>