<?php
  $dev = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'abacus-cloud-template.dev') ? true : false;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Abacus Cloud Theme | Components Repository</title>

    <link rel="stylesheet" href="assets/css/application<?php echo ($dev ? '' : '.min')  ?>.css">
</head>