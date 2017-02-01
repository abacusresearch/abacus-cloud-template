<?php 
    $filename = basename(__FILE__, '.php');
    $pageName = ucwords(str_replace("_", " ", $filename));
?>

<!DOCTYPE html>
<html>
    <?php include('partials/head.php'); ?>
<body class="blank">

    <div class="error-container">
        <i class="pe-7s-way text-success big-icon"></i>
        <h1>500</h1>
        <strong>Internal Server Error</strong>
        <p>
            The server encountered something unexpected that didn't allow it to complete the request. We apologize.
        </p>
        <a href="index.php" class="btn btn-xs btn-success">Go back to dashboard</a>
    </div>

    <?php include('partials/footer.php'); ?>

</body>
</html>