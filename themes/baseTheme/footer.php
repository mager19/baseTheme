<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package baseTheme
 */
?>

            </div>
            <!--/ Content Page -->

            <?php
            if (!is_404()) {
                if (!is_home()) {
                    get_template_part('template-parts/cta', 'footer');
                }
            }
            ?>

            <!-- Footer -->
            <footer class="site-footer bg-gray-100">
                <div class="container mx-auto py-14">
                    <div class="site__footer__content flex flex-wrap px-4 justify-center lg:justify-start">
                        
                        <div class="site__footer__logo w-full md:w-3/12 text-center lg:text-left mb-4">

                            <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                                <?php if ($GETlogo) { 
                                    fps_get_Image($GETlogo);
                                } else {
                                    echo "<h3 class='mb-0'>Logo Brand</h3>";
                                } ?>
                            </a>

                        </div>

                        <div class="site-footer__top w-full md:w-9/12">

                            <!-- Footer Menu -->
                            <div class="footer-menu">
                                <?php if (has_nav_menu('menu-2')) {
                                    wp_nav_menu(array('theme_location' => 'menu-2'));
                                } ?>
                            </div>
                            <!--/Footer Menu-->

                        </div>

                        <div class="site-footer__bottom">

                            <!-- copyright -->
                            <div class="copyright text-center">
                                <?php the_field('fps_copyright', 'option'); ?>
                            </div>
                            <!--/ copyright -->

                        </div>
                    </div>
                </div>
            </footer>
            <!--/ Footer -->
        </div>
    <?php wp_footer(); ?>
</body>

</html>