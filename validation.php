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
                    <div class="col-lg-6">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Displaying Errors within Field Labels
                            </div>
                            <div class="panel-body">
                                <p>

                                    With errorPlacement() function you can easily change placement for error. With message properties you can set your own text for error message.

                                </p>

                                <form role="form" id="form_2">
                                    <div class="form-group">
                                        <div class="floating-label-wrap">
                                            <input type="text" id="name" name="name" class="form-control" required  data-value="">
                                            <label for="name">First name</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="floating-label-wrap">
                                            <input type="text" id="last_name" class="form-control" name="last_name"  data-value="">
                                            <label for="last_name">Last name</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="floating-label-wrap">
                                            <input type="text" id="url" class="form-control" name="url"  data-value="">
                                            <label for="url">Official website</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="floating-label-wrap">
                                            <input type="text" id="number" class="form-control" name="number"  data-value="">
                                            <label for="number">Phone number</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="floating-label-wrap">
                                            <input type="text" id="username" class="form-control" name="username"  data-value="">
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
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
                                jQuery Validation Plugin
                            </div>
                            <div class="panel-body no-padding">

                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>remote</td>
                                        <td>Requests a resource to check the element for validity.</td>
                                    </tr>
                                    <tr>
                                        <td>minlength</td>
                                        <td>Makes the element require a given minimum length.</td>
                                    </tr>
                                    <tr>
                                        <td>   maxlength</td>
                                        <td>Makes the element require a given maxmimum length.</td>
                                    </tr>
                                    <tr>
                                        <td> rangelength</td>
                                        <td> Makes the element require a given value range.</td>
                                    </tr>
                                    <tr>
                                        <td>  min</td>
                                        <td>  Makes the element require a given minimum.</td>
                                    </tr>
                                    <tr>
                                        <td>   max</td>
                                        <td> Makes the element require a given maximum.</td>
                                    </tr>
                                    <tr>
                                        <td> range</td>
                                        <td> Makes the element require a given value range.</td>
                                    </tr>
                                    <tr>
                                        <td> email</td>
                                        <td> Makes the element require a valid email</td>
                                    </tr>
                                    <tr>
                                        <td>  url</td>
                                        <td>  Makes the element require a valid url</td>
                                    </tr>
                                    <tr>
                                        <td>   date</td>
                                        <td> Makes the element require a date.</td>
                                    </tr>
                                    <tr>
                                        <td> dateISO</td>
                                        <td> Makes the element require an ISO date.</td>
                                    </tr>
                                    <tr>
                                        <td> number</td>
                                        <td> Makes the element require a decimal number.</td>
                                    </tr>
                                    <tr>
                                        <td> digits</td>
                                        <td>  Makes the element require digits only.</td>
                                    </tr>
                                    <tr>
                                        <td> creditcard</td>
                                        <td> Makes the element require a credit card number.</td>
                                    </tr>
                                    <tr>
                                        <td> equalTo</td>
                                        <td> Requires the element to be the same as another one</td>
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

<script>

    $(function(){

        $("#form").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 3
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                max: {
                    required: true,
                    maxlength: 4
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

        $("#form_2").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                username: {
                    required: true,
                    minlength: 5
                },
                url: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                last_name: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                number: {
                    required: "(Please enter your phone number)",
                    number: "(Please enter valid phone number)"
                },
                last_name: {
                    required: "This is custom message for required",
                    minlength: "This is custom message for min length"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });


    });
</script>

</body>
</html>