<?php

require 'config.php';

if($_SERVER["REQUEST_METHOD"] == 'GET'){
    $studentid = $_GET['studentid'];

    require 'config.php';
    $statement = $connection->prepare('DELETE FROM students WHERE studentid = :studentid');
    $statement->execute(array(':studentid' => $studentid));

    header("Location:index.php");
}