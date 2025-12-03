<?php

$name = 'Влад';      // Ваше имя в одинарных кавычках
$age = 20;           // Ваш возраст
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
			line-height: 1.6;
		}
		h1 {
			color: #333;
			border-bottom: 2px solid #007bff;
			padding-bottom: 10px;
		}
		.php-block {
			background-color: #f8f9fa;
			padding: 15px;
			border-left: 4px solid #007bff;
			margin: 10px 0;
			border-radius: 0 5px 5px 0;
		}
		.info {
			background-color: #e7f3ff;
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
		}
		.note {
			background-color: #fff3cd;
			padding: 10px;
			margin: 10px 0;
			border-radius: 5px;
			border-left: 4px solid #ffc107;
		}
	</style>
</head>
<body>
	<h1>Переменные и вывод</h1>
	
	<div class="note">
		<h3>ЗАДАНИЕ 2</h3>
		<p>- Выведите с помощью echo фразу "Меня зовут: $name", например: 'Меня зовут: Иван'.</p>
		<p>- Выведите фразу "Мне $age лет", например: 'Мне 20 лет'.</p>
		<p>- Выведите информацию о типе переменных $name и $age.</p>
		<p>- Удалите переменные $name и $age.</p>
		<p>- Измените код так, чтобы каждая фраза начиналась с новой строки.</p>
		<p>- Изолируйте код PHP от HTML-разметки.</p>
	</div>
	
	<div class="info">
		<h3>Решение задания 2:</h3>
		<div class="php-block">
			<?php
			// ЗАДАНИЕ 2 - решение
			
			// 1. Вывод фразы с именем
			echo "Меня зовут: $name<br>";
			
			// 2. Вывод фразы с возрастом
			echo "Мне $age лет<br><br>";
			
			// 3. Вывод информации о типе переменных
			echo "Информация о типах переменных:<br>";
			echo "Тип переменной \$name: " . gettype($name) . "<br>";
			echo "Тип переменной \$age: " . gettype($age) . "<br><br>";
			
			// 4. Дополнительная информация о переменных
			echo "Дополнительная информация:<br>";
			echo "Длина имени: " . strlen($name) . " символов<br>";
			echo "Значение переменной \$name: '$name'<br>";
			echo "Значение переменной \$age: $age<br><br>";
			
			// 5. Проверка существования переменных перед удалением
			echo "Проверка перед удалением:<br>";
			echo "Переменная \$name существует: " . (isset($name) ? 'Да' : 'Нет') . "<br>";
			echo "Переменная \$age существует: " . (isset($age) ? 'Да' : 'Нет') . "<br><br>";
			
			// 6. Удаление переменных
			unset($name);
			unset($age);
			
			// 7. Проверка после удаления
			echo "Проверка после удаления:<br>";
			echo "Переменная \$name существует: " . (isset($name) ? 'Да' : 'Нет') . "<br>";
			echo "Переменная \$age существует: " . (isset($age) ? 'Да' : 'Нет') . "<br>";
			?>
		</div>
	</div>
	
	<hr>
	
	<div class="info">
		<h3>Дополнительные примеры работы с переменными:</h3>
		<div class="php-block">
			<?php
			// Создаем новые переменные для дополнительных примеров
			$new_name = 'Мария';
			$new_age = 30;
			$city = 'Москва';
			$salary = 50000.50;
			$is_working = true;
			
			echo "<strong>Дополнительные примеры:</strong><br><br>";
			
			// Разные способы вывода
			echo "1. Имя: $new_name, Возраст: $new_age<br>";
			echo '2. Имя: ' . $new_name . ', Возраст: ' . $new_age . '<br>';
			echo "3. Город: {$city}, Зарплата: {$salary} руб.<br>";
			
			// Вывод с использованием printf
			printf("4. Имя: %s, Возраст: %d лет<br>", $new_name, $new_age);
			
			// Вывод булевой переменной
			echo "5. Работает: " . ($is_working ? 'Да' : 'Нет') . "<br>";
			
			// Проверка и вывод типов
			echo "<br><strong>Типы переменных:</strong><br>";
			echo "Тип \$new_name: " . gettype($new_name) . "<br>";
			echo "Тип \$new_age: " . gettype($new_age) . "<br>";
			echo "Тип \$city: " . gettype($city) . "<br>";
			echo "Тип \$salary: " . gettype($salary) . "<br>";
			echo "Тип \$is_working: " . gettype($is_working) . "<br>";
			?>
		</div>
	</div>
	
	<div class="note">
		<h3>Объяснение кода:</h3>
		<ul>
			<li><strong>gettype()</strong> - функция, возвращающая тип переменной</li>
			<li><strong>unset()</strong> - функция для удаления переменной</li>
			<li><strong>isset()</strong> - проверяет, существует ли переменная</li>
			<li><strong>strlen()</strong> - возвращает длину строки</li>
			<li><strong>printf()</strong> - выводит отформатированную строку</li>
			<li>Конструкция <strong>$condition ? $a : $b</strong> - тернарный оператор</li>
		</ul>
		<p><strong>Важно:</strong> В PHP точка (.) используется для конкатенации (соединения) строк.</p>
	</div>
	
	<hr>
	
	<div class="php-block">
		<h3>Проверка знаний:</h3>
		<?php
		// Тестовые задания для самопроверки
		echo "<strong>Попробуйте решить:</strong><br><br>";
		
		// Задача 1
		$a = 10;
		$b = 5;
		$result1 = $a + $b;
		echo "1. \$a = 10, \$b = 5. Сумма: " . $result1 . "<br>";
		
		// Задача 2
		$text1 = "Hello";
		$text2 = "World";
		$result2 = $text1 . " " . $text2;
		echo "2. Объединение строк: " . $result2 . "<br>";
		
		// Задача 3
		$x = 15;
		$y = 3;
		$result3 = $x / $y;
		echo "3. Деление 15 на 3: " . $result3 . "<br>";
		?>
		
		<p><strong>Ответы на вопросы:</strong></p>
		<ol>
			<li>Какие типы данных вы знаете в PHP?</li>
			<li>Чем отличается одинарная кавычка от двойной?</li>
			<li>Для чего нужна функция unset()?</li>
		</ol>
	</div>
	
	<footer style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ccc;">
		<p><strong>Файл:</strong> /home/f1199983/domains/f1199983.xsph.ru/public_html/lab1/index.php</p>
		<p><strong>Дата выполнения:</strong> <?php echo date('d.m.Y H:i:s'); ?></p>
		<p><strong>Версия PHP:</strong> <?php echo phpversion(); ?></p>
	</footer>
</body>
</html>