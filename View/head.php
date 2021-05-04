<head>
    <?php define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);?>
    <base href="<?php echo constant('BASE_URL'); ?>">
    <?php $css_path=(!empty($page_name))? 'View/css' :'../View/css';?>
    <meta charset=" UTF-8">
    <title>Lightbulb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/styles.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/search-cont.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/home-page.css" />
    <!--  -->
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/question-options.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/rightsidemenu.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/test.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/home-chat-design-interface.css" />
    <!--  -->
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/Shadows-Into-Light-and-display-fonts.css" />
    <link type="text/css" rel="stylesheet"
        href="<?php echo$css_path ?>/Quicksand-Shadows-Into-Light-and-display-fonts.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo$css_path ?>/side-menu-radio-btns.css" />
</head>