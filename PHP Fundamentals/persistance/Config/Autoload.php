<?php
    spl_autoload_register(function ($className)
    {
        $fileName = dirname(__DIR__)."/".$className.".php";

        require_once($fileName);       
    });
?>