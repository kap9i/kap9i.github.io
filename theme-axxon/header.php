<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="zxx" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png">

    <?php wp_head(); ?>

</head>
<body>
<div class="wrap">
    <header class="top_header">
        <div class="header_topline">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="soc_button">
                            <a href="https://vk.com/feed" rel="external"><i class="fa fa-vk"></i></a>
                            <a href="https://www.facebook.com/‎" rel="external"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" rel="external"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/" rel="external"><i class="fa fa-youtube"></i></a>
                            <a href="https://www.instagram.com/" rel="external"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="contacts_head">
                            <p><span><i class="fa fa-phone"></i></span>+380954969977</p>
                            <p><i class="fa fa-envelope-o"></i><a href="mailto:kap9i@mail.ru">kap9i@mail.ru</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_shapka">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://localhost/wp-axxon/" class="logotype">
                            <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="logo">
                        </a>
                        <button class="main_menu_button hidden-lg hidden-md"><i class="fa fa-bars"></i></button>
                        <div class="main_menu">
                            <div class="search-mobile hidden-lg hidden-md">
                                <form role="search" method="get" class="search" action="<?php echo home_url( '/' ) ?>" >
                                    <input type="text" value="<?php echo get_search_query() ?>" placeholder="Найти..." name="s" class="input" />
                                    <input type="submit" class="submit" value="" />
                                </form>
                            </div>
                            <ul>
                                <?php wp_nav_menu(array('theme_location' => 'menu') ); ?>
                            </ul>
                            <a href="#"><i class="fa fa-search search_header"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="opacity hidden-sm hidden-xs"></div>
        <div class="close_search hidden-sm hidden-xs">×</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search_popup hidden-sm hidden-xs">
                        <form action="<?php echo home_url( '/' ) ?>" method="get" class="search_vspl">
                            <input name="s" type="search" value="<?php echo get_search_query() ?>" placeholder="Поиск..." class="input_vspl" />
                            <button type="submit" class="searchsubmit" name="submit" value="Search">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>