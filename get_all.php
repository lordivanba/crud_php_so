<?php

require 'config.php';

$statement = $connection->prepare('SELECT * FROM students');
$statement->execute();
$data_students = $statement->fetchAll(PDO::FETCH_ASSOC);

