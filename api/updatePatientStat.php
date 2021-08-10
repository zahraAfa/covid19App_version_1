<?php

require 'db.php';

$id = $_GET["id"];
$status = $_POST["status"];
$icu = $_POST["icu"];
$death = $_POST["death"];
$discharge = $_POST["discharge"];

$sql = "UPDATE patients SET status = :status, 
icu = :icu,
death = :death,
discharge = :discharge
WHERE id = $id";

try {

    $db = new db();
    $db = $db->connect();

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':icu', $icu);
    $stmt->bindParam(':death', $death);
    $stmt->bindParam(':discharge', $discharge);

    $stmt->execute();
    $count = $stmt->rowCount();

    $data = array(
        "rowAffected" => $count,
        "status" => "success"
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
}
