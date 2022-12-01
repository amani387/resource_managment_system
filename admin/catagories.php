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
<h1 class="page-header">
Welcome to Admin
<small>Author</small>
</h1>
<div class="col-xs-6">

<form action="" method="post">
<div class="form-group">
    <label for="cat-title">add catagories</label>
    <input type="text" class="form-control" name="cat-title" required><span> <?php echo $error; ?></span>
</div>
<div class="form-group">
    <input type="submit" name="submit" class="btn btn-primary" value="add_catagory"  required>
</div>
</form>



<?php 
if(isset($_GET['edit'])){
   
    $catt_id = $_GET['edit'];
 include "includes/update_catagories.php" ; 
}/*
if(isset($_GET['edit1'])){
   
    $id = $_GET['edit1'];
 include "includes/update_users.php" ; 
}*/
?>

</div>

<div class="col-xs-6">
<?php 
insert_catagories();
?>
<?php 
//insert_users();
?>

<table class="table table-borderd table-hover"  >
<thead>
    <tr>
        <th >ID</th>
        <th>Catagory Title</th>
    </tr>
</thead>
<tbody>
    <?php
findallcatagory();
?>
<div class="container">
<hr>

  <?php
//findallusers();
?>
</div>
<?php
delete_category()
?>
<?php
//delete_users()
?>


</tbody>

</table>




</div> 

</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"?>

</html>
