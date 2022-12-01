
<?php session_start(); ?>

    <?php 
    
if (isset($_POST['username']) && isset( $_POST['password']))
 {
    echo "iam from the update profile nnnnnnnnnnnhhgf";

    echo "the  onne";

    $id=$_SESSION['id'];

    $name = $_POST['username'];

echo $password=$_POST['password'];

//$id = $_GET['edit1'];

 $query="UPDATE users SET name ='{$name}',password='{$password}' WHERE id ='{$id}'";

$updating_query=mysqli_query($connection,$query);

header("Location:profile.php");

if($updating_query){

echo "updated";

}


}
?>
   

