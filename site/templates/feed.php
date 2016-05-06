<?php snippet('header') ?>

<?php foreach($pages->find('/works')->children() as $subpage): ?>
	<a href="<?php echo $subpage->url() ?>">
		<h2><?php echo html($subpage->title()) ?></h2>
		<?php foreach($subpage->images() as $image): ?>
			<figure>
				<img src="<?php echo $image->url() ?>">				
			</figure>
		<?php endforeach ?>
	</a>
<?php endforeach ?>

<?php snippet('footer') ?>