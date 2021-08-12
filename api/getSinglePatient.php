<?php

header('Content-Type: application/json');

require 'db.php';

$id= $_GET["id"];
$sql = "SELECT * FROM patients WHERE id = $id"; //To get or display a patient with specified id

try{
    $db = new db();
    $db = $db->connect();

    $stmt = $db->query($sql);
    $patients = $stmt->fetch(PDO::FETCH_OBJ);
    $db = null;
    echo json_encode($patients, JSON_PRETTY_PRINT);
} catch(PDOException $e){
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}