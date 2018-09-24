<?php
/*
Template Name: Single Community
Template Post Type: page
*/

    get_header(); 
    $count = 0;
?>

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

    <section class="four">
        <div class="four-container">
            <div class="four-graph-container">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
                <?php if ( have_rows('graph_repeater') ): ?>
                <?php while ( have_rows('graph_repeater') ): the_row(); ?>
                    <?php $count++ ?> 
                    <div class="four-graph-wrapper">
                        <h2><?=get_sub_field('graph_title'); ?></h2>
                        <div class="canvas-wrapper">
                            <p class="graph-watermark"><?=get_sub_field('graph_watermark')?></p>
                            <canvas id="chart-<?=$count?>" class="chartjs"></canvas> 
                        </div>
                        <script>
                            var scatterChart<?=$count?> = new Chart(document.getElementById("chart-<?=$count?>"), {
                                type: 'scatter',
                                data: {
                                    datasets: [
                                        {
                                            label: 'Blue',
                                            pointBackgroundColor: '#0d294f',
                                            pointRadius: 5,
                                            data: [
                                                <?php if ( have_rows('blue_values_repeater') ): ?>
                                                <?php while ( have_rows('blue_values_repeater') ): the_row(); ?>
                                                    <?php
                                                        $xNumber = get_sub_field('horizontal_number');
                                                        $yNumber = get_sub_field('vertical_number');
                                                    ?>
                                                    {
                                                        x: <?=$xNumber; ?>,
                                                        y: <?=$yNumber; ?>
                                                    },
                                                <?php endwhile; ?>
                                                <?php endif; ?> 
                                            ]
                                        },
                                        {
                                            label: 'Red',
                                            pointBackgroundColor: '#bf0000',
                                            pointRadius: 5,
                                            data: [
                                                <?php if ( have_rows('red_values_repeater') ): ?>
                                                <?php while ( have_rows('red_values_repeater') ): the_row(); ?>
                                                    <?php
                                                        $xNumber = get_sub_field('horizontal_number');
                                                        $yNumber = get_sub_field('vertical_number');
                                                    ?>
                                                    {
                                                        x: <?=$xNumber; ?>,
                                                        y: <?=$yNumber; ?>
                                                    },
                                                <?php endwhile; ?>
                                                <?php endif; ?> 
                                            ]
                                        }
                                    ],
                                },
                                options: {
                                    scales: {
                                        xAxes: [{
                                            type: 'linear',
                                            position: 'bottom',
                                            scaleLabel: {
                                            display: true,
                                            labelString: 'Sales Price // List Price'
                                            },
                                            ticks: {
                                            beginAtZero: true,
                                            suggestedMax: 100
                                            }
                                        }],
                                        yAxes: [{
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'Square Feet'
                                            },
                                        ticks: {
                                            beginAtZero: true,
                                            suggestedMax: 100
                                        }
                                        }]
                                    }
                                }
                            });
                        </script>
                        <p><?=get_sub_field('graph_summary'); ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="four-closing">
                <?=get_field('four_closing_phrase'); ?>
            </div>
        </div>
    </section>

    
</main>

<?php get_footer();