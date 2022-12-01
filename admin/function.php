<?php
function insert_catagories(){
    global $connection;
    global $select_catagories;
    $query="SELECT * FROM catagories";

$select_catagories=mysqli_query($connection,$query);

if (isset($_POST['submit'])){
        $title=$_POST['cat-title'];
        
        if($title == "" || empty($title)){
            $error= "<h3>you need to fill it</h3>";
        }else
        {
            $query="INSERT INTO catagories(cat_title) ";
            $query.="VALUES('{$title}')";
            $create_catagory_query =mysqli_query($connection,$query);
            header("Location: catagories.php");
            if (!$create_catagory_query){
                die ('query failed'.mysqli_error($connection));

            }
            

            
        }
}
}
function insert_users(){
    global $connection;
    global $select_users;
$query="SELECT * FROM users";
$select_users=mysqli_query($connection,$query);

if (isset($_POST['submit1'])){
        //
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(($username== "" || empty($username))||( $password== "" || empty($password))){
            $error= "<h3>you need to fill both fields</h3>";
        }else
        {
            $query="INSERT INTO users(name,password) ";
            $query.="VALUES('{$username}','{$password}')";
            $create_catagory_query =mysqli_query($connection,$query);
            header("Location: users.php");
            if (!$create_catagory_query){
                die ('query failed'.mysqli_error($connection));

            }
            

            
        }
}
}
function findallcatagory(){
    global $connection;

   $query="SELECT * FROM catagories";
    
   $select_catagories=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($select_catagories)){

$cat_id=$row['cat_id'];
$cat_title=$row['cat_title'];

echo "<tr>";
echo "<td>{$cat_title}</td>";
echo "<td>{$cat_id}</td>";
echo "<td><a href='catagories.php?delete={$cat_id}'>DELETE</a></td>";
echo "<td><a href='catagories.php?edit={$cat_id}'>EDIT</a></td>";
echo " <tr>";

}

}
function findallusers(){
    global $connection;

   $query="SELECT * FROM users";
    
   $select_users=mysqli_query($connection,$query);


while($row=mysqli_fetch_assoc($select_users)){

$id=$row['id'];
$username=$row['name'];
$password=$row['password'];
echo "<tr>";
echo "<td>{$id}</td>";
echo "<td>{$username}</td>";
echo "<td>{$password}</td>";
echo "<td><a href='users.php?delete1={$id}'>DELETE</a></td>";
echo "<td><a href='users.php?edit1={$id}'>EDIT</a></td>";
echo " <tr>";

}

}
function delete_category(){
    global $connection;
   // global $delete_query;
if (isset($_GET['delete'])){
$the_cat_id = $_GET['delete'];

$query="DELETE   FROM catagories WHERE cat_id={$the_cat_id} ";
$delete_query=mysqli_query($connection,$query);
header("Location: catagories.php");

}


}
function delete_users(){
    global $connection;
   // global $delete_query;
if (isset($_GET['delete1'])){
$user_id=$_GET['delete1']; 

$query="DELETE FROM users WHERE id={$user_id} ";
$delete_query=mysqli_query($connection,$query);
header("Location: users.php");


}


}
?>