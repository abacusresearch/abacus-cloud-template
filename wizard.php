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

            <div class="content">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Example fo wizard form
                            </div>
                            <div class="panel-body">

                                <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                                    <div class="text-center m-b-md" id="wizardControl">

                                        <a class="btn btn-primary btn-outline" href="#step1" data-toggle="tab">Step 1 - Personal data</a>
                                        <a class="btn btn-default btn-outline" href="#step2" data-toggle="tab">Step 2 - Payment data</a>
                                        <a class="btn btn-default btn-outline" href="#step3" data-toggle="tab">Step 3 - Approval</a>

                                    </div>

                                    <div class="tab-content">
                                    <div id="step1" class="p-m tab-pane active">

                                        <div class="row">
                                            <div class="col-lg-3 text-center">
                                                <i class="pe-7s-user fa-5x text-muted"></i>
                                                <p class="small m-t-md">
                                                    <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                                    <br/><br/>Lorem Ipsum has been the industry's dummy text of the printing and typesetting
                                                </p>
                                            </div>
                                            <div class="col-lg-9 space-30">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Username</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="password" class="form-control" data-value="">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Company</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Email Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Country</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right m-t-xs">
                                            <a class="btn btn-default prev" href="#">Previous</a>
                                            <a class="btn btn-primary next" href="#">Next</a>
                                        </div>

                                    </div>

                                    <div id="step2" class="p-m tab-pane">

                                        <div class="row">
                                            <div class="col-lg-3 text-center">
                                                <i class="pe-7s-credit fa-5x text-muted"></i>
                                                <p class="small m-t-md">
                                                    <strong>It is a long</strong> established fact that a reader will be distracted by the readable
                                                    <br/><br/>Many desktop publishing packages and web page editors now use
                                                </p>
                                            </div>
                                            <div class="col-lg-9 space-30">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Name on Card</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Card Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <div class="floating-label-wrap">
                                                            <input type="text" class="form-control" data-value="">
                                                            <label>Billing Address</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-4 form-group">
                                                                <div class="floating-label-wrap">
                                                                    <input type="text" class="form-control" data-value="">
                                                                    <label>CVC</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <div class="floating-label-wrap">
                                                                    <input type="text" class="form-control" data-value="">
                                                                    <label>Expiration</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <div class="floating-label-wrap">
                                                                    <input type="text" class="form-control" data-value="">
                                                                    <label></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right m-t-xs">
                                            <a class="btn btn-default prev" href="#">Previous</a>
                                            <a class="btn btn-primary next" href="#">Next</a>
                                        </div>

                                    </div>
                                    <div id="step3" class="tab-pane">
                                        <div class="row text-center m-t-lg m-b-lg">
                                            <div class="col-lg-12">
                                                <i class="pe-7s-check fa-5x text-muted"></i>
                                                <p class="small m-t-md">
                                                    <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-right m-t-xs">
                                            <a class="btn btn-default prev" href="#">Previous</a>
                                            <a class="btn btn-default next" href="#">Next</a>
                                            <a class="btn btn-primary" href="#">Submit</a>
                                        </div>
                                    </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('partials/footer.php'); ?>

        </div>

    </div>

<script>

    $(function(){

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('a[data-toggle="tab"]').removeClass('btn-primary');
            $('a[data-toggle="tab"]').addClass('btn-default');
            $(this).removeClass('btn-default');
            $(this).addClass('btn-primary');
        })

        $('.next').click(function(){
            var nextId = $(this).parents('.tab-pane').next().attr("id");
            $('[href=#'+nextId+']').tab('show');
        })

        $('.prev').click(function(){
            var prevId = $(this).parents('.tab-pane').prev().attr("id");
            $('[href=#'+prevId+']').tab('show');
        })
    });
</script>

</body>
</html>