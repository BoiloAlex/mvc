<?php
	if (! isset($_COOKIE['count'])) {
		setcookie("count",1,time()+60*60*24*30);
	} else {
		setcookie("count",$_COOKIE['count'] + 1,time()+60*60*24*30);
	}

	$last_time = $_COOKIE['time'];
	$time = time();
	setcookie("time",$time,time()+60*60*24*30);

	$dt = new DateTime();
	$count =isset($_COOKIE['count']) ? $_COOKIE['count'] : 0;
	echo 'last_time = ' . date('d-M-Y H:i:s', $last_time);
	echo '<br>';
	echo 'count = ' . $count;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cookie</title>
	<!-- <script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script> -->
</head>
<body>
	<p style="white-space: pre;">
	ЗАДАНИЕ 1 
	+ Инициализируйте переменную для подсчета количества посещений 
	+ Если соответствующие данные передавались через куки сохраняйте их в эту переменную 
	+ Нарастите счетчик посещений 
	+ Инициализируйте переменную для хранения значения последнего посещения страницы 
	- Если соответствующие данные передавались из куки, отфильтруйте их и сохраните в эту переменную 
	- Установите соответствующие куки 
	ЗАДАНИЕ 2 
	- выводите информацию о количестве 
	- посещений и дате последнего посещения 
	<a href="http://magnoli.ru/zd1.php" target="_blank">http://magnoli.ru/zd1.php</a>
	</p>

</body>
</html>