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
	<?php
	/**
	 * Created by PhpStorm.
	 * User: lexan
	 * Date: 06.07.2017
	 * Time: 12:50
	 */
	var_dump($_GET);
	?>
	<p>
		php уровень 2: За 20 минут создать 3 кнопки с именами: круг, квадрат, треугольник. По клику на кнопку
		без перезагрузки страницы прям тут (над кнопками) выводить нужную картинку: зеленый круг, желтый квадрат,
		синий треугольник. При этом следующая картинка должна сменяться предыдущий. То есть если мы нажали на круг -
		появился круг. Если нажали на квадрат - пропадает круг, и на его месте появляется квадрат!.
	</p>
	<?php echo rand() ?>
	<form action="/" method="POST">
		<div class="placeholder" style="width: 200px; height: 200px;">
			
		</div>
		<button name="type" value="4sq">квадрат</button>
		<button name="type" value="0sq">круг</button>
		<button name="type" value="3sq">треугольник</button>
	</form>
	<script>
		$(document).ready(function(){
			$('form button').click(function(e){
				e.preventDefault();
				$.ajax({
					url: '/',
					method: 'GET',
					data: {
						type: $(this).val()
					},
					success: function (data) {
						console.log(data);
						$('.placeholder').html(data);
					}
				});
			});
		})
	</script>
</body>
</html>