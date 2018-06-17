<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 14.6.2018 г.
 * Time: 20:19
 */

//the user is redirected here after he click on the mail link

session_start();

include_once '../includes/connection.php';

if(!isset($_GET['email']) || !isset($_GET['key'])){
    echo '<div class="alert alert-danger">There was an error ,please click on the activation link you recived</div>';
    exit;
}

$email=$_GET['email'];
$key=$_GET['key'];

$email=mysqli_real_escape_string($link,$email);
$key=mysqli_real_escape_string($link,$key);

$sql="UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key' LIMIT 1)";
$result=mysqli_query($link,$sql);
if(mysqli_affected_rows($link)==1){
    echo '<div>Your account has been activated</div>';
    echo '<a href="../index.php" type="button" class="btn-lg btn-success">Login</a>';
}else{

    echo '<div>Your account could not be activated,please try again later</div>';
}

