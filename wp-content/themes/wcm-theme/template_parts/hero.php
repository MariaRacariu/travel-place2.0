<div class="wcm-hero-container">
    <?php

    // Give query arguments and rules
    $hero_query = new WP_Query([
        'posts_per_page' => 1,
        // Only show 1 post
        'tax_query' => array(
            // Tell it to use only a specific post
            array(
                'taxonomy' => 'special_posts',
                'field'    => 'slug',
                'terms'    => 'front-page-hero-post',
            ), 
        ),
    ]);

    // if popular_queary has posts
    if($hero_query->have_posts()){
        // while popular_queary has posts each post
        while($hero_query->have_posts()){
            $hero_query->the_post();
            ?>
            <?php
            // If statement to check if thumbnail exists
            if ( has_post_thumbnail() ) {
                // if yes then output thumbnail with class img-fluid
                the_post_thumbnail('full', array( 'class' => 'wcm-hero-image' ));
            }
            
            ?>
            <div class="wcm-hero-hover-text">
                <!-- Show title -->
                <h1> <?php the_title(); ?></h1>
                <!-- Show content -->
                <?php the_excerpt(); ?>
                <!-- Button to read more -->
                <a href=<?php the_permalink(); ?>><button class="btn btn-primary">Read more...</button></a>
            </div>
            <?php
        }
    }
    // Reset the posts data
    wp_reset_postdata();
            ?>
</div>