<?php
session_start();
require  'app/module/db.php';
$login = $_SESSION['auth'];

if($login == 'true'){
    $result = 'auth.php';
}else{
    $result = 'login.php';
}
require_once 'app/view/' . $result;

?>