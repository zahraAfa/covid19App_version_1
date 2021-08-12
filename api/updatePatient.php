<?php

require 'db.php';

$id = $_GET["id"];
$patients_name = $_POST["patients_name"];
$patients_age = $_POST["patients_age"];
$patients_sex = $_POST["patients_sex"];

// $patients_name = "isaac tan";
// $patients_age = 23;
// $patients_sex = "Male";

$sql = "UPDATE patients SET patients_name = :patients_name, 
patients_age = :patients_age, 
patients_sex = :patients_sex WHERE id = $id"; //To edit and update data yg udh ada di table patient

try {
    // Get DB Object
    $db = new db();
    // Connect
    $db = $db->connect();

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':patients_name', $patients_name);
    $stmt->bindParam(':patients_age', $patients_age);
    $stmt->bindParam(':patients_sex', $patients_sex);

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
