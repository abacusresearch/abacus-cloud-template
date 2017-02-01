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

                <div class="row projects">
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-body">
                                <span class="label label-primary pull-right">NEW</span>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h4><a href=""> Desing project</a></h4>

                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has..
                                        </p>

                                        <div class="row m-b-sm">
                                            <div class="col-sm-6">
                                                <div class="project-label">CLIENT</div>
                                                <small>Hendrix Corp</small>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="project-label">VERSION</div>
                                                <small>1.5.2</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="project-label">DEADLINE</div>
                                                <small>12.06.2015</small>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="project-label">PROGRESS</div>
                                                <div class="progress m-t-xs full progress-small">
                                                    <div style="width: 12%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" role="progressbar" class=" progress-bar progress-bar-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 project-info">
                                        <div class="project-action m-t-md">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default"> View</button>
                                                <button class="btn btn-xs btn-default"> Edit</button>
                                                <button class="btn btn-xs btn-default"> Delete</button>
                                            </div>
                                        </div>
                                        <div class="project-value">
                                            <h2 class="text-primary">
                                                $1 206,40
                                            </h2>
                                        </div>
                                        <div class="project-people">
                                            <img alt="logo" class="img-circle" src="images/a1.jpg">
                                            <img alt="logo" class="img-circle" src="images/a2.jpg">
                                            <img alt="logo" class="img-circle" src="images/a3.jpg">
                                            <img alt="logo" class="img-circle" src="images/a4.jpg">
                                            <img alt="logo" class="img-circle" src="images/a5.jpg">
                                            <img alt="logo" class="img-circle" src="images/a6.jpg">
                                            <img alt="logo" class="img-circle" src="images/a7.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Additional information about project in footer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-body">
                                <span class="label label-primary pull-right">NEW</span>
                                <div class="row">
                                    <div class="col-sm-7">
                                        <h4><a href=""> Desing project</a></h4>

                                        <p>
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has..
                                        </p>

                                        <div class="row m-b-sm">
                                            <div class="col-sm-6">
                                                <div class="project-label">CLIENT</div>
                                                <small>Hendrix Corp</small>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="project-label">VERSION</div>
                                                <small>1.5.2</small>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="project-label">DEADLINE</div>
                                                <small>12.06.2015</small>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="project-label">PROGRESS</div>
                                                <div class="progress m-t-xs full progress-small">
                                                    <div style="width: 12%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" role="progressbar" class=" progress-bar progress-bar-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 project-info">
                                        <div class="project-action m-t-md">
                                            <div class="btn-group">
                                                <button class="btn btn-xs btn-default"> View</button>
                                                <button class="btn btn-xs btn-default"> Edit</button>
                                                <button class="btn btn-xs btn-default"> Delete</button>
                                            </div>
                                        </div>
                                        <div class="project-value">
                                            <h2 class="text-primary">
                                                $1 206,40
                                            </h2>
                                        </div>
                                        <div class="project-people">
                                            <img alt="logo" class="img-circle" src="images/a1.jpg">
                                            <img alt="logo" class="img-circle" src="images/a2.jpg">
                                            <img alt="logo" class="img-circle" src="images/a3.jpg">
                                            <img alt="logo" class="img-circle" src="images/a4.jpg">
                                            <img alt="logo" class="img-circle" src="images/a5.jpg">
                                            <img alt="logo" class="img-circle" src="images/a6.jpg">
                                            <img alt="logo" class="img-circle" src="images/a7.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                Additional information about project in footer
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