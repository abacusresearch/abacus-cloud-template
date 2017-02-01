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
                    <div class="col-lg-4">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Default Panel
                            </div>
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                            </p>
                            </div>
                            <div class="panel-footer">
                                This is standard panel footer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hpanel">
                            <div class="panel-heading hbuilt">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Built panel
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6 border-right">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus
                                        </p>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <p>
                                            posuere lectus et, fringilla augue.
                                            ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae  accumsan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                This is standard panel footer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="hpanel collapsed">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Initial collapsed basic
                            </div>
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer">
                                This is standard panel footer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hpanel collapsed">
                            <div class="panel-heading hbuilt">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Initial collapsed built
                            </div>
                            <div class="panel-body">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan.
                                </p>
                            </div>
                            <div class="panel-footer">
                                This is standard panel footer
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
