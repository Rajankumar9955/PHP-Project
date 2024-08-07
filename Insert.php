
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
<div style="height:383px;">
        <div style="height:320px; border: 2px solid black; width: 418px; margin-left: 470px; margin-top: 50px;border-radius: 20px;">
        <form  method="post" action="save.php" style="margin-left: 18px; width: 380px;" >
            <div class="form-floating mb-1" style="margin-top: 20px;">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="eno">
              <label for="floatingInput">Enter EMP NO</label>
             </div>
             <div class="form-floating mb-1">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="enm">
              <label for="floatingInput">Enter EMP Name</label>
             </div>
             <div class="form-floating mb-1">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="eem">
              <label for="floatingInput">Enter EMP Email</label>
             </div>
             <div class="form-floating mb-1">
             <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="esal">
              <label for="floatingInput">Enter EMP Salary</label>
              <button type="submit" class="btn btn-success" style="margin-left:155px; margin-top:10px;"> Insert</button>
              </form>
             </div>
             
        </div>
</div>
      <?php
             include "Include/footer.php";
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>