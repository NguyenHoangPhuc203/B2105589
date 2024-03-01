<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['fullname']);
unset($_SESSION['id']);
session_destroy();
header('Location: login.php')
?>