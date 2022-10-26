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


<div class="flex items-center justify-center">

    <?php fps_get_social_icons(); ?>

</div>

<div>
    <div class="container">
        <h1 class="mvm mtn fgc1">List social icons </h1>
    <div class="grid grid-cols-12 gap-4">
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-rss_icon"></span>
                <span class="mls"> icon-rss_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e902" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe902;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-rss_icon-2"></span>
                <span class="mls"> icon-rss_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e903" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe903;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-rss_icon-1"></span>
                <span class="mls"> icon-rss_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e911" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe911;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-rss_icon-3"></span>
                <span class="mls"> icon-rss_icon-3</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e912" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe912;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-1"></span>
                <span class="mls"> icon-youtube_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e900" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe900;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-2"></span>
                <span class="mls"> icon-youtube_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e901" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe901;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-4"></span>
                <span class="mls"> icon-youtube_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e904" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe904;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-5"></span>
                <span class="mls"> icon-youtube_icon-5</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e905" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe905;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon"></span>
                <span class="mls"> icon-youtube_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e906" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe906;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-6"></span>
                <span class="mls"> icon-youtube_icon-6</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e907" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe907;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-7"></span>
                <span class="mls"> icon-youtube_icon-7</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e908" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe908;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-8"></span>
                <span class="mls"> icon-youtube_icon-8</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e909" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe909;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-9"></span>
                <span class="mls"> icon-youtube_icon-9</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90a" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90a;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-youtube_icon-10"></span>
                <span class="mls"> icon-youtube_icon-10</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90b" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90b;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-yelp_icon-1"></span>
                <span class="mls"> icon-yelp_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90c" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90c;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-yelp_icon-2"></span>
                <span class="mls"> icon-yelp_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90d" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90d;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-yelp_icon"></span>
                <span class="mls"> icon-yelp_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90e" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90e;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-2"></span>
                <span class="mls"> icon-twitter_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e90f" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe90f;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-3"></span>
                <span class="mls"> icon-twitter_icon-3</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e910" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe910;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon"></span>
                <span class="mls"> icon-twitter_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e913" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe913;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-1"></span>
                <span class="mls"> icon-twitter_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e914" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe914;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-4"></span>
                <span class="mls"> icon-twitter_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e915" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe915;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-5"></span>
                <span class="mls"> icon-twitter_icon-5</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e916" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe916;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-twitter_icon-6"></span>
                <span class="mls"> icon-twitter_icon-6</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e917" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe917;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-4"></span>
                <span class="mls"> icon-linkedin_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e919" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe919;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-12"></span>
                <span class="mls"> icon-linkedin_icon-12</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e91b" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe91b;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-2"></span>
                <span class="mls"> icon-linkedin_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e91f" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe91f;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-7"></span>
                <span class="mls"> icon-linkedin_icon-7</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e923" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe923;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-8"></span>
                <span class="mls"> icon-linkedin_icon-8</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e924" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe924;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-9"></span>
                <span class="mls"> icon-linkedin_icon-9</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e925" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe925;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-10"></span>
                <span class="mls"> icon-linkedin_icon-10</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e926" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe926;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-11"></span>
                <span class="mls"> icon-linkedin_icon-11</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e927" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe927;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-linkedin_icon-13"></span>
                <span class="mls"> icon-linkedin_icon-13</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e928" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe928;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-2"></span>
                <span class="mls"> icon-instagram_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e929" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe929;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-3"></span>
                <span class="mls"> icon-instagram_icon-3</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e92a" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe92a;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-4"></span>
                <span class="mls"> icon-instagram_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e92b" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe92b;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-6"></span>
                <span class="mls"> icon-instagram_icon-6</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e930" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe930;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-7"></span>
                <span class="mls"> icon-instagram_icon-7</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e931" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe931;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-8"></span>
                <span class="mls"> icon-instagram_icon-8</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e932" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe932;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-9"></span>
                <span class="mls"> icon-instagram_icon-9</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e933" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe933;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon"></span>
                <span class="mls"> icon-instagram_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e934" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe934;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-1"></span>
                <span class="mls"> icon-instagram_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e935" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe935;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-10"></span>
                <span class="mls"> icon-instagram_icon-10</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e936" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe936;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-instagram_icon-11"></span>
                <span class="mls"> icon-instagram_icon-11</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e937" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe937;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-1"></span>
                <span class="mls"> icon-google-plus_icon-1</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e938" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe938;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-4"></span>
                <span class="mls"> icon-google-plus_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e939" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe939;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-5"></span>
                <span class="mls"> icon-google-plus_icon-5</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e93a" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe93a;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-6"></span>
                <span class="mls"> icon-google-plus_icon-6</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e93b" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe93b;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon"></span>
                <span class="mls"> icon-google-plus_icon</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e93d" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe93d;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-2"></span>
                <span class="mls"> icon-google-plus_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e93e" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe93e;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-3"></span>
                <span class="mls"> icon-google-plus_icon-3</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e93f" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe93f;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-google-plus_icon-8"></span>
                <span class="mls"> icon-google-plus_icon-8</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e940" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe940;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-2"></span>
                <span class="mls"> icon-facebook_icon-2</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e941" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe941;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-3"></span>
                <span class="mls"> icon-facebook_icon-3</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e942" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe942;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-4"></span>
                <span class="mls"> icon-facebook_icon-4</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e943" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe943;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-5"></span>
                <span class="mls"> icon-facebook_icon-5</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e944" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe944;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-7"></span>
                <span class="mls"> icon-facebook_icon-7</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e947" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe947;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-8"></span>
                <span class="mls"> icon-facebook_icon-8</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e948" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe948;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-9"></span>
                <span class="mls"> icon-facebook_icon-9</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e949" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe949;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-10"></span>
                <span class="mls"> icon-facebook_icon-10</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e94a" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe94a;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
        <div class="glyph fs1">
            <div class="clearfix bshadow0 pbs">
                <span class="icon-facebook_icon-11"></span>
                <span class="mls"> icon-facebook_icon-11</span>
            </div>
            <fieldset class="fs0 size1of1 clearfix hidden-false">
                <input type="text" readonly value="e94b" class="unit size1of2" />
                <input type="text" maxlength="1" readonly value="&#xe94b;" class="unitRight size1of2 talign-right" />
            </fieldset>
             
        </div>
    </div>
    </div>
</div>
    
    
    <?php
get_footer();
