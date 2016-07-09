<?php snippet('header') ?>
<header class="scene-nav">
		<?php snippet('nav') ?>
</header>
<div class="drawer drawer--open scene-drawer">
<article>
	<?php echo $page->text()->kt() ?>
</article>
<a class="back" href="/">&larr;</a>
<?php snippet('footer') ?>
