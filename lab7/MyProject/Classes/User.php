<?php
namespace MyProject\Classes;

/**
 * Класс User представляет базового пользователя системы.
 * 
 * Содержит основные данные пользователя: имя, логин и пароль.
 * @package MyProject\Classes
 * @version 1.0
 */
class User {
    /**
     * Имя пользователя.
     * @var string
     */
    public $name;
    
    /**
     * Логин для входа в систему.
     * @var string
     */
    public $login;
    
    /**
     * Пароль пользователя (защищённое свойство).
     * @var string
     * @access private
     */
    private $password;

    /**
     * Конструктор класса User.
     * 
     * Инициализирует объект пользователя с переданными данными.
     * @param string $name Имя пользователя
     * @param string $login Логин пользователя
     * @param string $password Пароль пользователя
     */
    public function __construct($name, $login, $password) {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * Возвращает информацию о пользователе.
     * 
     * @return array Ассоциативный массив с данными пользователя
     */
    public function getInfo() {
        return [
            'name' => $this->name,
            'login' => $this->login
        ];
    }

    /**
     * Деструктор класса User.
     * 
     * Вызывается при уничтожении объекта, выводит сообщение об удалении.
     * @return void
     */
    public function __destruct() {
        echo "<div class='destruct-message'>Пользователь {$this->login} удалён.</div>";
    }
}
