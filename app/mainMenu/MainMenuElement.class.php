<?php

class MainMenuElement{
    public $title;
    public $description; 
    public $action;
    public function __construct( $title,  $description , $action) {
        $this->title=$title;
        $this->description=$description;
        $this->action=$action;
    }
}