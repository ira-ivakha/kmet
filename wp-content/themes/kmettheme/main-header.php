<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;" charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
          href="<?php bloginfo('rss2_url'); ?>"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/styles.css" type="text/css" />

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <nav>
        <ul class="top-nav left">
            <li><a href="#" class="top-menu">головна</a></li>
            <li><a href="#founders" class="top-menu">про нас</a></li>
            <li><a href="#practices" class="top-menu">практики</a></li>
        </ul>
        <a href="<?php bloginfo('url'); ?>" class="logo header"></a>
        <ul class="top-nav right">
            <li><a href="#news" class="top-menu">публікації</a></li>
            <li><a href="#doings" class="top-menu">події</a></li>
            <li><a href="#" class="top-menu">зв’язок</a></li>
        </ul>
    </nav>

    <img class="top-background" src="<?php echo get_template_directory_uri();?>/images/background.jpg" alt="" />
    <img class="top-background-small" src="<?php echo get_template_directory_uri();?>/images/background-small.jpg" alt="" />
    <h1 class="slogan"><?php echo get_field('slogan_original'); ?>
        <span class="slogan-ukr"><?php echo get_field('slogan_ukr'); ?></span>
    </h1>
    <a href="mailto:<?php echo get_field('email', 'options'); ?>" class="mail_us">ЗВ’ЯЗАТИСЯ З НАМИ</a>
    <a href="#" class="consultation">он-лайн консультація</a>
    <span class="about-us"><?php echo get_field('short-info'); ?></span>

</header>