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

            <?php include('partials/footer.php'); ?>

        </div>
    
    </div>

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