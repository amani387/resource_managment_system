
<?php
   ob_start();?>
<!--<?php include 'db.php';?>-->
<div class="col-md-4">

      <!-- loging for form -->
<div class="well">
        
        <h4>login</h4>
        <form method="post" action="" method="post">
        <form id="login" method="post" action="sidebar.php">  
    <?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?> 
        <div class="form-group">
            <input type="text" class="form-control" name='firstname' placeholder="Name" required>
        </div>
            <div class="input-group">
                        <input type="password" class="form-control" name='password' placeholder="enter password" required>

            <span class="input-group-btn">
            <button class="btn btn-primary" type="submit" name='submit'>
                   login
                   </button>
            </span>
        </div>
    </form>
  
<?php 


if (isset($_POST['firstname'])){
echo "is seeted ";
//include 'verification.php';


echo "already in verifing page";
session_start(); 

$connection=mysqli_connect('localhost','root','','project');

if (isset($_POST['firstname']) && isset($_POST['password'])) {
   
    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $name = validate($_POST['firstname']);

    $pass = validate($_POST['password']);

    if (empty($name)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE name='$name' AND password='$pass'";

        $result = mysqli_query($connection, $sql);
if ($result){
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
            
            if ($row['name'] === $name && $row['password'] === $pass) {

                echo "Logged in!";

                //$_SESSION['user_name'] = $row['name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];
                $_SESSION['roll']=$row['roll'];

                if ($_SESSION['roll']==='head'){

                header("Location: includes/secondpage.php");
                exit();
                } elseif ($_SESSION['roll']==='admin'){
                    header("Location: admin/index.php");
                    exit();
                }elseif ($_SESSION['roll']==='reception'){

                        header("Location: admin/index2.php");

                        exit();
                        }
            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }}

    }

}else{

    header("Location: index.php");

    exit();
}
}
?>



        <!-- searching for form -->
    </div>
    <!-- Blog Search Well -->
    
    <div class="well">
        
        <h4>services blog</h4>
        <form method="post" action="search.php">
        <div class="input-group">
            <input type="text" class="form-control" name='search'>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name='submit'>
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
    </form>
        <!-- searching for form -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog services</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <?php
                    $query="SELECT * FROM catagories";
                    $selecting_catagories=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_assoc($selecting_catagories)){
                        $cat_title=$row['cat_title'];
                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }
                    ?>
                    
                </ul>
            </div>

            <!-- /.col-lg-6 -->
         
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4><B>functionality to be included</B> </h4>
        
        <p><I>HERE THE POST DETAIL ABOUT THE SERVICES WILL BE POSTED </I></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    
    </div>
/*

<div class="well">
        <h4>THE SERVICE STASTICAL DETAIL SHOWING GRAPH</h4>
        <p>

        </p>

        <div class="row">
<?php
/* 
$query="SELECT * FROM staff WHERE services LIKE 'Bedroom%'";
//$query="SELECT * FROM staff WHERE Contains(services,'Bedroom')";
$selecting_catagories=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($selecting_catagories)){
   $size=sizeof($row);
   echo $size;
}
*/
?>
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['services', 'no of guests', 'bed rooms', 'meeting halls'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'services provided statistically',
            subtitle: 'beedroms, guests, and meeting halls:',
          }
        };

var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
<div id="columnchart_material" style="width: 'auto'; height: 'auto';"></div>
</div>
</div>
<!-- /.container-fluid -->
</div>
    </div>

*/
</div>