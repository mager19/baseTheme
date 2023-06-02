<?php

/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package baseTheme
 */

get_header(); ?>

<!-- Hero Header -->
<?php get_template_part('template-parts/hero', 'content'); ?>
<!-- /Hero Header -->

<div class="content__page py-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4">
            <div class="w-full">
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
