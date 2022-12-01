

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FEEDBACK PAGE</title>

<?php include 'includes/header.php'?>
</head>
<style type="text/css">
*
{
margin: 0;
padding: 0;
}
body
{
width: 100vw;
height: 100vh;
background: rgb(50, 45, 45);
display: flex;
justify-content: center;
align-items: center;
}
.container
{
width: 500;
height: 100;
background: #fff;
border-radius: 50px;
display: flex;
justify-content: space-between;
align-items: center;
}
.form
{
width: 500px;
padding-left: 50px;
}
.form label
{
font-family: arial;
color: #222;
font-weight: bold;
margin-left: 10px;
}
.form input
{
width: 400px;
height: 40px;
border-radius: 50px;
border: 2px solid #222;
padding-left: 20px;
margin-top: 10px;
}
.form textarea
{
border-radius: 50px;
border: 2px solid #222;
padding-left: 20px;
margin-top: 10px;
padding-top: 10px;
}
.btn
{
width: 150px;
height: 45px;
font-weight: bold;
font-size: 15px;
font-family: arial;
border: none;
background-color: #222;
color: #fff;
border-radius: 30px;
cursor: pointer;


}

.btn:hover{

    transform:translatex(-10%);

}

.image
{
width: 200px;
}
.image img
{
width: 200px;
}
.footer{
    align-content:flex-end;
    font-weight: bold;
    font-size: 15px;
    font-family: arial;
    border: none;
    background-color: #222;
    color: #fff;
    width: 150px;
    height: 45px;
    border: none;

}
body h1 {
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 10px;
    color: rgb(12, 5, 5);
    text-align: center;
}
</style>

<body>
<div class="container">
<div class="form">
    <h1>&nbsp&nbsp&nbsp  FEEDBACK PAGE</h1>
    <form method="post" action="contactup.php">
<label>Name</label><br>

<input type="text" name="name" placeholder="Enter your name here..." required><br><br>
<label>Email</label><br>
<input type="email" name="email" placeholder="Enter your email here..." required><br><br>
<label>Phone Number</label><br>
<input type="number" name="phone" placeholder="Enter your number here..." required><br><br>
<label>Message</label><br>
<textarea rows="5" cols="52" name="comment" placeholder="Enter your message here..." required></textarea><br><br>
<button class="btn" type="submit" name="submit" value="submit" id="send" >SUBMIT</button>
<br><br><br>
<button class="btn" name="back" value="clear"><a style="text-decoration:none; color:#fff" href="index.php">GO BACK </a></button>
</form>
<?php
if (isset($_POST['submit'])){
    $connection = mysqli_connect('localhost','root','','project');
    
if($connection){


    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $comment=$_POST['comment'];
    $query="INSERT INTO feedbacks VALUES('$name','$email','$phone','$comment')";
$result=mysqli_query($connection,$query);
if ($result){
echo "inserted";
}


}
mysqli_close($connection);
}
?>
</div>
</html>
