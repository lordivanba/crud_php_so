<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="editstyle.css">
    <title>PHP CRUD</title>
</head>
<body>
<h1 class="title_form_student_edit">Formulario Alumno</h1>
<hr>
<main class="container_student_edit">
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'GET') {
        $studentid = $_GET['studentid'];

        include 'config.php';
        $statement = $connection->prepare('SELECT * FROM students WHERE studentid = :studentid');
        $statement->execute(array(':studentid' => $studentid));
        $data_student = $statement->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <form class="form_student_edit" action="edit.php" method="POST" name="form_student">
        <input type="hidden" name="studentid" id="studentid" value="<?php echo $data_student['studentid']; ?>">

        <label class="form-label" for="name">Nombre</label>
        <input class="form-control" type="text" name="name" id="name" value="<?php echo $data_student['name']; ?>">

        <label cldass="form-label" for="father_lastname">Apellido Paterno</label>
        <input class="form-control" type="text" name="father_lastname" id="father_lastname" value="<?php echo $data_student['father_lastname']; ?>">

        <label class="form-label" for="mother_lastname">Apellido Materno</label>
        <input class="form-control" type="text" name="mother_lastname" id="mother_lastname" value="<?php echo $data_student['mother_lastname']; ?>">

        <label class="form-label" for="birthdate">Fecha de nacimiento</label>
        <input class="form-control" type="date" name="birthdate" id="birthdate" value="<?php echo $data_student['birthdate']; ?>">

        <button class="btn btn-success" onclick="form_student.submit()">Actualizar</button>
    </form>
</main>
</body>
</html>
