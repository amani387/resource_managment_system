
 <?php
  ob_start();?>
<!DOCTYPE html>
<html lang="en">

<?php

include "includes/db.php";
include "includes/header.php";
?>
<body>

    <!-- Navigation -->

<?php 
include "includes/navigation.php";
?>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
    <!-- Page Content -->
    <div class="container ">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php 
                $query="SELECT * FROM posts";
                $select_all_post_query=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($select_all_post_query)){
                    $post_title=$row["post_title"];
                    $post_author=$row["post_author"];
                    $post_date=$row["post_date"];
                    $post_image=$row["post_image"];
                    $post_content=$row["post_content"];
                    ?>
                 
                 <h1 class="page-header">
                    RESOURCE CENTER MANAGMENT SYSTEM
                    <small>RESOURCE CENTER POSTS</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo "POST TITLE ". " {$post_title}";?></a>
                </h2>
                <p class="lead">
                    SOURCE <a href="index.php"><?php echo"{$post_author}";?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo "{$post_date}"; ?></p>
                <hr>
                <img class="img-responsive"  src="images/<?php echo "{$post_image}"; ?> " alt="picture from the admin">
                <hr>
                <p><?php echo "{$post_content}";?></p>
                <a class="btn btn-primary" href="#">ACCESS INORMATION <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

               
<?php }   ?>
</div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include "includes/footer.php"; ?>
