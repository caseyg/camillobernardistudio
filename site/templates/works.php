<?php snippet('header') ?>
<div class="sceneElement" data-viewport="1">
<?php foreach($pages->find('/works')->children() as $subpage): ?>
	<a href="<?php echo $subpage->url() ?>">
		<img width="33%" style="float:left;" src="<?php echo $subpage->images()->first()->url() ?>">
	</a>
<?php endforeach ?>

<?php snippet('footer') ?>