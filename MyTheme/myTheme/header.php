<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Заголовок</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/tomato.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap-social.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea_basic/styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/hover-master/css/hover.css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css" />

    <?php wp_head(); ?>

</head>
<body>
<header class="main_head main_color_bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="logo_container">
                   <?php dynamic_sidebar('logo'); ?>
                </div>
                <button class="toggle_menu">
							<span class='sandwich'>
								<span class='sw-topper'></span>
								<span class='sw-bottom'></span>
								<span class='sw-footer'></span>
							</span>
                </button>
            </div>
            <div class="top_mnu">
                <ul>
                    <li><a href="#about" class="hvr-shutter-out-horizontal">Обо мне</a></li>
                    <li><a href="#resume" class="hvr-shutter-out-horizontal">Резюме</a></li>
                    <li><a href="#portfolio" class="hvr-shutter-out-horizontal">Портфолио</a></li>
                    <li><a href="#contact" class="hvr-shutter-out-horizontal">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="top_wrapper">
        <div class="top_centered">
            <div class="col-md-2"></div>
            <div class="col-xs-12 col-md-8 text">
                <h1 class="name"><?php echo $blog_title = get_bloginfo('name'); ?></h1>
                <p class="descrip"><?php echo $blog_title = get_bloginfo('description'); ?></p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</header>