<?php snippet('header') ?>
<header class="scene-nav">
    <?php snippet('nav') ?>
</header>
<div class="drawer scene-drawer"></div>
<div class="page-content scene-main scene-main--fadein" data-viewport="0">
  <article>
		<div class="work" id="<?php echo $page->slug() ?>">
			<h2 data-anchor-target="#<?php echo $page->slug() ?>" data-top="opacity:0;display:!none;"  data--1p-top="opacity:0;display:!table;" data--10p-top="opacity:1;display:!table;" data--50p-top="opacity:1;display:!table;" data--75p-top="opacity:0;display:!none;"><span><?php echo html($page->title()) ?></span></h2>
			<?php foreach($page->images()->sortBy('Sort') as $image): ?>
				<div class="image-container" style="max-width:<?php echo $image->width() ?>px;">
					<figure class="ratio-box" style="padding-bottom:<?php echo $image->height()/$image->width()*100 ?>%">
						<img class="lazyload" data-src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>">
					</figure>
				</div>
			<?php endforeach ?>
		</div>
  </article>
<?php snippet('footer') ?>
