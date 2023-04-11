<div class="row d-flex justify-content-center wcm-cutomer-info-container py-5">
    <div class=" d-flex justify-content-center">
        <h2 class="wcm-featured-title pb-3">Customer information</h2>
    </div>
    <?php

    // Give query arguments and rules
    $info_query = new WP_Query([
        'posts_per_page' => 3,
        // Only show 3 posts
        'tax_query' => array(
            // Tell it to use only customer informatiohn posts from the taxonomy cutomer-information
            array(
                'taxonomy' => 'special_posts',
                'field'    => 'slug',
                'terms'    => 'customer-information',
            ), 
        ),
    ]);

    // if info_queary has posts
    if($info_query->have_posts()){
        // while info_queary has posts each post
        while($info_query->have_posts()){
            $info_query->the_post();
            ?>
            <div class="col-3 text-center">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Read more...</button></a>
            </div>
            <?php
        }
    }
    // Reset the posts data
    wp_reset_postdata();

    ?>
</div>