<?php
session_start();
$servername = "localhost";
$username = "elections";
$password = "";

// Create connection
//$conn = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect($servername, "root",$password, $username,"3306");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");

$name = $_GET["name"];
$pass = $_GET["pass"];
$type = $_GET["type"];


if($type == "edit"){
    $query = "UPDATE `users` SET `password`=".$pass.",`name`='". $name ."' WHERE `email` = '". $_SESSION['user_email'] ."'";
}else if($type == "delete"){
    $query = "DELETE FROM `users` WHERE `email` = '". $_SESSION['user_email'] ."'";
}else{
    return "nothing to do";
}

$result = $conn->query($query);

if($result) {
    if ($type == "edit"){
    echo "Succesfully Updated!";
        $_SESSION['user_name'] = $name;
        $_SESSION['user_pass'] = $pass;
    }
    else{
        session_unset();
        session_destroy();
        echo "Succesfully Deleted!";
    }
}
else {
    header('Location: ../login.php');
}?>
