<?php
  $filename = basename(__FILE__, '.php');
  $pageName = ucwords(str_replace("_", " ", $filename));
?>

<!DOCTYPE html>
<html>
    <?php include('partials/head.php'); ?>
<body class="blank">

<div class="back-link">
    <a href="index.php" class="btn btn-primary">Back to Dashboard</a>
</div>

<div class="form-panel-container login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="logo text-center m-b-xl">
                <img src="images/logo-abacus.svg" alt="Abacus">
            </div>

            <div class="text-center m-b-xl">
                <h3 class="text-primary-2 font-light">Password Recover</h3>
                <small>Please fill the form to recover your password</small>
            </div>
            <div class="hpanel form-panel">
                <div class="panel-body">
                    <h4 class="text-center m-t-lg m-b-xl">Enter your email address and your password will be reset and emailed to you.</h4>
                    <form action="#" id="loginForm">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control"  data-value="">
                                        <label>Email</label>
                                        <span class="help-block small">Your registered email address</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <button class="btn btn-primary" type="submit">Reset Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="#" class="text-primary-2 text-underline">Register</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="#" class="text-primary-2 text-underline">Back to login page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <small class="text-primary-2">© ABACUS Research AG</small>
        </div>
    </div>
</div>

<?php include('partials/footer.php'); ?>

</body>
</html>