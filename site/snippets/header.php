<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" type="text/css" href="/assets/css/MyFontsWebfontsKit.css">
        <link rel="stylesheet" href="/assets/css/default.css">
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <div class="m-scene" id="main">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header>
          <div>
            <h1><a href="/" data-target="0"><img src="/assets/images/logo.svg" alt="Camillo Bernardi Studio"></a></h1>
            <?php snippet('nav') ?>
          </div>
        </header>
