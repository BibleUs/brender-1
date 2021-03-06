<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>brender - friendly render farm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <script src="<?php echo(JS); ?>/jquery-1.7.2.min.js"></script>
    <script src="<?php echo(JS); ?>/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> -->
    <script src="<?php echo(JS); ?>/jquery.dataTables.min.js"></script>
    <script src="<?php echo(JS); ?>/custom.brender.js"></script>
    <script src="<?php echo(JS); ?>/jquery.brender.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo(CSS); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo(CSS); ?>/bootstrap-responsive.min.css" rel="stylesheet">
<!--     <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> -->
    <link href="<?php echo(CSS); ?>/brender.css" rel="stylesheet">
    
    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo(ICO); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo(ICO); ?>/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo(ICO); ?>/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo(ICO); ?>/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo(ICO); ?>/apple-touch-icon-57-precomposed.png">    
  </head>

  <body>
  	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo(__WWW_PATH); ?>/">brender</a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="active"><a href="<?php echo(__WWW_PATH); ?>/">Overview</a></li>
              <li><a href="<?php echo(__WWW_PATH); ?>/clients/">Clients</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="span2">
          <div class="well side-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Rendering</li>
              <li <?php echo ($current_page == 'overview') ? 'class="active"' : ""; ?>>
                <a href="<?php echo(__WWW_PATH); ?>/">Overview</a>
              </li>
              <li <?php echo ($current_page == 'clients') ? 'class="active"' : ""; ?>>
                <a href="<?php echo(__WWW_PATH); ?>/clients/">Clients</a>
              </li>
              <li <?php echo ($current_page == 'jobs') ? 'class="active"' : ""; ?>>
                <a href="<?php echo(__WWW_PATH); ?>/jobs/">Jobs</a>
              </li>
              <li <?php echo ($current_page == 'orders') ? 'class="active"' : ""; ?>>
                <a href="#">Orders</a>
              </li>
              <li <?php echo ($current_page == 'job') ? 'class="active"' : ""; ?>>
                <a href="#">New Job</a>
              </li>
              <li class="nav-header">Tasks</li>
              <li <?php echo ($current_page == 'shots') ? 'class="active"' : ""; ?>>
                <a href="<?php echo(__WWW_PATH); ?>/shots/">Shots</a>
              </li>
              <li <?php echo ($current_page == 'sequences') ? 'class="active"' : ""; ?>>
                <a href="<?php echo(__WWW_PATH); ?>/sequences/">Sequences</a>
              </li>
              <li class="nav-header">Stats</li>
              <li><a href="#">Server status</a></li>
              <li><a href="#">Render times</a></li>
              <li class="nav-header">Settings</li>
              <li><a href="#">Server</a></li>
              <li><a href="<?php echo(__WWW_PATH); ?>/projects/">Projects</a></li>
              <li><a href="#">Render configs</a></li>
              <li><a href="#">Logs</a></li>
            </ul>
          </div>
      </div>
      <div class="span10">