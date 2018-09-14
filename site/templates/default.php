<?php snippet('header') ?>
<?php snippet('navigation') ?>

<main data-section="<?= $page->id() ?>">
	<h1><?= $page->title()->html(); ?></h1>
</main>

<?php snippet('footer') ?>
<?php snippet('footer.code') ?>