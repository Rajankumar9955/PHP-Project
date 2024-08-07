<?php
 $empno=$_POST["empno"];
 $empname=$_POST["empname"];
 $empemail=$_POST["empemail"];
 $empsalary=$_POST["empsalary"];

  $con=new mysqli("localhost","root","","empdata");
  $sql="update employee set empname='$name', empemail='$empemail', empsalary='$empsalary' where empno='$empno'";
  $con->query($sql);
  $con->close();
  header("location: update.php?update=yes");


?>