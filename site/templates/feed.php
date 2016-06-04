<?php snippet('header') ?>
<header class="scene-nav">
		<?php snippet('nav') ?>
</header>
<div class="drawer scene-drawer"></div>
<div class="scene-main scene-main--fadein" data-viewport="0">
	<?php if (param('tag')): ?>
		<article>
			<h1><?php echo param('tag'); ?></h1>
		</article>
		<?php foreach($pages->find('/works')->children() as $subpage): ?>
			<?php if($subpage->images()->filterBy('tags', param('tag'), ',')->count() > 0): ?>
				<a href="<?php echo $subpage->url() ?>" class="work" id="<?php echo $subpage->slug() ?>">
					<h2 data-anchor-target="#<?php echo $subpage->slug() ?>" data-top="opacity:0;" data--50-top="opacity:1;" data--500-top="opacity:1;" data--1000-top="opacity:0;"><?php echo html($subpage->title()) ?></h2>
					<?php foreach($subpage->images()->filterBy('tags', param('tag'), ',') as $image): ?>
						<figure>
							<img src="<?php echo $image->url() ?>">
						</figure>
					<?php endforeach ?>
				</a>
			<?php endif ?>
		<?php endforeach ?>
	<?php else: ?>
		<?php foreach($pages->find('/works')->children() as $subpage): ?>
			<a href="<?php echo $subpage->url() ?>" class="work" id="<?php echo $subpage->slug() ?>">
				<h2 data-anchor-target="#<?php echo $subpage->slug() ?>" data-top="opacity:0;" data--50-top="opacity:1;" data--500-top="opacity:1;" data--1000-top="opacity:0;"><?php echo html($subpage->title()) ?></h2>
				<?php foreach($subpage->images() as $image): ?>
					<figure>
						<img src="<?php echo $image->url() ?>">
					</figure>
				<?php endforeach ?>
			</a>
		<?php endforeach ?>
	<?php endif ?>
<?php snippet('footer') ?>
