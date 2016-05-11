<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="author" content="">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print IMAGES; ?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print IMAGES; ?>/ico/apple-touch-icon-114-precomposed.png">
  	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print IMAGES; ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php print IMAGES; ?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../ico/favicon.png">

    <?php wp_head(); ?>
</head>
<body>

  <!-- HEADER -->

  <header id="top">

    <div class="main-header">

    <div class="menu-container">

      <div class="container">

        <div class="ribbon">



            <nav class="menu-navigation">

            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="<?php print IMAGES; ?>/logo.png" alt="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" /></a>
              <?php wp_nav_menu(array(
                'theme_location' => 'main-menu'
                )); ?>

            </nav> <!-- End top-menu-navigation -->



        </div> <!-- End Ribbon -->

      </div> <!-- End container -->

    </div> <!-- End top-menu-container -->

  </div> <!-- End Main-Header -->

  </header> <!-- End main-header -->