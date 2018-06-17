<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 14.6.2018 г.
 * Time: 21:03
 */

$link=mysqli_connect("localhost","root","","notes");

if(mysqli_connect_errno()){
    die("Mysql Connect Error");
}