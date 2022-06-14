<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
    require_once __DIR__ . '/Product.php';

    $cibo = new Product(20, 200, 'dog', 5 );
    echo '<pre>';
    var_dump($cibo);
    echo '</pre>';
?>