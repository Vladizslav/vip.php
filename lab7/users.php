<?php
/**
 * Демонстрационный скрипт для лабораторной работы №7
 * 
 * Показывает создание объектов классов User и SuperUser,
 * использование автозагрузки классов и вывод информации.
 * @package MyProject
 * @author Владислав Васильевич
 * @version 1.0
 */

/**
 * Автозагрузчик классов PHP (функция обратного вызова)
 * 
 * Автоматически подключает файлы классов при их использовании
 * на основе пространств имён. Преобразует обратные слеши в прямые
 * для корректного формирования пути к файлу.
 * 
 * @param string $class Полное имя класса с пространством имён
 * @throws Exception Если файл класса не найден
 * @return void
 */
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class);
    $file = __DIR__ . '/' . $classPath . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Файл класса не найден: $file");
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

/**
 * Создание объектов пользователей
 * 
 * Создаёт экземпляры классов User и SuperUser для демонстрации
 * работы объектно-ориентированного подхода.
 * 
 * @var User $user1 Первый обычный пользователь
 * @var User $user2 Второй обычный пользователь
 * @var SuperUser $superUser Суперпользователь с административными правами
 */
$user1 = new User("Иван Иванов", "ivan", "12345");
$user2 = new User("Анна Петрова", "anna", "54321");
$superUser = new SuperUser("Администратор", "admin", "adminpass", "Главный");

/**
 * Получение информации о пользователях
 * 
 * Вызывает метод getInfo() для каждого созданного объекта,
 * который возвращает массив с данными пользователя.
 * 
 * @var array $userData1 Данные первого пользователя
 * @var array $userData2 Данные второго пользователя
 * @var array $superUserData Данные суперпользователя с ролью
 */
$userData1 = $user1->getInfo();
$userData2 = $user2->getInfo();
$superUserData = $superUser->getInfo();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о пользователях</title>
</head>
<body>
    <h1>Информация о пользователях</h1>

    <div class="user">
        <h3><?= htmlspecialchars($userData1['name']) ?></h3>
        <p><strong>Логин:</strong> <?= htmlspecialchars($userData1['login']) ?></p>
    </div>

    <div class="user">
        <h3><?= htmlspecialchars($userData2['name']) ?></h3>
        <p><strong>Логин:</strong> <?= htmlspecialchars($userData2['login']) ?></p>
    </div>

    <h2>Суперпользователь</h2>
    <div class="superuser">
        <h3><?= htmlspecialchars($superUserData['name']) ?></h3>
        <p><strong>Логин:</strong> <?= htmlspecialchars($superUserData['login']) ?></p>
        <p><strong>Роль:</strong> <?= htmlspecialchars($superUserData['role']) ?></p>
    </div>
</body>
</html>
