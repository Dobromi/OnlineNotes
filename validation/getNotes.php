<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 17.6.2018 г.
 * Time: 17:15
 */

session_start();
require_once '../includes/connection.php';

$user_id=mysqli_real_escape_string($link,$_SESSION['user_id']);

$sql="SELECT * FROM note WHERE user_id='$user_id'";

$res=mysqli_query($link,$sql);

while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){

    echo '<p>'.$row['note'] .' created at '.$row['date'] . '</p>';

}