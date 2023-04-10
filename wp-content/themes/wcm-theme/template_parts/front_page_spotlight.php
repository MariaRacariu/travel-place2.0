<div class="wcm-hero-container">

<?php

// Give query arguments and rules
$spotlight_query = new WP_Query([
     // Only show 1 post
    'posts_per_page' => 1,
    'tax_query' => array(
        // Tell it to use only spotlight post from the taxonomy spotlight
        array(
            'taxonomy' => 'featured',
            'field'    => 'slug',
            'terms'    => 'spotlight',
        ), 
    ),
]);

// if spotlight_queary has posts
if($spotlight_query->have_posts()){
    // while spolight_queary has posts each post
    while($spotlight_query->have_posts()){
        $spotlight_query->the_post();
        // if posts has thumbnail
        if ( has_post_thumbnail() ) {
            // show thumbnail with class img-fluid
            the_post_thumbnail('thumbnail', array( 'class' => 'wcm-hero-image' ));
        }
?>
        <div class="wcm-hero-hover-text">
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
            <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Läs mer</button></a>
        </div>
<?php
    }
}
// Reset the posts data
wp_reset_postdata();
?>

</div>