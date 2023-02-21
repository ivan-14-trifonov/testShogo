<?php

/**
 * Модель товара
 */
class Product
{
    // Идентификатор товара
    private $id;
    
    // Позиция товара
    private $position;
    
    // Адрес картинки товара
    private $url;
    
    // Наименование товара
    private $name;
    
    // Артикул товара
    private $articul;
    
    // Цена товара
    private $price;
    
    // Валюта, в которой указана цена
    private $currency_id;
    
    // Старая цена
    private $price_old;
    
    // Заметка
    private $notice;
    
    // Описание товара
    private $content;
    
    // Видимость
    private $visible;
    
    // Раздел
    private $section;
    
    // Тип
    private $type;
	
	// конструктор
    public function __construct($strFromDb)
    {
        $this->id = $strFromDb['product_id'];
        $this->position = $strFromDb['product_position'];
        $this->url = $strFromDb['product_url'];
        $this->name = $strFromDb['product_name'];
        $this->articul = $strFromDb['product_articul'];
        $this->price = $strFromDb['product_price'];
        $this->currency_id = $strFromDb['product_currency_id'];
        $this->price_old = $strFromDb['product_price_old'];
        $this->notice = $strFromDb['product_notice'];
        $this->content = $strFromDb['product_content'];
        $this->visible = $strFromDb['product_visible'];
        
        $this->section = new Section(
            array(
                'id' => $strFromDb['section_id'],
                'position' => $strFromDb['section_position'],
                'url' => $strFromDb['section_url'],
                'name' => $strFromDb['section_name'],
                'notice' => $strFromDb['section_notice'],
                'visible' => $strFromDb['section_visible'],
            )
        );
        
        $this->type = new Type(
            array(
                'id' => $strFromDb['type_id'],
                'position' => $strFromDb['type_position'],
                'url' => $strFromDb['type_url'],
                'name' => $strFromDb['type_name'],
                'notice' => $strFromDb['type_notice'],
                'visible' => $strFromDb['type_visible'],
            )
        );
    }
    
    // чтение поля id
    public function idGet()
    {
        return($this->id);
    }

    // чтение поля position
    public function positionGet()
    {
        return($this->position);
    }
    
    // чтение поля url
    public function urlGet()
    {
        return($this->url);
    }
    
    // чтение поля name
    public function nameGet()
    {
        return($this->name);
    }
    
    // чтение поля articul
    public function articulGet()
    {
        return($this->articul);
    }
    
    // чтение поля price
    public function priceGet()
    {
        return($this->price);
    }
    
    // чтение поля currency_id
    public function currency_idGet()
    {
        return($this->currency_id);
    }
    
    // чтение поля price_old
    public function price_oldGet()
    {
        return($this->price_old);
    }
    
    // чтение поля notice
    public function noticeGet()
    {
        return($this->notice);
    }
    
    // чтение поля content
    public function contentGet()
    {
        return($this->content);
    }
    
    // чтение поля content
    public function visibleGet()
    {
        return($this->visible);
    }
    
    // чтение поля section
    public function sectionGet()
    {
        return($this->section);
    }
    
    // чтение поля type
    public function typeGet()
    {
        return($this->type);
    }
    
    // чтение всех полей класса
    public function allGet() 
    {
        return [
            "id" => $this->id,
            "position" => $this->position,
            "url" => $this->url,
            "name" => $this->name,
            "articul" => $this->articul,
            "price" => $this->price,
            "currency_id" => $this->currency_id,
            "price_old" => $this->price_old,
            "notice" => $this->notice,
            "content" => $this->content,
            "visible" => $this->visible,
            "section" => $this->section,
            "type" => $this->type,
            ];
    }
    
    // перезапись всех полей класса
    public function allSet($arrOfFields) 
    {
        $this->id = $arrOfFields["id"];
        $this->position = $arrOfFields["position"];
        $this->url = $arrOfFields["url"];
        $this->name = $arrOfFields["name"];
        $this->articul = $arrOfFields["articul"];
        $this->price = $arrOfFields["price"];
        $this->currency_id = $arrOfFields["currency_id"];
        $this->price_old = $arrOfFields["price_old"];
        $this->notice = $arrOfFields["notice"];
        $this->content = $arrOfFields["content"];
        $this->visible = $arrOfFields["visible"];
        $this->section = $arrOfFields["section"];
        $this->type = $arrOfFields["type"];
    }
	
}