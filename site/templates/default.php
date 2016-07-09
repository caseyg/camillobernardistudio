<?php snippet('header') ?>
<header class="scene-nav">
    <?php snippet('nav') ?>
</header>
<div class="drawer scene-drawer"></div>
<div class="page-content scene-main scene-main--fadein" data-viewport="0">
  <article>
    <h1 data-start="opacity:1;" data-200-start="opacity:0;"><?php echo $page->title() ?></h1>
  	<?php echo $page->text()->kt() ?>
    <?php foreach($page->images()->sortBy('Sort') as $image): ?>
      <div class="image-container" style="max-width:<?php echo $image->width() ?>px;">
        <figure class="ratio-box" style="max-width:<?php echo $image->width() ?>;padding-bottom:<?php echo $image->height()/$image->width()*100 ?>%">
          <img class="lazyload" data-src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
        </figure>
      </div>
    <?php endforeach ?>
  </article>
<?php snippet('footer') ?>
