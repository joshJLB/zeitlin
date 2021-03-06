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
            <a href="<?=get_sub_field('link_url_one'); ?>"><?=get_sub_field('title_one'); ?></a>
          </div>
        </div>
        <div class="community-div community-div-two">
          <div class="community-image-two-wrapper">
            <div class="community-image-two" style="background-image: url(<?=get_sub_field('image_two'); ?>);">
              <div class="overlay2"></div>
              <a href="<?=get_sub_field('link_url_two'); ?>"><?=get_sub_field('title_two'); ?></a>
            </div>
          </div>
          <div class="community-image-three-wrapper">
            <div class="community-image-three" style="background-image: url(<?=get_sub_field('image_three'); ?>);">
              <div class="overlay2"></div>
              <a href="<?=get_sub_field('link_url_three'); ?>"><?=get_sub_field('title_three'); ?></a>
            </div>
          </div>
        </div>
        <div class="community-div community-div-three">
          <div class="community-image-four" style="background-image: url(<?=get_sub_field('image_four'); ?>);">
            <div class="overlay2"></div>
            <a href="<?=get_sub_field('link_url_four'); ?>"><?=get_sub_field('title_four'); ?></a>
          </div>
        </div>
        <div class="community-div community-div-four">
          <div class="community-image-five-wrapper">
            <div class="community-image-five" style="background-image: url(<?=get_sub_field('image_five'); ?>);">
              <div class="overlay2"></div>
              <a href="<?=get_sub_field('link_url_five'); ?>"><?=get_sub_field('title_five'); ?></a>
            </div>
          </div>
          <div class="community-image-six-wrapper">
            <div class="community-image-six" style="background-image: url(<?=get_sub_field('image_six'); ?>);">
              <div class="overlay2"></div>
              <a href="<?=get_sub_field('link_url_six'); ?>"><?=get_sub_field('title_six'); ?></a>
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
      <div class="tab-container">
      <?php 
        $count = 0;
        $count2 = 0;
      ?>
      
      <ul class="nav nav-tabs" role="tablist">
        <?php if ( have_rows('two_repeater') ): ?>
        <?php while ( have_rows('two_repeater') ): the_row(); ?>
      
        <?php 
          $count++;
        ?>
            <li class="nav-item">
                <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" style="background-image: url(<?=get_sub_field('image'); ?>);" data-toggle="tab" href="#tab-<?php echo $count; ?>" role="tab">
                  <div class="overlay3"></div>
                  <div class="nav-inner">
                    <?=get_sub_field('tab_title'); ?>
                  </div>
                  <div class="arrow-div white-bottom"></div>
                  <div class="arrow-div grey-bottom"></div>
                </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="tab-content">

          <?php if(get_field('two_repeater')): ?>
          <?php while( have_rows('two_repeater') ): the_row(); ?>
            
            <?php
              $count2++;
            ?>

            <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?php echo $count2; ?>" role="tabpanel">
              <div class="content-holder">
                <?=get_sub_field('tab_content'); ?>
                <a href="<?=get_sub_field('link_url'); ?>" class="link-bottom">
                  <?=get_sub_field('link_text'); ?>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        </div>

      
    </div>
  </section>
</main>

<?php get_footer();
