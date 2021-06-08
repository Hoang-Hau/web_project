<?php
   include('../config/config.php');

?>
<html>
<head>
<title>Website ban hang</title>
<link rel="stylesheet" type= "text/css"   href="../css/register.css">
</head>
<body>
    
    <div class="Registerbox">
    <img src="../images/avatarsale.jpg" class="avatar">
        <h1 class="Register">Register Here</h1>
    <?php
        if(isset($_POST['Regisbuttom'])){
            if(empty($_POST['username']) or empty($_POST['psw1'])){
                echo'<p style="color:red">Please not empty</p>';
            }   else{
                $username = $_POST['username'];
                $password = $_POST['psw1'];
                $password2 = $_POST['psw2'];
                if($password2 != $password){
                echo'<p style="color:red">Password not same</p>';
                 } else{
                $sql = "SELECT * FROM tb_admin WHERE username ='$username'";
                $query = pg_query($mysqli,$sql);
                $num = pg_num_rows($query);
                if($num == 0){
                    $sql2 = "INSERT INTO tb_admin(username,password) VALUES('".$username."','".$password."')";
                    $them = pg_query($mysqli, $sql2);
                    if($them){
                        echo'<p style="color:white">Successful Register</p>';
                    }
                }
            }
        }
        }
    ?>
        <form method="POST" action="register.php">
            <p>Username</p>
            <input type="text"  username="Enter Username" class="username" name="username">
            <p>Password</p>
            <input type="password" password="Enter Password" class="Pass1" name="psw1">
            <input type="password"  password2="Enter Re-Password" class="Pass2" name="psw2">
            <input type="submit" value="Register" class="Regis" name="Regisbuttom">

            <a href="login.php">Already have an account? Login Here</a>
            
        </form>
    </div>
</body>

</html>