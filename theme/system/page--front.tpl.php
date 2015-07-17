<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable

 */

$field_cover = field_get_items('node', $node, 'field_cover')[0];
$field_displayed_title = field_get_items('node', $node, 'field_displayed_title')[0];
$field_displayed_sub_title = field_get_items('node', $node, 'field_displayed_sub_title')[0];

?>
<div class="skip container">
  <a class="skip__link element-invisible element-focusable" href="#navigation"><?php print t('Skip to navigation'); ?></a>
  <a class="skip__link element-invisible element-focusable" href="#main-content"><?php print t('Skip to main content'); ?></a>
</div>

<header class="navbar bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="/"><?php print theme('image', array('path' => path_to_theme().'/images/minima-logo-desktop.jpg', 'alt' => 'Minima', 'class' => 'brand-logo')); ?></a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <?php if (!empty($primary_nav)): ?>
          <?php echo render($primary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($secondary_nav)): ?>
          <?php echo render($secondary_nav); ?>
      <?php endif; ?>
      <?php if (!empty($page['navigation'])): ?>
          <?php echo render($page['navigation']); ?>
      <?php endif; ?>
    </nav>
  </div>
</header>

<main>
  <div class="container" id="main-content">
    <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>

    <div class="page">
      <header>
        <div class="page__section page__section--header">
          <?php print theme('image', array('path' => file_create_url($field_cover['uri']), 'alt' => $field_cover['alt'])); ?>
          <h1><?php echo $field_displayed_title['safe_value']; ?></h1>
          <p class="sub-title"><?php echo $field_displayed_sub_title['safe_value']; ?></p>
        </div>
      </header>
      <?php print render($page['content']); ?>
    </div>
  </div>
</main>

<footer>
  <div class="footer">
    <div class="container">
      <?php echo render($page['footer']); ?>
    </div>
  </div>
  <?php echo render($page['copyright']); ?>
</footer>
