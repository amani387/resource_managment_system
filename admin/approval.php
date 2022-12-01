
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
          <a href="homepage.html" id="Myheader">RESOURCE CENTER</a>
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
        <th>Time</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>college</th>
        <th>staff id</th>
        <th>services</th>
        <th>service details</th>
        <th>service start date</th>
        <th>service end date</th>
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
$query="SELECT * FROM staff";
$select_catagories=mysqli_query($connection,$query);
if ($connection&&$select_catagories){


while($row=mysqli_fetch_assoc($select_catagories)){
echo "<tr>";
$name=$row['staff_firstname'];
$lastname=$row['staff_lastname'];
$email=$row['staff_email'];
$college=$row['college'];
$id=$row['staff_id'];
$services=$row['services'];
$service_detail=$row['service_detail'];
$start_date=$row['starting_date'];
$end_date=$row['ending_date'];
echo "<td>
<p><input name='time' type = 'time' size = '25' maxlength = '30'></p>
</td>";
echo "<td> $name</td>";
echo "<td>$lastname</td>";
echo "<td>$email</td>";
echo "<td>$college</td>";

echo "<td>$id</td>";
echo "<td>$services</td>";
echo "<td>$service_detail</td>";
echo "<td>$start_date</td>";
echo "<td>$end_date</td>";

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
    
        <p style="text-align: center;">
            <label>Request detail and service specification(Reason for asking service)<br>
        <textarea name = "comments"rows = "10" clos = "70" style="width: 70%; "></textarea></label>
        </p>
        

        <br>
        <br>
</form>
<form>
        <table border="1" align="center">
        <caption style="font-size:10;">guest detail</caption>
            <thead>
        
            <th>Starting Date</th>
            <th>Ending date</th>
            <th>Sex</th>
            <th>Room number</th>
            <th>Number of users</th>
            <th>user Full name</th>
            <th>Email</th>
            <th>ID</th>
            <th>Service detail</th>
            
            
        </thead>
        <tbody>
           
        

<?php
 
$connection=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM guest_detail";
$select_catagories=mysqli_query($connection,$query);
if ($connection&&$select_catagories){

while($row=mysqli_fetch_assoc($select_catagories)){
echo "<tr>";
$starting=$row['starting_date'];
$ending=$row['ending_date'];
$guest_sex=$row['sex'];
$no_rooms=$row['no_rooms'];
$no_of_people=$row['no_of_people'];
$guest_full_name=$row['full_name'];
$id=$row['id'];
$service_detail=$row['service_detail'];
$guest_email=$row['email'];

echo "<td> $starting</td>";
echo "<td> $ending</td>";
echo "<td> $guest_sex</td>";
echo "<td> $no_rooms</td>";
echo "<td> $no_of_people</td>";
echo "<td>$guest_full_name</td>";

echo "<td>$guest_email</td>";
echo "<td> $id</td>";
echo "<td>$service_detail</td>";
echo "<td><a href='approval.php?delete={$id}'>DELETE</a></td>";
echo "<td><a href='approval.php?edit={$id}'>EDIT</a></td>";

echo "</tr>";
}
}else{
    echo "Error connecting to database: " . mysqli_error($connnection);

}



?>

        </tbody>
        </table><br><br>
    
        
        
        <p>
        <hr>

         <span style="color:black; margin-left:10; font-weight: 500;">The above request have got approval from the vice president and waiting for your final approval.</span><hr> 
        </p> 
        
         <p id="aprovealert">
            <input type="button" name="resourCenterManager" style="margin-left: 73%;" value="Approve" >
        </p>
            <hr>
    
</div>



    </form><?php
 ?>
<?php
   if(isset($_GET['edit'])){
   
    $catt_id = $_GET['edit'];
 include "update_catagories.php" ; 
}

   // ob_start();
 // header("Location: approval.php");  
    
    ?>
</body>
  

       
<?php include '../footer.php' ?>   

    
</html>