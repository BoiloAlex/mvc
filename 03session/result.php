<?php
	session_start();
	if (! isset($_POST['age']) 
		|| $_POST['age'] == '' 
		|| $_POST['age'] == null){
		$_SESSION['error'] = 'empty field';
		header("Location: step3.php");
	} else{
		$_SESSION['age'] = $_POST['age'];
	}

	if (!is_array($_SESSION['path'])){
		$_SESSION['path'] = [];
	}
	array_push($_SESSION['path'], $_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<a href="step1.php">start</a>
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
	<h2>result</h2>
	<p>Name: 	<?php echo $_SESSION['name'] ?></p>
	<p>lastName:<?php echo $_SESSION['lastName'] ?></p>
	<p>Age: 	<?php echo $_SESSION['age'] ?></p>
	<p>path: </p>
	<ol>
		<?php 
		foreach ($_SESSION['path'] as $key => $value) {
			echo '<li>'.$value.'</li>';
		}
		?>
	</ol>
</body>
</html>