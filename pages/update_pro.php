<form action="profile.php" method="POST">
<table class="Profiletable" border="1">
<h1>Update</h1>
    <tr>
    <td>Avartar</td>
    <td>  <input type="text" name=avatar>  <img src="<?php echo $row_user['avatar'] ?>" ></td>
    </tr>
    <tr>
    <td>User name</td>
    <td><input type="text" name=username value="<?php echo $row_user['username'] ?>" ></td>
    </tr>
    <tr>
    <td>Full name</td>
    <td><input type="text" name=fullname value="<?php echo $row_user['fullname'] ?>" ></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $row_user['email'] ?>"></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><input type="text" name="phone" value="<?php echo $row_user['phone'] ?>"></td>
    </tr>
    <input type="submit" name="updatebuttom" value="Save">
</table>
</form>
