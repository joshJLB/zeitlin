<?php
/**
* Template Name: Child Header
*
* child-header.php
*
*/ ?>

<?php
  $c = get_field('child_header');
  $h = get_field('child_header','option');
  $j = get_field('child_header_two', 'option');
?>


<?php if (is_home()): ?> 
  <div class="child-header" <?php if ($c): ?>style="background-image: url('<?php echo $c; ?>');"<?php else: ?>style="background-image: url('<?php echo $h; ?>');"<?php endif; ?>>
    <h1 class="title"><?php echo get_the_title(); ?></h1>
  </div>
<?php elseif (is_page('communities')): ?>
  <div class="child-header" <?php if ($c): ?>style="background-image: url('<?php echo $c; ?>');"<?php else: ?>style="background-image: url('<?php echo $h; ?>');"<?php endif; ?>>
    <div class="child-header-contact">
      <div class="child-header-image">
        <img src="<?=get_field('avatar', 'option'); ?>" alt="">
      </div>
      <p>Pat Patterson</p>
    </div>
    <h1 class="title"><?php echo get_the_title(); ?></h1>
  </div>
<?php elseif (is_single()): ?>
  <div class="child-header-two" style="background-image: url(<?=$j; ?>);">
    <div class="child-header-contact">
      <div class="child-header-image">
        <img src="<?=get_field('avatar', 'option'); ?>" alt="">
      </div>
      <p>Pat Patterson</p>
    </div>
    <div class="child-header-title">
      <h1 class="title"><?php echo get_the_title(); ?></h1>
      <p><?=get_field('header_text'); ?></p>
    </div>
  </div>
<?php else: ?>
  <div class="child-header" <?php if ($c): ?>style="background-image: url('<?php echo $c; ?>');"<?php else: ?>style="background-image: url('<?php echo $h; ?>');"<?php endif; ?>>
    <div class="child-header-contact">
      <div class="child-header-image">
        <img src="<?=get_field('avatar', 'option'); ?>" alt="">
      </div>
      <p>Pat Patterson</p>
    </div>
    <h1 class="title"><?php echo get_the_title(); ?></h1>
  </div>
<?php endif; ?>