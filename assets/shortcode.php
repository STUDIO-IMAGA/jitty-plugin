<?php
add_shortcode('prijslijst', function($atts){

  //TODO: serialize this the right way
  $post_id = isset($atts['post_id'])?$atts['post_id']:'';

  if( empty($post_id) ):?>

  <pre style="background-color:color: #721c24;background-color: #f8d7da;border-color: #f5c6cb;">Geen prijslijst ID opgegeven.</pre>

  <? else: ?>
  <div class="prijslijst-tabs x-tabs">
    <div class="x-tabs-list">
      <ul role="tablist">
        <li role="presentation">
          <div class="x-active" role="tab" aria-selected="true" aria-controls="panel-junior-stylist" data-x-toggle="tab" data-x-toggleable="tab-item-junior-stylist" data-x-toggle-group="tab-group-prijslijst-tabs">
            <span class="stylist-icon junior-stylist"></span><span>Junior Stylist</span>
          </div>
        </li>
        <li role="presentation">
          <div class="" role="tab" aria-selected="false" aria-controls="panel-stylist" data-x-toggle="tab" data-x-toggleable="tab-item-stylist" data-x-toggle-group="tab-group-prijslijst-tabs">
            <span class="stylist-icon regular-stylist"></span><span>Stylist</span>
          </div>
        </li>
        <li role="presentation">
          <div class="" role="tab" aria-selected="false" aria-controls="panel-top-stylist" data-x-toggle="tab" data-x-toggleable="tab-item-top-stylist" data-x-toggle-group="tab-group-prijslijst-tabs">
            <span class="stylist-icon top-stylist"></span><span>Top Stylist</span>
          </button>
        </li>
        <li role="presentation">
          <div class="" role="tab" aria-selected="false" aria-controls="panel-master-stylist" data-x-toggle="tab" data-x-toggleable="tab-item-master-stylist" data-x-toggle-group="tab-group-prijslijst-tabs">
            <span class="stylist-icon master-stylist"></span><span>Master Stylist</span>
          </div>
        </li>
      </ul>
    </div>

    <div class="x-tabs-panels">

      <div class="x-tabs-panel x-active" role="tabpanel" aria-labelledby="tab-junior-stylist" aria-hidden="false" data-x-toggleable="tab-item-junior-stylist" id="panel-junior-stylist">
        <div class="categorie">

          <h1>Knippen</h1>
          <div class="attention">
            <img src=" data:image/png;base64,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"/>
            Een Junior stylist knipt niet.
          </div>

        </div>
        <?php if( have_rows('junior_pricing', $post_id) ): ?>
          <?php while( have_rows('junior_pricing', $post_id) ): the_row(); ?>
            <?php include "prijslijst-loop.php"; ?>
          <?php endwhile; ?>
        <? else: ?>
          <?php include "alert.php"; ?>
        <?php endif; ?>
      </div>

      <div class="x-tabs-panel x-active" role="tabpanel" aria-labelledby="tab-stylist" aria-hidden="false" data-x-toggleable="tab-item-stylist" id="panel-stylist">
        <?php if( have_rows('stylist_pricing', $post_id) ): ?>
          <?php while( have_rows('stylist_pricing', $post_id) ): the_row(); ?>
            <?php include "prijslijst-loop.php"; ?>
          <?php endwhile; ?>
        <? else: ?>
          <?php include "alert.php"; ?>
        <?php endif; ?>
      </div>

      <div class="x-tabs-panel x-active" role="tabpanel" aria-labelledby="tab-top-stylist" aria-hidden="false" data-x-toggleable="tab-item-top-stylist" id="panel-top-stylist">
        <?php if( have_rows('top_pricing', $post_id) ): ?>
          <?php while( have_rows('top_pricing', $post_id) ): the_row(); ?>
            <?php include "prijslijst-loop.php"; ?>
          <?php endwhile; ?>
        <? else: ?>
          <?php include "alert.php"; ?>
        <?php endif; ?>
      </div>

      <div class="x-tabs-panel" role="tabpanel" aria-labelledby="tab-master-stylist" aria-hidden="true" data-x-toggleable="tab-item-master-stylist" id="panel-master-stylist">
        <?php if( have_rows('master_pricing', $post_id) ): ?>
          <?php while( have_rows('master_pricing', $post_id) ): the_row(); ?>
            <?php include "prijslijst-loop.php"; ?>
          <?php endwhile; ?>
        <? else: ?>
          <?php include "alert.php"; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
  <?
endif;
});

add_shortcode('off_canvas_menu', function(){
  return <<<HTML
  <a class="x-anchor x-anchor-button jitty-button-orange jb" tabindex="0" href="#" style="outline: currentcolor none medium;">
    <span class="x-anchor-content">
      <span class="x-graphic" aria-hidden="true">
        <span class="x-image x-graphic-image x-graphic-primary">
          <img alt="Image" src="/wp-content/uploads/2018/11/calendar-white.png" width="21" height="21">
        </span>
        <span class="x-image x-graphic-image x-graphic-secondary">
          <img alt="Image" src="/wp-content/uploads/2018/11/calendar-orange.png" width="21" height="21">
        </span>
      </span>
      <span class="x-anchor-text"><span class="x-anchor-text-primary">
        Online Boeken
      </span>
      </span>
    </span>
  </a>
  <a class="x-anchor x-anchor-button jitty-button-black" tabindex="0" href="#" style="outline: currentcolor none medium;">
    <span class="x-anchor-content">
      <span class="x-graphic" aria-hidden="true">
        <span class="x-image x-graphic-image x-graphic-primary">
          <img alt="Image" src="/wp-content/uploads/2018/11/icon-phone.png" width="21" height="21">
        </span>
        <span class="x-image x-graphic-image x-graphic-secondary">
          <img alt="Image" src="/wp-content/uploads/2018/11/telefoon-klein.png" width="21" height="21">
        </span>
      </span>
      <span class="x-anchor-text">
        <span class="x-anchor-text-primary">Learn More</span>
      </span>
    </span>
  </a>


HTML;
});
