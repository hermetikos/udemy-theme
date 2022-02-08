<?php

if( post_password_required() ) {
    return;
}

?>

<div id="comments" class="clearfix">
    <h3 id="comments-title"><span><?php comments_number('0'); ?></span> Comments</h3>

    <!-- Comments List
    ============================================= -->
    <ol class="commentlist clearfix">
        <?php
        if( have_comments() ) {
            foreach( $comments as $comment ) {
                ?>
                    <li class="comment even thread-even depth-1" id="li-comment-1">
                        <div id="comment-1" class="comment-wrap clearfix">
                            <div class="comment-meta">
                                <div class="comment-author vcard">
                                    <span class="comment-avatar clearfix">
                                        <?php echo get_avatar($comment, 60, '', '', [
                                            'class' => 'avatar avatar-60 photo avatar-default'
                                        ]); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="comment-content clearfix">
                                <div class="comment-author">
                                    <?php comment_author(); ?>
                                    <span><?php comment_date(); ?></span>
                                </div>
                                <?php comment_text(); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                <?php
                comments_pagination();
            }
        }
            

        ?>

        

    </ol><!-- .commentlist end -->

    <div class="clear"></div>

    <!-- Comment Form
    ============================================= -->
    <div id="respond" class="clearfix">
        <?php

        comment_form([
            'comment_field' => '<div class="clear"></div>
            <div class="col_full">
                <label>Comment</label>
                <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
            </div>',
            'fields' => [
                'author' =>
                '<div class="col_one_third">
                    <label>' . __('Name', 'udemy') . '</label>
                    <input type="text" name="author" class="sm-form-control" />
                </div>',
                'email' =>
                '<div class="col_one_third">
                    <label>' . __('Email', 'udemy') .'</label>
                    <input type="text" name="email" class="sm-form-control" />
                </div>',
                'url' =>
                '<div class="col_one_third col_last">
                    <label>' . __('Website', 'udemy') . '</label>
                    <input type="text" name="url" class="sm-form-control" />
                </div>'
            ],
            'class_submit' => 'button button-3d nomargin',
            'label_submit' => __('Submit Comment', 'udemy'),
            'title_reply' => __('Leave a <span>Comment</span>', 'udemy')
        ]);

        ?>

    </div><!-- #respond end -->

</div>
<!-- 
    if( post_password_required() ) {
        return;
    }
        post_password_required() checks if we need a password to see this page
        we use this to avoid displaying the page if you need to be logged in for security
        we use return to do this
        this is because of the way PHP include works, which will stop the template render early
    

    comment_form()
        generates a form to allow commenters to post comments    
        because of the way the comment form can be extended with plugins,
        it is best to use this rather than create it manually
        arg1
            comment field
            define the text field where you write your comment
        arg 2
            fields key
            define the other input fields for the comment form
            like poster name, email, etc.
        the other fields are intuitive
    
    $comments
        note that WP puts all post comments in this iterable variable
    
    get_avatar()
        get the avatar of a comment poster
    
    comment_author()
    comment_date()
        specify the author and date of the current comment
    comment_text()
        get the comment body
    
    comment_pagination()
        this will display pagination info for comments if relevant
    
    have_comments()
        bool that returns true if the current query has comments to iterate over
    
    comments_number()
        return the number of comments
        
 -->