<?php snippet('header') ?>

<div class="page__drawer"></div>
<div class="page__content">
	<div class="container">
		<?php if (param('tag')): ?>

			<?php foreach($pages->find('/works')->children()->visible() as $page): ?>
				<?php if($page->images()->filterBy('tags', param('tag'), ',')->count() > 0): ?>
					<article class="work" id="<?php echo $page->slug() ?>">
						<a href="<?php echo $page->url() ?>" class="work" id="<?php echo $page->slug() ?>">
							<?php foreach($page->images()->filterBy('tags', param('tag'), ',') as $image): ?>
								<div class="image-container" style="max-width:<?php echo $image->width() ?>px;">
									<figure class="ratio-box" style="padding-bottom:<?php echo $image->height()/$image->width()*100 ?>%">
										<img
											class="lazyload"
											data-src="<?php echo $image->width(480)->url() ?>"
											data-srcset="<?php echo $image->width(480)->url() ?> 480w,
				                <?php echo $image->width(768)->url() ?> 768w,
				                <?php echo $image->url() ?> 1200w"
											width="<?php echo $image->width() ?>"
											height="<?php echo $image->height() ?>">
									</figure>
								</div>
							<?php endforeach ?>
						</a>
					</article>
				<?php endif ?>
			<?php endforeach ?>

		<?php else: ?>
			<?php $works = $pages->find('/works')->children()->paginate(5) ?>

			<?php foreach($works as $page): ?>
				<article class="work" id="<?php echo $page->slug() ?>">
					<header class="work__header">
						<a class="header__link" href="<?php echo $page->url() ?>">
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
						</a>
					</header>
					<?php foreach($page->images()->sortBy('Sort') as $image): ?>
						<div class="image-container" style="max-width:<?php echo $image->width() ?>px;">
							<figure class="ratio-box" style="padding-bottom:<?php echo $image->height()/$image->width()*100 ?>%">
								<img
									class="lazyload"
									data-src="<?php echo $image->width(480)->url() ?>"
									data-srcset="<?php echo $image->width(480)->url() ?> 480w,
		                <?php echo $image->width(768)->url() ?> 768w,
		                <?php echo $image->url() ?> 1200w"
									width="<?php echo $image->width() ?>"
									height="<?php echo $image->height() ?>">
							</figure>
						</div>
					<?php endforeach ?>
				</article>
			<?php endforeach ?>

			<?php if($works->pagination()->hasPages()): ?>
			<nav class="pagination">

			  <?php if($works->pagination()->hasNextPage()): ?>
			  <a class="pagination__next" href="<?php echo $works->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
			  <?php endif ?>

			  <?php if($works->pagination()->hasPrevPage()): ?>
			  <a class="pagination__prev" href="<?php echo $works->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
			  <?php endif ?>

			</nav>
			<?php endif ?>

		<?php endif ?>
	</div>
</div>

<?php snippet('footer') ?>
