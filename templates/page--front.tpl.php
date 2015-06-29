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
      <a class="brand" href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/minima-logo-desktop.jpg', 'alt' => 'Minima', 'class' => 'brand-logo')); ?></a>
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
      <header>
        <div class="page__section page__section--header">
          <?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/designer-buddy.jpg', 'alt' => 'Mascotte de Minima')); ?>
          <h1>Looking for rockstar graphic designers?</h1>
          <p class="sub-title">Look no further... we are here to help!</p>
        </div>
      </header>

      <div class="page__section">
        <h2>Latest projects</h2>
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <ul class="row list-unstyled">
              <li class="col-xs-6">
                <?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/latest-pix.jpg', 'alt' => 'Aperçu du site PIX Web Design')); ?>
                <h3>PIX Web Design</h3>
                <p>Graphic Design</p>
              </li>
              <li class="col-xs-6">
                <?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/latest-wp.jpg', 'alt' => 'Aperçu du site Plugin Planet')); ?>
                <h3>Plugin Planet – Wordpress</h3>
                <p>Pixel Design</p>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-sm-12">
            <ul class="row list-unstyled">
              <li class="col-xs-6">
                <?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/latest-fresh.jpg', 'alt' => 'Aperçu du site Fresh Application')); ?>
                <h3>Fresh application</h3>
                <p>Wordpress Theme</p>
              </li>
              <li class="col-xs-6">
                <?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/latest-mailapp.jpg', 'alt' => 'Aperçu du site iPhone Mail App')); ?>
                <h3>iPhone Mail App</h3>
                <p>Booking</p>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="page__section">
        <h2>How can we help you?</h2>
        <div class="row">
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Web design</h3>
            <p>Hodor, hodor. Hodor. Hodor, hodor - HODOR hodor, hodor hodor hodor hodor hodor! Hodor. Hodor hodor; hodor hodor. Hodor hodor HODOR! Hodor hodor; hodor hodor - hodor hodor. Hodor hodor HODOR! Hodor hodor hodor hodor, hodor. Hodor hodor. Hodor. Hodor hodor, hodor. Hodor hodor hodor! Hodor! Hodor hodor, hodor... Hodor hodor hodor... Hodor hodor hodor?! Hodor hodor... Hodor hodor hodor - hodor. Hodor! Hodor hodor, hodor, hodor. Hodor hodor, hodor.</p>
          </div>
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Wordpress</h3>
            <p>Bacon ipsum dolor amet tri-tip pork belly kielbasa pastrami brisket jerky filet mignon, strip steak ground round. Ground round beef ribs pancetta, meatball brisket chicken short loin shankle cow ham leberkas. Alcatra ham hock biltong, andouille pork belly tongue tenderloin pastrami shankle jerky pork chop pork loin. Jowl tongue t-bone tenderloin, beef ribs hamburger frankfurter short loin salami andouille picanha landjaeger biltong fatback.</p>
          </div>
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Social media</h3>
            <p>That's Calvin Klein, oh my god, he's a dream. He's absolutely right, Marty. the last thing you need is headaches. I don't know, I can't keep up with all of your boyfriends. Marty, that was very interesting music. Scram, McFly. I don't like her, Marty. Any girl who calls a boy is just asking for trouble. Maybe you were adopted. Right. Alright, okay. Alright, there she is, George. Just go in there and invite her. That's for messing up my hair.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Branding</h3>
            <p>Hey wait, wait a minute, who are you? Stella, another one of these damn kids jumped in front of my car. Come on out here, help me take him in the house. Good, you could start by sweeping the floor. Check out that four by four. That is hot. Someday, Jennifer, someday. Wouldn't it be great to take that truck up to the lake. Throw a couple of sleeping bags in the back. Lie out under the stars. I have to tell you about the future. Doc, wait. No, bastards.</p>
          </div>
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Print design</h3>
            <p>Bacon ipsum dolor amet fatback hamburger cow shank. Beef frankfurter salami kevin, chuck doner pancetta sausage short ribs venison porchetta. Meatloaf beef salami cupim strip steak frankfurter ground round. Short loin kevin shoulder cow, turducken hamburger sausage meatloaf beef ribs flank jerky ball tip porchetta bresaola. Frankfurter pork pork belly pork chop ham hock. Chuck pancetta porchetta short loin, landjaeger beef ribs prosciutto cow.</p>
          </div>
          <div class="col-md-4">
            <h3><span class="glyphicon glyphicon-tint"></span> Search engine optimization</h3>
            <p>Hodor hodor - hodor, hodor. Hodor hodor... Hodor hodor hodor hodor! Hodor, hodor; hodor hodor; hodor hodor. Hodor. Hodor. Hodor hodor; hodor hodor, hodor. Hodor hodor?! Hodor hodor - hodor hodor hodor, hodor. Hodor hodor hodor. Hodor! Hodor hodor, HODOR hodor, hodor hodor - hodor. Hodor! Hodor hodor, hodor HODOR hodor, hodor hodor; hodor hodor. Hodor. Hodor, hodor. Hodor. Hodor, hodor; hodor hodor - HODOR hodor, hodor hodor, hodor, hodor hodor. </p>
          </div>
        </div>
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
            <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-fb.png', 'alt' => 'Facebook')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-d.png', 'alt' => 'Dribbble')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-t.png', 'alt' => 'Twitter')); ?></a></li>
            <li><a href="#"><?php print theme('image', array('path' => './sites/all/themes/bootstrap_subtheme/images/social-rss.png', 'alt' => 'RSS')); ?></a></li>
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
