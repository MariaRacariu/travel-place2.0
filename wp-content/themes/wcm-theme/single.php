<?php get_header();?>
<div class="wcm-hero-container">
    <?php
    // If statement to check if thumbnail exists
    if ( has_post_thumbnail() ) {
        // if yes then output thumbnail with class img-fluid
        the_post_thumbnail('full', array( 'class' => 'wcm-hero-image' ));
    }else{
       ?>
            <img src="<?php echo get_template_directory_uri()?>/assets/images/default_image.png" class="wcm-hero-image">
       <?
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

<div class="row d-flex justify-content-center pt-5">
    <div class="col-9">
        <h1>Trip Details</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
        <div class="row">
            <?php
                for($i = 0; $i < 9; $i++){
                    echo    '<div class="col-4 pt-3">';
                    echo        '<div class="card">';
                    echo            '<div class="card-body">';
                    echo                '<h4 class="card-title">Feature Name</h4>';
                    echo                '<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                    echo            '</div>';
                    echo        '</div>';
                    echo    '</div>';
                }
            ?>
        </div>
    </div>
</div>

<?php get_template_part( 'template_parts/news_page' ); ?>

<?php get_template_part( 'template_parts/stats_page' ); ?>

<?php get_template_part( 'template_parts/front_page_news_letter' ); ?>

<?php get_footer(); ?>