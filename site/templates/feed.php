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
					<h2 data-anchor-target="#<?php echo $subpage->slug() ?>" data-top="opacity:0;" data--10p-top="opacity:1;" data--50p-top="opacity:1;" data--75p-top="opacity:0;"><?php echo html($subpage->title()) ?></h2>
					<?php foreach($subpage->images()->filterBy('tags', param('tag'), ',') as $image): ?>
						<figure>
							<img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
						</figure>
					<?php endforeach ?>
				</a>
			<?php endif ?>
		<?php endforeach ?>
	<?php else: ?>
		<?php foreach($pages->find('/works')->children() as $subpage): ?>
			<div class="work" id="<?php echo $subpage->slug() ?>">
				<h2 data-anchor-target="#<?php echo $subpage->slug() ?>" data-top="opacity:0;display:!none;"  data--1p-top="opacity:0;display:!table;" data--10p-top="opacity:1;display:!table;" data--50p-top="opacity:1;display:!table;" data--75p-top="opacity:0;display:!none;"><span><a href="<?php echo $subpage->url() ?>"><?php echo html($subpage->title()) ?></a></span></h2>
				<?php foreach($subpage->images()->sortBy('Sort') as $image): ?>
					<img class="lazy" data-original="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
				<?php endforeach ?>
			</div>
		<?php endforeach ?>
	<?php endif ?>
<?php snippet('footer') ?>
