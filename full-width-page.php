<?php
/*
* Template Name: Full Width Page
* Template Post Type: post, page
*/

get_header();

?>

<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span>
            <?php
            // check to make sure this subtitle plugin is active
            if (has_action('plugins/wp_subtitle/the_subtitle')) {
                do_action('plugins/wp_subtitle/the_subtitle', array(
                    'before'        => '<p class="subtitle">',
                    'after'         => '</p>',
                    'post_id'       => get_the_ID(),
                    'default_value' => ''
                ));
            }
            ?>
        </span>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ======================================= -->
            <?php

            while (have_posts()) {
                the_post();

                ?>

                <div class="single-post nobottommargin">

                    <!-- Single Post
                    ========================================= -->
                    <div class="entry clearfix">



                        <!-- Entry Image
                        ============================================= -->
                        <div class="entry-image">
                            <?php
                            if (has_post_thumbnail()) {
                            ?>
                                <div class="entry-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(
                                            'full',
                                            ['class' => 'image_fade']
                                        ); ?>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
                        ============================================= -->
                        <div class="entry-content notopmargin">

                            <?php the_content();
                            $defaults = array(
                                'before'           => '<p class="text-center">' . __('Pages:'),
                                'after'            => '</p>'
                            );

                            wp_link_pages($defaults);
                            // use link pages to enable post pagination
                            ?>

                            <!-- Post Single - Content End -->

                            <div class="clear"></div>

                        </div>


                        <div class="line"></div>

                        <!-- Comments
                        ============================================= -->
                        <?php
                        if (comments_open() || get_comments_number()) {
                            // comments_open() returns true if the post is open for comments
                            // however, we always want to display comments if there are some, even if the page
                            // has been closed to new comments
                            comments_template();
                        }
                        ?>
                        <!-- #comments end -->

                    </div>
                </div>
            <?php
            }
            ?>


        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>

<?php
/*
Note the heading at the top of the page
it tells WP this is a template
this isn't a default template the WP knows how to use, so you must provide
this extra info
once you specify it as a template, it will be available as a template in
the appropriate post types
by default, WP only makes tempaltes available to pages only but you can
modify the header to extend it to other post types
*/
?>