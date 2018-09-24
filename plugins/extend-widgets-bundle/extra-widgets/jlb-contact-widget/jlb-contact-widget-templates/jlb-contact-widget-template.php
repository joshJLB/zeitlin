<?php 
    $title = $instance['title'];
    $content = $instance['content'];
    $string = get_field('address', 'option');
    $address = wp_strip_all_tags($string, true);
?>

<div class="contact-container">
    <h2><?=$title; ?></h2>
    <div class="contact-content">
        <?=$content; ?>
    </div>
    <div class="contact-links">
        <a href="tel:<?=get_field('phone', 'option'); ?>">
            <i class="fas fa-mobile-alt"></i> 
        </a>
        <a href="http://maps.google.com/?q=<?=$address; ?>" target="_blank">
            <i class="fas fa-map-marker-alt"></i>
        </a>
        <a href="mailto:<?=get_field('email', 'option'); ?>">
            <i class="fas fa-envelope"></i>
        </a>
    </div>
</div>