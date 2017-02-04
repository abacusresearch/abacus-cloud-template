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
                               Toastr notification
                            </div>
                            <div class="panel-body">
                                <p>
                                    Minimalistic and extensible notification service for Abacus Cloud Theme.
                                </p>

                                <div class="text-center float-e-margins">
                                    <div class="font-bold m">Examples</div>
                                    <button class="homerDemo1 btn btn-info btn-sm">Run example</button>
                                    <button class="homerDemo2 btn btn-success btn-sm">Run example</button>
                                    <button class="homerDemo3 btn btn-warning btn-sm">Run example</button>
                                    <button class="homerDemo4 btn btn-danger btn-sm">Run example</button>
                                </div>

                                <div class="m-t-md">
                                    <p>
                                        You can easy add any notification in your scripts by adding code like this:
                                    </p>
                                    <pre>Command: toastr["success"]("Example message ", "Example title")

                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-center",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                } </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include('partials/footer.php'); ?>

    </div>

    <script>

        $(function () {

            // Toastr options
            toastr.options = {
                "debug": false,
                "newestOnTop": false,
                "positionClass": "toast-top-center",
                "closeButton": true,
                "toastClass": "animated fadeInDown",
                // "showDuration": "0",
                // "timeOut": "0",
                // "extendedTimeOut": "0"
            };

            $('.homerDemo1').click(function (){
                toastr.info('Info - This is a custom Abacus info notification');
            });

            $('.homerDemo2').click(function (){
                toastr.success('Success - This is a Abacus success notification');
            });

            $('.homerDemo3').click(function (){
                toastr.warning('Warning - This is a Abacus warning notification');
            });

            $('.homerDemo4').click(function (){
                toastr.error('Error - This is a Abacus error notification');
            });

        });

    </script>

</body>
</html>