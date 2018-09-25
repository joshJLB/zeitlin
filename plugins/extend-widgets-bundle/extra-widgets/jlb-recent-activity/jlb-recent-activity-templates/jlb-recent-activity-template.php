<?php 
    $repeater = $instance['recent_repeater'];
?>

<div class="recent-activity-container">
    <?php foreach($repeater as $index => $slide){
        $one = $slide['section_one'];
        $two = $slide['section_two'];
        $three = $slide['section_three'];
        $four = $slide['section_four'];
    ?>
        <div class="slide">
            <div class="recent-activity-content">
                <p><?=$one?></p>
                <p><?=$two ?></p>
                <p><?=$three?></p>
                <p><?=$four?></p>
            </div>
        </div>
    <?php } ?>
</div>