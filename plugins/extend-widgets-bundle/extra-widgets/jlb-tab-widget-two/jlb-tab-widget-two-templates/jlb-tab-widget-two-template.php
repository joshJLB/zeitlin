<div class="tab-widget-two">
<div class="tab-widget-two-container">
<?php
  $widgetID  = $instance['panels_info']['id'];
  $tabs = $instance['tab_two_repeater'];
  $count = 0; ?>
<ul class="nav nav-tabs" role="tablist">
<?php foreach($tabs as $index => $tab) {
  $count++;
  $title = wp_get_attachment_url($tab['image']); ?>
      <li class="nav-item">
        <a class="nav-link <?php if($count == 1) { echo 'active'; }; ?>" data-toggle="tab" href="#tab-<?=$widgetID?>-<?php echo $count; ?>" role="tab">
          <img src="<?php echo $title; ?>" alt="">
        </a>
      </li>
<?php }; ?>
</ul>
<div class="tab-content">
  <?php
    $count2 = 0;
    foreach($tabs as $index => $tab) {
    $count2++;
    $tabTitle = $tab['tab_title'];
    $content = $tab['tab_content'];
  ?>
  <div class="tab-pane <?php if($count2 == 1) { echo 'active'; }; ?>" id="tab-<?=$widgetID?>-<?php echo $count2; ?>" role="tabpanel">
    <div class="content-holder">
      <h2><?=$tabTitle?></h2>
      <?php echo $content; ?>
    </div>
  </div>
<?php }; ?>
</div>
</div>
</div>