<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from customers where id = '".$_SESSION['id']."' and password = '".md5($_POST["pass"])."'";


$result=$conn->query($sql);
if ($result->num_rows > 0) {
    if($_POST["newpass"] !== $_POST["renewpass"]){
        echo "Error: Passwords not match!";          
        header('url=sua_mk.php');    
    }else{
        $sql = "UPDATE `customers` SET `password` = '".md5($_POST["newpass"])."'WHERE id = " . $_SESSION['id'];        
        $conn->query($sql);        
        echo "Success: changed password successfully!";        
        header('url=homepage.php');    
    }
} else {    
    echo "Error: wrong password!";  
    header('url=sua_mk.php');
}
$conn->close();
?>
