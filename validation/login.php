<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 14.6.2018 г.
 * Time: 20:20
 */

session_start();

include_once '../includes/connection.php';

$missingemail='<p class="alert alert-danger">Please enter your email address</p>';
$missingpass='<p class="alert alert-danger">Please enter your password</p>';
$errors="";
$email=$password=null;

if(empty($_POST['lemail'])){
    $errors.=$missingemail;
}else{
    $email=filter_var($_POST['lemail'],FILTER_VALIDATE_EMAIL);
}
if(empty($_POST['lpassword'])){
    $errors.=$missingpass;
}
else{
    $password=filter_var($_POST['lpassword'],FILTER_SANITIZE_STRING);
}

if(empty($errors)==false){
    $resultMessage='<div class="alert alert-danger">'.$errors.'</div>';
    echo $resultMessage;
}

$email=mysqli_real_escape_string($link,$email);
$password=mysqli_real_escape_string($link,$password);

$sql="SELECT * from users WHERE email='$email' AND password='$password'";

$res=mysqli_query($link,$sql);

$rows=mysqli_num_rows($res);

if($rows==1){
    $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    if(empty($_POST['rememberme'])){
        echo "success";
    }
    else{
        $authentificator1=bin2hex(openssl_random_pseudo_bytes(10));
        $authentificator2=openssl_random_pseudo_bytes(20);
        $cookievalue=f1($authentificator1,$authentificator2);
        setcookie("rememberme",$cookievalue,time() + (15*24*60*60));

        //store the value in rememberme table
        $expireDate=date('Y-m-d H:i:s',time()+ (15*24*60*60));
        $f2authentificator2=f2($authentificator2);
        $user_id=$_SESSION['user_id'];
        $sqlinner="INSERT INTO rememberme (`authentificator1`,`f2authenticator2`,`user_id`,`expires`) VALUES ('$authentificator1','$f2authentificator2','$user_id','$expireDate')";
        $result=mysqli_query($link,$sqlinner);
        if(!$result){
            echo '<div class="alert alert-danger">There was problem running insert query '.mysqli_error($link) .'</div>';
        }
        else{
            echo "success";
        }
    }
}
else{
    echo '<div class="alert alert-danger">The provided data was wrong ,please try again</div>';
}


function f1($auth1,$auth2){
    $res=$auth1 . "," . bin2hex($auth2);
    return $res;
}

function f2($a){
    return hash('sha256',$a);
}