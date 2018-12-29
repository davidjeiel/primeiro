<?php require_once "class/autoload.php"; ?>
<!doctype html>
<html>
	<head>
		<?php $home = get_template_directory_uri(); ?>
		<meta charset="utf-8">
		<title>
			<?php  get_titulo(); ?>
		</title>

		<!--CSS-->
			<link rel="stylesheet" href="<?= $home ?>/assets/css/reset.css">
			<link rel="stylesheet" href="<?= $home; ?>/assets/css/comum.css">
			<link rel="stylesheet" href="<?= $home; ?>/assets/css/header.css">
			<link rel="stylesheet" href="<?= $home; ?>/assets/css/bootstrap.css">
			<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
			<link rel="stylesheet" href="<?= $home; ?>/assets/css/<?= $css_escolhido; ?>.css">

		<!--JavaScript-->
			<script src="<?= $home; ?>/assets/js/jquery-3.3.1.js"></script>
			<script src="<?= $home; ?>/assets/js/bootstrap.js"></script>
			<script src="<?= $home; ?>/assets/js/custom.js"></script>
		<?php	wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="header">
				<?php $args = array( 'theme_location' => 'header-menu');?>
				<div class="header-item">
					<?= wp_nav_menu( $args ); ?>
				</div>
			</div>
		</header>