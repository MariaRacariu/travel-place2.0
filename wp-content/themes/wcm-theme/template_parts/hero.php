<div class="wcm-hero-container">
<?php 
// If statement to check if thumbnail exists
if ( has_post_thumbnail() ) {
    // if yes then output thumbnail with class img-fluid
    the_post_thumbnail('thumbnail', array( 'class' => 'wcm-hero-image' ));
}
?>
    <div class="wcm-hero-hover-text">
        <!-- Show title -->
        <?php get_the_title(); ?>
        <!-- Show content -->
        <?php the_content(); ?>
        <!-- Button to read more -->
        <button class="btn btn-primary">Read more...</button>
    </div>
</div>
