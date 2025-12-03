<?php
//1
$bmw = [
    'model' => 'X5',
    'speed, km/h' => 120,
    'doors' => 5,
    'year' => '2006'
];

$toyota = [
    'model' => 'Carina',
    'speed, km/h' => 130,
    'doors' => 4,
    'year' => '2007'
];

$opel = [
    'model' => 'Corsa',
    'speed, km/h' => 140,
    'doors' => 5,
    'year' => '2007'
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
</head>
<body>
    <h1>Массивы</h1>
    
    <?php
    // 2
    echo '<p>bmw - ' . 
         $bmw['model'] . ' - ' . 
         $bmw['speed, km/h'] . ' - ' . 
         $bmw['doors'] . ' - ' . 
         $bmw['year'] . '</p>';
    
    // Вывод Toyota
    echo '<p>toyota - ' . 
         $toyota['model'] . ' - ' . 
         $toyota['speed, km/h'] . ' - ' . 
         $toyota['doors'] . ' - ' . 
         $toyota['year'] . '</p>';
    
    // Вывод Opel
    echo '<p>opel - ' . 
         $opel['model'] . ' - ' . 
         $opel['speed, km/h'] . ' - ' . 
         $opel['doors'] . ' - ' . 
         $opel['year'] . '</p>';
    ?>
    
</body>
</html>