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

$username = $_POST['username'];
$pwd = $_POST['pwd'];



$query = "select * from  `users` where email = '".$username."' and password='".$pwd."'";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    $_SESSION['user_email'] = $username;

    $row = $result->fetch_assoc();
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_pass'] = $row['password'];

    if($row['type'] =='user'){
        header('Location: ../Voter/ProfilePage.php');
    }else if($row['type'] =='candidate'){
        header('Location: ../Candidate/ProfilePage.php');

    }else if($row['type'] =='admin') {
        header('Location: ../Admin/AddCandidate.php');
    }

}
 else {

     $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";

     header('Location: ../login.php');
}
?>
