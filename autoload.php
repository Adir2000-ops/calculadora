<?php
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/calculadora_poo/lib/".$class.".class.php";
 
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});