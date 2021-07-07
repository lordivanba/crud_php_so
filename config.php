<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=practica_so','root', '');
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}