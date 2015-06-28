<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300&text=Looking%20for%20rockstar%20graphic%20designers%3F' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&text=Look%20no%20further...%20we%20are%20here%20to%20help!' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Istok+Web:700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>

  <?php print $styles; ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
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
        <a class="brand" href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/minima-logo-desktop.jpg', 'alt' => 'Minima')); ?></a>
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
    <div class="container">
      <?php print $page; ?>
    </div>
  </main>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="h3 footer__title">Contact us</h2>
            <div class="media">
              <span class="media__cover glyphicon glyphicon-home"></span>
              <p class="media__body">
                500 Main street<br>
                Toronto, Ontario<br>
                L3R 1L5, Canada
              </p>
            </div>

            <p class="media">
              <span class="media__cover glyphicon glyphicon-earphone"></span>
              <a class="media__body" href="">(123) 456-7890</a>
            </p>
            <p class="media">
              <span class="media__cover glyphicon glyphicon-envelope"></span>
              <a class="media__body" href="">contact@localhost</a>
            </p>

            <ul class="social list-inline">
              <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-fb.png', 'alt' => 'Facebook')); ?></a></li>
              <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-d.png', 'alt' => 'Dribbble')); ?></a></li>
              <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-t.png', 'alt' => 'Twitter')); ?></a></li>
              <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-rss.png', 'alt' => 'RSS')); ?></a></li>
            </ul>
          </div>
          <div class="col-md-4">
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
          <div class="col-md-4">
            <h2 class="h3 footer__title">Latest posts</h2>
            <div class="media">
              <span class="media__cover glyphicon glyphicon-pencil"></span>
              <p class="media__body">Lorem ipsum dolor sit.</p>
            </div>
            <div class="media">
              <span class="media__cover glyphicon glyphicon-pencil"></span>
              <p class="media__body">Lorem ipsum dolor.</p>
            </div>
            <div class="media">
              <span class="media__cover glyphicon glyphicon-pencil"></span>
              <p class="media__body">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="media">
              <span class="media__cover glyphicon glyphicon-pencil"></span>
              <p class="media__body">Lorem ipsum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="container copyright"><small>Copyright © 2012 Designer First. All rights reserved.</small></p>
  </footer>
  <?php print $page_bottom; ?>
</body>
</html>
