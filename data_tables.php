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
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Basic example with Ajax (json file)
                            </div>
                            <div class="panel-body">
                                <table id="example1" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th width="15%">Age</th>
                                        <th width="15%">Start date</th>
                                        <th width="15%">Salary</th>
                                    </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>

                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Standard table
                            </div>
                            <div class="panel-body">
                                <div class="row m-b-sm">
                                    <div class="col-sm-3">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu with-arrow">
                                                <li><a href="#">Select All</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Archive Selection</a></li>
                                                <li><a href="#">Delete Selection</a></li>
                                                <li><a href="#">Another Action</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-lg-offset-5 col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-1 col-xs-12">
                                        <div class="floating-label-wrap m-t-none">
                                            <input type="text" class="form-control table-filter" data-value="">
                                            <label>Filter</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                        <button class="btn btn-primary btn-block">
                                            Create Invoice
                                        </button>
                                    </div>
                                </div>
                                <div class="row">

                                    <table class="example-datatable table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Status</th>
                                                <th>Nr</th>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-failed">send failed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Tiger Nixon</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="datatable-action-padded">
                                                    $320,800
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Brielle Williamson</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="datatable-action-padded">
                                                    $372,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-viewed">viewed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Garrett Winters</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="datatable-action-padded">
                                                    $170,750
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-approved">approved</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Ashton Cox</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="datatable-action-padded">
                                                    $86,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-payed">payed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Cedric Kelly</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="datatable-action-padded">
                                                    $433,060
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-draft">draft</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Airi Satou</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="datatable-action-padded">
                                                    $162,700
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Herrod Chandler</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td class="datatable-action-padded">
                                                    $137,500
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-failed">send failed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Tiger Nixon</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="datatable-action-padded">
                                                    $320,800
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Brielle Williamson</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="datatable-action-padded">
                                                    $372,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-viewed">viewed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Garrett Winters</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="datatable-action-padded">
                                                    $170,750
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-approved">approved</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Ashton Cox</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="datatable-action-padded">
                                                    $86,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-payed">payed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Cedric Kelly</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="datatable-action-padded">
                                                    $433,060
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-draft">draft</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Airi Satou</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="datatable-action-padded">
                                                    $162,700
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Herrod Chandler</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td class="datatable-action-padded">
                                                    $137,500
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-failed">send failed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Tiger Nixon</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td class="datatable-action-padded">
                                                    $320,800
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Brielle Williamson</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td class="datatable-action-padded">
                                                    $372,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-viewed">viewed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Garrett Winters</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td class="datatable-action-padded">
                                                    $170,750
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-approved">approved</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Ashton Cox</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td class="datatable-action-padded">
                                                    $86,000
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-payed">payed</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Cedric Kelly</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td class="datatable-action-padded">
                                                    $433,060
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-draft">draft</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Airi Satou</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td class="datatable-action-padded">
                                                    $162,700
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox selection-checkbox">
                                                        <input type="checkbox" id="selectionCheckbox">
                                                        <label></label>
                                                    </div>
                                                    <span class="label label-block status-sent">Sent</span>
                                                </td>
                                                <td>1230</td>
                                                <td>Herrod Chandler</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td class="datatable-action-padded">
                                                    $137,500
                                                    <div class="btn-group datatable-action">
                                                        <button data-toggle="dropdown" class="btn btn-default btn-circle btn-xs btn-datatable-action dropdown-toggle"><i class="pe-7s-angle-down"></i></button>
                                                        <ul class="dropdown-menu with-arrow pull-right">
                                                            <li><a href="#">Select All</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Archive Selection</a></li>
                                                            <li><a href="#">Delete Selection</a></li>
                                                            <li><a href="#">Another Action</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php include('partials/footer.php'); ?>

            </div>
    
        </div>

    </div>

    <script src="bower_components/pdfmake/build/pdfmake.min.js"></script>
    <script src="bower_components/pdfmake/build/vfs_fonts.js"></script>

    <script>

        $(function () {
            
            // Initialize Example 1
            $('#example1').dataTable( {
                "ajax": 'api/datatables.json',
                dom: "<'row'<'col-sm-4'<'form-group'<'floating-label-wrap m-t-none'l>>><'col-sm-4 text-center'B>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            });

            // Initialize Example 2
            $('.example-datatable').dataTable({
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                dom: '<"col-lg-12"<"table-responsive"t>>' + '<"col-sm-6 col-xs-12"<"pull-left m-r-md"><"form-group pull-left"<"floating-label-wrap m-t-none"l>>i>' + '<"col-sm-6 col-xs-12"p>',
                // select: {
                //     items: 'rows',
                //     info: false
                // },
                initComplete: function(settings, json) {
                    $('.floating-label-wrap select').addClass('form-control');
                    $('select.form-control').select2();
                },
                language: {
                    oPaginate: {
                        sNext: '<i class="pe-7s-angle-right text-icon-20"></i>',
                        sPrevious: '<i class="pe-7s-angle-left text-icon-20"></i>',
                    },
                    sEmptyTable: "No data available in table",
                    sInfo: " of _TOTAL_ entries",
                    sInfoEmpty: "Showing 0 to 0 of 0 entries",
                    sInfoFiltered: "(filtered from _MAX_ total entries)",
                    sInfoPostFix: "",
                    sDecimal: ".",
                    sThousands: "'",
                    sLengthMenu: "Show _MENU_",
                    sLoadingRecords: "Loading...",
                    sProcessing: "Processing...",
                    sSearch: "Search",
                    sSearchPlaceholder: "",
                    sUrl: "",
                    sZeroRecords: "No matching records found",
                },
                order: [],
                columnDefs: [{
                    targets: 0,
                    orderable: false
                }]
            });

            $('input.table-filter').on('keyup click', function() {
                filterDataTable();
            });

        });

        function filterDataTable() {
            $('.example-datatable').DataTable().search(
                $('.table-filter').val()
            ).draw();
        }

    </script>

</body>
</html>