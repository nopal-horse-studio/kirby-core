<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<!-- M E T A -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="<?= $site->keywords()->html() ?>">
	<meta name="description" content="<?= $site->description()->html() ?>">

	<!-- T I T L E -->
	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

	<?= css('assets/css/index.css') ?>

</head>
<body>

