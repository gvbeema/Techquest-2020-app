<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "techquest";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$login = isset($_POST["login"]) ? $_POST["login"] :'';
$password = isset($_POST["password"]) ? $_POST["password"] :'';
$sql= "select * from users";
$result = $conn->query($sql);
while ($row = mysqli_fetch_array($result)){
if($login == $row['uname'] && $password == $row['psswd']){
    header('location:dashboard.php');
}
else{
    $_SESSION['error']="Enter correct user name and password!!";
    header('location:index.php');
}
}
?>