
<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
      ============================================= -->
            <div class="postcontent nobottommargin clearfix">
                <?php

                if( have_posts() ) {
                    while (have_posts()) {
                        the_post();

                        ?>

                        <div class="single-post nobottommargin">

                        <!-- Single Post
                        ========================================= -->
                        <div class="entry clearfix">
                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">
                            <a href="<?php echo $post->guid; ?>">
                                Direct Download
                            </a>
                            <?php

                            the_content();

                            ?>

                            </div>
                        </div><!-- .entry end -->

                        <div class="line"></div>

                        <!-- Comments
                        ============================================= -->
                        <?php
                            if( comments_open() || get_comments_number()) {
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
                }
                ?>

            </div><!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <?php get_sidebar() ?>
            <!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>

<!-- NOTES
    mime types
        a standard for identify content types (html, php, pdf, and so on)
        browsers use these to identify content types
        it's more reliable than a file extension, as it is stored in the file itself
        it isn't foolproof
    MIME and WP
        You can create templates for specific types of MIME types
        WP checks the mime type of a file
    
 -->