<?php

/**
 * @file
 * Display a grid of contents following a limited number of items per rows.
 *
 * - $rows: Original array of contents to display as HTML strings.
 * - $items_per_row: The number of items per rows.
 *
 * @ingroup views_templates
 */

 $items_per_row = 3;
 $chunks = array_chunk($rows, $items_per_row);

 if ($classes_array) {
   $classes_array = array_chunk($classes_array, $items_per_row);
 }
?>

<?php foreach ($chunks as $chunk_id => $chunk): ?>
  <div class="row">
    <?php foreach ($chunk as $item_id => $item): ?>
      <div<?php if ($classes_array[$chunk_id][$item_id]) { print ' class="' . $classes_array[$chunk_id][$item_id] .'"';  } ?>>
        <?php print $item; ?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>
