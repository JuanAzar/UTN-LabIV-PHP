<?php
    spl_autoload_register(function ($className)
    {
        $fileName = $className.".php";

        require_once($fileName);       
    });
?>