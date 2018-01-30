<?php $navs = $pages->visible(); ?>

<header>
	<nav>
		<ul>
			<li>
				<a href="<?= $site->url(); ?>" title="Home">
					Home
				</a>
			</li>
			<?php foreach ($navs as $nav): ?>
				<li>
					<a href="<?= $nav->url(); ?>" title="<?= $nav->title()->html(); ?>">
						<?= $nav->title()->html(); ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</nav>
</header>