


<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<?php include 'navigation.php' ;



?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Requesting Page</title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="secondpage.js"></script>
<style>

body {
  /* The image used */
  background-image: url("images.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.stretchX {width: 400px;} .stretchXY {width: 200px; height: 300px} 
</style>

</head>
<?php include 'header.php'?>
<body>
<img class=”stretchX” src="download.jpg” alt="trial image"/> 
<div class="container bg">
<?php

?>
<h2 style="font-size: 25pt; ">Haramaya University Resource Center</h2>
<p style=" text-align:center; "><strong style= "font-size: 15pt";>Stakeholders requesting page</strong><br><br>
Please fill out this form properly to get service from resource center.All the information you give here are sent to the vice president office to get approval for the service and then to the resource center manager for final approval.</p>

            <div class="form-group">
            <form method ="post" action ="" >
            <P>
            <strong>Requesting Body</strong><br>
            </P> 
            <p><label>First Name:
            <input name="fname" type = "text" size = "25"
            maxlength = "30" required>
            </label >
            </p> 
            <p><label>Last Name:
            <input name="lname" type = "text" size = "25"
            maxlength = "30" required>
            </label>
            </p> 
            <p>
            <label>E-mail Address:
            <input name = "email" type = "text" size = "25" required>
            </label>

            <label>staff id
            <input name="id" type = "text" size = "25" placeholder = "staff id"
            maxlength = "30" required>
            </label>
            </p>
            <p>
           
        <datalist id="office" name="office" >
            <option value="College of Agriculture and Environmental Science(CAES)"></option>
            <option value="College of Business And Economics(CBE)"></option>
            <option value="College of Computing and Informatics">College of Computing and Informatics</option>
            <option value="College of Education And Behavioral Science">College of Education And Behavioral Science</option>
            <option value="College of Law">College of Law</option>
            <option value="College of Health and Medical Sciences">College of Health and Medical Sciences</option>
            <option value="College of Natural and Computational Science">College of Natural and Computational Science</option>
            <option value="College of Social Sciences And Humanities">College of Social Sciences And Humanities</option>
            <option value="College of Veterinary Medicine">College of Veterinary Medicine</option>
            <option value="Sport Academy">Sport Academy</option>
            <option value="Haramaya Institute of Technology">Haramaya Institute of Technology</option>
        </datalist>
            <label for="office">choose your college</label>
            <input type="text" list="office" id="RequestingOffice" name="RequestingOffice" size="50" autocomplete="on">
            </p>
            <P>
            <strong>Service Details</strong><br>
            <span style="color:red;"><em>For all the service you select, Becarefull that you should also fill the detail for approval.</em></span> </P>

            <ul>
            <li><p>
            <label>Bedroom<input name = "service[]" type ="checkbox" value = ",Bedroom"> </label>
            </p></li>
            <br>
            <hr>
            <li> <p>
            <label>Meeting hall
            <input name = "Service[]" type ="checkbox" value = "Meeting hall"> </label>
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            &nbsp; &nbsp; &nbsp; <label>Hall 1 (40-50)<input name = "hall" type ="radio"value = "Hall-one" ></label>
            &nbsp; &nbsp; &nbsp;<label>Hall 2 (40-50)<input name = "hall" type ="radio" value = "Hall-two"> </label>
            &nbsp; &nbsp; &nbsp;<label>Hall 3 (130)<input name = "hall" type ="radio" value = "Hall-three "> </label>
            </p></li>
            <hr>
            <li> <p>
            <label>Meal<input name = "service[]" type ="checkbox" value = ",Meal"  > </label>
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            <p id="lunch"> &nbsp; &nbsp; &nbsp;<label >Lunch<input name = "meal" type ="radio" value = "Lunch" ></label></p>
            <p id="dinner">&nbsp; &nbsp; &nbsp;<label >Dinner<input name = "meal" type ="radio" value = "Dinner" ></label></p>
            <p id="dinnerandlunch">&nbsp; &nbsp; &nbsp;<label >All<input name = "meal" type ="radio"  value = "Both dinner and lunch" ></label></p>
            </p></li>
            <hr>
            <li> <p>
            <label>Coffee and tea</label>
            <input name = "service[]" type ="checkbox" value = ",Coffee and tea">
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            &nbsp; &nbsp; &nbsp;<label>Morning<input name = "coffeeandtea" type ="radio"value = "Morning" ></label>
            &nbsp; &nbsp; &nbsp;<label>Afternoon<input name = "coffeeandtea" type ="radio"value = "Afternoon"></label>
            </p></li>
            <hr>
            <li><p>
            <label>Gymnasium and Swimming pool</label>
            <input name = "service[]" type ="checkbox" value = ",Gymnasium and Swimming pool">
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            &nbsp; &nbsp; &nbsp;<label>Morning<input name = "gymnasium " type ="radio" value = "Morning" ></label>
            &nbsp; &nbsp; &nbsp;<label>Evening<input name = "gymnasium" type ="radio" value = "Evening"></label>
            &nbsp; &nbsp; &nbsp;<label>Both<input name = "gymnasium" type ="radio" value = "Both morning and night"></label>
            </p></li>
            <hr>
            <li> <p>
            <label>Other<input name = "service[]" type ="checkbox" value =",other"></label>
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            <label>Other &nbsp;<input name="otherservice" type = "text" size = "25" maxlength = "30"> </label>
            </P></li> 
            </ul>
            <hr>
            <p>
            <label>Service providing date and time</label>
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            <label>Start <input name="startdate" type = "date" size = "25" maxlength = "30"> </label>
            End<label>
            <input name="enddate" type = "date" size = "25"
            maxlength = "30">
            </label> </p>
            <p><label>Cost covered</label> 
            <br><br>
            &nbsp; &nbsp; &nbsp; <span style="color:black;">Details</span> &nbsp; 
            &nbsp; &nbsp; &nbsp;  <label>From Budget<input name = "costcovered" type ="radio" value = "Frombudget" ></label>
            &nbsp; &nbsp; &nbsp;<label>By the guest<input name = "costcovered" type ="radio" value = "Byguest"></label> 
            </p>
            <p>
            <label>Reason for asking the service and if you have selected other please specify it:<br>
            <textarea name = "comments"rows = "10" clos = "70" style="width: 85%"></textarea></label>
            </p>

            <h3> <strong>Guest Details</strong><br></h3>
            <p> 

            <br>
            <P>
            <ul>
            <li>If the guest leaves with out giving back a key and other property or with out covering his cost for all problem the  regarding the guest the requesting body will take the responsibility.</li>
            <br> <li>This form will be sent to the vice president office and to finance and adminstration office if the cost is covered by the requesting body. </li>
            <br><li>This form should be filled properly before the guest hosted</li>
            </ul>
            </P>
            <br>


            <p>
            Please tick the box below to confirm that you agree to with terms and conditions of HU Resource Center.
            <br><br>
            <label>
            <input name = "Giveninformation" type ="checkbox"
            value = "Agreed">I agree that  all the information,I have given are right.
            </label><br>
            <br><br>
            <label>
            <input name = "Policy" type ="checkbox"
            value = "Agreed">I have agree to the Terms and Conditions and Privacy Policy.
            </label><br>
            </p id="my">
            <input type="button"  class="btn btn-primary" value="finish" >
            </p>

            <p id="submitform">
            <input type="submit" value="submit" name="submit1" id="button1"  class="btn btn-primary" >Submit</input>
            </p>
            <p id="result">

            </p>
            </div>
            </form>
            

            <?php 
                
            
                //************************************
                if (isset($_POST['submit1'])){
                    echo "<h1>engongingo woo</h1>";
                    $hall_detail="the hall will be ".$_POST['hall'];
                    $meal_detail="the meal is for ".$_POST['meal'];
                   $detail=$hall_detail." ".$meal_detail;
                    $email=$_POST['email'];
                    $id=$_POST['id'];
                    $college=$_POST['RequestingOffice'];
                    $services=$_POST['service'];                  
                     $firstname=$_POST['fname'];
                     $lastname=$_POST['lname'];
                     $startdate=$_POST['startdate'];
                     $enddate=$_POST['enddate'];
                     $check1=""; 
//***********loop for iterating over services*********** */
                    foreach($_POST['service'] as $check)  
                    {  
                    $check1 .= $check;
                  
                    }
                    echo " $check1 ";
                    
                
            $connection=mysqli_connect('localhost','root','','project');
                      $query="INSERT INTO staff(staff_firstname,staff_lastname,staff_email,college,staff_id,services,service_detail,starting_date,ending_date) VALUES('$firstname','$lastname','$email','$college','$id','$check1','$detail','startdate','enddate')";
                     
                     if (!$connection){
                            die ("<h1>error </h1>").mysqli_error($connection);
                            }
                            $result=mysqli_query($connection, $query);
                            if(!$result){
                            echo "entry fucked up";
}
   
                }


                //}
                //*********************************************
                ?>

               
    
<?php 
include 'footer.php';

?>
<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>
 </div>
 </body>
</html>