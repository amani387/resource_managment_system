<?php 
include "includes/admin_header.php";

include "function.php";
$error="";
?>
<div id="wrapper">

<!-- Navigation -->
<?php include "includes/admin_navigtion.php"; ?>
<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
        <div class="col-lg-12">
        <table class="table table-borderd table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>AUTHOR</th>
                <th>TITLE</th>
                <th>CATAGORY</th>
                <th>STATUS</th>
                <th>IMAGE</th>
                <th>TAGS</th>
                <th>COMMENTS</th>
                <th>DATES</th>
            </tr>
        </thead>
        <tbody>

            <?php
          

        $query="SELECT * FROM posts";
    
 $select_catagories=mysqli_query($connection,$query); 
 while($row=mysqli_fetch_assoc($select_catagories)){
    echo "<tr>";
    $post_id=$row['post_id'];
 $post_catagory_id=$row['post_catagory_id'];
 $post_title=$row['post_title'];
 $post_author=$row['post_author'];
 $post_date=$row['post_date'];
 $post_image=$row['post_image'];
 $post_content=$row['post_content'];
 $post_tags=$row['post_tags'];
 $comment_count=$row['comment_count'];
 $post_status=$row['post_status'];

 echo "<td> $post_id</td>";
 echo "<td>$post_catagory_id</td>";
 echo "<td>$post_title</td>";
 echo "<td>$post_author</td>";
 echo "<td>$post_date</td>";
 echo "<td><img width='100' src='../images/$post_image'></td>";
 echo "<td>$post_content</td>";
 echo "<td>$post_tags</td>";
 echo "<td>$comment_count</td>";
 echo "<td>$post_status</td>";
 echo "<td><a href='posts.php?delete={$post_id}'>delete</a></td>";
 echo "</tr>";
 }

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $query ="DELETE FROM POSTS WHERE post_id=$id";
    $delete_query=mysqli_query($connection,$query);
header("Location:posts.php");

}

 ?>
            <tr>
                <td>0145</td>
                <td>aman</td>
                <td>php</td>
                <td>web</td>
                <td>placeholder</td>
                <td>wow</td>
                <td>hey</td>
                <td>weye</td>
                <td>today</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"?>
<?php include "includes/admin_footer.php"?>

</html>
