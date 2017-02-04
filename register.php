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
                <h3 class="text-primary-2 font-light">One Account for all Abacus Services</h3>
            </div>
            <div class="hpanel form-panel">
                <div class="panel-body">
                    <h4 class="text-center m-t-lg m-b-xl">Register get access to the Abacus services.</h4>
                    <form action="#" id="loginForm">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control"  data-value="">
                                        <label>Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control"  data-value="">
                                        <label>Surname</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control"  data-value="">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control"  data-value="">
                                        <label>Confirm Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap m-b-lg">
                                        <input type="password" class="form-control" name="password"  data-value="">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="floating-label-wrap m-b-lg">
                                        <input type="password" class="form-control" name="password"  data-value="">
                                        <label>Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkbox checkbox-primary pull-right">
                                        <input id="newsletter" type="checkbox" checked="">
                                        <label for="newsletter">
                                            Subscribe to the newsletter
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="m-r-md text-icon-28 text-primary-2">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="text-icon-28 text-primary-2">
                                        <i class="fa fa-google-plus-square"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12 text-right">
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