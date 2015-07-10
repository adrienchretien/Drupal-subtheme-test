<?php
/**
 * @file
 * menu-link.func.php
 */

/**
 * Overrides theme_menu_link().
 */
function theme_minima_menu_link(array $variables) {
  // Add classes to li
  $variables['element']['#attributes']['class'][] = 'navigation__item';
  // Add classes to li > a
  $variables['element']['#localized_options']['attributes']['class'][] = 'navigation__link';

  return theme_menu_link($variables);
}
