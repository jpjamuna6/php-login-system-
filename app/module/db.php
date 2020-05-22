<?php
$user='localhost';
$name='root';
$password='';
$db_name='user';
$connection=mysqli_connect($user, $name, $password);
if($connection){
    $selected=mysqli_select_db($connection, $db_name);
}else{
    die('database problem'.mysqli_error($connection));
}