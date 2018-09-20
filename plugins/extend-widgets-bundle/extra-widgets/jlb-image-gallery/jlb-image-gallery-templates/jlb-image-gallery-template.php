<?php 
    $title = $instance['title'];
    $repeater = $instance['gallery_repeater'];
?>
<div class="image-gallery">
    <h2 class="community-header"><?=$title; ?></h2>
    <div class="one-slider-container">
        <?php foreach($repeater as $index => $slide){
            $linkTextOne = $slide['link_text_one'];
            $linkOne = $slide['link_one'];
            $linkTextTwo = $slide['link_text_two'];
            $linkTwo = $slide['link_two'];
            $linkTextThree = $slide['link_text_three'];
            $linkThree = $slide['link_three'];
            $linkTextFour = $slide['link_text_four'];
            $linkFour = $slide['link_four'];
            $linkTextFive = $slide['link_text_five'];
            $linkFive = $slide['link_five'];
            $linkTextSix = $slide['link_text_six'];
            $linkSix = $slide['link_six'];
            $imageOneID = $slide['image_one'];
            $imageOneURL = wp_get_attachment_url($imageOneID);
            $imageTwoID = $slide['image_two'];
            $imageTwoURL = wp_get_attachment_url($imageTwoID);
            $imageThreeID = $slide['image_three'];
            $imageThreeURL = wp_get_attachment_url($imageThreeID);
            $imageFourID = $slide['image_four'];
            $imageFourURL = wp_get_attachment_url($imageFourID);
            $imageFiveID = $slide['image_five'];
            $imageFiveURL = wp_get_attachment_url($imageFiveID);
            $imageSixID = $slide['image_six'];
            $imageSixURL = wp_get_attachment_url($imageSixID);
        ?>

        <div class="slide">
        <div class="community-div community-div-one">
            <div class="community-image-one" style="background-image: url(<?=$imageOneURL; ?>);">
            <div class="overlay2"></div>
                <a href="<?=$linkOne; ?>"><?=$linkTextOne; ?></a>
            </div>
        </div>
        <div class="community-div community-div-two">
            <div class="community-image-two-wrapper">
            <div class="community-image-two" style="background-image: url(<?=$imageTwoURL; ?>);">
                <div class="overlay2"></div>
                <a href="<?=$linkTwo; ?>"><?=$linkTextTwo; ?></a>
            </div>
            </div>
            <div class="community-image-three-wrapper">
            <div class="community-image-three" style="background-image: url(<?=$imageThreeURL; ?>);">
                <div class="overlay2"></div>
                <a href="<?=$linkThree; ?>"><?=$linkTextThree; ?></a>
            </div>
            </div>
        </div>
        <div class="community-div community-div-three">
            <div class="community-image-four" style="background-image: url(<?=$imageFourURL; ?>);">
                <div class="overlay2"></div>
                <a href="<?=$linkFour; ?>"><?=$linkTextFour; ?></a>
            </div>
        </div>
        <div class="community-div community-div-four">
            <div class="community-image-five-wrapper">
            <div class="community-image-five" style="background-image: url(<?=$imageFiveURL; ?>);">
                <div class="overlay2"></div>
                <a href="<?=$linkFive; ?>"><?=$linkTextFive; ?></a>
            </div>
            </div>
            <div class="community-image-six-wrapper">
            <div class="community-image-six" style="background-image: url(<?=$imageSixURL; ?>);">
                <div class="overlay2"></div>
                <a href="<?=$linkSix; ?>"><?=$linkTextSix; ?></a>
            </div>
            </div>
        </div>
        </div>

        <?php } ?>
    </div>
</div>