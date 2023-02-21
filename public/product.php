<?php

// Инициализируем приложение
require __DIR__ . '/../bootstrap.php';

// id товара из GET-запроса
$idProduct = $_GET["id"];
if ($idProduct == "") {
    $idProduct = 1;
}

// Получаем объект News
$product = $productsService->getProduct($idProduct);

// Вызываем вид, чтобы отобразить новость
require __DIR__ . '/../view/product.phtml';