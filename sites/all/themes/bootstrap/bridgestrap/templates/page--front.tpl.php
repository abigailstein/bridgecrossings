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
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">

      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top"><i class="lpg-home fa fa-home"></i></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="hidden">
                <a href="#page-top"></a>
              </li>
              <li>
                <a class="page-scroll" href="index.html">bridgeXngs</a>
              </li>
              <li>
                <a class="page-scroll" href="quotes.html">Quotes</a>
              </li>
              <li>
                <a class="page-scroll" href="ginsberg.html">Allen Ginsberg</a>
              </li>
              <li>
                <a class="page-scroll" href="poetrycenter.html">About Lila Weisberger</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Links
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i>The Healing Fountain</i></a></li>
                    <li><a href="#">Poem Puzzle</a></li>
                    <li><a href="#">Notes from the Journal of a Poetry Therapist</a></li>
                    <li><a href="#">Photographic View</a></li>
                    <li><a href="#">In Search of a Lost Poem</a></li>
                    <li><a href="#">Finding the Right Poem</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">For Love of Words</a></li>
                    <li><a href="#">Success/Failure</a></li>
                    <li><a href="#">Lila's Poem of the Month Selection</a></li>
                    <li><a href="#">Beyond Words</a></li>
                    <li><a href="#">More Links</a></li>
                  </ul>
                </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
      <!--End of navigation-->
  </div>
</header>

<div class="main-container container">

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
    <header class="frontheader">
      <div class="container">
      </div>
    </header>
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
    <?php if (!empty($tabs)): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <!-- FIRST ROW -->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
        <br>
        <div class="pic">
          <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about1.png">
        </div>
        <br>
        <div class="text">
          We are an international community of poets, writers, poetry therapists, teachers, lovers of the word, and readers. Membership is open to those who are interested in literature, expressive writing, creative arts, and healing communities. For information about how to become a trained Poetry Therapy Practitioner (PTP) please go to the website of the International Academy for Poetry Therapy. There you will find full information about how to become a PTP and various courses and seminars that are being offered.
        </div>
      </div>
      <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
        <table class="fronttable">
          <tr>
            <td class="tdpic">
                <div class="pic">
                  <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about1.png">
                </div>
            </td>
            <td class="tdtext">
                <div class="text">
                  We are an international community of poets, writers, poetry therapists, teachers, lovers of the word, and readers. Membership is open to those who are interested in literature, expressive writing, creative arts, and healing communities. For information about how to become a trained Poetry Therapy Practitioner (PTP) please go to the website of the International Academy for Poetry Therapy. There you will find full information about how to become a PTP and various courses and seminars that are being offered.
                </div>
            </td>
          </tr>
        </table>
      </div>
    </div>

    <!-- SECOND ROW -->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
        <br>
        <div class="pic">
          <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about2.jpg">
        </div>
        <br>
        <div class="text">
          bridgeXngs POETRY CENTER is a not-for-profit corporation. Contributions are tax-deductible and are used to assist people in training and doing outreach in communities that otherwise would not be exposed to the benefits of poetry therapy. All contributions should be made out to: bridgXngs POETRY CENTER To make a contribution, contact Kathleen Perez at perezcat01@yahoo.com for her address.
        </div>
      </div>
    <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
      <table class="fronttable">
        <tr>
          <td class="tdtext">
              <div class="text">
                bridgeXngs POETRY CENTER is a not-for-profit corporation. Contributions are tax-deductible and are used to assist people in training and doing outreach in communities that otherwise would not be exposed to the benefits of poetry therapy. All contributions should be made out to: bridgeXngs POETRY CENTER To make a contribution, contact Kathleen Perez at perezcat01@yahoo.com for her address.
              </div>
          </td>
          <td class="tdpic">
              <div class="pic">
                <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about2.jpg">
              </div>
          </td>
        </tr>
      </table>
    </div>
    </div>

    <!-- THIRD ROW -->
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
        <br>
        <div class="pic">
          <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about3.jpg">
        </div>
        <br>
        <div class="text">
          Lila Weisberger is the founder of bridgeXngs POETRY CENTER, Inc. and the International Academy for Poetry Therapy. Her role now is as creative director and she continues to be a mentor for people who want to be trained in poetry therapy. Below is the website she wrote in 2003 describing her own individual program and thoughts.
        </div>
      </div>
      <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
      <table class="fronttable">
        <tr>
          <td class="tdpic">
              <div class="pic">
                <img src="/bridgecrossings/sites/all/themes/bootstrap/bridgestrap/images/about3.jpg">
              </div>
          </td>
          <td class="tdtext">
              <div class="text">
                Lila Weisberger is the founder of bridgeXngs POETRY CENTER, Inc. and the International Academy for Poetry Therapy. Her role now is as creative director and she continues to be a mentor for people who want to be trained in poetry therapy. Below is the website she wrote in 2003 describing her own individual program and thoughts.
              </div>
          </td>
        </tr>
      </table>
    </div>
    </div>

    </section>

    <section id="front2">
    <div class="front2bg">
      <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
          <table class="fronttable2">
            <tr>
              <td class="about-td">
                <div class="row">
                  <div class="row1">
                    <b>What We Do</b><br>
                    We find guidance and inspiration from poetry and literature
                  </div>
                </div>
                <div class="row">
                  <div class="row2">
                    <b>Why We Do It</b><br>
                    We hear our own voices and see ourselves and find release and healing in poetry.
                  </div>
                </div>
                <div class="row">
                  <div class="row3">
                    <b>bridgeXngs Poetry Center</b> is dedicated to the therapeutic value of poetry and literature. The Director is a retired School Psychologist, a registered Poetry Therapist approved as a Mentor/Supervisor by The National Association for Poetry Therapy (NAPT), a New York State Licensed Educator, a Certified Alcohol and Substance Abuse Counselor. She has literary, photography and art projects in progress. In order to experience poetry therapy first hand or for information on presentations, courses, poetry circles and training opportunities with Lila for certification or registration as a poetry therapist, contact Lila at bridgeXngs@aol.com.
                  </div>
                </div>
              </td>
              <td class="poem-td poem">
                  Faith- is the Pierless Bridge<br>
                  Supporting what We see<br>
                  Unto the Scene that We do not-<br>
                  Too slender for the eye<br>
                  <br>
                  It bears the Soul as bold<br>
                  As it were rocked in Steel<br>
                  With Arms of Steel at either side-<br>
                  It joins- behind the Veil<br>
                  <br>
                  To what, could We presume<br>
                  The Bridge would cease to be<br>
                  To Our far, vacillating Feet<br>
                  A first Necessity.<br><br>
                  -Emily Dickinson
              </td>
            </tr>
          </table>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        </div>
      </div>
    </div>
    </section>

    </section>

  </div>
</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
