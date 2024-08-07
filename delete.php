<?php
     $empno=$_GET["empno"];
     $con= new mysqli("localhost","root","","empdata");
     $qry="delete from employee where empno=$empno";
     $con->query($qry);
     $con->close();

     header("location:update.php");


?>