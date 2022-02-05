<div class="entry clearfix">
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
    <div class="entry-title">
        <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
        </h2>
    </div>
    <ul class="entry-meta clearfix">
        <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
        <li>
        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>
            <i class="icon-user"></i>
            <?php the_author(); ?>
        </a>
        </li>
        <li>
        <i class="icon-folder-open"></i>
            <a href="#">General</a>, <a href="#">Media</a>
            <?php the_category(' '); ?>

        </li>
        <li>
        <a href="#">
            <i class="icon-comments"></i>
            <?php comments_number( '0' ); ?>
        </a>
        </li>
    </ul>
    <div class="entry-content">
        <?php the_excerpt() ?>
        <a href="<?php the_permalink(); ?>" class="more-link">Read More</a>
    </div>
</div>
<!--
    template tags are php functions used to help display data to the page
        they help avoid querying the database, esp. for common queries
        most of them are run in the loop but this isn't required
        when used in the loop template tags will automatically return the proper data for the context

    the_post_thumbnail(image_size, [classes])
        arg 1
        choose the image size
        here we use thumbnail

        arg 2
        apply classes with a list
    has_post_thumbnail
        use this to check if a post has an image
        you should generally check if the post has an image

    the_title vs get_title
        this applies to all functions of this name scheme
        get returns the value
        non-get echos it
    
    get_the_date
        get_the_date is used with echo is used because of a glitch
        the_date sometimes messes up the date output for all posts
        
    get_author_posts_url( get_the_author_meta('ID'))
        unlike other template tags, this isn't aware of the loop
        you need to pass the ID to get the author info
        we use get_the_auther_meta, which is loop aware, and ask for the ID
        
    the_category(' ');
        returns an unordered list of categories for each post
        but if we provide a string, it will return a string delimited by the string instead
    comments_number( '0' ); 
        output the number of comments in a post
    the_excerpt();
        output the post excerpt
    the_permalink();
        outputs the permalink to the post
 -->