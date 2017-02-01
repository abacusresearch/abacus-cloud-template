<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Abacus Cloud Theme | Components Repository</title>

    

    <!-- Vendor styles -->
    
    
    
    
    <link rel="stylesheet" href="bower_components/toastr/toastr.min.css" />

    <!-- App styles -->
    
    <link rel="stylesheet" href="assets/css/application.css">
    <link rel="stylesheet" href="styles/static_custom.css">

</head>
<body class="fixed-navbar fixed-sidebar">
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="boxed-wrapper"> <!-- Header -->
<div id="header">
    <div id="logo" class="light-version">
        <span>
            Abacus Cloud Theme
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu hidden-sm hidden-md hidden-lg"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">Abacus Cloud Theme</span>
        </div>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
</div>

<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.html"><span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="analytics.html"> <span class="nav-label">Analytics</span> </a>
            </li>
            <li class="active">
                <a href="#"><span class="nav-label">Interface</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="panels.html">Panels design</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="buttons.html">Colors &amp; Buttons</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li class="active"><a href="alerts.html">Alerts</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="icons.html">Icons library</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">App views</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="projects.html">Projects</a></li>
<li><a href="timeline.html">Timeline</a></li>
<li><a href="mailbox.html">Mailbox</a></li>
<li><a href="mailbox_compose.html">Mail Compose</a></li>
<li><a href="mailbox_view.html">Mail View</a></li>
                    <li><a href="file_manager.html">File Manager</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Charts</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="chartjs.html">ChartJs</a></li>
                    <li><a href="flot.html">Flot charts</a></li>
                    <li><a href="inline.html">Inline graphs</a></li>
                    <li><a href="chartist.html">Chartist</a></li>
                    <li><a href="c3.html">C3 Charts</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Box transitions</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="overview.html">Overview</a></li>
                    <li><a href="transition_three.html">Panels zoom</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Common views</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="error_one.html">Error 404</a></li>
                    <li><a href="error_two.html">Error 505</a></li>
                    <li><a href="password_recovery.html">Passwor recovery</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Tables</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="tables_design.html">Tables design</a></li>
                    <li><a href="datatables.html">Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label">Forms</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="forms_elements.html">Forms elements</a></li>
                    <li><a href="forms_extended.html">Forms extended</a></li>
                    <li><a href="text_editor.html">Text editor</a></li>
                    <li><a href="wizard.html">Wizard</a></li>
                    <li><a href="validation.html">Validation</a></li>
                </ul>
            </li>
            <li>
                <a href="options.html"> <span class="nav-label">Layout options</span></a>
            </li>
            <li>
                <a href="grid_system.html"> <span class="nav-label">Grid system</span></a>
            </li>
        </ul>
    </div>
</aside>

<!-- Main Wrapper -->
<div id="wrapper">

<div class="normalheader">
    <h2 class="m-b-xs">
        Alerts
    </h2>
    <small>Notification and custom alerts</small>
</div>

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
                    <pre>
Command: toastr["success"]("Example message ", "Example title")

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

    <!-- Footer-->
    <footer class="footer">
        
        ©2017 Abacus
    </footer>

</div>










<!-- App scripts -->
<script src="assets/js/application.js"></script>

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