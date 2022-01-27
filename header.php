<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Automatic_Spork
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="wp-content/themes/automatic-spork/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css"> 
    <link rel="stylesheet" href="wp-content/themes/automatic-spork/automatic-spork.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <?php the_custom_logo(); ?>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item" href="#about">
          About
        </a>
        <a class="navbar-item" href="#skills">
          Skills
        </a>
        <a class="navbar-item" href="#projects">
          Projects
        </a>
      </div>
    </div>
  </div>
</nav>

<section class="hero has-brand-border--bottom">
  <div class="hero-body">
    <div class="container">
      <div class="columns has-text-centered">
        <div class="column">
          <figure class="image is-128x128 mx-auto is-hidden-touch">
            <img class="is-rounded" src="wp-content/themes/automatic-spork/img/JackOne.jpg">
          </figure>
          <h1 class="title is-light-text mb-3">Hello! I'm <span class="is-brand-text">Jack Stiles</span> </h1>
      	  <p class="subtitle is-light-text">A full-stack developer with a passion for the front-end.</p>
        </div>
      </div>	
    </div>
  </div>

  <div class="hero-foot">
    <div class="container has-text-centered">
      <i class="fas fa-caret-down fa-2x scroll-animation is-light-text"></i>
    </div>
  </div>
</section>