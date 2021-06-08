<?php
session_start();
include('../config/config.php');
if(isset($_POST['loginbutton'])){
    $user_name=$_POST['user'];
    $pass_word=$_POST['psw'];
    $sql_login="SELECT * FROM tb_admin WHERE username='".$user_name."' AND password='".$pass_word."'LIMIT 1" ;
    $row=pg_query($mysqli,$sql_login);
    $count = pg_num_rows($row);
    $rows_user=pg_fetch_array($row);
    if($count>0){
        $_SESSION["dangnhap"]=$user_name;
        $_SESSION['id_user']=$rows_user['id_admin'];
        header("location:../index.php");
    }else{
        $SESSION['thongbao']= 'Login Failed';
    }
}
?>
<html>
<head>
<title>Website ban hang</title>
<link rel="stylesheet" type= "text/css"   href="../css/login.css">
</head>
<body>
    <div class="loginbox">
    <img src="../images/banhang12.jpg" class="avatar">
        <h1 class="Login">Login Here</h1>
        <?php
            if(isset($SESSION['thongbao'])){
                echo $SESSION['thongbao'];
                unset($SESSION['thongbao']);}
        ?>
        <form action="" method="POST">
            <p>Username</p>
            <input type="text" placeholder="Enter Username" class="namek" name="user">
            <p>Password</p>
            <input type="password" placeholder="Enter Password" class="Pass" name="psw">
            <input type="submit" value="Login" class="Summit" name="loginbutton">

            <a href="#">Lost your password?</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
    </div>
</body>

</html>