<?php
/*
Template Name: Single Community
Template Post Type: page
*/

get_header(); ?>

<main id="single-community">
    <?php get_template_part('components/header/child-header'); ?>

    <section class="single-community-container">
        <div class="one-container">
            <p><?=get_field('textarea'); ?></p>
        </div>
    </section>

    <section class="two">
        <div class="two-container">
            
                <?php if ( have_rows('two_repeater') ): ?>
                <?php while ( have_rows('two_repeater') ): the_row(); ?>
                    <div class="two-links-wrapper">
                        <div class="two-links" style="background-image: url(<?=get_sub_field('image'); ?>);">
                            <div class="overlay3"></div>
                            <a href="<?=get_sub_field('link_url'); ?>">
                                <div class="two-links-inner">
                                    <?=get_sub_field('link_text'); ?>
                                </div>
                            </a>
                        </div>  
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            
        </div>
    </section>

</main>

<?php get_footer();