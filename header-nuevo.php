<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $titulo_principal; ?></title>
  <!-- wordpress header includes -->
  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,500;0,700;0,900;1,500;1,700;1,900&family=Noto+Sans+JP:wght@500;700&family=Oswald:wght@500&family=Sintony:wght@400;700&display=swap" rel="stylesheet">

</head>
<body <?php body_class(); ?>>

  <header>
    <h1 class="text-primary">Header</h1>
  </header>