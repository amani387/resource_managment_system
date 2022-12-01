   
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin resource</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <form action="" method="post">
    <div class="form-group">
    <label for="name_of_user">Edit users</label>
    <?php 
echo "iam from the update users";
if (isset($_GET['edit1'])){
   
        $id = $_GET['edit1'];
       
        $query="SELECT * FROM users WHERE id=$id ";
    
    $select_users=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_users)){
      
        $username=$row['name'];
        $password=$row['password'];
        echo $username.$password;
        ?>

<input  type="text" class="form-control" name="name_of_user" value="<?php if(isset($username)){echo $username; } ?>">

<input  type="text" class="form-control" name="pass_of_user" value="<?php if(isset($password)){echo $password; } ?>">
        <?php
       
}}

?>

  </div>
    <div class="form-group">
    <input type="submit" name="update_users" class="btn btn-primary" value="update_catagory">
    </div>
    </form>    
    <?php 
if (isset($_POST['name_of_user']) && isset( $_POST['pass_of_user'])) {
    echo "iam from the update users nnnnnnnnnnnhhgf";
    echo "the  onne";
    $name = $_POST['name_of_user'];
echo $password=$_POST['pass_of_user'];
$id = $_GET['edit1'];
 $query="UPDATE users SET name ='{$name}',password='{$password}' WHERE id='{$id}'";
$updating_query=mysqli_query($connection,$query);
header("Location: users.php");
if($updating_query){
echo "updated";

}
}
?>
   

