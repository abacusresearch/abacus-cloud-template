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
                    <div class="col-lg-12">
                        <div class="hpanel">
                            <div class="panel-body float-e-margins">
                                <div class="wrapper">
                                    <div class="row color-demo">
                                        <div class="header-line h-bg-navy-blue extreme-color">
                                            <div>Primary</div>
                                        </div>
                                        <div class="header-line h-bg-violet">
                                            <div>Secondary</div>
                                        </div>
                                        <div class="header-line h-bg-blue">
                                            <div>Info</div>
                                        </div>
                                        <div class="header-line h-bg-green">
                                            <div>Success</div>
                                        </div>
                                        <div class="header-line h-bg-yellow">
                                            <div>Warning</div>
                                        </div>
                                        <div class="header-line h-bg-red">
                                            <div>Danger</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Buttons - primary colors
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    Use any of the available button classes to quickly create a styled button.
                                </p>

                                <div>
                                    <button type="button" class="btn w-xs btn-default">Default</button>
                                    <button type="button" class="btn w-xs btn-primary">Primary</button>
                                </div>
                                <div>
                                    <button type="button" class="btn w-xs btn-secondary">Secondary</button>
                                    <button type="button" class="btn w-xs btn-info">Info</button>
                                </div>
                                <div>
                                    <button type="button" class="btn w-xs btn-success">Success</button>
                                    <button type="button" class="btn w-xs btn-warning">Warning</button>
                                </div>
                                <div>
                                    <button type="button" class="btn w-xs btn-danger">Danger</button>
                                    <button type="button" class="btn w-xs btn-link">Simple link</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Different size
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    If You want larger or smaller buttons You can add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> class.
                                </p>
                                <div>
                                    <button type="button" class="btn btn-primary btn-lg">Large</button>
                                    <button type="button" class="btn btn-default btn-lg">Large</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary">Default</button>
                                    <button type="button" class="btn btn-default">Default</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-sm">Small</button>
                                    <button type="button" class="btn btn-default btn-sm">Small</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-xs">Mini</button>
                                    <button type="button" class="btn btn-default btn-xs">Mini</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Outline buttons
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    Create block level buttons or outline buttons, by adding <code>.btn-block</code> or <code>.btn-outline</code>.
                                </p>
                                
                                <div>
                                    <button type="button" class="btn btn-outline btn-default">Default</button>
                                    <button type="button" class="btn btn-outline btn-primary">Primary</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline btn-info">Info</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline btn-success">Success</button>
                                    <button type="button" class="btn btn-outline btn-warning">Warning</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline btn-danger">Danger</button>
                                <p>
                                    <button type="button" class="btn btn-block btn-outline btn-default">Block button</button>
                                </p>

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
                                Dropdown buttons
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    Droppdowns buttons are avalible with any color and any size.
                                </p>

                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#" class="font-bold">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <br/>

                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-info btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <br/>

                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-info btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu with-arrow">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
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
                                Button gruped
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    This is a group of buttons, ideal for sytuation where many actions are related to same element.
                                </p>

                                <div class="btn-group">
                                    <button class="btn btn-default" type="button">Left</button>
                                    <button class="btn btn-primary" type="button">Middle</button>
                                    <button class="btn btn-default" type="button">Right</button>
                                </div>
                                <br/>
                                <br/>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>
                                    <button class="btn btn-default">1</button>
                                    <button class="btn btn-default  active">2</button>
                                    <button class="btn btn-default">3</button>
                                    <button class="btn btn-default">4</button>
                                    <button class="btn btn-default">5</button>
                                    <button class="btn btn-default">6</button>
                                    <button class="btn btn-default">7</button>
                                    <button class="btn btn-default">8</button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>
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
                                Icon Buttons
                            </div>
                            <div class="panel-body float-e-margins">
                                <p>
                                    To buttons with any color or any size you can add extra icon on the left or the right side.
                                </p>
                                <div>
                                    <button class="btn btn-primary " type="button"><i class="fa fa-check"></i> Submit</button>
                                    <button class="btn btn-secondary " type="button"><i class="fa fa-upload"></i> <span class="bold">Upload</span></button>
                                </div>
                                <div>
                                    <button class="btn btn-info " type="button"><i class="fa fa-paste"></i> Edit</button>
                                    <button class="btn btn-danger" type="button"><i class="fa fa-trash-o"></i> <span class="bold">Delete</span></button>
                                </div>
                                <div>
                                    <button class="btn btn-default " type="button"><i class="fa fa-map-marker"></i> Map</button>
                                </div>
                                <div>

                                <a class="btn btn-default">
                                    <i class="fa fa-user-md"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-group"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-exchange"></i>
                                </a>
                                </div>
                                <div>
                                <a class="btn btn-default">
                                    <i class="fa fa-check-circle-o"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-road"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-ambulance"></i>
                                </a>
                                <a class="btn btn-default">
                                    <i class="fa fa-star"></i> Stared
                                </a>
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