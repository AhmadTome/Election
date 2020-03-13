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

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];



$query = "INSERT INTO users(`name`, `email`, `password`, `age`, `type`) VALUES('$name', '$email', '$pwd', '$age' ,'user')";
$result = mysqli_query($conn,$query);
if($result) {
    session_start();
    $_SESSION['user_email'] = $email;




    $query2 = "select * from  `users` where email = '".$email."' and password='".$pwd."'";
    $result2 = $conn->query($query2);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_pass'] = $row['password'];
    $_SESSION['user_id'] = $row['id'];
}





    echo "Succesfully registered";
    header('Location: ../Voter/ProfilePage.php');

}
else {

    $_SESSION['Error'] = "There is no match, please make sure your email or password is correct";

    header('Location: ../login.php');
}

?>
