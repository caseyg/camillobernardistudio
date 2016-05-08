<?php snippet('header') ?>
<div class="sceneElement" data-viewport="1">
<?php foreach($pages->find('/works')->children() as $subpage): ?>
	<a class="WorksThumb" href="<?php echo $subpage->url() ?>" style="background-image:url('<?php echo $subpage->images()->first()->url() ?>');">
		<span><?php echo $subpage->title() ?></span>
	</a>
<?php endforeach ?>

<?php snippet('footer') ?>
