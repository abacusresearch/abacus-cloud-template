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
                    <div class="col-lg-5">
                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Animation panel
                            </div>
                            <div class="panel-body">
                                <p>
                                    <strong>Homer</strong> has special small function <code>animate-panel</code> that allowes you to implement staggering animations to any layout elements.
                                    It is designed to work on any html elements in order to achive a effect of building layout on page load.
                                    This function is mainly for main layout elements.
                                </p>

                                <p>
                                    It is easy to use. All you have to do is to add new class <code>.animate-panel</code> to wrapper of elements that should be staggering. For example:

                                </p>
                                <pre>
                                    &lt;div class="animate-panel" data-effect="zoomIn" data-child="element"&gt;

                                        &lt;div class="element"&gt&lt;/div&gt;
                                        &lt;div class="element"&gt;&lt;/div&gt;
                                        &lt;div class="element"&gt;&lt;/div&gt;

                                    &lt;/div&gt; </pre>

                                <p>
                                    In default function get all <code>.row > div</code> elements and applay <strong>zoomIn</strong> effect. You can use any effect avalible with <strong>Animatin.css</strong> library. You can find many example of use in Homer theme but feel free to play with examples below.

                                </p>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-7">

                        <div class="hpanel">
                            <div class="panel-heading">
                                <div class="panel-tools">
                                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                    <a class="closebox"><i class="fa fa-times"></i></a>
                                </div>
                                Live preview
                            </div>
                            <div class="panel-body">
                                <p>Select one of the animation from Animation.css library</p>
                                <select name="animation" class="form-control animation-select">
                                    <optgroup label="Zoom Entrances">
                                        <option selected value="zoomIn">zoomIn</option>
                                    </optgroup>
                                </select>
                                <button class="btn btn-success m-t-sm runAnimation">Play it!</button>
                            </div>
                        </div>

                        <div id="acontainer">
                            <div class="runIt">
                            <div class="row animate-panel-demo setEffect"  data-effect="zoomIn" data-child="hpanel">
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" >
                                    <div class="hpanel">
                                        <div class="panel-heading">
                                            <div class="panel-tools">
                                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                                                <a class="closebox"><i class="fa fa-times"></i></a>
                                            </div>
                                            Box example
                                        </div>
                                        <div class="panel-body">

                                            <div class="h-100"></div>

                                        </div>
                                    </div>
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

        $('.animate-panel-demo').demoStagger();
        $('.runAnimation').click(function(){

            // Store old and new selected effect
            var oldEffect = $('.setEffect').attr('data-effect');
            var newEffect = $(".animation-select").val();

            // Store html to "refresh it" - remove and append
            var panels = $('#acontainer').html();

            // Simple replace all effect
            var panelsNewEffect = panels.replace(new RegExp(oldEffect, 'g'),newEffect )

            // Remove old code with old effect
            $('.runIt').remove();

            // Append new code with new effect
            setTimeout(function(){
                $('#acontainer').append(panelsNewEffect);
            })

        });

    });

    // Animate panel function - this is only fo demo page purpose
    // Main/full function is located in homer.js file

    $.fn['demoStagger'] = function() {

        var element = $(this);
        var effect = $(this).data('effect');
        var delay = $(this).data('delay');
        var child = $(this).data('child');

        // Set default values for attrs
        if(!effect) { effect = 'zoomIn'}
        if(!delay) { delay = 0.06 } else { delay = delay / 10 }
        if(!child) { child = '.row > div'} else {child = "." + child}

        //Set defaul values for start animation and delay
        var startAnimation = 0;
        var start = Math.abs(delay) + startAnimation;

        // Get all visible element and set opacity to 0
        var panel = element.find(child);
        panel.addClass('opacity-0');

        // Get all elements and add effect class
        panel = element.find(child);
        panel.addClass('animated-panel').addClass(effect);

        var panelsCount = panel.length + 10;
        var animateTime = (panelsCount * delay * 10000) / 10;

        // Add delay for each child elements
        panel.each(function (i, elm) {
            start += delay;
            var rounded = Math.round(start * 10) / 10;
            $(elm).css('animation-delay', rounded + 's');
            // Remove opacity 0 after finish
            $(elm).removeClass('opacity-0');
        });

    };

</script>

</body>
</html>