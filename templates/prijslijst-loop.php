<div class="categorie">

  <h1><?php the_sub_field('treatment_type'); ?></h1>

  <?php if( have_rows('treatments') ): ?>
    <?php while( have_rows('treatments') ): the_row(); ?>

      <a href="<?php the_sub_field('btn_url'); ?>">
        <div class="behandeling">
          <div class="label">
            <?php the_sub_field('label'); ?>
          </div>
          <div class="prijs">
            <span class="currency">&euro;</span><?php the_sub_field('price'); ?>
          </div>
          <span class="boeken x-anchor x-button">
            <span class="x-anchor-content">
              <span class="x-anchor-text">
                <span class="x-anchor-text-primary">
                  <span><?= __('Boek behandeling', 'jitty-plugin');?></span> <?= do_shortcode('[x_icon type="arrow-right"]');?>
                </span>
              </span>
            </span>
          </span>
          <?= do_shortcode('[x_icon type="arrow-right"]');?>
        </div>
      </a>

    <?php endwhile; ?>
  <?php endif; ?>

</div>
