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
                <div class="col-lg-4">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Basic line chart
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart1" class="ct-perfect-fourth"></div>
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
                            Basic pie chart
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart5" class="ct-perfect-fourth"></div>
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
                            Gauge chart
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart6" class="ct-perfect-fourth"></div>
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
                            Horizontal bar chart
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart4" class="ct-perfect-fourth"></div>
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
                            Stacked bar chart
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart3" class="ct-perfect-fourth"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                <a class="closebox"><i class="fa fa-times"></i></a>
                            </div>
                            Line chart with area
                        </div>
                        <div class="panel-body">
                            <div>
                                <div id="ct-chart7" class="ct-major-twelfth"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('partials/footer.php'); ?>

    </div>
    
    <script src='bower_components/chartist/dist/chartist.min.js'></script>

    <script>

        $(function () {

            // Simple line

            new Chartist.Line('#ct-chart1', {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                series: [
                    [6, 8, 7, 4, 6],
                    [5, 7, 6, 3, 5],
                    [4, 6, 5, 2, 4]
                ]
            }, {
                fullWidth: true,
                chartPadding: {
                    right: 40
                }
            });

            // Simple line

            new Chartist.Line('#ct-chart7', {
                labels: [1, 2, 3, 4, 5, 6, 7, 8],
                series: [[5, 9, 7, 8, 5, 3, 5, 4]
                ]
            }, {
                fullWidth: true,
                low: 0,
                showArea: true
            });


            // Stocked bar chart

            new Chartist.Bar('#ct-chart3', {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                series: [
                    [800000, 1200000, 1400000, 1200000],
                    [200000, 400000, 500000, 300000],
                    [300000, 300000, 400000, 600000]
                ]
            }, {
                stackBars: true,
                axisY: {
                    labelInterpolationFnc: function(value) {
                        return (value / 1000) + 'k';
                    }
                }
            }).on('draw', function(data) {
                        if(data.type === 'bar') {
                            data.element.attr({
                                style: 'stroke-width: 30px'
                            });
                        }
                    });


            // Stocked horizontal bar

            new Chartist.Bar('#ct-chart4', {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                series: [
                    [2, 3, 4, 5, 6, 7, 8],
                    [3, 4, 5, 6, 7, 8, 9]
                ]
            }, {
                seriesBarDistance: 10,
                reverseData: true,
                horizontalBars: true,
                axisY: {
                    offset: 70
                }
            });


            // Simple pie chart

            var data = {
                series: [10, 5, 5]
            };

            var sum = function(a, b) { return a + b };

            new Chartist.Pie('#ct-chart5', data, {
                labelInterpolationFnc: function(value) {
                    return Math.round(value / data.series.reduce(sum) * 100) + '%';
                }
            });

            // Gauge chart

            new Chartist.Pie('#ct-chart6', {
                series: [25, 25, 25, 25]
            }, {
                donut: true,
                donutWidth: 60,
                startAngle: 270,
                total: 200,
                showLabel: false
            });

        });
    </script>

</body>
</html>