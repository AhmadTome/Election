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
                            <a class="nav-link active" id="myquestion" href="#">الأسئلة الموجهة لي</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="myquestion_ans">الأسئلة اللتي تمت إجابتها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="allquestion">الأسئلة العامة للجميع</a>
                        </li>

                    </ul>


                    <div id="content">

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
        $("#myquestion").trigger("click");
        $("#myquestion").on("click",function () {


            $(this).attr('class','nav-link active')
            $("#allquestion").attr('class','nav-link')
            $("#myquestion_ans").attr('class','nav-link')

            $("#content").empty();
            $.ajax({
                url: "../database/getMyQuestionNotAnswered.php",
                type: "get",
                success: function (res) {
                    res = JSON.parse(res);

                    for(var i=0;i<res.length;i++){
                        $("#content").append('<div class="col-sm-12" style="margin-top: 10px;" class="myquestion_dev">' +
                            '                        <div class="panel panel-default">' +
                            '                            <div class="panel-heading text-right" >' +
                            '                                <strong>'+ res[i]["q_text"] +' </strong>' +
                            '                            </div>' +
                            '                            <div class="panel-body text-right">' +
                            '                                <textarea class="form-control textarea-ans" rows="7"></textarea>' +
                            '                            </div>' +
                            '' +
                            '                                <div style="padding: 5px;padding-bottom: 10px;">' +
                            '                                    <input type="button" class="btn btn-success add_ans_to_question" value="الإجابة على السؤال" data-id='+ res[i]["id"] +'>' +
                            '                                </div>' +
                            '                        </div>' +
                            '                    </div>')
                    }


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
            //$("#myquestion_dev").show()

        })

        $("#content").delegate(".add_ans_to_question","click", function () {
            var id = $(this).attr('data-id');
            var ans = $(this).parent().parent().find('textarea').val();

            $.ajax({
                url: "../database/answerTheQuestion.php",
                type: "get",
                data:{"id":id , "ans":ans},
                success: function (res) {
                alert("تم إضافة الاجابة بنجاح")
                    console.log( $(this).parent().parent().parent())
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

        })

        $("#allquestion").on("click",function () {
            $(this).attr('class','nav-link active')
            $("#myquestion").attr('class','nav-link')
            $("#myquestion_ans").attr('class','nav-link')

            $("#content").empty();
            $.ajax({
                url: "../database/getMyQuestionAnswered.php",
                type: "get",
                data:{"type":"all"},
                success: function (res) {
                    res = JSON.parse(res);

                    for(var i=0;i<res.length;i++){
                        $("#content").append(' <div class="col-sm-12" style="margin: 10px;">' +
                            '                        <div class="panel panel-default">' +
                            '                            <div class="panel-heading text-right">' +
                            '                                <strong>'+ res[i]["q_text"] +' </strong>' +
                            '                            </div>' +
                            '                            <div class="panel-body text-right">' +
                            '                                '+ res[i]["ans"] +'' +
                            '                            </div>' +
                            '                        </div>' +
                            '                    </div>')
                    }


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

        })

        $("#myquestion_ans").on("click",function () {
            $(this).attr('class','nav-link active')
            $("#myquestion").attr('class','nav-link')
            $("#allquestion").attr('class','nav-link')

            $("#content").empty();
            $.ajax({
                url: "../database/getMyQuestionAnswered.php",
                type: "get",
                data:{"type":"me"},
                success: function (res) {
                    res = JSON.parse(res);

                    for(var i=0;i<res.length;i++){
                        $("#content").append(' <div class="col-sm-12" style="margin: 10px;">' +
                            '                        <div class="panel panel-default">' +
                            '                            <div class="panel-heading text-right">' +
                            '                                <strong>'+ res[i]["q_text"] +' </strong>' +
                            '                            </div>' +
                            '                            <div class="panel-body text-right">' +
                            '                                '+ res[i]["ans"] +'' +
                            '                            </div>' +
                            '                        </div>' +
                            '                    </div>')
                    }


                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        })
    })
</script>
