<?php

if( post_password_required() ) {
    return;
}

?>

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