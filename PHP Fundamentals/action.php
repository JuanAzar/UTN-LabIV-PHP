<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;

    foreach($parameters as $parameterName=>$parameterValue)
    {
        echo $parameterName . ': ' . $parameterValue . '<br>' ;
    }
?>