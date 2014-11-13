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
					if(!isset($_GET["id"])) {
						$id = 1;
					} else {
						$id = $_GET["id"];
					}
					$result = mysql_query("SELECT * FROM text_blog WHERE id='$id'") or die (mysql_error());
					$data = mysql_fetch_array($result);
					do {
						printf('
							<div>
								<h1>%s</h1>
								<p>%s</p>
							</div>
							<form class="php-button" action="blog.php">
							    <input type="submit" value="Back to blog">
							</form>
						', $data["title"], $data["article"]);
					}
					while($data = mysql_fetch_array($result));
				?>
			</div>
		</div>
	</div>
</body>