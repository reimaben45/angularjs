<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "customers");

$result = $conn->query("SELECT name, age, no FROM customers");

//echo $str = $_POST['st'];
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Name":"'  . $rs["name"] . '",';//Name,age,no is assigning here wich links to angularjs {{}}name,age,and no
    $outp .= '"age":"'   . $rs["age"]        . '",';
    $outp .= '"no":"'. $rs["no"]     . '"}'; 
}
$outp ='['.$outp.']';
$conn->close();

echo($outp);
?>