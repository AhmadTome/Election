<?php


class functionallity {


    function getInfo(){
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
        $query = "SELECT * FROM `users` WHERE type = 'candidate'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $info = [];
            while ($row = $result->fetch_assoc()) {
                array_push($info,
                    ["name" => $row["name"],
                        "age" => $row["age"],
                        "id" => $row["id"],
                        "candidate_msg" => $row["candidate_msg"]
                    ]);
            }
            return $info;
            //echo $sl_number;
        } else {
            header('Location: ../sign_in.php');
        }
    }


    function getElectionLetter($email){

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

        $query = "SELECT * FROM `users` WHERE email ='". $email ."'";


        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $info = [];
            while ($row = $result->fetch_assoc()) {
                array_push($info,
                    ["name" => $row["name"],
                        "age" => $row["age"],
                        "id" => $row["id"],
                        "candidate_msg" => $row["candidate_msg"],
                        "password" => $row["password"]
                    ]);
            }
            return $info;
        } else {
            header('Location: ../login.php');
        }
    }
}
