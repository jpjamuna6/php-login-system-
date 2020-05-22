<a href="?page=dashboard">Dashboard</a>
<a href="?page=user">User</a>
<a href="?page=logout">Logout</a>

<?php
if(isset($_GET['page'])){
    $getpage = $_GET['page'];

}else{
    $getpage = 'dashboard';
}

//echo $getpage;
require_once 'app/view/' . $getpage . '.php';
?>
