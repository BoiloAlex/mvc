<?php
	session_start();
	if (! isset($_POST['name']) 
		|| $_POST['name'] == '' 
		|| $_POST['name'] == null){
		$_SESSION['error'] = 'empty field';
		header("Location: step1.php");
	} else{
		$_SESSION['name'] = $_POST['name'];
	}

	if (!is_array($_SESSION['path'])){
		$_SESSION['path'] = [];
	}
	array_push($_SESSION['path'], $_SERVER['PHP_SELF']);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2st step</title>
</head>
<body>
	<p style="white-space: pre;">
задание I. 
	Создайте три страницы с формами, содержащими
	по одному полю ввода на стр. Обоаботчик
	каждой последующей фопмы будет вести на след.стр. 
	На первой странице спросим имя, на второй фамилию, 
	на третьей возраст, а на четвертой выведите все данные 
	используя сессию. 
Задание 2.
	Создайте в сессии массив для хранения всех посещенных 
	страниц и сохраните з качестве его очередного элемента
	путь к текущей странице.
	Выведите в цикле список всех посещенных пользователем страниц
	<a href="http://magnoli.ru/zd2.php">http://magnoli.ru/zd2.php</a>
	</p>
	<h2>step2</h2>
	<?php
		if($_SESSION['error'] != null){
			echo '<p style="color: red">';
			echo $_SESSION['error'];
			unset($_SESSION['error']);
			echo '</p>';
		}
	 ?>
	<form action="step3.php" method="POST">
		<input type="text" name="lastName" placeholder="Фамилия">
		<input type="submit" value="Next">
	</form>
</body>
</html>