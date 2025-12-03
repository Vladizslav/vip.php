<?php
// 1
$day = 3; 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкция switch</title>
</head>
<body>
	<h1>Конструкция switch</h1>
	
	<p>Текущее значение переменной $day: <?php echo $day; ?></p>
	
	<?php

	// 2
	switch ($day) {
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			// Дни с 1 по 5 (понедельник-пятница)
			echo '<p>Это рабочий день</p>';
			break;
			
		case 6:
		case 7:
			// Дни 6 и 7 (суббота и воскресенье)
			echo '<p>Это выходной день</p>';
			break;
			
		default:
			// Все остальные значения
			echo '<p>Неизвестный день</p>';
	}
	?>
	
</body>
</html>