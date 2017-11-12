<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


//echo 
$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$age = $data->age;
$no= $data->no;
//$name=$_POST['name'];
//$age=$_POST['age'];
//$no=$_POST['no'];
$conn = new mysqli("localhost", "root", "", "customers");
$result = $conn->query("INSERT INTO customers(name, age, no) VALUES ('$name', '$age', '$no')");
	
$conn->close();
?>
<h5>Hai</h5>