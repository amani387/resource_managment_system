
 <?php
   ob_start();?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
        
        <link rel="stylesheet" href="../About.css">
        <script src="Adminpage.js"></script>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        

        
    </head>

    <header>
        <div class="navbar" id="myNavbar"  style="margin-bottom:20px;">
          <a href="index2.php" id="Myheader">RESOURCE CENTER</a>
            <a href="index.php">Home</a>
           
          </div>    
    </header>  
    <body> 
        <h2 style="font-size: 25pt; text-align: center; ">Haramaya University Resource Center</h2>
        <p style=" text-align:center; "><strong style= "font-size: 15pt";>New Service Requests</strong><br><br>
        The below is the requested service that have been that have got approval from Vice President for Community Engagement & Enterprise Development</p>
    <form method ="post" action ="">
        <div class="center" >



            <table border="1"  style ="margin-right:auto;margin-left:0px">
            <caption  style="font-weight:bold;">requester detail</caption>
        <thead>

        <tr>
    
        <th>Customer Full Name</th>
   
        <th>ROOOM NUMBER</th>
       
        <th>SERVICE ID id</th>
        <th>CUSTOMER MEETING HALL</th>
    
    </tr>
    </thead>
    <tbody>
      
    
    <?php
  
  /*
  
echo "<td>{$cat_title}</td>";
echo "<td>{$cat_id}</td>";
echo "<td><a href='catagories.php?delete={$cat_id}'>DELETE</a></td>";
echo "<td><a href='catagories.php?edit={$cat_id}'>EDIT</a></td>";
echo " <tr>";

  
  */ 


$connection=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM services";
$select_catagories=mysqli_query($connection,$query);
if ($connection&&$select_catagories){


while($row=mysqli_fetch_assoc($select_catagories)){
echo "<tr>";
$name=$row['individual_customer_name'];
$room_no=$row['bedroom_room_number'];
$service_id=$row['service_id'];
$meeting_hall=$row['meeting_hall'];


echo "<td> $name</td>";

echo "<td>$room_no</td>";

echo "<td>$service_id</td>";
echo "<td>$meeting_hall</td>";


echo "</tr>";
}
}else{
echo "Error connecting to database: " . mysqli_error($connnection);

}



?>
    
</tbody>
            </table>
<br>
<br>

        <br><br>
    

        <br>
        <br>
</form>
<?php
 ?>
<?php
  

   // ob_start();
 // header("Location: approval.php");  
    
    ?>
</body>
  

       
<?php include '../footer.php' ?>   

    
</html>