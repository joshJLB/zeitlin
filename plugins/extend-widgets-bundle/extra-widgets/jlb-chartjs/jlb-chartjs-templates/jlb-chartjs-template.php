<?php 
    $widgetID  = $instance['panels_info']['id'];
    $title = $instance['title'];
    $xName = $instance['parameter_horizontal'];
    $yName = $instance['parameter_vertical'];
    $repeater = $instance['values'];
?>
<canvas id="<?=$widgetID; ?>" width="400px" height="400px"></canvas> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
  <script>
      var ctx = document.getElementById("<?=$widgetID; ?>");
      var scatterChart = new Chart(ctx, {
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