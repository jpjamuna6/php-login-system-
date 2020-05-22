<?php
$msg = '';
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //check the post values with db
    $qry = mysqli_query($GLOBALS['connection'], "SELECT * FROM newuser where username = '$username' and userpass = '$password'");
    $row = mysqli_fetch_array($qry);
    print_r($row);

    if($row['username'] == ''){
        $msg = 'Invalid Login info';
    }else{
        //session_start();
        $_SESSION['auth'] = 'true';
    }
    
}

?>

<h2>Login page</h2>
<?php echo $msg; ?>
<form name="logi n" method="POST">
<input type="text" value="" name="username" placeholder="Username"></br>
<input type="password" value="" name="password" placeholder="Password"></br>
<input type="submit" value="Submit" name="btn_login">
</form>