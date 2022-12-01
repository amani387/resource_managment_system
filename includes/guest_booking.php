
<head>
<style>
body{background-image: linear-gradient(to right, #7B1FA2, #E91E63)}.section{position: relative;height: 120vh}.section .section-center{position: absolute;top: 50%;left: 0;right: 0;-webkit-transform: translateY(-50%);transform: translateY(-50%)}#booking{font-family: 'Raleway', sans-serif}.booking-form{position: relative;max-width: 642px;width: 100%;margin: auto;padding: 40px;overflow: hidden;background-image: url('https://i.imgur.com/8z1tx3u.jpg');background-size: cover;border-radius: 5px;z-index: 20}.booking-form::before{content: '';position: absolute;left: 0;right: 0;bottom: 0;top: 0;background: rgba(0, 0, 0, 0.7);z-index: -1}.booking-form .form-header{text-align: center;position: relative;margin-bottom: 30px}.booking-form .form-header h1{font-weight: 700;text-transform: capitalize;font-size: 42px;margin: 0px;color: #fff}.booking-form .form-group{position: relative;margin-bottom: 10px}.booking-form .form-control{background-color: rgba(255, 255, 255, 0.2);height: 60px;padding: 0px 25px;border: none;border-radius: 40px;color: #fff;-webkit-box-shadow: 0px 0px 0px 2px transparent;box-shadow: 0px 0px 0px 2px transparent;-webkit-transition: 0.2s;transition: 0.2s}.booking-form .form-control::-webkit-input-placeholder{color: rgba(255, 255, 255, 0.5)}.booking-form .form-control:-ms-input-placeholder{color: rgba(255, 255, 255, 0.5)}.booking-form .form-control::placeholder{color: rgba(255, 255, 255, 0.5)}.booking-form .form-control:focus{-webkit-box-shadow: 0px 0px 0px 2px #ff8846;box-shadow: 0px 0px 0px 2px #ff8846}.booking-form input[type="date"].form-control{padding-top: 16px}.booking-form input[type="date"].form-control:invalid{color: rgba(255, 255, 255, 0.5)}.booking-form input[type="date"].form-control+.form-label{opacity: 1;top: 10px}.booking-form select.form-control{-webkit-appearance: none;-moz-appearance: none;appearance: none}.booking-form select.form-control:invalid{color: rgba(255, 255, 255, 0.5)}.booking-form select.form-control+.select-arrow{position: absolute;right: 15px;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);width: 32px;line-height: 32px;height: 32px;text-align: center;pointer-events: none;color: rgba(255, 255, 255, 0.5);font-size: 14px}.booking-form select.form-control+.select-arrow:after{content: '\279C';display: block;-webkit-transform: rotate(90deg);transform: rotate(90deg)}.booking-form select.form-control option{color: #000}.booking-form .form-label{position: absolute;top: -10px;left: 25px;opacity: 0;color: #ff8846;font-size: 11px;font-weight: 700;text-transform: uppercase;letter-spacing: 1.3px;height: 15px;line-height: 15px;-webkit-transition: 0.2s all;transition: 0.2s all}.booking-form .form-group.input-not-empty .form-control{padding-top: 16px}.booking-form .form-group.input-not-empty .form-label{opacity: 1;top: 10px}.booking-form .submit-btn{color: #fff;background-color: #e35e0a;font-weight: 700;height: 60px;padding: 10px 30px;width: 100%;border-radius: 40px;border: none;text-transform: uppercase;font-size: 16px;letter-spacing: 1.3px;-webkit-transition: 0.2s all;transition: 0.2s all}.booking-form .submit-btn:hover, .booking-form .submit-btn:focus{opacity: 0.9}
.now{background-color: rgba(0, 0, 0, 0.7);color:rgba(255, 255, 255, 0.5);text-transform: uppercase;border-radius: 10%;}
</style>

</head>
<div id="booking" class="section container form-row" > 
<div class="section-center">
<div class="container"> 
<div class="row"> 
<div class="booking-form">
<div class="form-header">
<h1>Make your reservation</h1>
</div> 

<form method="post" action="" >
    
<div class="row"> 
<div class="col-md-6"> 
<div class="form-group">
    <input class="form-control" type="date" name="date1" required>
    <span class="form-label">Check In</span>
    </div> 
</div> 
<div class="col-md-6"> 
    <div class="form-group">
            <input class="form-control" type="date" name="date2" required> 
            <span class="form-label">Check out</span>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" name="sex" required>
                        <option value="" selected hidden>sex</option> 
                        <option value="male">male</option>
                        <option value="female">female</option> 
                       
                        </select> 
                        <span class="select-arrow"></span> 
                        <span class="form-label">sex</span> 
                    </div>
                    </div>     
            
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control" name="rooms" required>
                        <option value="">no of rooms</option> 
                        <option value="1">1</option>
                        <option value="2">2</option> 
                        <option value="3">3</option>
                        </select> 
                        <span class="select-arrow"></span> 
                        <span class="form-label">Rooms</span> 
                    </div>
                    </div> 
                    
                        <div class="col-md-4">
                        <div class="form-group"> 
                        <select class="form-control" name="peoples" required>
                        <option value="">no of peoples</option> 
                        
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>

                        </select> 
                        <span class="select-arrow"></span>
                        <span class="form-label">peoples</span>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6"> 
                            <div class="form-group">
                                    <input class="form-control" type="text" name="fname" placeholder="Enter your first name"> 
                                    <span class="form-label">full Name</span>
                                    </div>
                                    </div>
                                    <div class="row">
                      
                            <div class="col-md-6"> 
                            <div class="form-group">
                                    <input class="form-control" type="email"  name="email" placeholder="Enter your Email"> 
                                    <span class="form-label">Email</span>
                                    </div>
                                    </div>
                                    <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <input class="form-control" type="number" name="id" placeholder="recieved id ..s">
                                            <span class="form-label">Identification number</span> 
                                        </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                            <div class="form-group now">
                                   
                                    
                                <label>Aditional services</label>
                               
                              <span >Details</span> &nbsp; 
                               <label>Swimming<input  class="form-check-input" id="flexCheckDefault"  name = "service[]"  type ="checkbox"  value = "swimming pool" ></label>
                               <label>Meal<input class="form-check-input" name = "service[]"  type ="checkbox"  value = "meal service"></label>
                               <label>Gymnasium<input class="form-check-input" name = "service[]"  type ="checkbox"  value = "gymnasium"></label>
      
                                    <span class="form-label">Aditional services</span>
                                    </div>
                                    </div>
                                        <div class="form-btn"> 
                                        <button class="submit-btn" name="booking_button" type="submit" value="submit">Book Now</button>
                                        </div>
                                        <br>
                                        <div class="form-btn"> 
                                        <button class="submit-btn" name="submit2" value="Submit" ><a href="index.php">go back</a></button>
                                        </div>
                                     </form> </div> </div> </div> </div></div>

                                                  

                    <?php 

if (isset($_POST['booking_button'])){
    if(isset($_POST['fname'])){
echo "its taken from the form";

$firstname=$_POST['fname'];
$peoples=$_POST['peoples'];
$rooms=$_POST['rooms'];

$email=$_POST['email'];
$date1=$_POST['date1'];
$date2=$_POST['date2'];
$sex=$_POST['sex'];


//$services=$_POST['service'];

$num=$_POST['id'];


$services=""; 


foreach($_POST['service'] as $check)  
{  
$services .= $check.",";
}
$connection=mysqli_connect('localhost','root','','project');

$query="INSERT INTO guest_detail(starting_date,ending_date,sex,no_rooms,no_of_people,full_name,email,id,service_detail) VALUES('$date1','$date2','$sex','$rooms','$peoples','$firstname','$email','$num','$services');";
$result=mysqli_query($connection, $query);


if (!$connection){
echo "<h1>owwww it is not connected </h1>";

}

if(!$result){
echo "it's not inserted your data";

}
    }
}


 



?>