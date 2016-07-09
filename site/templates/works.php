<?php snippet('header') ?>
<header class="scene-nav scene-nav--gray scene-nav--fadegray">
		<?php snippet('nav') ?>
</header>
<div class="drawer drawer--open scene-drawer">
	<div>
		<?php foreach($pages->find('/works')->children()->visible() as $subpage): ?>
			<a class="WorksThumb" href="<?php echo $subpage->url() ?>" style="background-image:url('<?php echo $subpage->images()->sortBy('Sort')->first()->resize(400)->url() ?>');">
				<span><?php echo $subpage->title() ?></span>
			</a>
		<?php endforeach ?>
	</div>
	<a class="back" href="/">&larr;</a>
<?php snippet('footer') ?>
