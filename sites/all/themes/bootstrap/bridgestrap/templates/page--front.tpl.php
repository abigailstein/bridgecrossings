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
              <a class="page-scroll" href="#">bridgeXngs</a>
            </li>
            <li>
              <a class="page-scroll" href="moreabout">About Lila Weisberger</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                Links
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="thehealingfountain"><i>The Healing Fountain</i></a></li>
                  <li><a href="poempuzzle">Poem Puzzle</a></li>
                  <li><a href="journalexperiment">Notes from the Journal of a Poetry Therapist</a></li>
                  <li><a href="photographicview">Photographic View</a></li>
                  <li><a href="lostpoems">In Search of a Lost Poem</a></li>
                  <li><a href="findingtherightpoem">Finding the Right Poem</a></li>
                  <li><a href="quotes">Favorite Quotes</a></li>
                  <li><a href="training">Training</a></li>
                  <li><a href="wordswordswords">For Love of Words</a></li>
                  <li><a href="successfailure">Success/Failure: Day/Night</a></li>
                  <!-- <li><a href="">Lila's Poem of the Month Selection</a></li> -->
                  <li><a href="allenginsberg">Allen Ginsberg</a></li>
                  <li><a href="beyondwords">Beyond Words</a></li>
                  <li><a href="links">Moving Along and Linking</a></li>
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

      <section class="frontbg" <?php print $content_column_class; ?>>
      <div class="frontbg col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
        <header class="frontheader">
          <div class="container">
          </div>
        </header>
      </div>
      <div class="frontbg hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
        <header class="frontheader">
          <div class="container">
          </div>
        </header>
      </div>
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

        <br />
        <div class="front-featured-links">
          <br /><br />
          <div class="front-featured">New!</div>
          <?php print render($page['navigation']); ?>
        </div>

        <section id="front1">
          <div class="front-featured">More Links ...</div>
          <div class="frontlinks">
            <a href="thehealingfountain"><i>The Healing Fountain</i></a> &#8226;
            <a href="poempuzzle">Poem Puzzle</a> &#8226;
            <a href="journalexperiment">Notes from the Journal of a Poetry Therapist</a> &#8226;
            <a href="photographicview">Photographic View</a> &#8226;
            <a href="lostpoems">In Search of a Lost Poem</a> &#8226;
            <a href="findingtherightpoem">Finding the Right Poem</a> &#8226;
            <a href="quotes">Favorite Quotes</a> &#8226;
            <a href="training">Training</a> &#8226;
            <a href="wordswordswords">For Love of Words</a> &#8226;
            <a href="successfailure">Success/Failure: Day/Night</a> &#8226;
            <a href="allenginsberg">Allen Ginsberg</a> &#8226;
            <a href="beyondwords">Beyond Words</a> &#8226;
            <a href="links">Moving Along and Linking</a>
          </div>

          <!-- FIRST ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/lila.jpg" width="50%" height="50%">
              </div>
              <br>
              <div class="text">
                We are an international community of poets, writers, poetry therapists, teachers, lovers of the word, and readers. Participation is open to those who are interested in literature, expressive writing, creative arts, and healing communities. For information about how to become a trained Poetry Therapy Practitioner (PTP) please go to the website of the International Academy for Poetry Therapy. There you will find full information about how to become a PTP and various courses and seminars that are being offered.
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/lila.jpg" height="50%" width="254px">
                    </div>
                  </td>
                  <td class="tdtext">
                    <div class="text">
                      We are an international community of poets, writers, poetry therapists, teachers, lovers of the word, and readers. Participation is open to those who are interested in literature, expressive writing, creative arts, and healing communities. For information about how to become a trained Poetry Therapy Practitioner (PTP) please go to the website of the International Academy for Poetry Therapy. There you will find full information about how to become a PTP and various courses and seminars that are being offered.
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
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about2.jpg">
              </div>
              <br>
              <div class="text">
                bridgeXngs POETRY CENTER,INC is a not-for-profit corporation. Contributions are tax-deductible and are used to assist people in training and doing outreach in communities that otherwise would not be exposed to the benefits of poetry therapy. All contributions should be made out to: bridgeXngs POETRY CENTER,INC. To make a contribution, contact Lila Weisberger at bridgeXngs@aol.com for her address or Paypal account.
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdtext">
                    <div class="text">
                      bridgeXngs POETRY CENTER,INC is a not-for-profit corporation. Contributions are tax-deductible and are used to assist people in training and doing outreach in communities that otherwise would not be exposed to the benefits of poetry therapy. All contributions should be made out to: bridgeXngs POETRY CENTER,INC. To make a contribution, contact Lila Weisberger at bridgeXngs@aol.com for her address or Paypal account.
                    </div>
                  </td>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about2.jpg">
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
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about3.jpg">
              </div>
              <br>
              <div class="text">
                Lila Weisberger is the founder of bridgeXngs POETRY CENTER,INC. and the International Academy for Poetry Therapy. She is an award winning Poetry Therapist and continues to accept trainees who wish to become Poetry Therapy Practitioners and those with the credentials to be Mentors. She does short term poetry or creative arts therapy.<br><br>
            </div>
          </div>
          <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
            <table class="fronttable">
              <tr>
                <td class="tdpic">
                  <div class="pic">
                    <img src="sites/all/themes/bootstrap/bridgestrap/images/about3.jpg">
                  </div>
                </td>
                <td class="tdtext">
                  <div class="text">
                    Lila Weisberger is the founder of bridgeXngs POETRY CENTER,INC. and the International Academy for Poetry Therapy. She is an award winning Poetry Therapist and continues to accept trainees who wish to become Poetry Therapy Practitioners and those with the credentials to be Mentors. She does short term poetry or creative arts therapy.
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>

          <!-- FOURTH ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about1.png">
              </div>
              <br>
              <div class="text">
                She is now in the late autumn of her life and works only with those people who are highly motivated and dedicated to reach the goal they have set for themselves. She works with long-distance trainees as well as those who are able to come to Manhattan or Long Island, New York.<br><br>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdtext">
                    <div class="text">
                      She is now in the late autumn of her life and works only with those people who are highly motivated and dedicated to reach the goal they have set for themselves. She works with long-distance trainees as well as those who are able to come to Manhattan or Long Island, New York.<br><br>
                    </div>
                  </td>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about1.png">
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <!-- FIFTH ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about5.jpg" width="300px" height="224px">
              </div>
              <br>
              <div class="text">
                The work Lila does in the field of Poetry therapy is diverse and her experience is wide. She works as a mentor, workshop developer, consultant for poem selection for a special event or project, assistance in organizing a book or project.<br><br>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about5.jpg" width="300px" height="224px">
                    </div>
                  </td>
                  <td class="tdtext">
                    <div class="text">
                      The work Lila does in the field of Poetry therapy is diverse and her experience is wide. She works as a mentor, workshop developer, consultant for poem selection for a special event or project, assistance in organizing a book or project.
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <!-- SIXTH ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about7.jpg" width="300px" height="224px">
              </div>
              <br>
              <div class="text">
                She is licensed as a New York State Creative Arts Therapist, and her credentials include New York  State  educator, School Psychologist,  POETRY Therapy Practitioner, Mentor, New York state, drug and alcohol counselor emeritus.  She is also the coeditor of the text <i>The Healing Fountain: Poetry Therapy for Life's Journey</i>, which is required reading for those in training.<br><br>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdtext">
                    <div class="text">
                      She is licensed as a New York State Creative Arts Therapist, and her credentials include New York  State  educator, School Psychologist, POETRY Therapy Practitioner, Mentor, New York state, drug and alcohol counselor emeritus.  She is also the coeditor of the text "The Healing Fountain: Poetry Therapy for Life's Journey, which is required reading for those in training.
                    </div>
                  </td>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about7.jpg" width="300px" height="224px">
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <!-- SEVENTH ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about6.jpg" width="300px" height="224px">
              </div>
              <br>
              <div class="text">
                Currently she is working with trainees, writing her memoir, writing guidebooks, essays and poetry. Two applications are currently being evaluated from outside entities for grants through her organization.<br><br>

                She is always immersed in reading and studying poetry therapy and literature. For 14 years she has had weeklong Poetry therapy intensives "ACTIONWEEK" and monthly Poetry peer groups.<br><br>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about6.jpg" width="300px" height="224px">
                    </div>
                  </td>
                  <td class="tdtext">
                    <div class="text">
                      Currently she is working with trainees, writing her memoir, writing guidebooks, essays and poetry. Two applications are currently being evaluated from outside entities for grants through her organization.<br><br>

                      She is always immersed in reading and studying poetry therapy and literature. For 14 years she has had weeklong Poetry therapy intensives "ACTIONWEEK" and monthly Poetry peer groups.
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <!-- EIGHTH ROW -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 hidden-lg hidden-xl">
              <br>
              <div class="pic">
                <img src="sites/all/themes/bootstrap/bridgestrap/images/about4.jpg" width="300px" height="224px">
              </div>
              <br>
              <div class="text">
                Lila's work has been highly praised and she looks forward to hearing from you and working with you in anyway that would be helpful. For any further information, you can contact Lila at bridgeXngs@aol.com.<br><br>

                <center>She lives by this quote from Gibran:<br>
                "WORK IS LOVE MADE VISIBLE"</center>
              </div>
            </div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-12 col-xl-12">
              <table class="fronttable">
                <tr>
                  <td class="tdtext">
                    <div class="text">
                      Lila's work has been highly praised and she looks forward to hearing from you and working with you in anyway that would be helpful. For any further information, you can contact Lila at bridgeXngs@aol.com.<br><br>

                      <center>She lives by this quote from Gibran:<br>
                      "WORK IS LOVE MADE VISIBLE"</center>
                    </div>
                  </td>
                  <td class="tdpic">
                    <div class="pic">
                      <img src="sites/all/themes/bootstrap/bridgestrap/images/about4.jpg" width="300px" height="224px">
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </section>

        <!-- front links for small only -->
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">
          <div class="frontlinks">
            <a href="thehealingfountain">The Healing Fountain</a><br />
            <a href="poempuzzle">Poem Puzzle</a><br />
            <a href="journalexperiment">Notes from the Journal of a Poetry Therapist</a><br />
            <a href="photographicview">Photographic View</a><br />
            <a href="lostpoems">In Search of a Lost Poem</a><br />
            <a href="findingtherightpoem">Finding the Right Poem</a><br />
            <a href="quotes">Favorite Quotes</a><br />
            <a href="training">Training</a>;<br />
            <a href="wordswordswords">For Love of Words</a><br />
            <a href="successfailure">Success/Failure: Day/Night</a><br />
            <a href="allenginsberg">Allen Ginsberg</a>.`<br />
            <a href="beyondwords">Beyond Words</a><br />
            <a href="links">Moving Along and Linking</a><br />
          </div>
        </div>

        <section id="front2">
          <div class="hidden-xs hidden-sm col-md-12 col-lg-12 col-xl-12">
            <div class="front2bg">
              <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                  <table class="fronttable3">
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
                            <b>bridgeXngs Poetry Center</b> is dedicated to the therapeutic value of poetry and literature. She is the founder of the International Academy for Poetry Therapy (iaPOETRY.org). She was a past president of The National Association for Poetry Therapy (NAPT) and has been registered as a Poetry Therapist and a Mentor/Supervisor. <br>
                            Subsequently she left that organization to create a new credentialing body for poetry therapy called the International Academy for Poetry Therapy. She is also a retired School Psychologist, a New York State Licensed Educator, and a Certified Alcohol and Substance Abuse Counselor (Emeritus). She has literary, photography and art projects in progress. In order to experience poetry therapy first hand or for information on presentations, courses, poetry circles, and training opportunities with Lila for the credential of Poetry Therapy Practitioner (PTP) or to train to become a mentor, contact Lila at bridgeXngs@aol.com.
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
        </div>
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hidden-xl">
          <div class="front2bg">
            <div class="row">
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <table class="fronttable3">
                <td>
                <br><br><br><div class="poem-td-sm poem-sm">
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
                </div>
              </td>
              </table>
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
                          <b>bridgeXngs Poetry Center </b> is dedicated to the therapeutic value of poetry and literature. She is the founder of the International Academy for Poetry Therapy (iaPOETRY.org). She was a past president of The National Association for Poetry Therapy (NAPT) and has been registered as a Poetry Therapist and a Mentor/Supervisor. <br>
                          Subsequently she left that organization to create a new credentialing body for poetry therapy called the International Academy for Poetry Therapy. She is also a retired School Psychologist, a New York State Licensed Educator, and a Certified Alcohol and Substance Abuse Counselor (Emeritus). She has literary, photography and art projects in progress. In order to experience poetry therapy first hand or for information on presentations, courses, poetry circles, and training opportunities with Lila for the credential of Poetry Therapy Practitioner (PTP) or to train to become a mentor, contact Lila at bridgeXngs@aol.com.
                        </div>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
              </div>
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
