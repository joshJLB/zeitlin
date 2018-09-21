<?php
/*
  Template Name: Communities
  communities.php (the Template for displaying all communities)
*/
get_header(); ?>

<main id="communities-page">
  <?php get_template_part('components/header/child-header'); ?>

    <!-- <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array( 'posts_per_page' => '12', 'paged' => $paged, 'post_type' => 'community' );
      $query = new WP_Query( $args );
    ?>
    <div class="communities-container">
    <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post() ?>
            <div class="community-container">
                <div class="community-image" style="background-image: url(<?=get_field('featured_image'); ?>);">
                    <div class="overlay"></div>
                    <a href="<?=the_permalink(); ?>"><p><?php the_title();?></p></a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
      <nav class="pagination">
        <div class="content">
          <p><?php previous_posts_link( 'Previous', $query->max_num_pages) ?></p>
          <p><?php next_posts_link( 'Next', $query->max_num_pages) ?></p>
        </div>
      </nav>
    <?php wp_reset_postdata(); endif; ?> -->
</main>

<?php get_footer();