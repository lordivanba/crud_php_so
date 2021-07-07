<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST['name'];
    $father_lastname = $_POST['father_lastname'];
    $mother_lastname = $_POST['mother_lastname'];
    $input_date= $_POST['birthdate'];
    $birthdate = date("Y-m-d", strtotime($input_date));

    require 'config.php';
    $statement = $connection->prepare('INSERT INTO students(studentid, name, father_lastname, mother_lastname, birthdate)
    VALUES(null, :name, :father_lastname, :mother_lastname, :birthdate)');
    $statement->execute(array(':name' => $name, ':father_lastname' => $father_lastname, ':mother_lastname' => $mother_lastname,
        ':birthdate' => $birthdate));

    header("Location:index.php");
}