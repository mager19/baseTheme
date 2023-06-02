<?php

/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package baseTheme
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

    <?php get_template_part('inc/functions/datalayer', 'info'); ?>

    <!--/Google Tag Manager-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php the_field('baseTheme_favicon', 'option'); ?>">

    <!--/Favicon-->
    <meta name="msapplication-TileColor" content="#d65a45">
    <meta name="theme-color" content="#d65a45">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">

        <!-- Header -->
        <header id="masthead" class="site-header bg-gray-300 px-4">
            <div class="container mx-auto">
                <div class="flex items-center py-4 pxsera-4">
                    <div class="sitelogo w-9/12 lg:w-4/12 ">
                        <?php
                        $GETlogo = get_field('baseTheme_logo_site', 'option'); ?>
                        <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                            <?php if ($GETlogo) {
                                baseTheme_get_Image($GETlogo);
                            } else {
                                echo "<h3 class='mb-0'>Logo Brand</h3>";
                            } ?>
                        </a>
                    </div>

                    <!--Menu-->
                    <?php
                    if (has_nav_menu('menu-1')) { ?>
                        <div class="site__nav site__nav--main w-full hidden lg:flex lg:justify-end">
                            <?php
                                wp_nav_menu(array('theme_location' => 'menu-1'));
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <!--/Menu-->

                    <!-- Button trigger mobile -->
                    <button type="button" class="mobile-nav border-none lg:hidden w-3/12 flex justify-end" id="menumobile">
                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 18.3333C22 19.2538 21.2538 20 20.3333 20H12.6667C11.7462 20 11 19.2538 11 18.3333V18.3333C11 17.4129 11.7462 16.6667 12.6667 16.6667H20.3333C21.2538 16.6667 22 17.4129 22 18.3333V18.3333ZM22 10C22 10.9205 21.2538 11.6667 20.3333 11.6667H1.66667C0.746192 11.6667 0 10.9205 0 10V10C0 9.07952 0.746192 8.33333 1.66667 8.33333H20.3333C21.2538 8.33333 22 9.07952 22 10V10ZM22 1.66667C22 2.58714 21.2538 3.33333 20.3333 3.33333H1.66667C0.746193 3.33333 0 2.58714 0 1.66667V1.66667C0 0.746192 0.746192 0 1.66667 0H20.3333C21.2538 0 22 0.746192 22 1.66667V1.66667Z" fill="#031B4C" />
                        </svg>

                    </button>

                    <!-- Button trigger mobile -->
                </div>
            </div>
        </header>
        <!--/ Header -->


        <!-- Content Page -->
        <div id="content" class="site-content">