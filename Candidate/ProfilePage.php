<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    header('Location: ../login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>الصفحة الشخصية للمرشح </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
</head>
<body >

<div class="wrapper d-flex align-items-stretch" dir="rtl">
    <?php
    include ('sidebar.html');
    include ('../Classes/functionallity.php');
    $param = new functionallity();
    $info = $param->getElectionLetter($_SESSION['user_email']);
    ?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <?php include('logo.html') ?>

            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">

                    <div class="form-group mb-lg">
                        <label class="pull-right">تغيير الاسم </label>
                        <div class="input-group input-group-icon">
                            <input name="name" id="name" value="<?php echo $info[0]["name"]?>" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                                   required/>
                            <span class="input-group-addon pull-left">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">تغيير الرقم السري </label>
                        <div class="input-group input-group-icon">
                            <input name="pass" id="pass" value="<?php echo $info[0]["password"] ?>" type="password" class="form-control input-lg" placeholder="************"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">الرسالة الإنتخابية المقدمة للناخبين :</label>
                        <textarea class="form-control" rows="7" id="letter" readonly ><?php echo $info[0]["candidate_msg"] ?></textarea>
                    </div>

                    <div class="row" dir="ltr">

                        <div class=" pull-right" style="display: inline-block; margin-right: 5px;">
                            <input id="deleteInfo"  type="button" class="btn btn-danger hidden-xs" value="حذف الحساب الشخصي">
                        </div>

                        <div class=" pull-right" style="display: inline-block; ">
                            <input id="editInfo" type="button"  class="btn btn-info hidden-xs" value="تعديل معلوماتي الشخصية">
                        </div>
                    </div>

                    <p id="msg" class="pull-right">

                    </p>

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


        $("#editInfo").on("click",function () {
            var name = $("#name").val();
            var pass = $("#pass").val();

            $.ajax({
                url: "../database/EditOrDeletePersonalInformation.php",
                type: "get",
                data: {"name":name,"pass":pass,"type":"edit"} ,
                success: function (res) {
                    $("#msg").empty();
                    $("#msg").text(res);
                    $("#msg").css("color", "green");
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        });


        $("#deleteInfo").on("click",function () {
            var name = $("#name").val();
            var pass = $("#pass").val();

            $.ajax({
                url: "../database/EditOrDeletePersonalInformation.php",
                type: "get",
                data: {"name":name,"pass":pass,"type":"delete"} ,
                success: function (res) {
                    $("#msg").empty();
                    $("#msg").text(res);
                    $("#msg").css("color", "red");

                    setTimeout(function () {
                        window.location = "../register.php";
                    },1000)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }


            });
        })

    })
</script>

