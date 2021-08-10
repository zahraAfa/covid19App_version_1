<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");

require 'db.php';


// $patient_name = 
// $hospital_a_t = $_POST["hospital_a_t"];
// $status = 

$patients_name = $_POST["patients_name"];
$patients_age = $_POST["patients_age"];
$patients_sex = $_POST["patients_sex"];
$hospital_a_t = $_POST["hospital_a_t"];
$status = $_POST["status"];

try {
    $sql = "INSERT INTO patients (patients_name,patients_age,patients_sex,hospital_a_t,status) VALUES (:patients_name,:patients_age,:patients_sex,:hospital_a_t,:status)";
    $db = new db();
    // Connect
    $db = $db->connect();
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':patients_name', $patients_name);
    $stmt->bindValue(':patients_age', $patients_age);
    $stmt->bindValue(':patients_sex', $patients_sex);
    $stmt->bindValue(':hospital_a_t', $hospital_a_t);
    $stmt->bindValue(':status', $status);

    $stmt->execute();
    $count = $stmt->rowCount();
    $db = null;

    $data = array(
        "status" => "success",
        "rowcount" => $count
    );
    echo json_encode($data);
} catch (PDOException $e) {
    $data = array(
        "status" => "fail"
    );
    echo json_encode($data);
    echo $e;
}
