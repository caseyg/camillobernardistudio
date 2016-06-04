<?php snippet('header') ?>
<header class="scene-nav">
		<?php snippet('nav') ?>
</header>
<div class="drawer drawer--open scene-drawer">
<article>
	<?php echo $page->text()->kt() ?>
</article>
<input type="button" value="&larr;" class="back" onclick="history.back(-1)" />
<?php snippet('footer') ?>
