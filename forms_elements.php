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
                            <div class="panel-body">
                                <h3>Forms</h3>
                                <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
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
                                Basic elements
                            </div>
                            <div class="panel-body">
                            <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control" data-value="">
                                        <label>Placeholder</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <div class="floating-label-wrap">
                                        <input type="text" disabled="" class="form-control" data-value="">
                                        <label>Disabled input here...</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-lg-10">
                                    <div class="floating-label-wrap">
                                        <p class="form-control form-control-static">email@example.com</p>
                                        <label>Static Control</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="floating-label-wrap">
                                        <textarea type="text" class="form-control" data-value=""></textarea>
                                        <label>Textarea Example</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="floating-label-wrap">
                                                <input type="text" class="form-control" data-value="">
                                                <label>.col-md-3</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="floating-label-wrap">
                                                <input type="text" class="form-control" data-value="">
                                                <label>.col-md-4</label>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="floating-label-wrap">
                                                <input type="text" class="form-control" data-value="">
                                                <label>.col-md-5</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-lg-12">
                                    <div class="floating-label-wrap">
                                        <input type="text" class="form-control" data-value="">
                                        <label>With dropdowns</label>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
                                            <ul class="dropdown-menu with-arrow pull-right">
                                                <li><a href="">Action</a></li>
                                                <li><a href="">Another action</a></li>
                                                <li><a href="">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                            <div class="hr-line-dashed"></div>

                            <div class="form-group text-right">
                                <div class="col-sm-12">
                                    <button class="btn btn-default" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>

                            </form>
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
                                Select2
                            </div>
                            <div class="panel-body">

                                <p>
                                    <strong>Select2</strong> Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.
                                </p>

                                <h5>Bootstrap theme with Select 2 - basic example</h5>
                                <div class="form-group">
                                    <div class="floating-label-wrap">
                                        <select class="form-control" style="width: 100%" data-value="">
                                            <option value=""></option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                        
                                        <label>Select Floating Label</label>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Form example
                            </div>
                            <div class="panel-body">
                                <form method="get" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="floating-label-wrap">
                                                <input type="text" class="form-control" data-value="">
                                                <label>Normal</label>
                                            </div>
                                            <div class="floating-label-wrap">
                                                <input type="text" class="form-control" data-value="">
                                                <label>Help text</label>
                                                <span class="help-block m-b-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                            </div>
                                            <div class="floating-label-wrap">
                                                <input type="password" class="form-control" name="password" data-value="">
                                                <label>Password</label>
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
        $("select.form-control").select2();
    </script>

</body>
</html>