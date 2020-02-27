<!doctype html>
<html lang="en">
<head>
    <title>Display Candidates</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
</head>
<body >

<div class="wrapper d-flex align-items-stretch" dir="rtl">
    <?php include ('sidebar.html')?>
    <?php $info = getInfo();  ?>
    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <?php include('logo.html') ?>

            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">

                    <div class="form-group mb-lg">
                        <label class="pull-right">قائمة المرشحين </label>
                        <div class="input-group input-group-icon">
                            <select class="form-control" id="candidate_select">
                                <option selected disabled>--- اختار اسم المرشح ---</option>
                                <?php
                                for ($i=0; $i < count($info) ; $i++){
                                    echo '<option value='. $info[$i]["id"] .'>'. $info[$i]["name"] .'</option>';
                                }

                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">اسم المرشح </label>
                        <div class="input-group input-group-icon">
                            <input name="name" id="name" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                                   required/>
                            <span class="input-group-addon pull-right">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">العمر </label>
                        <div class="input-group input-group-icon">
                            <input name="age" id="age" type="text" class="form-control input-lg" placeholder="العمر"
                                   required/>
                            <span class="input-group-addon pull-right">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">الرسالة الإنتخابية المقدمة لهذا المرشح :</label>
                        <textarea class="form-control" rows="7" id="candidate_msg" disabled></textarea>
                    </div>



                </form>



            </div>
        </div>
    </div>
</div>

<?php include('jsSheet.html') ?>
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    $(document).ready(function () {
        $("#candidate_select").on("change",function () {
            var id = $(this).val();

            $.ajax({
                url: "../database/getCandidateInfo.php",
                type: "get",
                data: {"id":id} ,
                success: function (res) {
                    res = JSON.parse(res)
                    $("#name").val(res[0].name)
                    $("#age").val(res[0].age)
                    $("#candidate_msg").val(res[0].candidate_msg)

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });

        })
    })

</script>
<?php

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


?>
