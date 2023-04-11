<div class="row d-flex justify-content-center pt-5">
    <div class="col-9">
        <h1>All News</h1>
    </div>
</div>
<?php
// Give query arguments and rules
$info_query = new WP_Query([
    'posts_per_page' => 3,
    // Only show 3 posts
    'tax_query' => array(
        // Tell it to use only customer informatiohn posts from the taxonomy cutomer-information
        array(
            'taxonomy' => 'news_posts',
            'field'    => 'slug',
            'terms'    => 'news',
        ), 
    ),
]);
?>
<div class="row d-flex justify-content-center py-3">
    <div class="col-9">
        <div class="row">
        <?php
        // if info_queary has posts
        if($info_query->have_posts()){
            // while info_queary has posts each post
            while($info_query->have_posts()){
                $info_query->the_post();
                ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title(); ?></h3>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href=<?php the_permalink(); ?> ><button type="button" class="btn btn-primary">Read more...</button></a>
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
</div>