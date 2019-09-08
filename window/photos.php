<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/base.css" />

<link href="css/photos/photos.css" rel="stylesheet">
<?php include 'head.php';?>

			<style>
			.js .grid__item-wrap,.js .grid__item-year,.js .grid__item-title {
				opacity: 1;
			}
		</style>
</head>

<body>
<?php include 'navigation.php';?>
<?php include 'page/gallerybuffer.php';?>
<div class="pages-stack">
		
<?php $pageStyle="page"?>

<?php include 'page/photosfiles.php';?>

<?php $pageStyle="page page--inactive"?>

<?php include 'page/aboutme.php';?>

<?php include 'page/blogposts.php';?>
</div>

<?php include 'footer.php';?>
</body>
</head>
