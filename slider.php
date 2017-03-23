<?php
  $filename = basename(__FILE__, '.php');
  $pageName = ucwords(str_replace("_", " ", $filename));
?>

<!DOCTYPE html>
<html>
    <?php include('partials/head.php'); ?>
<body class="fixed-navbar fixed-sidebar">
    <div class="boxed-wrapper">
        <?php include('partials/header.php'); ?>
        <?php include('partials/navigation.php'); ?>

        <div id="wrapper">

            <?php include('partials/component_title.php'); ?>

            <div class="content animate-panel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Flickity Slider
                            </div>
                            <div class="panel-body">
                                <div class="text-center m-b-md">
                                    <h3>Basic slider example</h3>
                                    <small>For the slider component the flickity slider is used. Please refer to the <a href="http://flickity.metafizzy.co/" target="_blank">website for documentation</a></small>
                                </div>
                                <div class="act-slider example-1">
                                    <div class="act-slider__item">
                                        <img src="http://placehold.it/800x380/?text=placeholder+image" class="img-responsive">
                                    </div>

                                    <div class="act-slider__item">
                                        <h1>A slide title</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui, aliquam et asperiores dignissimos in. Facere vero quaerat, repellendus soluta.</p>
                                    </div>

                                    <div class="act-slider__item">
                                        <div class="text-center m-b-md">
                                            <h2>A slide title</h2>
                                            <p>Facere vero quaerat, repellendus soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui.</p>
                                            <p>Labore ipsa quasi ducimus dolor placeat dolorum, ea in rem temporibus fugit. Consectetur adipisicing elit. Deleniti, delectus eligendi molestiae possimus provident. Repellendus dolores aperiam dolor.</p>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Flickity Slider
                            </div>
                            <div class="panel-body">
                                <div class="text-center m-b-md">
                                    <h3>Alternative slider example</h3>
                                    <small>This slider version has autoPlay, adaptiveHeight and no navigation options.<br>Please refer to the <a href="http://flickity.metafizzy.co/" target="_blank">website for documentation</a></small>
                                </div>
                                <div class="act-slider example-2">
                                    <div class="act-slider__item">
                                        <img src="http://placehold.it/800x380/?text=placeholder+image" class="img-responsive">
                                    </div>

                                    <div class="act-slider__item">
                                        <h1>A slide title</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui, aliquam et asperiores dignissimos in. Facere vero quaerat, repellendus soluta.</p>
                                    </div>

                                    <div class="act-slider__item">
                                        <div class="text-center m-b-md">
                                            <h2>A slide title</h2>
                                            <p>Facere vero quaerat, repellendus soluta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloremque numquam reiciendis ipsa provident nisi unde atque repudiandae praesentium qui.</p>
                                            <p>Labore ipsa quasi ducimus dolor placeat dolorum, ea in rem temporibus fugit. Consectetur adipisicing elit. Deleniti, delectus eligendi molestiae possimus provident. Repellendus dolores aperiam dolor.</p>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php include('partials/footer.php'); ?>

        </div>
    
    </div>


</body>
</html>