<html>
    <head>
        <title>Persistance with JSON Example</title>
    </head>
    <body>
        <form action="process-form.php" method="post">
            <table>
                <tr>
                    <td>Legajo</td>
                    <td><input type="text" name="recordId" placeholder="Legajo" value=""></td>                    
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="firstName" placeholder="Nombre" value=""></td>
                </tr>
                <tr>                    
                    <td>Apellido</td>
                    <td><input type="text" name="lastName" placeholder="Apellido" value=""></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit">Agregar</button></td>
                </tr>
            </table>
        </form>
        <br>
        <a href="list.php">Listar Alumnos</a>
    </body>
</html>