<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('stylesheet.html') ?>
  </head>
  <body >

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
	  		<h1 style="margin-top: 150px;"><a href="index.php" class="logo">Project Name</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span> Homepage</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user mr-3"></span> Dashboard</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Friends</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Subcription</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Information</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
            <!-- start: page -->
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div style="width: 100%;background-image: url(img/logo.png);height: 150px; background-repeat: no-repeat;background-position: center;">

                        </div>



                        <form action="database/login.php" method="post" style="padding: 50px;">
                            <div class="form-group mb-lg">
                                <label class="pull-left">Full Name <span class="required-star">*</span></label>
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
                                <label class="pull-left">User Type <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <select class="form-control">
                                        <option selected disabled>--- Select The User Type ---</option>
                                        <option>Student</option>
                                        <option>Admin</option>
                                        <option>Super Admi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Student Number <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="Student Number"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Birth Date <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="date" class="form-control input-lg" required/>

                                </div>
                            </div>


                            <div class="form-group mb-lg">
                                <label class="pull-left">Gender <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                            <span style="  display: inline-block;width: 50%; text-align: left" >
                                <input name="username" type="radio"  value="Male" /> Male
                            </span>
                                    <span style="  display: inline-block; width: 50%;text-align: left">
                                <input name="username" type="radio"  value="Female"/> Female
                            </span>



                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Year Level <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="Year Level"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Degree Program <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <select class="form-control">
                                        <option selected disabled>--- Select The User Type ---</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Email <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="email" class="form-control input-lg" placeholder="username@example.com"
                                           required/>
                                </div>
                            </div>
                            <div class="form-group mb-lg">
                                <label class="pull-left">Mobile No. <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="Mobile Number"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Country <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <select class="form-control">
                                        <option selected disabled>--- Select The User Type ---</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Address <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="email" class="form-control input-lg" placeholder="Your Address ..."
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Password <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="password" class="form-control input-lg" placeholder="*************"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <label class="pull-left">Confirmed Password <span class="required-star">*</span></label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="password" class="form-control input-lg" placeholder="*************"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="input-group input-group-icon text-left">
                                    <input class="pull-left" name="username" type="radio" />
                                    <label class="pull-left">&nbsp;I accept the <span style="color: #00ff09">Terms of Users</span>&nbsp;&&nbsp;<span style="color: #00ff09">Privacy Policy</span></label>

                                </div>
                            </div>
                            <p class="text-left" style="color: red">
                                <?php
                    if (isset($_SESSION['Error'])) {
                        echo $_SESSION['Error'];

                        unset($_SESSION['Error']);

                    }
                    ?>
                            </p>


                            <div class="row">
                                <div class="col-sm-4 text-right pull-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Register</button>
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
