<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


//echo 
$data = json_decode(file_get_contents("php://input"));

$str = $data->name;

//$name=$_POST['name'];
//$age=$_POST['age'];
//$no=$_POST['no'];
$conn = new mysqli("localhost", "root", "", "customers");
$result = $conn->query("DELETE FROM customers WHERE name= '$str'");
	
$conn->close();
?>