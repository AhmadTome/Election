<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>اضافة مرشح جديد</title>
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
            <?php include('logo.html') ?>

            <div class="wrap-login100">

                <p class="text-right" style="color: red">
                    <?php
                    if (isset($_SESSION['Error'])) {
                        echo $_SESSION['Error'];

                        unset($_SESSION['Error']);

                    }
                    ?>
                </p>
                <p class="text-right" style="color: white; background-color: green" >
                    <?php
                    if( isset($_SESSION['success']) )
                    {
                        echo $_SESSION['success'];

                        unset($_SESSION['success']);

                    }
                    ?>
                </p>


                <form action="../database/addCandidate.php" method="post" style="padding: 50px;">
                    <div class="form-group mb-lg">
                        <label class="pull-right">اسم المرشح <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="name" type="text" class="form-control input-lg" placeholder="الاسم الكامل"
                                   required/>
                            <span class="input-group-addon pull-left">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">العمر <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="age" type="text" class="form-control input-lg" placeholder="العمر"
                                   required/>
                            <span class="input-group-addon pull-left">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">ايميل <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="email" type="text" class="form-control input-lg" placeholder="example@hotmail.com"
                                   required/>
                            <span class="input-group-addon pull-left">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-right">الرقم السري <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="pwd" type="password" class="form-control input-lg" placeholder="************"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="pull-right" for="letter">الرسالة الإنتخابية المقدمة للناخبين :</label>
                        <textarea name="cand_msg" class="form-control" rows="7" id="letter" ></textarea>
                    </div>

                    <div class="row" dir="ltr">
                        <div class="pull-left" style="display: inline-block;">
                            <button type="submit" class="btn btn-primary hidden-xs">اضافة مرشح جديد</button>
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
