<?php get_header();?>

<div class="wcm-hero-container">
    <?php
    // If statement to check if thumbnail exists
    if ( has_post_thumbnail() ) {
        // if yes then output thumbnail with class img-fluid
        the_post_thumbnail('full', array( 'class' => 'wcm-hero-image' ));
    }
    ?>
    <div class="wcm-hero-hover-text">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<div class="row d-flex justify-content-center pt-5">
    <div class="col-9">
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>