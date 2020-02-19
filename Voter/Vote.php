<!doctype html>
<html lang="en">
<head>
    <title>التصويت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
</head>
<body >

<div class="wrapper d-flex align-items-stretch" dir="rtl">
    <?php include ('sidebar.html')?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">

                <div class="row" style="text-align: center">
                    <h3>يختار الناخب واحد من الاسماء المرشحة أدنا , مع العلم أنك لن تستطيع التراجع عن التصويت</h3>

                </div>
                    <br>
                    <br>
                    <br>

                    <div>

                        <div class="row" dir="ltr">

                    <span class="pull-right" style="display: inline-block; width: 46%; text-align: right; margin: 5px; padding: 5px; border: 1px solid; box-shadow: -3px -1px 8px 1px #888888;border-radius: 5px;" dir="rtl" >
                        <span style="display: inline-block;background-color: grey; color: white; width: 20%; text-align: center; border-radius: 5px;">
                            1
                        </span>

                        <span style="display: inline-block; width: 55%; text-align: right">
                            <label> الناخب رقم 1</label>
                        </span>

                        <span style="display: inline-block; width: 20%; text-align: left">
                            <input type="radio" name="candidate" style="float: left;">
                        </span>
                    </span>


                    <span class="pull-left" style="display: inline-block; width: 46%; text-align: right; margin: 5px; padding: 5px; border: 1px solid; box-shadow: -3px -1px 8px 1px #888888;border-radius: 5px;" dir="rtl" >
                        <span style="display: inline-block;background-color: grey; color: white; width: 20%; text-align: center; border-radius: 5px;">
                            2
                        </span>

                        <span style="display: inline-block; width: 55%; text-align: right">
                            <label> الناخب رقم 2 </label>
                        </span>

                        <span style="display: inline-block; width: 20%; text-align: left">
                            <input type="radio" name="candidate" style="float: left;">
                        </span>
                    </span>





                    <span class="pull-right" style="display: inline-block; width: 46%; text-align: right; margin: 5px; padding: 5px; border: 1px solid; box-shadow: -3px -1px 8px 1px #888888;border-radius: 5px;" dir="rtl" >
                        <span style="display: inline-block;background-color: grey; color: white; width: 20%; text-align: center; border-radius: 5px;">
                            3
                        </span>

                        <span style="display: inline-block; width: 55%; text-align: right">
                            <label> الناخب رقم 3</label>
                        </span>

                        <span style="display: inline-block; width: 20%; text-align: left">
                            <input type="radio" name="candidate" style="float: left;">
                        </span>
                    </span>


                    <span class="pull-left" style="display: inline-block; width: 46%; text-align: right; margin: 5px; padding: 5px; border: 1px solid; box-shadow: -3px -1px 8px 1px #888888;border-radius: 5px;" dir="rtl" >
                        <span style="display: inline-block;background-color: grey; color: white; width: 20%; text-align: center; border-radius: 5px;">
                           4
                        </span>

                        <span style="display: inline-block; width: 55%; text-align: right">
                            <label> الناخب رقم 4</label>
                        </span>

                        <span style="display: inline-block; width: 20%; text-align: left">
                            <input type="radio" name="candidate" style="float: left;">
                        </span>
                    </span>

                    </div>





                            <div class="pull-left" style="margin: 10px;">
                                <button type="submit" class="btn btn-success ">تصويت</button>
                            </div>
<br>
<br>
<br>
<br>
                        <div class="row">
                        <div class="row">
                            <lable>ملاحظة : لن يتم احتساب الصوت اذا تمام الانتخاب دون أختيار احد من الاسماء المرشحة أدناه ويعتبر تصويت لاغي</lable>

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
