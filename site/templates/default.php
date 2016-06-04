<?php snippet('header') ?>
<header class="scene-nav">
    <?php snippet('nav') ?>
</header>
<div class="drawer scene-drawer"></div>
<div class="page-content scene-main scene-main--fadein" data-viewport="0">
  <article>
    <h1 data-start="opacity:1;" data-200-start="opacity:0;"><?php echo $page->title() ?></h1>
  	<?php echo $page->text()->kt() ?>
    <?php foreach($page->images() as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>">
      </figure>
    <?php endforeach ?>
  </article>
<?php snippet('footer') ?>
