<?php
namespace MyProject\Classes;

use MyProject\Classes\User;

/**
 * Класс SuperUser представляет администратора системы.
 * 
 * Наследует от класса User и добавляет функциональность роли.
 * @package MyProject\Classes
 * @extends User
 * @version 1.0
 */
class SuperUser extends User {
    /**
     * Роль пользователя в системе (например: администратор, модератор).
     * @var string
     */
    public $role;

    /**
     * Конструктор класса SuperUser.
     * 
     * @param string $name Имя суперпользователя
     * @param string $login Логин суперпользователя
     * @param string $password Пароль суперпользователя
     * @param string $role Роль суперпользователя
     */
    public function __construct($name, $login, $password, $role) {
        parent::__construct($name, $login, $password);
        $this->role = $role;
    }

    /**
     * Возвращает расширенную информацию о суперпользователе.
     * 
     * Переопределяет метод родительского класса, добавляя информацию о роли.
     * @return array Ассоциативный массив с данными суперпользователя
     * @see User::getInfo()
     */
    public function getInfo() {
        $info = parent::getInfo();
        $info['role'] = $this->role;
        return $info;
    }
}
