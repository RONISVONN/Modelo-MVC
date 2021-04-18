<?php

namespace App\controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("Página Home");
        $this->setDescription("Página Home");
        $this->setKeywords("Home");
        $this->setDir("home");
        $this->renderLayout();
    }
}