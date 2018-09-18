<?php
/*
  Template Name: Home Page
  front-page.php
*/
get_header(); ?>

<main id="home">

  <?php get_template_part('components/home-page/hero'); ?>
  <!-- Continue Sections -->
  <section class="one">
    <h2><?=get_field('community_title'); ?></h2>
    <div class="one-slider-container">
      <?php if ( have_rows('community_slider') ): ?>
      <?php while ( have_rows('community_slider') ): the_row(); ?>

      <div class="slide">
        <div class="community-div" style="background-image: url(<?=get_sub_field('image_one'); ?>);"></div>
        <div class="community-div community-div-two">
          <div class="community-image-two" style="background-image: url(<?=get_sub_field('image_two'); ?>);"></div>
          <div class="community-image-three" style="background-image: url(<?=get_sub_field('image_three'); ?>);"></div>
        </div>
        <div class="community-div" style="background-image: url(<?=get_sub_field('image_four'); ?>);"></div>
        <div class="community-div">
          <div class="community-image-five" style="background-image: url(<?=get_sub_field('image_five'); ?>);"></div>
          <div class="community-image-six" style="background-image: url(<?=get_sub_field('image_six'); ?>);"></div>
        </div>
      </div>

      <?php endwhile; wp_reset_postdata(); ?>
      <?php endif;?>
    </div>
  </section>
</main>

<?php get_footer();
