<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_preprocess_html().
 */
function bootstrap_subtheme_preprocess_html(&$vars) {
  if ($node = menu_get_object()) {
    $node_wrapper = entity_metadata_wrapper('node', $node);

    //If the content type of this node has a field, field_body_classes_select,
    //let's pass the value(s) of the field to the body class in html.tpl.php
    if (isset($node_wrapper->field_body_classes_select)){
      $body_classes = $node_wrapper->field_body_classes_select->value();
      foreach ($body_classes as $body_class) {
	$vars['classes_array'][] = $body_class;
      }
    }

    //If the content type of this node has a field, field_custom_body_classes,
    //let's pass the value(s) of the field to the body class in html.tpl.php
    if (isset($node_wrapper->field_custom_body_classes)){
      $custom_body_classes = $node_wrapper->field_custom_body_classes->value();
      foreach ($custom_body_classes as $custom_body_class) {
	$vars['classes_array'][] = $custom_body_class;
      }
    }
  }
}
