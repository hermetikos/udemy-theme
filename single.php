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
                                    <a href="#">John Doe</a>
                                </strong>
                            </div>
                            <div class="card-body">
                                <div class="author-image">
                                    <img src="images/author/1.jpg" class="rounded-circle">
                                </div>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolores, eveniet, eligendi et nobis neque minus mollitia sit
                                repudiandae ad repellendus recusandae blanditiis praesentium v
                                itae ab sint earum voluptate velit beatae alias fugit
                                accusantium laboriosam nisi reiciendis deleniti tenetur
                                molestiae maxime id quaerat consequatur fugiat aliquam
                                laborum nam aliquid. Consectetur, perferendis?
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
                        <div id="comments" class="clearfix">

                            <h3 id="comments-title"><span>3</span> Comments</h3>

                            <!-- Comments List
                            ============================================= -->
                            <ol class="commentlist clearfix">

                                <li class="comment even thread-even depth-1" id="li-comment-1">

                                    <div id="comment-1" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                                </span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author">
                                                John Doe
                                                <span>April 24, 2012 at 10:46 am</span>
                                            </div>

                                            <p>
                                                Donec sed odio dui. Nulla vitae elit libero,
                                                a pharetra augue. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit. Integer
                                                posuere erat a ante venenatis dapibus
                                                posuere velit aliquet.
                                            </p>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                                <li class="comment even thread-even depth-1" id="li-comment-2">

                                    <div id="comment-2" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                                </span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author">
                                                John Doe
                                                <span>April 24, 2012 at 10:46 am</span>
                                            </div>

                                            <p>
                                                Donec sed odio dui. Nulla vitae elit libero,
                                                a pharetra augue. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit. Integer
                                                posuere erat a ante venenatis dapibus
                                                posuere velit aliquet.
                                            </p>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                                <li class="comment even thread-even depth-1" id="li-comment-3">

                                    <div id="comment-3" class="comment-wrap clearfix">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar clearfix">
                                                    <img src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' />
                                                </span>

                                            </div>

                                        </div>

                                        <div class="comment-content clearfix">

                                            <div class="comment-author">
                                                John Doe
                                                <span>April 24, 2012 at 10:46 am</span>
                                            </div>

                                            <p>
                                                Donec sed odio dui. Nulla vitae elit libero,
                                                a pharetra augue. Nullam id dolor id nibh
                                                ultricies vehicula ut id elit. Integer
                                                posuere erat a ante venenatis dapibus
                                                posuere velit aliquet.
                                            </p>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                            </ol><!-- .commentlist end -->

                            <div class="clear"></div>

                            <!-- Comment Form
                            ============================================= -->
                            <div id="respond" class="clearfix">

                                <h3>Leave a <span>Comment</span></h3>

                                <form class="clearfix" action="#" method="post" id="commentform">

                                    <div class="col_one_third">
                                        <label>Name</label>
                                        <input type="text" name="author" class="sm-form-control" />
                                    </div>

                                    <div class="col_one_third">
                                        <label>Email</label>
                                        <input type="text" name="email" class="sm-form-control" />
                                    </div>

                                    <div class="col_one_third col_last">
                                        <label>Website</label>
                                        <input type="text" name="url" class="sm-form-control" />
                                    </div>

                                    <div class="clear"></div>

                                    <div class="col_full">
                                        <label>Comment</label>
                                        <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button type="submit" id="submit-button" class="button button-3d nomargin">Submit Comment</button>
                                    </div>

                                </form>

                            </div><!-- #respond end -->

                        </div><!-- #comments end -->

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
 -->