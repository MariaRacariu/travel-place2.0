<!-- Featured Trips -->
<div class="row">
    <div class="col-3 offset-2">
        <h2 class="wcm-featured-title d-flex justify-content-start">Featured Travels</h2>
    </div>
</div>


<div class="card-group wcm-featured-cards">
    
    <div class="row justify-content-center">
        <?php

        // Give query arguments and rules
        $featured_query = new WP_Query([
            // Only show 3 posts
            'posts_per_page' => 3,
            // Tell it to use only featured posts from the taxonomy featured
            'tax_query' => array(
                array(
                    'taxonomy' => 'featured',
                    'field'    => 'slug',
                    'terms'    => 'featured',
                ), 
            ),
        ]);

        // if featured_queary has posts
        if($featured_query->have_posts()){
            // while featured_queary has posts each post
            while($featured_query->have_posts()){
                $featured_query->the_post();
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
                            <h5 class="card-title"><?php the_title(); ?></h5>
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