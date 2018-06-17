<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 17.6.2018 г.
 * Time: 14:05
 */

session_start();

if(isset($_SESSION['user_id'])){
    header("location:mainPage.php");
}