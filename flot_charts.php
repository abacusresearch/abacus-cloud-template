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
                    <div class="col-lg-8">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Line type chart with tension
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-line-chart"></div>
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
                                Bar type chart
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-bar-chart"></div>
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
                                Pie type chart
                            </div>
                            <div class="panel-body">
                                <div class="flot-pie-chart" >
                                    <div class="flot-chart-pie-content" id="flot-pie-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Area type chart
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart">
                                    <div class="flot-chart-content" id="flot-area-chart"></div>
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
                                Line with points
                            </div>
                            <div class="panel-body">
                                <div class="flot-chart" >
                                    <div class="flot-chart-content" id="flot-sin-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .flot-chart-pie-content {
                        width: 200px;
                        height: 200px;
                        margin: auto;
                    }
                    .flot-pie-chart {
                        display: block;
                        padding-top: 50px;
                        height: 300px;
                    }
                </style>

            </div>

            <?php include('partials/footer.php'); ?>

        </div>
    </div>
    
    <script src='bower_components/jquery-flot/jquery.flot.js'></script>
    <script src='bower_components/jquery-flot/jquery.flot.resize.js'></script>
    <script src='bower_components/jquery-flot/jquery.flot.pie.js'></script>
    <script src='bower_components/flot.curvedlines/curvedLines.js'></script>
    <script src='bower_components/jquery.flot.spline/index.js'></script>
    
    <script>

        $(function () {

            /**
             * Flot charts data and options
             */

            var data1 = [ [0, 26], [1, 24], [2, 29], [3, 26], [4, 33], [5, 26], [6, 36], [7, 28] ];

            var chartUsersOptions = {
                series: {
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.5
                    },
                },
                grid: {
                    tickColor: "#e4e5e7",
                    borderWidth: 1,
                    borderColor: '#e4e5e7',
                    color: '#6a6c6f'
                },
                colors: [ "#62cb31", "#efefef"],
            };

            $.plot($("#flot-line-chart"), [data1], chartUsersOptions);

            /**
             * Flot charts data and options
             */

            var data2 = [
                {
                    label: "bar",
                    data: [ [1, 12], [2, 14], [3, 18], [4, 24], [5, 32], [6, 22] ]
                }
            ];

            var chartUsersOptions2 = {
                series: {
                    bars: {
                        show: true,
                        barWidth: 0.8,
                        fill: true,
                        fillColor: {
                            colors: [ { opacity: 0.6 }, { opacity: 0.6 } ]
                        },
                        lineWidth: 1
                    }
                },
                xaxis: {
                    tickDecimals: 0
                },
                colors: ["#62cb31"],
                grid: {
                    color: "#e4e5e7",
                    hoverable: true,
                    clickable: true,
                    tickColor: "#D4D4D4",
                    borderWidth: 0,
                    borderColor: 'e4e5e7',
                },
                legend: {
                    show: false
                },
                tooltip: true,
                tooltipOpts: {
                    content: "x: %x, y: %y"
                }
            };

            $.plot($("#flot-bar-chart"), data2, chartUsersOptions2);

            var data3 = [
                { label: "Data 1", data: 16, color: "#84c465", },
                { label: "Data 2", data: 6, color: "#8dd76a", },
                { label: "Data 3", data: 22, color: "#a2c98f", },
                { label: "Data 4", data: 32, color: "#c7eeb4", }
            ];

            var chartUsersOptions3 = {
                series: {
                    pie: {
                        show: true
                    }
                },
                grid: {
                    hoverable: true
                },
                tooltip: true,
                tooltipOpts: {
                    content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                    shifts: {
                        x: 20,
                        y: 0
                    },
                    defaultTheme: false
                }
            };

            $.plot($("#flot-pie-chart"), data3, chartUsersOptions3);

            var data4 = [
                {
                    label: "line",
                    data: [ [1, 24], [2, 15], [3, 29], [4, 34], [5, 30], [6, 40], [7, 23], [8, 27], [9, 40] ]
                }
            ];

            var chartUsersOptions4 = {
                series: {
                    lines: {
                        show: true,
                        lineWidth: 1,
                        fill: true,
                        fillColor: {
                            colors: [ { opacity: 0.5 }, { opacity: 0.5 }
                            ]
                        }
                    }
                },
                xaxis: {
                    tickDecimals: 0
                },
                colors: ["#62cb31"],
                grid: {
                    tickColor: "#e4e5e7",
                    borderWidth: 1,
                    borderColor: '#e4e5e7',
                    color: '#6a6c6f'
                },
                legend: {
                    show: false
                },
                tooltip: true,
                tooltipOpts: {
                    content: "x: %x, y: %y"
                }
            };

            $.plot($("#flot-area-chart"), data4, chartUsersOptions4);


            var sin = [],
                    cos = [];
            for (var i = 0; i < 14; i += 0.5) {
                sin.push([i, Math.sin(i)]);
                cos.push([i, Math.cos(i)]);
            }

            var data5 = [
                { data: sin, label: "sin(x)"},
                { data: cos, label: "cos(x)"}
            ];

            var chartUsersOptions5 = {
                        series: {
                            lines: {
                                show: true
                            },
                            points: {
                                show: true
                            }
                        },
                        grid: {
                            tickColor: "#e4e5e7",
                            borderWidth: 1,
                            borderColor: '#e4e5e7',
                            color: '#6a6c6f'
                        },
                        yaxis: {
                            min: -1.2,
                            max: 1.2
                        },
                        colors: [ "#62cb31", "#efefef"],
                    }
                    ;

            $.plot($("#flot-sin-chart"), data5, chartUsersOptions5);
        });

    </script>

</body>
</html>