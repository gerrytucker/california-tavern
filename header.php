<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
  <a id="top"></a>

  <nav class="top-bar show-for-small-only" data-topbar role="navigation">
    <ul class="title-area">
      <li class="name">
        <h1><a href="#top"><?php bloginfo('name'); ?></a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>
  </nav>
  
  <nav class="hide-for-small">
    <div class="row">
      <div class="large-3 columns">
        <h1 id="navheading"><a href="#top">California<br>Tavern</a></h1>
      </div>
      <div class="large-9 columns">
        <ul class="inline-list" id="navitems">
          <li>
            <a href="#beer">Our Beer</a>
          </li>
          <li>
            <a href="#menu">Our Menu</a>
          </li>
          <li>
            <a href="#story">Story</a>
          </li>
          <li>
            <a href="#music">Music</a>
          </li>
          <li>
            <a href="#location">Find Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  