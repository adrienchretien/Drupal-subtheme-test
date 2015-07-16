<?php

/**
 * @file
 * Display a grid of contents following a limited number of items per rows.
 *
 * - $rows: Original array of contents to display as HTML strings.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $item): ?>
    <?php print $item; ?>
<?php endforeach; ?>
