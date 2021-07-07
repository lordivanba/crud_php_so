<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD</title>
</head>
<body>
<h1 class="title_form_student">Formulario Alumno</h1>
<hr>
<main class="container_student">
    <form class="form_student" action="create.php" method="POST" name="form_student">
        <label class="form-label" for="name">Nombre</label>
        <input class="form-control" type="text" name="name" id="name">

        <label class="form-label" for="father_lastname">Apellido Paterno</label>
        <input class="form-control" type="text" name="father_lastname" id="father_lastname">

        <label class="form-label" for="mother_lastname">Apellido Materno</label>
        <input class="form-control" type="text" name="mother_lastname" id="mother_lastname">

        <label class="form-label" for="birthdate">Fecha de nacimiento</label>
        <input class="form-control" type="date" name="birthdate" id="birthdate">

        <button class="btn btn-success" onclick="form_student.submit()">Guardar</button>
    </form>
    <div class="table_student">
        <table class="table table-hover">
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha de nacimiento</th>
                <th>Operaciones</th>
            </tr>
            <?php
            require 'get_all.php';
            foreach ($data_students as $student){
                ?>
                <tr>
                    <td><?php echo $student['studentid']; ?></td>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['father_lastname']; ?></td>
                    <td><?php echo $student['mother_lastname']; ?></td>
                    <td><?php echo $student['birthdate']; ?></td>
                    <td>
                        <a href="delete.php?studentid=<?php echo $student['studentid'] ?>" class="btn btn-danger">Eliminar</a>
                        <a href="edit.view.php?studentid=<?php echo $student['studentid'] ?>" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</main>
</body>
</html>
