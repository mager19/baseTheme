<!-- Hero Header-->
<div class="header__inside interpage bg-gray-100 h-48 flex items-center">
    <div class="container mx-auto">
        <div class="hero flex flex-wrap justify-center">
            <!--Breadcrumbs-->
            <div class="w-full p-0 flex justify-center">
                <?php get_template_part('template-parts/content', 'breadcrumbs'); ?>
            </div>
            <!--/Breadcrumbs-->
            <?php
            if (is_home()) {
                echo '<h1 class="text-title3 md:text-title2">Blog</h1>';
                the_field('description_blog', 'option');
            } else {
                if (!is_front_page()) {
                    the_title('<h1 class="text-title3 md:text-title2">', '</h1>');
                    while (have_posts()) : the_post();
                        if (has_excerpt()) {
                            the_excerpt();
                        }
                    endwhile;
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- End Hero Header -->