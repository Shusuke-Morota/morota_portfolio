<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHUSUKE_MOROTA_PORTFOLIO</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="inner">
      <h1 class="logo">
        <a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="SHUSUKE MOROTA PORTFOLIO">
        </a>
      </h1>
      <button class="drawerToggle js-drawerToggle" type="button">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="navigation js-navigation">
        <ul class="list">
          <li class="item">HOME</li>
          <li class="item">ABOUT</li>
          <li class="item">WORKS</li>
          <li class="item">SKILLS</li>
          <li class="item">CONTACT</li>
        </ul>
      </nav>
    </div>
  </header>
