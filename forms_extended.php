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
                                Bootstrap datepicker
                            </div>
                            <div class="panel-body">

                                <p>
                                    Bootstrap-datepicker provides a flexible datepicker widget in the Twitter bootstrap style.
                                    http://bootstrap-datepicker.readthedocs.org/en/latest/index.html
                                </p>

                                <div class="row">

                                    <div class="col-lg-3">
                                        <strong>
                                            Inline version
                                        </strong>

                                        <div id="datepicker" data-date="12/03/2012"></div>
                                        <input type="hidden" id="my_hidden_input"/>
                                    </div>
                                    <div class="col-lg-9">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <h5>
                                                    Input
                                                </h5>

                                                <p>
                                                    The simplest case: focusing the input (clicking or tabbing into it) will show the picker.
                                                </p>
                                                <div class="form-group">
                                                    <div class="floating-label-wrap">
                                                        <input id="datapicker2" type="text"  data-value="" class="form-control">

                                                        <label>Date Label</label>

                                                    </div>
                                                </div>
                                                <h5>Component</h5>

                                                <p>
                                                    Adding the date class to an input-group bootstrap component will allow the input-group-addon elements to trigger the picker.
                                                </p>
                                                <div class="form-group">
                                                    <div class="floating-label-wrap date">
                                                        <input id="datepicker-icon" type="text" class="form-control"  data-value="">
                                                        <label>Date Label</label>
                                                        <span class="input-group-addon"><i class="pe-7s-date"></i></span>
                                                    </div>
                                                    <div class="floating-label-wrap">
                                                        <input type="text" class="form-control"  data-value="">
                                                        <label>Some input</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <h5>
                                                    Range
                                                </h5>

                                                <p>
                                                    Using the input-daterange construct with multiple child inputs will instantiate one picker per input and link them together to allow selecting ranges.
                                                </p>

                                                <div class="input-daterange input-group" id="datepicker">
                                                    <input type="text" class="input-sm form-control" name="start"/>
                                                    <span class="input-group-addon">to</span>
                                                    <input type="text" class="input-sm form-control" name="end"/>
                                                </div>

                                                <h5>Options</h5>

                                                <p>
                                                    There are many avalible options to datapicker, check: <a href="https://bootstrap-datepicker.readthedocs.org/en/latest/options.html" target="_blank">https://bootstrap-datepicker.readthedocs.org/en/latest/options.html</a>
                                                </p>
                                            </div> -->

                                        </div>


                                    </div>

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
                                Awesome bootstrap checkbox
                            </div>
                            <div class="panel-body">

                                <p>
                                    Font Awesome Bootstrap Checkboxes & Radios. Pure css way to make inputs look prettier.
                                    https://github.com/flatlogic/awesome-bootstrap-checkbox
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <fieldset>
                                            <legend>
                                                Basic
                                            </legend>
                                            <p>
                                                Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code> etc.
                                            </p>
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">
                                                    Default
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox2" type="checkbox" checked="">
                                                <label for="checkbox2">
                                                    Primary
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox">
                                                <label for="checkbox3">
                                                    Success
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox4" type="checkbox">
                                                <label for="checkbox4">
                                                    Info
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-warning">
                                                <input id="checkbox5" type="checkbox" checked="">
                                                <label for="checkbox5">
                                                    Warning
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-danger">
                                                <input id="checkbox6" type="checkbox" checked="">
                                                <label for="checkbox6">
                                                    Check me out
                                                </label>
                                            </div>
                                            <p>Checkboxes without label text</p>
                                            <div class="checkbox">
                                                <input type="checkbox" id="singleCheckbox1" value="option1" aria-label="Single checkbox One">
                                                <label></label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input type="checkbox" id="singleCheckbox2" value="option2" checked="" aria-label="Single checkbox Two">
                                                <label></label>
                                            </div>
                                            <p>Inline checkboxes</p>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label for="inlineCheckbox1"> Inline One </label>
                                            </div>
                                            <div class="checkbox checkbox-success checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                                <label for="inlineCheckbox2"> Inline Two </label>
                                            </div>
                                            <div class="checkbox checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                <label for="inlineCheckbox3"> Inline Three </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset>
                                            <legend>
                                                Circled
                                            </legend>
                                            <p>
                                                <code>.checkbox-circle</code> for roundness.
                                            </p>
                                            <div class="checkbox checkbox-circle">
                                                <input id="checkbox7" type="checkbox">
                                                <label for="checkbox7">
                                                    Simply Rounded
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox8" type="checkbox" checked="">
                                                <label for="checkbox8">
                                                    Me too
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset>
                                            <legend>
                                                Radio
                                            </legend>
                                            <p>
                                                Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code> etc.
                                            </p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="radio radio-primary">
                                                        <input type="radio" name="radio1" id="radio1" value="option1" checked="">
                                                        <label for="radio1">
                                                            Small
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-primary">
                                                        <input type="radio" name="radio1" id="radio2" value="option2">
                                                        <label for="radio2">
                                                            Big
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="radio radio-danger">
                                                        <input type="radio" name="radio2" id="radio3" value="option1">
                                                        <label for="radio3">
                                                            Next
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-danger">
                                                        <input type="radio" name="radio2" id="radio4" value="option2" checked="">
                                                        <label for="radio4">
                                                            One
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Radios without label text</p>
                                            <div class="radio">
                                                <input type="radio" id="singleRadio1" value="option1" name="radioSingle1" aria-label="Single radio One">
                                                <label></label>
                                            </div>
                                            <div class="radio radio-success">
                                                <input type="radio" id="singleRadio2" value="option2" name="radioSingle1" checked="" aria-label="Single radio Two">
                                                <label></label>
                                            </div>
                                            <p>Inline radios</p>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio1"> Inline One </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                <label for="inlineRadio2"> Inline Two </label>
                                            </div>
                                        </fieldset>
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

        $(function(){

            $('.date .input-group-addon').click(function() {
                $('#datepicker-icon').focus();
            });

            $('#datepicker').datepicker();
            $("#datepicker").on("changeDate", function(event) {
                $("#my_hidden_input").val(
                    $("#datepicker").datepicker('getFormattedDate')
                )
            });
            $('#datepicker-icon').datepicker();

            $('#datapicker2').datepicker();
            $('#datepicker .input-group.date').datepicker();
            $('#datepicker .input-daterange').datepicker();

            // DateTimePicker
            $('#datetimepicker1').datetimepicker();

        });

    </script>

</body>
</html>