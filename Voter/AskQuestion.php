<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>تقديم سؤال للمرشحين</title>
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
    $info = $param->getInfo()
    ?>
    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <?php include('logo.html') ?>

            <div class="wrap-login100">

                <?php include('../messages/message.php') ?>

                <form action="../database/addQuestion.php" method="post" style="padding: 50px;">

                    <div class="form-group mb-lg">
                        <label class="pull-right">العنوان<span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="title" type="text" class="form-control input-lg" placeholder="عنوان السؤال"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">نص السؤال<span class="required-star ">*</span></label>
                        <textarea name="q_text" class="form-control" rows="7" id="letter" ></textarea>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">قائمة المرشحين </label>
                        <div class="input-group input-group-icon">
                            <select class="form-control" name="candidate_select" id="candidate_select">
                                <option selected disabled>--- اختار اسم المرشح ---</option>
                                <option value="all">جميع المرشحين</option>
                                <?php
                                for ($i=0; $i < count($info) ; $i++){
                                    echo '<option value='. $info[$i]["id"] .'>'. $info[$i]["name"] .'</option>';
                                }

                                ?>

                            </select>
                        </div>
                    </div>
                    <div class="row" dir="ltr">
                        <div class=" pull-right" style="display: inline-block; float: right">
                            <button type="submit" class="btn btn-primary hidden-xs">إضافة السؤال</button>
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
