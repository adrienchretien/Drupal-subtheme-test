<?php
/**
 * @file
 * alter.inc
 *
 * Contains various implementations of hook_*_alter().
 */

/**
 * Implements hook_css_alter().
 */
function theme_minima_css_alter(&$css) {
  // Exclude specified CSS files from theme.
  $excludes = theme_minima_get_theme_info(NULL, 'exclude][css');

  if (!empty($excludes)) {
    $css = array_diff_key($css, drupal_map_assoc($excludes));
  }
}
