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

                        global $post;
                        // this is a built in WP variable that contains post info
                        // like the author and the author URL, which we'll use repeatedly in this template
                        $author_ID = $post->post_author;
                        $author_URL = get_author_posts_url( $author_ID );


                        ?>

                        <div class="single-post nobottommargin">

                        <!-- Single Post
                        ========================================= -->
                        <div class="entry clearfix">

                        <!-- Entry Title
                        ============================================= -->
                            <div class="entry-title">
                                <h2>This is a Standard post with a Preview Image</h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                                <li>
                                    <a href="<?php echo $author_URL ?>">
                                        <i class="icon-user"></i> <?php the_author() ?>
                                    </a>
                                </li>
                                <li><i class="icon-folder-open"></i> <?php the_category(); ?></li>
                                <li><a href="#"><i class="icon-comments"></i> <?php comments_number(); ?></a></li>
                            </ul><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <div class="entry-image">
                                <?php
                                    if(has_post_thumbnail())
                                        {  
                                            ?>
                                            <div class="entry-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail(
                                                        'full',
                                                        [ 'class' => 'image_fade' ]
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
                                        'before'           => '<p class="text-center">' . __( 'Pages:' ),
                                        'after'            => '</p>'
                                    );

                                    wp_link_pages($defaults);
                                    // use link pages to enable post pagination
                                ?>

                                
                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <?php the_tags( '', ' ' ); ?>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->
                        <div class="post-navigation clearfix">
                            
                            <div class="col_half nobottommargin">
                                <?php previous_post_link(); ?>
                            </div>

                            <div class="col_half col_last tright nobottommargin">
                                <?php next_post_link(); ?>
                            </div>

                        </div><!-- .post-navigation end -->

                        <div class="line"></div>

                        <!-- Post Author Info
                        ============================================= -->
                        <div class="card">
                            <div class="card-header">
                                <strong>
                                    Posted by
                                    <a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
                                </strong>
                            </div>
                            <div class="card-body">
                                <div class="author-image">
                                    <?php echo get_avatar(
                                        $author_ID,
                                        90,
                                        '',
                                        false,
                                        [
                                            'class' => 'img-circle'
                                        ]
                                    );
                                    ?>
                                </div>
                                <?php echo nl2br(get_the_author_meta( 'description' )); ?>
                            </div>
                        </div><!-- Post Single - Author End -->

                        <div class="line"></div>

                        <h4>Related Posts:</h4>

                        <div class="related-posts clearfix">

                            <div class="mpost clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="images/blog/small/10.jpg">
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4>
                                            <a href="#">
                                                This is an Image Post
                                            </a>
                                        </h4>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 10th July 2014</li>
                                        <li><i class="icon-comments"></i> 12</li>
                                    </ul>
                                    <div class="entry-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Mollitia nisi perferendis.
                                    </div>
                                </div>
                            </div>

                            <div class="mpost clearfix">
                                <div class="entry-image">
                                    <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">This is a Video Post</a></h4>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 24th July 2014</li>
                                        <li><i class="icon-comments"></i> 16</li>
                                    </ul>
                                    <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Mollitia nisi perferendis.</div>
                                </div>
                            </div>

                        </div>

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

            <!-- .postcontent end -->

            <!-- Sidebar
            ============================================= -->
            <?php get_sidebar() ?>
            <!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>

<!-- 
    global $post;
        a variable defined by WP that includes info about the current post
        here we use it to get info about the author
    
    the_tags()
        arg 1
            text to display before the tags
            we keep this empty
        arg 2
            the separater
    
    next_post_link
    previous_post_link
        get links to the next and previous posts

    get_the_author_meta()
        get metadata for an author profile
    nl2br
        converts newlines to breaks
    get_avatar
        self explanatory
 -->