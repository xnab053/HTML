<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = $_GET;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db55688";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "INSERT INTO `students`(`id`,`name`,`mobile`)VALUES(NULL,'{$data["name"]}','{$data["mobile"]}')";
$conn->exec($sql);

$msg = [
    'data' => $data,
    'result' => 'ok'
];

echo json_encode($msg);
