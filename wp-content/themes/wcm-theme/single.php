<?php get_header();?>
<!-- Create a special post area for this. -->
<?php
// If statement to check if thumbnail exists
if ( has_post_thumbnail() ) {
    // if yes then output thumbnail with class img-fluid
    the_post_thumbnail('full', array( 'class' => 'wcm-hero-image' ));
}
?>
<!-- this is this -->



<h1><?php the_title(); ?></h1>
<button class="btn btn-primary">Book this trip</button>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<div>
    <h1>Trip Details</h1>
    <p></p>
    <div>
        <div>
            <h2></h2>
            <p></p>
        </div>
    </div>
</div>

<div>
    <h1>News</h1>
</div>

<div>
    <h1>Stats</h1>
</div>

<?php get_template_part( 'template_parts/front_page_news_letter' ); ?>

<?php get_footer(); ?>