<!DOCTYPE html>
<html lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

  <title><?php echo __('%sns% Administration', array('%sns%' => $op_config['sns_name'])) ?></title>

  <!-- The styles -->
  <link id="bs-css" href="/opBackendSkinCharismaPlugin/css/bootstrap-cerulean.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-bottom: 40px;
    }
    .sidebar-nav {
      padding: 9px 0;
    }
  </style>
  <link href="/opBackendSkinCharismaPlugin/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="/opBackendSkinCharismaPlugin/css/charisma-app.css" rel="stylesheet">
  <link href="/opBackendSkinCharismaPlugin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
  <link href='/opBackendSkinCharismaPlugin/css/fullcalendar.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/fullcalendar.print.css' rel='stylesheet' media='print'>
  <link href='/opBackendSkinCharismaPlugin/css/chosen.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/uniform.default.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/colorbox.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/jquery.cleditor.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/jquery.noty.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/noty_theme_default.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/elfinder.min.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/elfinder.theme.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/jquery.iphone.toggle.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/opa-icons.css' rel='stylesheet'>
  <link href='/opBackendSkinCharismaPlugin/css/uploadify.css' rel='stylesheet'>

  <?php include_stylesheets() ?>


  <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- The fav icon -->
  <link rel="shortcut icon" href="img/favicon.ico">

</head>
<body id="<?php echo $sf_request->getParameter('module').'_'.$sf_request->getParameter('action') ?>"<?php if (!$sf_user->isAuthenticated()) : ?> class="insecure"<?php endif; ?>>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid">
      <div class="top-nav nav-collapse">
        <ul class="nav">
          <li><h1><?php echo link_to(__('%sns% Administration', array('%sns%' => $op_config['sns_name'])), '@homepage', array('style' => 'color: white;')) ?></h1></li>
          <li><a href="<?php echo app_url_for('pc_frontend', '@homepage', true) ?>" target="_blank"><?php echo __('Visit Site') ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row-fluid">

  <?php if ($sf_user->isAuthenticated()) : ?>
    <div id="menu" class="span2 main-menu-span">
      <div class="well nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
          <li class="nav-header hidden-tablet">メニュー</li>
          <li><?php echo link_to(__('Top page'), '@homepage') ?></li>
          <?php include_component('default', 'sideMenu') ?>
          <li><?php echo link_to(__('Logout'), 'default/logout') ?></li>
        </ul>
      </div>
    </div>
  <?php endif; ?>

  <div id="content" class="span10">
    <?php if (has_slot('submenu')): ?>
      <div>
        <ul id="submenu" class="nav nav-pills">
          <?php include_slot('submenu') ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if (has_slot('title')): ?>
      <h2><?php include_slot('title') ?></h2>
    <?php endif; ?>

    <?php if ($sf_user->hasFlash('error')): ?>
      <div class="alert alert-info">
        <p id="flashError" class="flash"><?php echo __($sf_user->getFlash('error')) ?></p>
      </div>
    <?php endif; ?>
    <?php if ($sf_user->hasFlash('notice')): ?>
      <div class="alert alert-info">
        <p id="flashNotice" class="flash"><?php echo __($sf_user->getFlash('notice')) ?></p>
      </div>
    <?php endif; ?>

    <?php echo $sf_content ?>
    </div>
  </div>
</div>
<?php if ($sf_user->isAuthenticated()): ?>
  <hr />
  <footer style="background: #FFFFFF;">
    <p id="openpne_version" class="pull-right">Powered by OpenPNE <?php echo OPENPNE_VERSION ?></p>
  </footer>
<?php endif; ?>


  <!-- external javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- jQuery -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery-1.7.2.min.js"></script>
  <!-- jQuery UI -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery-ui-1.8.21.custom.min.js"></script>
  <!-- transition / effect library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-transition.js"></script>
  <!-- alert enhancer library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-alert.js"></script>
  <!-- modal / dialog library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-modal.js"></script>
  <!-- custom dropdown library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-dropdown.js"></script>
  <!-- scrolspy library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-scrollspy.js"></script>
  <!-- library for creating tabs -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-tab.js"></script>
  <!-- library for advanced tooltip -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-tooltip.js"></script>
  <!-- popover effect library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-popover.js"></script>
  <!-- button enhancer library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-button.js"></script>
  <!-- accordion library (optional, not used in demo) -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-collapse.js"></script>
  <!-- carousel slideshow library (optional, not used in demo) -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-carousel.js"></script>
  <!-- autocomplete library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-typeahead.js"></script>
  <!-- tour library -->
  <script src="/opBackendSkinCharismaPlugin/js/bootstrap-tour.js"></script>
  <!-- library for cookie management -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.cookie.js"></script>
  <!-- calander plugin -->
  <script src='/opBackendSkinCharismaPlugin/js/fullcalendar.min.js'></script>
  <!-- data table plugin -->
  <script src='/opBackendSkinCharismaPlugin/js/jquery.dataTables.min.js'></script>

  <!-- chart libraries start -->
  <script src="/opBackendSkinCharismaPlugin/js/excanvas.js"></script>
  <script src="/opBackendSkinCharismaPlugin/js/jquery.flot.min.js"></script>
  <script src="/opBackendSkinCharismaPlugin/js/jquery.flot.pie.min.js"></script>
  <script src="/opBackendSkinCharismaPlugin/js/jquery.flot.stack.js"></script>
  <script src="/opBackendSkinCharismaPlugin/js/jquery.flot.resize.min.js"></script>
  <!-- chart libraries end -->

  <!-- select or dropdown enhancer -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.chosen.min.js"></script>
  <!-- checkbox, radio, and file input styler -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.uniform.min.js"></script>
  <!-- plugin for gallery image view -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.colorbox.min.js"></script>
  <!-- rich text editor library -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.cleditor.min.js"></script>
  <!-- notification plugin -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.noty.js"></script>
  <!-- file manager library -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.elfinder.min.js"></script>
  <!-- star rating plugin -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.raty.min.js"></script>
  <!-- for iOS style toggle switch -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.iphone.toggle.js"></script>
  <!-- autogrowing textarea plugin -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.autogrow-textarea.js"></script>
  <!-- multiple file upload plugin -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.uploadify-3.1.min.js"></script>
  <!-- history.js for cross-browser state change on ajax -->
  <script src="/opBackendSkinCharismaPlugin/js/jquery.history.js"></script>
  <!-- application script for Charisma demo -->
  <script src="/opBackendSkinCharismaPlugin/js/charisma.js"></script>

  <?php include_javascripts() ?>
</body>
</html>
