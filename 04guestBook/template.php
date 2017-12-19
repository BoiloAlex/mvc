<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1>Гостевая книга</h1>
        <?php include 'templates/paging.php'; ?>
		<ul class="comments">
            <?php if (!isset($page_list)){
                $page_list = $result;
            } ?>
            <?php foreach ($page_list as $key => $value):
                ?>
				<li>
					<strong> <?php echo $value['time']; ?></strong>
					<span> <?php echo $value['name'];  ?></span>
					<div class="comment">
						<?php echo $value['content']; ?>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
        <?php include 'templates/paging.php'; ?>
	</div>
	<div class="container">
		<div class="message">
		</div>
		<form action="index.php" class="addComment" method="POST">
			<input type="text" name="name" placeholder="Ваше Имя">
			<textarea name="comment" rows="4" cols="45" placeholder="Ваш отзыв"></textarea>
			<input type="submit" value="Сохранить">
            <input type="hidden" name="action" value="addComment">
		</form>
	</div>
	<script src="js/script.js"></script>
</body>
</html>