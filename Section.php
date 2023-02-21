<?php

/**
 * Модель раздела
 */
class Section
{
    // Идентификатор раздела
    private $id;
    
    // Позиция раздела
    private $position;
    
    // Адрес картинки раздела
    private $url;
    
    // Наименование раздела
    private $name;

    // Заметка
    private $notice;

    // Видимость
    private $visible;
	
	// конструктор
    public function __construct($strFromDb)
    {
        $this->id = $strFromDb['id'];
        $this->position = $strFromDb['position'];
        $this->url = $strFromDb['url'];
        $this->name = $strFromDb['name'];
        $this->notice = $strFromDb['notice'];
        $this->visible = $strFromDb['visible'];
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
    
    // чтение поля notice
    public function noticeGet()
    {
        return($this->notice);
    }
    
    // чтение поля visible
    public function visibleGet()
    {
        return($this->visible);
    }
    
    // чтение всех полей класса
    public function allGet() 
    {
        return [
            "id" => $this->id,
            "position" => $this->position,
            "url" => $this->url,
            "name" => $this->name,
            "notice" => $this->notice,
            "visible" => $this->visible,
            ];
    }
    
    // перезапись всех полей класса
    public function allSet($arrOfFields) 
    {
        $this->id = $arrOfFields["id"];
        $this->position = $arrOfFields["position"];
        $this->url = $arrOfFields["url"];
        $this->name = $arrOfFields["name"];
        $this->notice = $arrOfFields["notice"];
        $this->visible = $arrOfFields["visible"];
    }
	
}