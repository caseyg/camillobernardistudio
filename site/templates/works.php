<?php snippet('header') ?>

<div class="page__drawer page__drawer--open">
	<div class="container">
		<?php foreach($pages->find('/works')->children()->visible() as $page): ?>
			<a class="thumb" href="<?php echo $page->url() ?>" style="background-image:url('<?php echo $page->images()->sortBy('Sort')->first()->resize(400)->url() ?>');">
				<div class="thumb__title">
				  <?php if ($page->work()->isNotEmpty()): ?>
				    <span class="title__work"><?php echo html($page->work()) ?></span>
				  <?php endif; ?>
				  <?php if ($page->client()->isNotEmpty()): ?>
				    <span class="title__client"><?php echo html($page->client()) ?></span>
				  <?php endif; ?>
				</div>
			</a>
		<?php endforeach ?>
	</div>
</div>
<a class="back" href="/">&larr;</a>
<div class="page__content"></div>

<?php snippet('footer') ?>
