<?php

namespace App\controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerPage404 extends ClassRender implements InterfaceView{
    public function __construct()
    {
        $this->setTitle("Página 404");
        $this->setDescription("Pagina não encotranda");
        $this->setKeywords("Erro 404");
        $this->setDir("page404");
        $this->renderLayout();
    }
}