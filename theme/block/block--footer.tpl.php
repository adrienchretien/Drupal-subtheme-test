<div id="<?php print $block_html_id; ?>" class="col-md-4 col-sm-6<?php print " ".$classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
  <h2 class="h3 footer__title"<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
    <?php endif;?>
  <?php print render($title_suffix); ?>
  <?php print $content ?>
</div>
