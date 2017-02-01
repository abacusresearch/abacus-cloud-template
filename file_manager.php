<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>Abacus Cloud Theme | Components Repository</title>

    

    <!-- Vendor styles -->
    
    
    
    
    
    
    

    <!-- App styles -->
    
    <link rel="stylesheet" href="assets/css/application.css">

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
            <li>
                <a href="#"><span class="nav-label">Interface</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="panels.html">Panels design</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="buttons.html">Colors &amp; Buttons</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="icons.html">Icons library</a></li>
                </ul>
            </li>
            <li class="active">
                <a href="#"><span class="nav-label">App views</span><span class="fa arrow text-primary-2"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li><a href="mailbox_compose.html">Mail Compose</a></li>
                    <li><a href="mailbox_view.html">Mail View</a></li>
                    <li class="active"><a href="file_manager.html">File Manager</a></li>
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
            File Manager
        </h2>
        <small>Show you files in a nice manager design.</small>
    </div>

    <div class="content animate-panel">

        <div class="row">
            <div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-primary btn-block" href="#" data-toggle="dropdown">
                                NEW
                            </a>
                            <ul class="dropdown-menu filedropdown m-l">
                                <li><a href="#"><i class="fa fa-folder-o"></i> Folder</a></li>
                                <li><a href="#"><i class="fa fa-file"></i> File</a></li>
                                <li><a href="#"><i class="fa fa-file-excel-o"></i> Sheet</a></li>
                                <li><a href="#"><i class="fa fa-file-audio-o"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-file-movie-o"></i> Movie</a></li>
                            </ul>
                        </div>

                        <ul class="h-list m-t">
                            <li class="active"><a href="#"><i class="fa fa-folder"></i> Files</a></li>
                            <li><a href="#"><i class="fa fa-user text-info"></i> Shared with me</a></li>
                            <li><a href="#"><i class="fa fa-clock-o text-success"></i> Recent</a></li>
                            <li><a href="#"><i class="fa fa-star text-warning"></i> Starred</a></li>
                            <li><a href="#"><i class="fa fa-trash text-danger"></i> Trash</a></li>
                        </ul>
                    </div>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <h3>6 GB used</h3>
                        <p>It is 65% of all your storage</p>
                        <div class="progress full m-t-xs">
                            <div style="width: 65%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" role="progressbar" class=" progress-bar progress-bar-info">
                                65%
                            </div>
                        </div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum adipiscing elit.</small>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
                        </div>
                        <div class="hpanel">
                            <div class="panel-body file-body">
                                <i class="fa fa-file-powerpoint-o text-danger"></i>
                            </div>
                            <div class="panel-footer">
                                <a href="#">Presentation_2016.doc</a>
                            </div>
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

        // Initialize summernote plugin
        $('.summernote').summernote({
            toolbar: [
                ['headline', ['style']],
                ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                ['textsize', ['fontsize']],
                ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
            ]
        });

    });

</script>

</body>
</html>