<?php snippet('header') ?>
<div class="sceneElement" data-viewport="0">
<article>
  <h1><?php echo $page->title() ?></h1>
	<?php echo $page->text()->kt() ?>
  <?php foreach($page->images() as $image): ?>
    <figure>
      <img src="<?php echo $image->url() ?>">
    </figure>
  <?php endforeach ?>

</article>

<?php snippet('footer') ?>
