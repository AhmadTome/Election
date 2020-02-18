<!doctype html>
<html lang="en">
<head>
    <title>Add new Candidate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
</head>
<body >

<div class="wrapper d-flex align-items-stretch">
<?php include ('sidebar.html')?>

    <!-- Page Content  -->
    <!-- start: page -->
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form action="database/login.php" method="post" style="padding: 50px;">
                    <div class="form-group mb-lg">
                        <label class="pull-left">Candidate Name <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="text" class="form-control input-lg" placeholder="Full Name"
                                   required/>
                            <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                        </div>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-left">Candidate Password <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="password" class="form-control input-lg" placeholder="************"
                                   required/>
                        </div>
                    </div>

                    <div class="row" dir="rtl">
                        <div class=" pull-right" style="display: inline-block; float: right">
                            <button type="submit" class="btn btn-primary hidden-xs">Add New Candidate</button>
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
