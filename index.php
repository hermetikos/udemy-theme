<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
      <div>
        <div class="container clearfix">
          <span class="badge badge-danger bnews-title">Breaking News:</span>

          <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
            <div class="flexslider">
              <div class="slider-wrap">
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </strong></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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