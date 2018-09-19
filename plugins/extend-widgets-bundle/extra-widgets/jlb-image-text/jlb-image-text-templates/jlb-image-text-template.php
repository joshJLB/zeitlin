<?php 
    $title = $instance['title'];
    $content = $instance['content'];
    $linkText = $instance['link_text'];
    $link = $instance['link'];
    $imageID = $instance['image'];
    $imageURL = wp_get_attachment_url($imageID); 
?>

<div class="image-text-container">
    <div class="image-text-left" style="background-image: url(<?=$imageURL; ?>);"></div>
    <div class="image-text-right">
        <h2><?=$title; ?></h2>
        <?=$content; ?>
        <a href="<?=$link; ?>"><?=$linkText; ?></a>
    </div>
</div>