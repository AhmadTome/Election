<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>صفحة تسجيل دخول</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <div style="width: 100%; display: inline-block; text-align: center">
        <img src="images/logo.png" width="200px">
    </div>
    <div class="main-agileinfo">
        <div class="agileits-top">

            <?php include ('messages/message.php')?>
            <form action="database/login.php" method="post">
                <input class="text email" type="email" name="username" placeholder="Email" required="">
                <input class="text" type="password" name="pwd" placeholder="Password" required="">

                <input type="submit" value="تسجيل دخول">
            </form>
            <p>ليس لديك حساب ؟ <a href="register.php"> سجل هنا!</a></p>
        </div>
    </div>
    <!-- copyright -->

    <!-- //copyright -->
    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!-- //main -->
</body>
</html>
