<?php

namespace App\controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("Página Inicial");
        $this->setDescription("Esse é o nosso site de MVC");
        $this->setKeywords("Modelo-MVC");
        $this->setDir("home");
        $this->renderLayout();
    }
}