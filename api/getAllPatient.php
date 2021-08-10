<?php

header('Content-Type: application/json');

require 'db.php';

$sql = "SELECT * FROM patients";

try{
    $db = new db();
    // Connect
    $db = $db->connect();

    $stmt = $db->query($sql);
    $patient = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo json_encode($patient,JSON_PRETTY_PRINT);

}
catch(PDOException $e){
    echo $e;
}