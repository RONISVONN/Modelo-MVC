<?php

#Arquivos diretórios raízes
$PastaInterna="Modelo-MVC/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}"); } else{ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}"); }

#Diretórios Específicos

/* =============================== Public =============================== */
/*CSS*/
define('DIR_CSS', DIRPAGE."public/css/");

/*JS*/
define('DIR_JS', DIRPAGE."public/js/");

/*IMG*/
define('DIR_IMG', DIRPAGE."public/img/");

/*fonts*/
define('DIR_FONTS', DIRPAGE."public/fonts/");
/* =============================== Public =============================== */



/* =============================== Vendor =============================== */
/*JQUERY*/
define('DIR_JQUERY', DIRPAGE."src/vendor/components/jquery/");

/*Bootstrap CSS*/
define('DIR_BOOTSTRAP_CSS', DIRPAGE."src/vendor/twbs/bootstrap/dist/css/");

/*Bootstrap JS*/
define('DIR_BOOTSTRAP_JS', DIRPAGE."src/vendor/twbs/bootstrap/dist/js/");
/* =============================== Vendor =============================== */