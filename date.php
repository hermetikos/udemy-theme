<?php get_header(); ?>

<!-- Page Title
        ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?php the_archive_title(); ?></h1>
        <span>
            <?php
                if( is_year() ) {
                    ?>You're vieweing a year archive. <?php
                } else if( is_month() ) {
                    ?>You're vieweing a month archive. <?php
                } else if( is_day() ) {
                    ?>You're vieweing a day archive. <?php
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
      ============================================= -->
            <div class="postcontent nobottommargin clearfix">

                <!-- Posts
        ============================================= -->
                <div id="posts">
                    <?php

                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            /*
              this is a basic version of "The Loop"
              have_posts()
                an "iterator" that returns a list of posts
                a good way to check if there are any posts
              
              the_post()
                this echos the current post in the loop
              */
                            // get_template_part('partials/post/content-excerpt');
                            get_template_part('partials/post/content', 'excerpt');
                            /*
              first one will try to load only content-excerpt.php
              second will try to load content-excerpt and fallback to content
              if it can't
              */
                        }
                    }
                    ?>
                </div>

                <!-- #posts end -->

                <!-- Pagination
        ============================================= -->
                <div class="row mb-3">
                    <div class="col-12">
                        <?php
                        next_post_link('&larr; Older');
                        previous_post_link('Newer &rarr;');
                        // these display pagination buttons
                        // the string is for the text to display on the link
                        // filters are better for this
                        ?>
                        <!-- <a href="#" class="btn btn-outline-secondary float-left">
              &larr; Older
            </a>
            <a href="#" class="btn btn-outline-dark float-right">
              Newer &rarr;
            </a> -->
                    </div>
                </div>
                <!-- .pager end -->

            </div><!-- .postcontent end -->

            <!-- Sidebar
      ============================================= -->
            <?php get_sidebar() ?>
            <!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>

<?php
/*
the date template is a rarely used archive template
you may use it, but it depends
it isn't well documented, but if a date archive doesn't exist, WP will send you to the 404 page
    it doesn't fall back on another page template

the date archives are located at the url
    example.com/year/month/day

is_month
is_year
is_day
    returns true if the viewed archive is for a day, year, month, etc
*/
?>
