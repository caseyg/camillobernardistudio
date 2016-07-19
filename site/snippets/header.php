<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/assets/css/MyFontsWebfontsKit.css">
        <link rel="stylesheet" href="/assets/css/default.css">
    </head>
    <body>
      <div class="m-scene" id="smoothstate">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header class="header--page <?php if ($page->title() == 'About'): ?>header--gray<?php endif; ?>">
          <h1 class="header__title"><a href="/">Camillo Bernardi Studio</h1>
          <nav class="header__nav">
            <ul class="nav__list">
              <li class="list__item"><a class="about <?php if ($page->title() == 'About'): ?>active<?php endif; ?>" href="/about"><span>About</span></a></li>
              <li class="list__item list__item"><a class="feed <?php if ($page->title() == 'Feed'): ?>active<?php endif; ?>" href="/"><span>Feed</span></a></li>
              <li class="list__item"><a class="works <?php if ($page->title() == 'Work'): ?>active<?php endif; ?>" href="/works"><span>Works</span></a></li>
            </ul>
          </nav>
        </header>
