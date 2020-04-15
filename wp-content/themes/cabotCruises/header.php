<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cabot Cruises <?php wp_title(); ?></title>  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

  <div class="headerWrapper">
    <header class="clearfix">
      <figure>
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" alt="logo" srcset="<?php echo get_template_directory_uri(); ?>/images/logo1.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3.png 3x">
      </figure>
      <h1>Cabot Cruises</h1>
      <a id="headerTel" href="tel:123-456-7890">123-456-7890</a>
    </header>
  </div>

  <div class="navWrapper">
    <nav class="clearfix">
      <button id="hamburgerBtn"><span><i>&equiv;</i>OPEN</span> <span><i>&otimes;</i>CLOSE</span></button>
      <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>
      <form action="/">
        <div class="searchBar"><input type="search" name="s" id="searchInput" value="Search...">
        <button class="searchBar" type="submit"><i class="fas fa-search"></i></div></buttpn>
      </form>
    </nav>
  </div>

  <div class="mainWrapper">
    <main>
