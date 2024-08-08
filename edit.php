<?php
     $empno=$_GET["empno"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
      <?php
             include "Include/Navbar.php";
      ?>
      <div style="height:353px;  width:100%;">
       
      <div style="margin-left: 430px; margin-top: 80px; height: 300px; width: 500px; border: 1px solid black; border-radius: 20px;">
        <div style="margin-top: 30px; margin-left: 35px;">
          <?php 
             $con=new mysqli("localhost","root","","empdata");
             $qry="select * from employee where empno=$empno";
             $result=$con->query($qry);
             while($row=$result->fetch_assoc())
             {
                            echo"<form method='post' action='updatesave.php'>";
                            echo"<table>";
                            echo "<tr>";
                            echo "<td style='margin-top:'10px'> EMP NO : </td>";
                            echo "<td style='margin-top:'10px'>  <input type='text' value='".$row["empno"]."'  name='empno'></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td> EMP Name :</td>";

                            echo "<td><input type='text' value='".$row["empname"]."'  name='empname'></td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>EMP Email :</td>";
                            echo "<td><input type='text' value='".$row["empemail"]."'  name='empemail'></td>";
                           echo "</tr>";
                           echo "<tr>";
                           echo "<td> EMP Salary :</td>";
                           echo "<td><input type='text' value='".$row["empsalary"]."'  name='empsalary'></td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td> </td>";
                          echo "<td><input type='submit' value='update'></td>";
                         echo "</tr>";
                             echo "</table>";
                             echo "</form>";
             }
          ?>
          </div>
     </div>
      </div>
      <?php
             include "Include/footer.php";
      ?>
<style>

    input{
        width: 300px;
        margin-top:5px;
        height:40px;
        border-radius: 10px;
    }
   
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>