<?php

header('Content-Type: application/json');

require 'db.php'; //Biar nyambung ke connection string databasenya

$sql = "SELECT * FROM patients"; //To display all data from patient table

try{
    $db = new db();
    // Connect
    $db = $db->connect(); // harus konekin dulu tiap mau ngelakuin action ke database

    $stmt = $db->query($sql);
    $patient = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo json_encode($patient,JSON_PRETTY_PRINT);

}
catch(PDOException $e){
    echo $e;
}