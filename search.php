<?php get_header(); ?>

<!-- Page Title
		============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php _e('Search Results for:', 'udemy'); ?> <?php the_search_query(); ?></h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            =========================================== -->
            <div class="postcontent nobottommargin clearfix">
                <!-- Search Box
                ============================================= -->
                <div class="col_full card">
                    <div class="card-header">What are you searhing for today?</div>
                    <div class="card-body">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <!-- Search Box End -->

                <!-- Posts
                ============================================ -->
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

<!-- 
    get_search_form
    the_search_query
 -->