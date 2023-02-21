<?php 

// Инициализируем приложение
require __DIR__ . '/../bootstrap.php';

// Получаем список разделов
$allSections = $productsService->getAllSections();

// Получаем список типов
$allTypes = $productsService->getAllTypes();

// Получаем список товаров
$productsList = $productsService->getAllProducts();

// Вызываем вид, чтобы отобразить каталог
require __DIR__ . '/../view/katalog.phtml';