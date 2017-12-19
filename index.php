<?php 
if (isset($_GET['type'])){
	echo $_GET['type'];
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
</head>
<body>
	<ol>
		<li><a href="01.ajax.php">ajax</a></li>
		<li><a href="02.cookie.php">cookie</a></li>
		<li><a href="03session/step1.php">session</a></li>
		<li><a href="04guestBook/">DB - guestBook</a> (<a href="http://theory.phphtml.net/tasks/php/practice/miniproekty-php-dlya-novichkov.html" target="_blank">Урок 1</a>)</li>
	</ol>
</body>
</html>