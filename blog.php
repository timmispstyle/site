<?php 
	mysql_connect("localhost", "u705950763_user", "user0000") or die ("Ошибка подключения к серверу:".mysql_error ());
	mysql_select_db("u705950763_text") or die ("Ошибка подключения к  базе данных:".mysql_error());
?>
<!DOCTYPE html>
<head>
	<title>timmi_sp_style</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class = "page">
		<a href="index.php">
			<div class="page-header">
				<div class="title-header">
					<h1>Журавлёв Тимофей</h1>
				</div>
				<div class= "eng-name">Zhuravlyov Timofey / timmi_sp_style</div>
			</div>
		</a>

		<div class= "menu-container">
			<div id="menu">
				<ul>
					<li><a href="blog.php">Блог</a></li>
					<li><a href="about.php">Обо мне</a></li>
					<li><a href="#">Другое</a></li>
				</ul>
			</div>
		</div>

		<div class= "page-body">
			<div class= "php-container">
				<?php
					$result = mysql_query("SELECT * FROM text_blog ORDER BY id DESC") or die (mysql_error());
					$data = mysql_fetch_array($result);
					do {
						printf('
							<div class="php-title">
								%s
							</div>
							<div class= "php-article-photo">
								<img src="%s">
							</div>
							<div class= "php-article-text">
								<p>
									%s
								</p>
							</div>
							<form class="php-button" action="view.php?id=%s">
							    <input type="submit" value="Read">
							</form>
							<div style="clear:both;"></div>
						', $data["title"], $data["image"], $data["small"], $data["id"]);
					}
					while($data = mysql_fetch_array($result));
				?>
			</div>
		</div>
	</div>
</body>