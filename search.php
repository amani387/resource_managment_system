<!DOCTYPE html>
<html lang="en">

<?php
include "includes/db.php";
include "includes/header_for_search.php";
?>
<body>

    <!-- Navigation -->

<?php 
include "includes/navigation_for_search.php";
?>
    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php 


if(isset($_POST['submit'])){
    echo  "what you searching  for is ".$_POST['search'];
 $search=$_POST['search'];
    $query="SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
    $query_result=mysqli_query($connesction,$query);
    if(!$query_result){
        die ("SORRY QUERY FAILD.mysqli_error($connection)");
    }
    $count=mysqli_num_rows($query_result);
    if($count==0){
        echo "<h3>NO RESULT!! PLEASE TRY TO SEARCH BY TAG NAME</h3>";
    }else{



        echo " <h3>RESULT FOUND</h3>";


       
        while($row=mysqli_fetch_assoc($query_result)){
            $post_title=$row["post_title"];
            $post_author=$row["post_author"];
            $post_date=$row["post_date"];
            $post_image=$row["post_image"];
            $post_content=$row["post_content"];
            ?>
         
         <h1 class="page-header">
          SEARCH PAGE HEADING 
            <small>HEADER</small>
        </h1>

        <!-- First Blog Post -->
        <h2>
            <a href="#"><?php echo " {$post_title}";?></a>
        </h2>
        <p class="lead">
            by <a href="index.php"><?php echo"{$post_author}";?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span><?php echo "{$post_date}"; ?></p>
        <hr>
        <img class="img-responsive" src="images/<?php echo "{$post_image}"; ?> " alt="here is the picture">
        <hr>
        <p><?php echo "{$post_content}";?></p>
        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>


<?php
    }
   
}





              
 } 
 ?>
 
        </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include "includes/footer.php"; ?>
      