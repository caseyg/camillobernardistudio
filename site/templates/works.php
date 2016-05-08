<?php snippet('header') ?>
<div class="sceneElement" data-viewport="1">
<?php foreach($pages->find('/works')->children() as $subpage): ?>
	<a class="WorksThumb" href="<?php echo $subpage->url() ?>">
		<img class="WorksThumb__img" src="<?php echo $subpage->images()->first()->url() ?>">
	</a>
<?php endforeach ?>

<?php snippet('footer') ?>
