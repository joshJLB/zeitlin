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
    <h2 class="community-header"><?=get_field('community_title'); ?></h2>
    <div class="one-slider-container">
      <?php if ( have_rows('community_slider') ): ?>
      <?php while ( have_rows('community_slider') ): the_row(); ?>

      <div class="slide">
        <div class="community-div community-div-one">
          <div class="community-image-one" style="background-image: url(<?=get_sub_field('image_one'); ?>);">
            <div class="overlay2"></div>
            <h2><?=get_sub_field('title_one'); ?></h2>
          </div>
        </div>
        <div class="community-div community-div-two">
          <div class="community-image-two-wrapper">
            <div class="community-image-two" style="background-image: url(<?=get_sub_field('image_two'); ?>);">
              <div class="overlay2"></div>
              <h2><?=get_sub_field('title_two'); ?></h2>
            </div>
          </div>
          <div class="community-image-three-wrapper">
            <div class="community-image-three" style="background-image: url(<?=get_sub_field('image_three'); ?>);">
              <div class="overlay2"></div>
              <h2><?=get_sub_field('title_three'); ?></h2>
            </div>
          </div>
        </div>
        <div class="community-div">
          <div class="community-image-four" style="background-image: url(<?=get_sub_field('image_four'); ?>);">
            <div class="overlay2"></div>
            <h2><?=get_sub_field('title_four'); ?></h2>
          </div>
        </div>
        <div class="community-div community-div-four">
          <div class="community-image-five-wrapper">
            <div class="community-image-five" style="background-image: url(<?=get_sub_field('image_five'); ?>);">
              <div class="overlay2"></div>
              <h2><?=get_sub_field('title_five'); ?></h2>
            </div>
          </div>
          <div class="community-image-six-wrapper">
            <div class="community-image-six" style="background-image: url(<?=get_sub_field('image_six'); ?>);">
              <div class="overlay2"></div>
              <h2><?=get_sub_field('title_six'); ?></h2>
            </div>
          </div>
        </div>
      </div>

      <?php endwhile; wp_reset_postdata(); ?>
      <?php endif;?>
    </div>
  </section>

  <section class="two">
    <div class="two-container">
      <?php if ( have_rows('two_repeater') ): ?>
      <?php while ( have_rows('two_repeater') ): the_row(); ?>
        <div class="two-links-wrapper">
          <div class="two-links" style="background-image: url(<?=get_sub_field('image'); ?>);">
            <div class="overlay3"></div>
            <a href="<?=get_sub_field('link_url'); ?>"><?=get_sub_field('link_text'); ?></a>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer();
