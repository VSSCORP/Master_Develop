<!DOCTYPE html>
<html>
<head>
<?php include 'head.php';?>

</head>
<body>
<?php include 'navigation.php';?>

<div class="pages-stack">
<?php $pageStyle="page"?>

<?php include 'page/blogposts.php';?>

<?php $pageStyle="page page--inactive"?>

<?php include 'page/home.php';?>
<?php include 'page/aboutme.php';?>

</div>

<?php include 'footer.php';?>
</body>
</head>