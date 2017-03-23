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

    <div class="form-panel-container externalpage-container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo m-b-md">
                    <img src="images/logo-abacus.svg" alt="Abacus">
                </div>

                <div class="hpanel form-panel">
                    <div class="panel-body">
                        <h3 class="text-center m-t-lg m-b-sm">Welcome title message</h3>
                        <p class="text-center text-primary-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Laborum reiciendis, odit eum ut? Vitae, maxime, minima?</p>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
                                <div class="act-slider example-1 m-b-md">
                                    <div class="act-slider__item">
                                        <div class="text-center">
                                            <img src="http://placehold.it/340x140/efefef/?text=placeholder+image" class="img-responsive inline-block">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h4 class="m-b-md">Step title lipsum</h4>
                                            <small>Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui, aliquam et asperiores dignissimos in.</small>
                                        </div>
                                    </div>
                                    <div class="act-slider__item">
                                        <div class="text-center">
                                            <img src="http://placehold.it/340x140/efefef/?text=placeholder+image" class="img-responsive inline-block">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h4 class="m-b-md">Step title lipsum</h4>
                                            <small>Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui, aliquam et asperiores dignissimos in.</small>
                                        </div>
                                    </div>
                                    <div class="act-slider__item">
                                        <div class="text-center">
                                            <img src="http://placehold.it/340x140/efefef/?text=placeholder+image" class="img-responsive inline-block">
                                        </div>
                                        <div class="text-center m-t-lg">
                                            <h4 class="m-b-md">Step title lipsum</h4>
                                            <small>Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui, aliquam et asperiores dignissimos in.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary">Primary</button><br>
                                    <a class="btn btn-link">More information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <small class="text-primary-2">© ABACUS Research AG</small>
            </div>
        </div>
    </div>


    <?php include('partials/footer.php'); ?>


</body>
</html>