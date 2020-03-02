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

$title = $_POST['title'];
$q_text = $_POST['q_text'];
$candidate_select = $_POST['candidate_select'];
$user_email = $_SESSION['user_email'];




$query = "INSERT INTO `question`(`title`, `q_text`, `candidate_id`, `user_email`) VALUES('$title', '$q_text', '$candidate_select', '$user_email')";

$result = mysqli_query($conn,$query);
if($result) {
    $_SESSION['success'] = 'تم إضافة السؤال بنجاح';
    header('Location: ../Voter/AskQuestion.php');
}
else {

    $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";
    header('Location: ../login.php');
}

?>
