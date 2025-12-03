<?php

$day = 3; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция match</title>
</head>
<body>
	<h1>Конструкция match (PHP 8.0+)</h1>
	
	<p>Текущее значение $day: <?php echo $day; ?></p>
	
	<?php
	if (version_compare(PHP_VERSION, '8.0.0') >= 0) {
		// Используем конструкцию match
		$message = match($day) {
			1, 2, 3, 4, 5 => 'Это рабочий день',
			6, 7 => 'Это выходной день',
			default => 'Неизвестный день'
		};
		
		echo '<h3>' . $message . '</h3>';
	} else {
		echo '<p style="color: red;">Конструкция match доступна только в PHP 8.0 и выше</p>';
		echo '<p>Текущая версия PHP: ' . PHP_VERSION . '</p>';
	}
	?>
	
</body>
</html>