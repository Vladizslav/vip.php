
<?php
require_once 'inc/lib.inc.php';
require_once 'inc/data.inc.php';	

$hour = (int)date('G');
if ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}

// Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'] ?? '')));
switch ($id) {
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
     case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Он-лайн калькулятор';
        $header = 'Калькулятор';
        break;
}    

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<title>Сайт нашей школы</title>-->
  <title><?=$title?></title>
  <link rel="stylesheet" href="inc/style.css">
</head>
<body>
  <header>
    <?php include 'inc/top.inc.php'; ?>
  </header>

  <section>
      

     <h1><?=$header?></h1>

    <?php
switch($id){
	case 'about': 
		include 'inc/about.php';
		break;
	case 'contact':
		include 'inc/contact.php';
		break;
	case 'table':
		include 'inc/table.php';
		break;
	case 'calc':
		include 'inc/calculator.php';
		break;
	default:
		include 'inc/index.inc.php'; 
}
?>
   
  </section>
  <nav>
     <?php include 'inc/menu.inc.php'; ?>  
  </nav>
  <footer>
     <!--?php include 'inc/bottom.inc.php'; ?> -->
     
     <?php
    $currentYear = getdate()['year'];
    echo "&copy; Супер Мега Веб-мастер, 2000 &ndash; {$currentYear}";
    ?>
  </footer>
</body>
</html>