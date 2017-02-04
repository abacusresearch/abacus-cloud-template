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
                    <div class="col-md-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <h1>Options</h1>
                                <p class="lead">
                                    Homer admin theme gives you few configure options for your application layout. Each of the layout element: navigation, navbar, small header and footer can be fixed positioning.
                                </p>
                                <p>
                                    Use below buttons to enable/disable available options.
                                </p>
                                <div>
                                    <dl class="dl-horizontal">
                                        <dt style="text-align: left">Fixed sidebar</dt>
                                        <dd class="status-fixed-sidebar"><span class='text-success font-bold'>On</span></dd>

                                        <dt style="text-align: left">Fixed navbar</dt>
                                        <dd class="status-fixed-navbar"><span class='text-success font-bold'>On</span></dd>

                                        <dt style="text-align: left">Fixed footer</dt>
                                        <dd class="status-fixed-footer">Off</dd>

                                        <dt style="text-align: left">Fixed small header</dt>
                                        <dd class="status-fixed-small-header">Off</dd>

                                        <dt style="text-align: left">Boxed layout</dt>
                                        <dd class="status-boxed-layout">Off</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Fixed navbar
                            </div>
                            <div class="panel-body">
                                <p>
                                    Fixed navbar is a top navbar that is sticked on screen.
                                </p>
                                <p>
                                    To add fixed navbar you need to add .fixed-navbar class to body element.
                                </p>
                                <div class="text-center">
                                    <button id="fixed-navbar" type="button" class="btn btn-success" >
                                        Toggle fixed navbar
                                    </button>

                                </div>

                                <div class="m-t-md">
                                    <pre>&lt;body class="fixed-navbar"&gt;</pre>
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
                                Fixed navbar
                            </div>
                            <div class="panel-body">
                                <p>
                                    Fixed sidebar is a (left menu) sidebar that is sticked on screen.
                                </p>
                                <p>
                                    To add fixed sidebar you need to add .fixed-sidebar class to body. Fixed sidebar works with fixed-navbar.
                                </p>
                                <div class="text-center">
                                    <button id="fixed-sidebar" type="button" class="btn btn-success" >
                                        Toggle fixed sidebar
                                    </button>

                                </div>

                                <div class="m-t-md">
                                    <pre>&lt;body class="fixed-sidebar fixed-navbar"&gt;</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Boxed layout
                            </div>
                            <div class="panel-body">
                                <p>
                                    Boxed layout is an option for fixed width and centered layout on desktop resolution.
                                </p>
                                <p>
                                    To add boxed layout you need to add .boxed class to body element and special additional div wrapper after body tag with .boxed-wrapper class.
                                </p>
                                <div class="text-center">
                                    <button id="boxed-layout" type="button" class="btn btn-success" >
                                        Toggle boxed layout
                                    </button>

                                </div>

                                <div class="m-t-md">
                                    <pre>&lt;body class="boxed"&gt;
                                        &lt;div class="boxed-wrapper"&gt;
                                            ….
                                            ….
                                        &lt;/div&gt;
                                    &lt;/body&gt;</pre>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <?php include('partials/footer.php'); ?>

        </div>

    </div>

    <script>

        $(function () {

            $('#fixed-navbar').click(function(){
                if($('body').hasClass('fixed-navbar')) {
                    $('body').removeClass('fixed-navbar');
                    $('.status-fixed-navbar').html("Off");

                    if($('body').hasClass('fixed-sidebar')) {
                        $('body').removeClass('fixed-sidebar');
                        $('.status-fixed-sidebar').html("Off")
                    }

                    if($('body').hasClass('fixed-small-header')) {
                        $('body').removeClass('fixed-small-header');
                        $('.status-fixed-small-header').html("Off")
                    }

                } else {
                    $('body').addClass('fixed-navbar');
                    $('.status-fixed-navbar').html("<span class='text-success font-bold'>On</span>");
                    $('body').removeClass('boxed');
                    $('.status-boxed-layout').html("Off")
                }
            });

            $('#fixed-sidebar').click(function(){

                if($('body').hasClass('fixed-sidebar')) {
                    $('body').removeClass('fixed-sidebar');
                    $('.status-fixed-sidebar').html("Off")
                } else {
                    $('body').addClass('fixed-navbar');
                    $('body').addClass('fixed-sidebar');
                    $('.status-fixed-navbar').html("<span class='text-success font-bold'>On</span>");
                    $('.status-fixed-sidebar').html("<span class='text-success font-bold'>On</span>");
                    $('body').removeClass('boxed');
                    $('.status-boxed-layout').html("Off")
                }
            });

            $('#fixed-footer').click(function(){
                if($('body').hasClass('fixed-footer')) {
                    $('body').removeClass('fixed-footer');
                    $('.status-fixed-footer').html("Off");
                } else {
                    $('body').addClass('fixed-footer');
                    $('.status-fixed-footer').html("<span class='text-success font-bold'>On</span>");
                    $('body').removeClass('boxed');
                    $('.status-boxed-layout').html("Off")
                }
            });

            $('#fixed-small-header').click(function(){

                if($('body').hasClass('fixed-small-header')) {
                    $('body').removeClass('fixed-small-header');
                    $('body').removeClass('fixed-sidebar');
                    $('body').removeClass('fixed-navbar');
                    $('.status-fixed-small-header').html("Off");
                    $('.status-fixed-sidebar').html("Off");
                    $('.status-fixed-navbar').html("Off")
                } else {
                    $('body').addClass('fixed-navbar');
                    $('body').addClass('fixed-sidebar');
                    $('body').addClass('fixed-small-header');
                    $('.status-fixed-navbar').html("<span class='text-success font-bold'>On</span>");
                    $('.status-fixed-sidebar').html("<span class='text-success font-bold'>On</span>");
                    $('.status-fixed-small-header').html("<span class='text-success font-bold'>On</span>");
                    $('body').removeClass('boxed');
                    $('.status-boxed-layout').html("Off")
                }
            });

            $('#boxed-layout').click(function(){
                if($('body').hasClass('boxed')) {
                    $('body').removeClass('boxed');
                    $('.status-boxed-layout').html("Off")
                } else {
                    $('body').addClass('boxed');
                    $('.status-boxed-layout').html("<span class='text-success font-bold'>On</span>");
                    $('body').removeClass('fixed-small-header');
                    $('body').removeClass('fixed-sidebar');
                    $('body').removeClass('fixed-navbar');
                    $('body').removeClass('fixed-footer');
                    $('.status-fixed-small-header').html("Off");
                    $('.status-fixed-footer').html("Off");
                    $('.status-fixed-sidebar').html("Off");
                    $('.status-fixed-navbar').html("Off");
                }
            });

        });

    </script>

</body>
</html>