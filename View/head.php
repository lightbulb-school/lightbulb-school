<head>
    <?php //define('BASE_URL', 'http://localhost/romeo projects/lightbulb/');?>
    <?php //define("BASE_URL", "http://18.225.33.80/");?>
    <?php define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);?>
    <base href="<?php echo constant('BASE_URL'); ?>">
    <meta charset="UTF-8">
    <title>Lightbulb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="View/css/styles.css" />
    <link type="text/css" rel="stylesheet" href="View/css/search-cont.css" />
    <link type="text/css" rel="stylesheet" href="View/css/home-page.css" />
    <!--  -->
    <link type="text/css" rel="stylesheet" href="View/css/question-options.css" />
    <link type="text/css" rel="stylesheet" href="View/css/rightsidemenu.css" />
    <!--  -->
    <link type="text/css" rel="stylesheet" href="View/css/Shadows-Into-Light-and-display-fonts.css" />
    <link type="text/css" rel="stylesheet" href="View/css/Quicksand-Shadows-Into-Light-and-display-fonts.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="View/css/side-menu-radio-btns.css" />
    <?php //echo"testing link 123"; ?>
    <!-- <script src="View/css/css_path_test.js" type="text/javascript"></script> -->
</head>