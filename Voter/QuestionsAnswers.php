<!doctype html>
<html lang="en">
<head>
    <title>The Answers of The Questions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
</head>
<body  >

<div class="wrapper d-flex align-items-stretch" dir="rtl">
    <?php include ('sidebar.html')?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter" >
        <div class="container-login100">
            <?php include('logo.html') ?>

            <div class="wrap-login100" style="overflow-y: scroll; height: 550px;%;">


                <form action="database/login.php" method="post" style="padding: 50px;">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" id="myquestion" href="#">جميع الأسئلة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="allquestion">أسئلتي</a>
                        </li>

                    </ul>

                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>



                    <div class="col-sm-12" style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading text-right">
                                <strong>نص السؤال </strong>
                            </div>
                            <div class="panel-body text-right">
                                الجواب
                            </div>
                        </div>
                    </div>



                </form>



            </div>
        </div>
    </div>
</div>

<?php include('jsSheet.html') ?>
</body>
</html>
<script>
    $(document).ready(function () {
        $("#myquestion").on("click",function () {
            $(this).attr('class','nav-link active')
            $("#allquestion").attr('class','nav-link')
        })

        $("#allquestion").on("click",function () {
            $(this).attr('class','nav-link active')
            $("#myquestion").attr('class','nav-link')
        })
    })
</script>
