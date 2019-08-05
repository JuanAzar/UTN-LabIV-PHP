<?php
    require_once("Config/Autoload.php");

    use Repositories\StudentRepository as StudentRepository;
    use Models\Student as Student;

    $studentRepository = new StudentRepository();

    $studentList = $studentRepository->GetAll();
?>
<html>
    <head>
        <title>Persistance with JSON Example</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Legajo</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            <?php
                foreach($studentList as $student)
                {
                    ?>
                        <tr>
                            <td><?php echo $student->getRecordId() ?></td>
                            <td><?php echo $student->getFirstName() ?></td>
                            <td><?php echo $student->getLastName() ?></td>
                        </tr>
                    <?php
                }
            ?>            
        </table>        
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>