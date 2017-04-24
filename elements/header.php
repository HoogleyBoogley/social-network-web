<?php
	require_once 'php/options.php';
?>
<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="<?php echo $option_siteCharset; ?>">
		<title><?php echo $option_siteTitle; ?></title>

		<!-- Header CSS -->
		<link rel="stylesheet" type="text/css" href="css/header/layout.css">
		<link rel="stylesheet" type="text/css" href="css/header/text.css">
		<link rel="stylesheet" type="text/css" href="css/header/colors.css">

		<!-- Body CSS -->
		<link rel="stylesheet" type="text/css" href="css/body/layout.css">
		<link rel="stylesheet" type="text/css" href="css/body/text.css">
		<link rel="stylesheet" type="text/css" href="css/body/colors.css">

		<!-- Navigation CSS -->
		<link rel="stylesheet" type="text/css" href="css/nav/layout.css">
		<link rel="stylesheet" type="text/css" href="css/nav/text.css">
		<link rel="stylesheet" type="text/css" href="css/nav/colors.css">

		<!-- Custom Fonts -->
		<link rel="stylesheet" type="text/css" href="css/fonts/ui.css">
	</head>
	<body style="margin: 0;">
		<div class="header_bar">
			<div class="header_barContainer">
				<div class="header_barLeft">
					<i class="hb_ui_search"></i>
				</div>
				<div class="header_barCenter">
					<i class="hb_ui_logo"></i>
				</div>
				<div class="header_barRight">
					<i class="hb_ui_music-1"></i>
				</div>
			</div>
		</div>