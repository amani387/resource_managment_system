   
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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
    <label for="cat-title">Edit catagories</label>
    <?php 
echo "iam from the updatecatagory";
if (isset($_GET['edit'])){
   
        $catt_id = $_GET['edit'];
       
        $query="SELECT * FROM catagories WHERE cat_id=$catt_id ";
    
    $select_catagories=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_catagories)){
      
        $cat_title=$row['cat_title'];
        echo $cat_title;
        ?>

<input  type="text" class="form-control" name="catt_title" value="<?php if(isset($cat_title)){echo $cat_title; } ?>">
        <?php
       
}}

?>

  </div>
    <div class="form-group">
    <input type="submit" name="update_catagory" class="btn btn-primary" value="update_catagory">
    </div>
    </form>    
    <?php 
if (isset($_POST['catt_title']) ){
    echo "iam from the updatecatagory nnnnnnnnnnnhhgf";
    echo "the new onne";
echo $cat_ttitle=$_POST['catt_title'];
echo $catt_id;
 $query="UPDATE catagories SET cat_title ='{$cat_ttitle}' WHERE cat_id='{$catt_id}'";
$updating_query=mysqli_query($connection,$query);
header("Location: catagories.php");
if($updating_query){
echo "updated";

}
}
?>
   

