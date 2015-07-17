<?php
/**
 * @file
 * icon.vars.php
 */

/**
 * Implements hook_preprocess_icon().
 *
 * Minima requires an additional "glyphicon" class for all icons.
 *
 * @see icon_preprocess_icon_image()
 * @see template_preprocess_icon()
 */
function theme_minima_preprocess_icon(&$variables) {
  $bundle = &$variables['bundle'];
  if ($bundle['provider'] === 'glyphicons') {
    $variables['attributes']['class'][] = 'glyphicon';
  }
}
