<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $main_top_page = get_field('cover_image'); ?>
	<div class="tagline-con">
    <title>
        <?php echo $main_top_page['first_name']; ?>
        <?php echo $main_top_page['last_name']; ?> | PORTFOLIO
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
        function add_theme_scripts() {
		  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.6', 'all');

          wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.5, true);

            if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
              wp_enqueue_script( 'comment-reply' );
            }
        }
        add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <div class="resbars">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="outer-nav">
	<div class="nav-con">
            <ul>
                <li><a href="/">HOME</a></li>
        		<li><a href="#work">WORK</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
       <?php $social_links = get_field('social_links'); ?>
        <div class="social-con">
            <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="<?php echo $social_links['instagram']; ?>" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="<?php echo $social_links['skype']; ?>" target="_blank">
            <i class="fab fa-linkedin"></i>
            </a>
        </div>
    </div>
</header>
