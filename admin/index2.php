
<?php 
include "includes/admin_header.php";

?>

<?php 


?>

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/reception_navigtion.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
           

                            <small>WELCOME TO RECEPTION PAGE  <?php echo $_SESSION['name'];
            ?></small>
                        </h1>
                    </div>
                    <?php //include '#'?>
                </div>
                <!-- /.row -->
       
                <!-- /.row -->
                
                <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                  <?php 
                  $conn=mysqli_connect('localhost','root','','project');
                  $query="SELECT * FROM guest_detail";
                  $result=mysqli_query($conn,$query);
                  $comment_count=mysqli_num_rows($result);
                  echo " <div class='huge'>{$comment_count}</div>";
                  ?>
                 
                        <div>GUESTS</div>
                    </div>
                </div>
            </div>
            <a href="approval_for_guests.php">
                <div class="panel-footer">
                    <span class="pull-left">VIEW GUEST DETAIL</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>



    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    <?php 
                        
                        $query="SELECT * FROM catagories";
                        $result=mysqli_query($conn,$query);
                        $catagory_count=mysqli_num_rows($result);
                        echo " <div class='huge'>{$catagory_count}</div>";
                        ?>
                    
                    <div class='huge'>23</div>
                      <div>ROOMS DETAIL</div>
                    </div>
                </div>
            </div>
            <a href="approval_for_reception.php">
                <div class="panel-footer">
                    <span class="pull-left">VIEW ROOMS DETAIL</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 
                        
                        $query="SELECT * FROM catagories";
                        $result=mysqli_query($conn,$query);
                        $post_count=mysqli_num_rows($result);
                        echo " <div class='huge'>{$catagory_count}</div>";
                        ?>
                    
                    
                         <div>SERVICES</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">VIEW  SEERVICES DETAIL</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
                <!-- /.row -->

            </div>
                 
           
     
<div id="columnchart_material" style="width: 'auto'; height: 500px;">

<script type="text/javascript">
 google.charts.load('current', {'packages':['bar']});
 google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
   var data = google.visualization.arrayToDataTable([
     ['count', 'size',],
     <?php 
     $element_text = ['room_detail', 'guests', 'services'];
   
     $element_count =[$post_count,$comment_count,$catagory_count];
     for ($i = 0; $i < 4; $i++) {

          echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";

     }
     
     ?>
    
    // ['2014', 1000],
   
   ]);

   var options = {
     chart: {
       title: '',
       subtitle: 'guests,rooms_detail,services',
     }
   };

   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

   chart.draw(data, google.charts.Bar.convertOptions(options));
 }
</script>


</div>
           
            <!-- /.container-fluid -->
        </div>
    <?php include "includes/admin_footer.php"?>

</html>
