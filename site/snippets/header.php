<!doctype html>
<html class="no-js" lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

	<!-- M E T A -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="keywords" content="<?= $site->seokeywords()->html() ?>">
	<meta name="description" content="<?= $site->seodescription()->html() ?>">

	<!--F A C E B O O K-->
	<meta property="og:url" content="<?= $site->url() ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= $site->title()->html(); ?>">
	<meta property="og:image" content="<?php if ($seothumb = $site->seoimage()->toFile()): echo $seothumb->url(); endif ?>">
	<meta property="og:description" content="<?= $site->seodescription()->html() ?>">
	<meta property="og:site_name" content="<?= $site->title()->html(); ?>">

	<!--T W I T T E R-->

	<!--G O O G L E + -->

	<!--P I N T E R E S T-->

	<!-- T I T L E -->
	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

	<!--F A V I C O N S-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= $site->url(); ?>assets/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= $site->url(); ?>assets/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= $site->url(); ?>assets/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= $site->url(); ?>assets/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= $site->url(); ?>assets/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= $site->url(); ?>assets/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= $site->url(); ?>assets/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= $site->url(); ?>assets/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url(); ?>assets/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?= $site->url(); ?>assets/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url(); ?>assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= $site->url(); ?>assets/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url(); ?>assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- C S S-->
	<?= css('assets/css/main.min.css'.'?v='.$site->versioncss()) ?>

	<!--GOOGLE ANALYTICS-->
	<?php snippet('module/google.analytics',array('site' => $site)) ?>

</head>
<body>


