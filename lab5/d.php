<?php
// Путь к файлу
$file_path = 'db/users.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    
    if (!empty($fname) && !empty($lname)) {
        $line = htmlspecialchars($fname) . ';' . htmlspecialchars($lname) . PHP_EOL;
        
        // Открываем файл для добавления данных
        $file = fopen($file_path, 'a');
        if ($file) {
            fwrite($file, $line);
            fclose($file);
        }
        
        // Перенаправляем, чтобы очистить POST
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>
    <h1>Заполните форму</h1>
    
    <form method="post">
        Имя: <input type="text" name="fname" required><br>
        Фамилия: <input type="text" name="lname" required><br>
        <input type="submit" value="Отправить">
    </form>

    <h2>Сохранённые записи:</h2>
    
    <?php
    if (file_exists($file_path)) {
        $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if (!empty($lines)) {
            echo '<ol>';
            foreach ($lines as $line) {
                echo '<li>' . htmlspecialchars($line) . '</li>';
            }
            echo '</ol>';
        } else {
            echo '<p>Нет записей</p>';
        }
    } else {
        echo '<p>Файл db/users.txt не найден</p>';
    }
    ?>
</body>
</html>