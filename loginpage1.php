
<?php 

include 'header2.php';
/*
include 
echo '<script type="text/javascript">';
echo ' alert("")';  //not showing an alert box.
echo '</script>';
*/
?>
 <?php
  // ob_start();?>

    <h1>Haramaya University Resource Center</h1><br>    
    <div class="login">    
    <form id="login" method="post" action="">  
    <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>  
        <label><b>User Name     
        </b>    
        </label>    
       
        <input type="text" name="fname" id="name" placeholder="Username" required?>
         
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password" ?>
         
        <br><br>    
        <input type="submit" name="submit" id="log" value="login">
        <br><br>    
        <a href="guestform.html"><input type="button" name="log" id="log" value="LOGIN AS GUEST"></a>      
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        <a href="#" id="a"> Forgot Password </a> 
    </form>     
</div>    

<?php 

/*

if (isset($_POST['fname'])){
echo "is seeted ";
//include 'verification.php';


echo "already in verifing page";


$connection=mysqli_connect('localhost','root','','project');

if (isset($_POST['fname']) && isset($_POST['password'])) {
    session_start(); 
    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $name = validate($_POST['fname']);

    $pass = validate($_POST['password']);

    if (empty($name)) {

        header("Location: loginpage1.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginpage1.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE name='$name' AND password='$pass'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['name'] === $name && $row['password'] === $pass) {

                echo "Logged in!";

                //$_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: secondpage.php");

                exit();

            }else{

                header("Location: loginpage1.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: loginpage1.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: loginpage1.php");

    exit();
}
}
*/

?>

<?php include 'footer.php'; ?>

</body>     
</html>     