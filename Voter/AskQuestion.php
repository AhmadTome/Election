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
    <?php include ('sidebar.html')?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">

                    <div class="form-group mb-lg">
                        <label class="pull-right">العنوان<span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="text" class="form-control input-lg" placeholder="عنوان السؤال"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">نص السؤال<span class="required-star ">*</span></label>
                        <textarea class="form-control" rows="7" id="letter" ></textarea>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">قائمة المرشحين <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <select class="form-control">
                                <option selected disabled>--- Select The Candidate Name ---</option>
                                <option>--- All Candidate ---</option>

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
