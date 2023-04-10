<?php
get_header();

if (have_posts()) {
  while (have_posts()) {
     the_post();
    ?>
    <div class="p-4 p-md-5 mb-4 text-black rounded bg-light">
    <div class="col-md-6 px-0">
      <h1 class="display-4"><?php the_title(); ?></h1>
      <p class="lead my-3"><?php the_taxonomies(); ?></p>
      <p class="lead my-3"><?php the_excerpt();?></p>
      <p class="lead mb-0"><a href="<?php the_permalink() ?>" class="text-black fw-bold">Continue reading...</a></p>
    </div>
  </div>
  <?php
  }
  // This else posts a message if there are no posts available
} else {
?><p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p><?php } ?>
</div>

<?php get_footer(); ?>