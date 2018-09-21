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

</main>

<?php get_footer();