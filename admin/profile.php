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
Welcome to Admin profile manager 
<small><?php  echo $_SESSION['name']; ?></small>
</h1>
<div class="col-xs-6">
<?php

if (isset($_SESSION['name']))
{
    $connection=mysqli_connect('localhost','root','','project');
   $username = $_SESSION['name'];
   $query = "SELECT * FROM users WHERE name='{$username}'";
   $result = mysqli_query($connection, $query);
   while ($row = mysqli_fetch_assoc($result))
{ echo $_SESSION['name'];
    echo $_SESSION['name'];
    $userpassword = $row['password'];
    $username1 = $row['name'];

}
}
?>
<form action="" method="post">
<div class="form-group">
    <label for="username"> user name</label>
    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username1; ?>" required><span> </span>
</div>
<div class="form-group">
    <label for="passsword"> user password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter user password " value="<?php echo $userpassword; ?>" required><span></span>
</div>
<div class="form-group">
    <input type="submit" name="submit2" class="btn btn-primary" value="update profile">
</div>
</form>
<?php if (isset($_POST['submit2']))
{

include "update_profile.php";

}

?>
</div> 

</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</div>
<?php include "includes/admin_footer.php"?>

</html>
