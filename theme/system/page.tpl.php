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
?>
<div class="skip container">
  <a class="skip__link element-invisible element-focusable" href="#navigation"><?php print t('Skip to navigation'); ?></a>
  <a class="skip__link element-invisible element-focusable" href="#main-content"><?php print t('Skip to main content'); ?></a>
</div>

<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="#"><?php print theme('image', array('path' => path_to_theme().'/images/minima-logo-desktop.jpg', 'alt' => 'Minima', 'class' => 'brand-logo')); ?></a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul id="navigation" class="navigation">
        <li class="navigation__item"><a class="navigation__link" href="">Home</a></li>
        <li class="navigation__item"><a class="navigation__link" href="">Portfolio</a></li>
        <li class="navigation__item"><a class="navigation__link" href="">Blog</a></li>
        <li class="navigation__item"><a class="navigation__link" href="">About</a></li>
        <li class="navigation__item"><a class="navigation__link" href="">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<main>
  <div class="container" id="main-content">
    <div class="page">
      <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
          <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
      </header> <!-- /#page-header -->

      <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
          <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>

        <section<?php print $content_column_class; ?>>
          <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php if (!empty($title)): ?>
            <h1 class="page-header"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
          <aside class="col-sm-3" role="complementary">
            <?php print render($page['sidebar_second']); ?>
          </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>

<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <h2 class="h3 footer__title">Contact us</h2>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-home"></span>
            <p class="media__body">
              500 Main street<br>
              Toronto, Ontario<br>
              L3R 1L5, Canada
            </p>
          </div>

          <p class="media"><span class="media__cover glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
          <p class="media"><span class="media__cover glyphicon glyphicon-envelope"></span> contact@localhost</p>

          <ul class="social list-inline">
            <li><a href="#"><?php print theme('image', array('path' => path_to_theme().'/images/social-fb.png', 'alt' => 'Facebook')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => path_to_theme().'/images/social-d.png', 'alt' => 'Dribbble')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => path_to_theme().'/images/social-t.png', 'alt' => 'Twitter')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => path_to_theme().'/images/social-rss.png', 'alt' => 'RSS')); ?></a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6">
          <h2 class="h3 footer__title">Latest tweets</h2>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-comment"></span>
            <p class="media__body">Duis sit amet sollicitudin justo. Nunc interdum, nisi at hendrerit molestie, nunc ligula iaculis sapien, eget efficitur velit massa vel sed.</p>
          </div>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-comment"></span>
            <p class="media__body">Nunc euismod imperdiet quam, ac aliquet ante sodales sed. Nulla risus ante, dignissim at efficitur at, ornare at urna. Nulla finibus nullam.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <h2 class="h3 footer__title">Latest posts</h2>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-pencil"></span>
            <p class="media__body">Lorem ipsum dolor sit.</p>
          </div>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-pencil"></span>
            <p class="media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error rerum perferendis, asperiores dolorem soluta possimus.</p>
          </div>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-pencil"></span>
            <p class="media__body">Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="media">
            <span class="media__cover glyphicon glyphicon-pencil"></span>
            <p class="media__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, nemo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p class="container copyright"><small>Copyright © 2012 Designer First. All rights reserved.</small></p>
</footer>
