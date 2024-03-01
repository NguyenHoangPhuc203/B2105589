<?php
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="luu_mk.php" method="post">
Username: <?php echo $_SESSION['fullname']?>;<br>
Password: <input type="password" name="pass"><br>
New Password <input type="password" name="newpass"><br>
Re New Password <input type="password" name="renewpass"><br>
<input type="submit">
</form>

</body>
</html>
