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
$email = $_SESSION['user_email'];
$query = "SELECT * , question.id as q_id  FROM `question` left join ques_ans on question.id = ques_ans.q_id
where ques_ans.ans IS NULL and question.candidate_id ='". $_SESSION['user_id'] ."' or question.candidate_id='all'";


$result = $conn->query($query);
if ($result->num_rows > 0) {
    $info = [];
    while ($row = $result->fetch_assoc()) {
        array_push($info,
            ["title" => $row["title"],
                "q_text" => $row["q_text"],
                "id" => $row["q_id"],
                "candidate_id" => $row["candidate_id"],
                "user_email" => $row["user_email"]
            ]);
    }
    $info = json_decode(json_encode($info), true);
    echo json_encode($info);
} else {
    header('Location: ../login.php');
}

?>
