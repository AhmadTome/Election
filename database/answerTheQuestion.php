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

$id = $_GET['id'];
$ans = $_GET["ans"];



$query = "INSERT INTO `ques_ans`( `q_id`, `ans`) VALUES ('$id', '$ans')";


$result = mysqli_query($conn,$query);
if($result) {
    $_SESSION['user_email'] = $email;
    echo 'تم إضافة الاجابة بنجاح';
}
else {

    $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";
    header('Location: ../login.php');
}

?>
