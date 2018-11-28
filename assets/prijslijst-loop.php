<div class="categorie">

  <h1><?php the_sub_field('treatment_type'); ?></h1>

  <?php if( have_rows('treatments') ): ?>
    <?php while( have_rows('treatments') ): the_row(); ?>

      <a href="<?php the_sub_field('btn_url'); ?>">
        <div class="behandeling" data-x-icon-s="">
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
                  <span>Boek behandeling</span> <i class="x-icon" aria-hidden="true" data-x-icon-s=""></i>
                </span>
              </span>
            </span>
          </span>
        </div>
      </a>

    <?php endwhile; ?>
  <?php endif; ?>

</div>
