<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 14.6.2018 г.
 * Time: 20:19
 */

session_start();

include_once ('../includes/connection.php');

$missingUsername='<p>Please enter a username</p>';
$missingEmail='<p>Please enter a email</p>';
$invalidEmail='<p>Invalid email</p>';
$missingPassword='<p>Please enter a password</p>';
$invalidPassword='<p>Invalid password,should be at least 6 characters and include number and capital letter</p>';
$diffPassword='<p>Passwords do not match</p>';
$missingPassword2='<p>Please confirm your password</p>';
$errors="";
$password=$username=$email=$password2=null;
if(empty($_POST["susername"])){
    $errors.=$missingUsername;
}else{
    $username=filter_var($_POST["susername"],FILTER_SANITIZE_STRING);
}
if(empty($_POST["semail"])){
    $errors.=$missingEmail;
}
else{
    $email=filter_var($_POST["semail"],FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors.=$invalidEmail;
    }
}

if(empty($_POST["spassword"])){
    $errors.=$missingPassword;
}
elseif(!(strlen($_POST["spassword"])>6 and preg_match('/[A-Z]/',$_POST["spassword"]) and preg_match('/[0-9]/',$_POST["spassword"]))){
    $errors.=$invalidPassword;
}
else{
    $password=filter_var($_POST["spassword"],FILTER_SANITIZE_STRING);
}

if(empty($_POST["spassword2"])){
    $errors.=$missingPassword2;
}
else{
    $password2=filter_var($_POST["spassword2"],FILTER_SANITIZE_STRING);
    if($password!==$password2){
        $errors.=$diffPassword;
    }
}
$resultMessage=null;
if($errors){
    $resultMessage='<div class="alert alert-danger">'.$errors.'</div>';
    echo $resultMessage;
}
else {
    $username = mysqli_real_escape_string($link, $username);
    $email = mysqli_real_escape_string($link, $email);
    $password = md5($password);


    $sql = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($link, $sql);
    if (!$res) {
        echo '<div class="alert alert-danger">Error running the query</div>';
        exit;
    }
    $rows = mysqli_num_rows($res);
    if ($rows > 0) {
        echo '<div class="alert alert-danger">The username already exists,Do you want to login ?</div>';
        exit;
    }
    $sql2 = "SELECT * FROM users WHERE username='$email'";
    $res2 = mysqli_query($link, $sql2);
    if (!$res) {
        echo '<div class="alert alert-danger">Error running the query</div>';
        exit;
    }
    $rows2 = mysqli_num_rows($res2);
    if ($rows2 > 0) {
        echo '<div class="alert alert-danger">The email already exists</div>';
        exit;
    }
}
//create activiation code
$activationKey=bin2hex(openssl_random_pseudo_bytes(16));

$sql="INSERT INTO users (`username`,`email`,`password`,`activation`) VALUES('$username','$email','$password','$activationKey')";
$res=mysqli_query($link,$sql);
if(!$res){
    echo '<div class="alert alert-danger">Query failed</div>';
    exit;
}
else{
    $message="Please click on this link to activate your account:\n\n";
    $message.="http://localhost/notes/activate.php?email=" .urlencode($email) ."&key=$activationKey";
    if(mail($email,'Confirm your registration',$message,'From:'.'dobrganch89@gmail.com')){
        echo '<div>Thank you for registrating,confirmation mail has benn sended</div>';
    }
    else{
        echo '<div class="alert alert-danger">The email was not sended,try again later</div>';
    }

}