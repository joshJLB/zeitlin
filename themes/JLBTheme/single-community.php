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

    <section class="three">
        <div class="three-container">
            <div class="three-image" style="background-image: url(<?=get_field('featured_image'); ?>);"></div>
            <div class="three-content">
                <h2><?=get_field('section_title'); ?></h2>
                <h3><? the_title(); ?></h3>
                <p><?=get_field('section_content'); ?></p>
                <a href="<?=get_field('link_url'); ?>"><?=get_field('link_text'); ?></a>
            </div>
        </div>
    </section>

</main>

<?php get_footer();