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
    <?php include ('sidebar.html')?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">

                    <div class="form-group mb-lg">
                        <label class="pull-right">تغيير الاسم </label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
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
                            <input name="username" type="password" class="form-control input-lg" placeholder="************"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">الرسالة الإنتخابية المقدمة للناخبين :</label>
                        <textarea class="form-control" rows="7" id="letter" ></textarea>
                    </div>

                    <div class="row" dir="ltr">

                        <div class=" pull-right" style="display: inline-block; margin-right: 5px;">
                            <button type="submit" class="btn btn-danger hidden-xs">حذف الحساب الشخصي</button>
                        </div>

                        <div class=" pull-right" style="display: inline-block; ">
                            <button type="submit" class="btn btn-info hidden-xs">تعديل معلوماتي الشخصية</button>
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
