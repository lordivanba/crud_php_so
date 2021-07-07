<?php

if($_SERVER["REQUEST_METHOD"] == 'POST') {
    $studentid = $_POST['studentid'];
    $name = $_POST['name'];
    $father_lastname = $_POST['father_lastname'];
    $mother_lastname = $_POST['mother_lastname'];
    $input_date = $_POST['birthdate'];
    $birthdate = date("Y-m-d", strtotime($input_date));

    include 'config.php';
    $statement = $connection->prepare('
    UPDATE students SET name = :name, father_lastname = :father_lastname, mother_lastname = :mother_lastname,
                    birthdate = :birthdate WHERE studentid = :studentid');
    $statement->execute(array(
        ':name' => $name,
        ':father_lastname' => $father_lastname,
        ':mother_lastname' => $mother_lastname,
        ':birthdate' => $birthdate,
        ':studentid' => $studentid
    ));

    header("Location:index.php");
}


