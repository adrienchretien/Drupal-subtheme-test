<?php
/**
 * @file
 * template.php
 */

/**
 * Include common functions used through out theme.
 */
include_once dirname(__FILE__) . '/theme/common.inc';

/**
 * Implements hook_theme().
 */
function theme_minima_theme(&$existing, $type, $theme, $path) {
  theme_minima_include($theme, 'theme/registry.inc');
  return _theme_minima_theme($existing, $type, $theme, $path);
}

/**
 * Declare various hook_*_alter() hooks.
 *
 * hook_*_alter() implementations must live (via include) inside this file so
 * they are properly detected when drupal_alter() is invoked.
 */
theme_minima_include('theme_minima', 'theme/alter.inc');
