<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" id="<?php echo $unique_id; ?>"
               class="form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger"><i class="icon-search"></i></button>
        </span>
    </div>
</form>
<?php
/*
you want a unique ID for your search form
    templates are reusable, you may have different versions of your search form
    so you want to programmaticaly set your 

esc_attr
    this method is used to sanitize output
    esc_url is another sanitization function
action
    js to execute when submitting the form

input tag
    name attribute
        should always be s
        it's used by "the loop"
    the_search_query()
        returns the search query used when a search form is submitted
    _e
        used for translation
        unlike __, it will echo out the string rather than returning a string

*/
?>
