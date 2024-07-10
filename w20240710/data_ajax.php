<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db55688";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("SELECT * FROM students");
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$newData = $data;

foreach ($data as $key => $value) {
    $newData[$key]['rank'] = 'A+';
}

// dd($newData);
// $getJson =  json_encode($newData);
// echo gettype($getJson) . "<br>";

echo json_encode($newData);