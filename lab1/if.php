<?php

//1
$age = 35; // Произвольное числовое значение
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкции if-elseif-else</title>
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	
	<p>Текущий возраст: <?php echo $age; ?></p>
	
	<?php

	
	//2 
	if ($age >= 18 && $age <= 59) {
		// Возраст от 18 до 59 включительно
		echo '<p>Вам ещё работать и работать</p>';
	} elseif ($age > 59) {
		// Возраст больше 59
		echo '<p>Вам пора на пенсию</p>';
	} elseif ($age >= 1 && $age <= 17) {
		// Возраст от 1 до 17 включительно
		echo '<p>Вам ещё рано работать</p>';
	} else {
		// Все остальные случаи
		echo '<p>Неизвестный возраст</p>';
	}
	?>
	
</body>
</html>