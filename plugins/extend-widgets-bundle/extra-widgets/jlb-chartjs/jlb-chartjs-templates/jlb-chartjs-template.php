<?php 
    $widgetID  = $instance['panels_info']['id'];
    $title = $instance['title'];
    $disclaimer = $instance['disclaimer'];
    $lastUpdated = $instance['last_updated'];
    $watermark = $instance['chartjs_watermark'];
    $xName = $instance['parameter_horizontal'];
    $yName = $instance['parameter_vertical'];
    $repeater = $instance['values'];
?>
<div class="chartjs-container">
    <h2><?=$title; ?></h2>
    <p><?=$disclaimer; ?></p>
    <p>Last Updated: <span><?=$lastUpdated; ?></span></p>
    <div class="chartjs-widget-canvas">
        <?=$watermark; ?>
        <canvas id="<?=$widgetID; ?>"></canvas> 
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        var scatterChart<?=$widgetID; ?> = new Chart(document.getElementById("<?=$widgetID; ?>"), {
            type: 'scatter',
            data: {
                datasets: [{
                    label: 'Test Widget',
                    pointBackgroundColor: '#0d294f',
                    pointRadius: 5,
                    data: [
                        <?php foreach($repeater as $index => $values) { 
                            $xNumber = $values['x_number'];
                            $yNumber = $values['y_number'];
                        ?>
                        {
                            x: <?=$xNumber; ?>,
                            y: <?=$yNumber; ?>
                        },
                        <?php }; ?>
                    ]
                }]
            },
            options: {
                maintainAspectRatio: false,
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
                        stepSize: 10,
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
                        stepSize: 25,
                        suggestedMax: 100
                    }
                    }]
                }
            }
        });
    </script>
</div>