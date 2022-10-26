<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $image = get_the_post_thumbnail();

    ?>
    <header class="header-post">
        <a href="<?php the_permalink(); ?>">
            <?php
            if ($image) {
                echo $image;
            } else {
                $id = rand(5, 100);
            ?>
                <img class="w-full object-cover" src="https://picsum.photos/id/<?php echo $id; ?>/200/150" alt="">
            <?php
            }
            ?>
        </a>
    </header>

    <div class="info-post py-4">
        <h2 class="text-title4">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php
        echo wp_trim_words(get_the_excerpt(), 20);
        ?>

        <div class="w-full mt-2 inline-block">
            <a href="<?php the_permalink(); ?>" class="link">
                <?php _e('Continue Reading', 'frontporchsolutions'); ?>
            </a>
        </div>
    </div>
</article>