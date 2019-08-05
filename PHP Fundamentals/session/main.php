<?php
    require_once("Config/Autoload.php");

    use Models\User as User;

    session_start();
    
    if(isset($_SESSION["loggedUser"]))
        $loggedUser = $_SESSION["loggedUser"];
    else
        header("location:index.php");
?>
<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <span>Bienvenido!! <?php echo $loggedUser->getEmail() ?></span>
        <br>
        <br>
        <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>