<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 17.6.2018 г.
 * Time: 16:52
 */



session_start();

if(!isset($_SESSION['user_id'])){
    header("location:index.php");
}

require_once '../includes/connection.php';

$text=$_POST['key'];

$data=mysqli_real_escape_string($link,$text);
$user_id=$_SESSION['user_id'];
$time=date("Y-m-d H:i:s");
$sql="INSERT INTO note (`user_id`,`note`,`date`) VALUES('$user_id','$data','$time')";

$res=mysqli_query($link,$sql);

if(!$res){
    echo '<div class="alert alert-danger">Error inserting values in the database '.mysqli_error($link) .'</div>';
}
else{
    echo "success";
}