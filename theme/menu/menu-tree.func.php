<?php
/**
 * @file
 * menu-tree.func.php
 */

/**
 * Overrides theme_menu_tree().
 */
function theme_minima_menu_tree(&$variables) {
  return '<ul id="navigation" class="navigation">' . $variables['tree'] . '</ul>';
}
