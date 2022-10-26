<?php

/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package baseTheme
 */

get_header(); ?>

<div class="single__post py-8">
    <div class="container mx-auto">
        <div class="flex px-4">
            <div class="w-full">
                <?php while (have_posts()) : the_post(); ?>
                    <!--Breadcrumbs-->
                    <div class="w-full p-0">
                        <?php get_template_part('template-parts/content', 'breadcrumbs'); ?>
                    </div>
                    <!--/Breadcrumbs-->
                    <?php the_title('<h1 class="text-title3 md:text-title2">', '</h1>'); ?>
                    <?php the_post_thumbnail(); ?>
                    <?php
                    the_content();
                    echo baseTheme__socialShare();
                    ?>

                    <div class="entry-author mt-8">
                        <div class="img-author">
                            <?php
                            $author_id = get_the_author_meta('ID');
                            if (get_field('author_image', 'user_' . $author_id)) {
                                $url = get_field('author_image', 'user_' . $author_id);
                            }
                            ?>
                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                <img src="<?php echo $url; ?>" alt="author">
                            </a>
                        </div>

                        <div class="info-author">
                            <h2>
                                <span>ABOUT AUTHOR</span>
                                <?php the_author_meta('first_name'); ?>
                                <?php the_author_meta('last_name'); ?>
                            </h2>
                            <p><?php the_author_meta('description'); ?></p>
                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                Read more
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div><!-- .entry-content -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<div class="last-post py-14">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <h2 class="px-4">You might also like</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
                <?php
                $loop = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($post->ID)
                    )
                );
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <!-- Item Post -->
                    <?php echo get_template_part('template-parts/items/item', 'post'); ?>
                    <!-- Item Post -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
