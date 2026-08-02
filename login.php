<?php
session_start();

if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="admin123"){
        $_SESSION['admin']=true;
        header("Location: admin.php");
    }else{
        echo "Login gagal";
    }
}
?>

<form method="POST">
<input name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button name="login">Login</button>
</form>
