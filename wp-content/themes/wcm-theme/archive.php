<?php
get_header();
?>
<div class="d-flex row">
<?php
if (have_posts()) {
  while (have_posts()) {
     the_post();
    ?>
    <div class="card-group col-xl-4 w-25 py-4 px-4">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title"><?php the_title(); ?></h1>
          <p class="card-text"><?php the_taxonomies();?></p>
          <p class="card-text"><?php the_excerpt();?></p>
          <p class="btn btn-primary "><a href="<?php the_permalink() ?>" class="text-white">Continue reading...</a></p>
        </div>
      </div>
    </div>
  <?php
  }
  // This else posts a message if there are no posts available
} else {
?><p><?php esc_html_e('Sorry, no posts matched this criteria'); ?></p><?php 
} ?>
</div>

<?php get_footer(); ?>