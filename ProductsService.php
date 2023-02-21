<?php

/**
 * Сервис для управления каталогом товаров
 */
class ProductsService
{
    /** 
     * @var Product[] Все товары из БД
     */
    private $allProducts = [];
    
    /** 
     * @var Section[] Все разделы товаров
     */
    private $allSections = [];
    
    /** 
     * @var Type[] Все типы товаров
     */
    private $allTypes = [];

    // конструктор
    public function __construct()
    {
        // Подключение к БД
        try {
            global $pdoconfig;
            $db = new PDO('mysql:host='.$pdoconfig['host'].';dbname='.$pdoconfig['dbname'], $pdoconfig['username'], $pdoconfig['password']);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
        
        // Считываем все разделы товаров в массив allSections
        $response = $db->query("SELECT * FROM `product_section`")->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($response); $i++) {
            $this->allSections[] = new Section($response[$i]);
        }
        
        // Считываем все типы товаров в массив allTypes
        $response = $db->query("SELECT * FROM `product_type`")->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($response); $i++) {
            $this->allTypes[] = new Type($response[$i]);
        }
        
        // Создаём предтавление view_products и считываем все товары из БД в массив allProducts
        $response = $db->query("SELECT * FROM view_products")->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($response); $i++) {
            $this->allProducts[] = new Product($response[$i]);
        }

    }
    
    /**
     * Возвращает все имеющиеся товары в виде масссива объектов Product
     * @return Product[]
     */
    public function getAllProducts()
    {
        return $this->allProducts;
    }
    
    /**
     * Возвращает все разделы товаров в виде масссива объектов Section
     * @return Section[]
     */
    public function getAllSections()
    {
        return $this->allSections;
    }
    
    /**
     * Возвращает все типы товаров в виде масссива объектов Type
     * @return Type[]
     */
    public function getAllTypes()
    {
        return $this->allTypes;
    }
    
    /**
     * Возвращает товар с id $idProduct
     * @return Product
     */
    public function getProduct($idProduct)
    {
        return $this->allProducts[$idProduct - 1];
    }

}