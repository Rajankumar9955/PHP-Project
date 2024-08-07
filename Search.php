
<?php
  if(isset($_POST["submit"]))
  {
    $empno=$_POST["empno"];
  }
  

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
      <div style="height:413px;  width:100%; ">

         <div style="width: 28%; margin-left: 38%;">
           <form action="Search.php" method="post">
           <div class="form-floating mb-1" style="margin-top: 20px;">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="empno">
              <label for="floatingInput">Enter EMP NO</label>
              <button type="submit" class="btn btn-success" name="submit" style="margin-left:145px; margin-top:10px;"> Insert</button>
             </div>
           </form>
         </div>
         <div style="margin-left: 200px; margin-top: 10px; width:1000px; border: 1px solid black; height: 423px; overflow: hidden;border-radius: 10px; height: 300px;">
         <table class="table">
  <thead >
    <tr>
      <th scope="col" style="background-color: pink;">Emp NO</th>
      <th scope="col" style="background-color: pink;">EMP Name</th>
      <th scope="col" style="background-color: pink;">Emp Email</th>
      <th scope="col" style="background-color: pink;">Emp Salary</th>
    </tr>
  </thead>
  <tbody>
           <?php
        if(isset($_POST["submit"]))
        {
            $con=new mysqli("localhost","root","","empdata");
            $qry="select * from employee where empno=$empno";
            $result=$con->query($qry);
            while($row=$result->fetch_assoc())
            {
             echo"<tr>";
                            echo"<td>".$row["empno"]."</td>";
                            echo"<td>".$row["empname"]."</td>";
                            echo"<td>".$row["empemail"]."</td>";
                            echo"<td>".$row["empsalary"]."</td>";
             echo"</tr>";
            }
            $con->close();
        }
      ?>
  </tbody>
         </table>


  </tbody>
           </div>











         
       
    </div>
      <?php
             include "Include/footer.php";
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>