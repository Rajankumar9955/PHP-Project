<?php
$empno=$_POST["eno"];
$empnm=$_POST["enm"];
$empem=$_POST["eem"];
$empsal=$_POST["esal"];

$con=new mysqli("localhost","root","","empdata");
$qry="insert into employee(empno,empname,empemail,empsalary) values('$empno','$empnm','$empem','$empsal')";
$con->query($qry);
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1 style="color: green; margin-left: 30%; margin-top: 19%;font-size: 50px;">Data Saved SuccessFully!</h1>
</body>
</html>