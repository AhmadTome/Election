
<!DOCTYPE html>
<html>
<head>
    <title>تسجيل حساب جديد</title>
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
    </div>    <div class="main-agileinfo">
        <div class="agileits-top">
            <?php include ('messages/message.php')?>
            <form name="loginForm" action="database/register.php" method="post" onsubmit="return validateForm()">
                <input class="text" type="text" name="name" placeholder="name" required="">
                <input class="text email" type="text" name="age" placeholder="age" required="">
                <input class="text email" type="email" name="email" placeholder="Email" required="">
                <input class="text" type="password" name="pwd" id="pwd" placeholder="Password" required="">
                <input class="text w3lpass" type="password" name="r_pwd" id="r_pwd" placeholder="Confirm Password" required="">

                <input type="submit" value="تسجيل حساب جديد">
            </form>
            <p>هل لديك حساب بالفعل ؟ <a href="login.php"> تسجيل الدخول هنا!</a></p>
        </div>
    </div>

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
<script>
    function validateForm() {
        var pass = document.forms["loginForm"]["pwd"].value;
        var pass_confirm = document.forms["loginForm"]["r_pwd"].value;
        if (pass != pass_confirm) {
            alert("الرقم السري غير متطابق!");
            return false;
        }
    }
</script>
