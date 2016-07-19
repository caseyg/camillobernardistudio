<?php snippet('header') ?>

<div class="page__drawer"></div>
<div class="page__content">
  <div class="container">
		<div class="work" id="<?php echo $page->slug() ?>">
			<h2 class="work__header">
        <div class="title">
          <?php if ($page->work()->isNotEmpty()): ?>
            <span class="title__work"><?php echo $page->work()->kt() ?></span>
          <?php endif; ?>

          <?php if ($page->client()->isNotEmpty()): ?>
            <span class="title__client"><?php echo $page->client()->kt() ?></span>
          <?php endif; ?>

          <?php if ($page->optional()->isNotEmpty()): ?>
            <span class="title__optional"><?php echo $page->optional()->kt() ?></span>
          <?php endif; ?>
        </div>
      </h2>
			<?php foreach($page->images()->sortBy('Sort') as $image): ?>
				<div class="image-container" style="max-width:<?php echo $image->width() ?>px;">
					<figure class="ratio-box" style="padding-bottom:<?php echo $image->height()/$image->width()*100 ?>%">
						<img class="lazyload"
              data-src="<?php echo $image->width(480)->url() ?>"
              data-srcset="<?php echo $image->width(480)->url() ?> 480w,
                <?php echo $image->width(768)->url() ?> 768w,
                <?php echo $image->url() ?> 1200w"
              width="<?php echo $image->width() ?>"
              height="<?php echo $image->height() ?>">
					</figure>
				</div>
			<?php endforeach ?>
		</div>
  </div>
</div>
<?php snippet('footer') ?>
