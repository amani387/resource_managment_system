<?php
$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_database']="project";
foreach($db as $key => $val){

    define(strtoupper($key),$val);
}
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);
if($connection){
echo "its connected";

}else{
    echo "no its not";
}
?>