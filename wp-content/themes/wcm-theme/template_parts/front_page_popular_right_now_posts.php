<div class="row">
    <div class="col-3 offset-2">
        <h2 class="wcm-featured-title d-flex justify-content-start">Popular right now</h2>
    </div>
</div>

<div class="card-group wcm-featured-cards">
    <div class="row justify-content-center">
        <?php

        // Give query arguments and rules
        $popular_query = new WP_Query([
            'posts_per_page' => 3,
            // Only show 3 posts
            'tax_query' => array(
                // Tell it to use only popular posts from the taxonomy popular
                array(
                    'taxonomy' => 'featured',
                    'field'    => 'slug',
                    'terms'    => 'popular-right-now',
                ), 
            ),
        ]);

        // if popular_queary has posts
        if($popular_query->have_posts()){
            // while popular_queary has posts each post
            while($popular_query->have_posts()){
                $popular_query->the_post();
                ?>
                <div class="col-3">
                    <div class="card wcm-featured-card-body">
                        <?php
                    // if posts has thumbnail
                    if ( has_post_thumbnail() ) {
                        // show thumbnail
                        the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top wcm-card-image' ));
                    }
                ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Läs mer</button></a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        // Reset the posts data
        wp_reset_postdata();

        ?>
    </div>
</div>