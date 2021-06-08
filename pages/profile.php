<?php
session_start();
include("../config/config.php");
if (isset($_SESSION['dangnhap'])) {
  $sql = "SELECT*FROM tb_admin WHERE username='" . $_SESSION['dangnhap'] . "' LIMIT 1 ";
  $sql_user = pg_query($mysqli, $sql);
  $row_user = pg_fetch_array($sql_user);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type= "text/css"   href="../css/profile.css">
  <title>Profile User </title>
  <style>
    body {
      background-image: url(../images/avapo.jpg);
      background-size: cover;
    }

    td {
      width: 250px;
      padding: 10px;
      font-size: larger;
      font-family: arial;
      text-align: center;

    }

    tr:hover {
      background-color: #ddd;
      cursor: pointer;
    }

    table.Profiletable {
      margin: auto;
      background-color: black;
      color: white;
      border: 1px solid white;
      border-collapse: collapse;
    }

    table tr:nth-child(odd) {
      background-color: black;
    }

    table tr:nth-child(even) {
      background-color: blue;
    }

    table tr:nth-child(1) {
      background-color: black;
    }

    img {
      width: 45%;
      margin-left: 5%;
    }

    h1 {
      text-align: center;
      color: whitesmoke;
    }
  </style>
</head>

<body>
  <h1>User Profile</h1>
  <table class="Profiletable" border="1">

    <tr>
      <td>Avartar</td>
      <td><img src="<?php echo $row_user['avatar'] ?>"></td>
    </tr>
    <tr>
      <td>User name</td>
      <td><?php echo $row_user['username'] ?></td>
    <tr>
      <td>Full name</td>
      <td><?php echo $row_user['fullname']  ?></td>
    </tr>
    </tr>
    <td>Email</td>
    <td><?php echo $row_user['email'] ?></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><?php echo $row_user['phone'] ?></td>
    </tr>
  </table>
  <a href="profile.php?action=update">Update </a>


  <a href="../index.php" class="homebutton">Home page</a>

  <?php
  if (isset($_GET['action']) && $_GET['action'] == "update") {
    include("update_pro.php");
  }
  ?>


  <?php

  if (isset($_POST['updatebuttom'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $avt = $_POST['avatar'];

    $sql_update = "SELECT * FROM tb_admin WHERE username='" . $_SESSION['dangnhap'] . "' LIMIT 1";
    $query_update = pg_query($mysqli, $sql_update);
    $row_update = pg_fetch_array($query_update);
    $sql_edit = "UPDATE tb_admin SET avatar='" . $avt . "', username='" . $username . "', fullname='" . $fullname . "', email='" . $email . "', phone='" . $phone . "'  WHERE id_admin='" . $row_update['id_admin'] . "'";
    session_start();
    pg_query($mysqli, $sql_edit);
    $_SESSION['dangnhap'] = $username;
    header('Location:profile.php');
  }
  ?>
</body>

</html>