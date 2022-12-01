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
<div class="row">
        <div class="col-lg-12">
<h1 class="page-header">
Welcome to Admin username managment
<small>users list</small>
</h1>
<div class="col-xs-6">

<form action="" method="post">
<div class="form-group">
    <label for="username"> user name</label>
    <input type="text" class="form-control" name="username" placeholder="Username" required><span> <?php echo $error; ?></span>
</div>
<div class="form-group">
    <label for="passsword"> user password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter user password " required><span> <?php echo $error; ?></span>
</div>
<div class="form-group">
    <input type="submit" name="submit1" class="btn btn-primary" value="add_user">
</div>
</form>


<?php 
if(isset($_GET['edit1'])){
   echo "it is here";
    $catt_id = $_GET['edit1'];
 include "includes/update_users.php" ; 
}

?>

</div>

<div class="col-xs-6">
<?php 
insert_users();
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
 findallusers();
?>
<?php
delete_users();
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
