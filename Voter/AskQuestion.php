<!doctype html>
<html lang="en">
<head>
    <title>Ask Question to Candidates</title>
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
                        <label class="pull-left">Question Title </label>
                        <div class="input-group input-group-icon">
                            <input name="username" type="text" class="form-control input-lg" placeholder="Question Title"
                                   required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="letter">The Question Text:</label>
                        <textarea class="form-control" rows="7" id="letter" ></textarea>
                    </div>

                    <div class="form-group mb-lg">
                        <label class="pull-left">Candidate List <span class="required-star">*</span></label>
                        <div class="input-group input-group-icon">
                            <select class="form-control">
                                <option selected disabled>--- Select The Candidate Name ---</option>
                                <option>--- All Candidate ---</option>

                            </select>
                        </div>
                    </div>
                    <div class="row" dir="rtl">
                        <div class=" pull-right" style="display: inline-block; float: right">
                            <button type="submit" class="btn btn-primary hidden-xs">Add New Question</button>
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
