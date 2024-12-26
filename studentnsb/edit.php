<?php  
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
?>
<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
  <style>
    .box{
      width: 900px;
      height: 500px;
      margin: 4px 200px;
      border: 2px solid black;
    }
    .hd{
      color: gold;
    }
  </style>
    <title>Form</title>
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
  <!-- <nav class="navbar bg-body-tertiary "> -->
  <nav class="navbar bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand">Student NSB</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="text-center">
  <h1 class="hd">Student Details</h1>
  <div class="button">
  <a href="http://localhost/studentnsb/delete.php"><button type="button"  class="btn btn-danger btn">DELETE</button></a>
  <!-- <a href="DEEPA_PROJ\delete.php">Delete form</a> -->
<a href="http://localhost/studentnsb/update.php"><button type="button" class="btn btn-primary btn">Update</button></a>
</div>
  <div class="box">
 
    <div class="details">
<h3><?php echo' USER NAME   :     '."      ".$_SESSION['username']."   "          ;?></h3>

  </div>
    <div class="details">
<h3><?php echo' COLLEGE NAME    :     '."".$_SESSION['cname'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' BRANCH    :     '."".$_SESSION['branch'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' SEMISTER    :     '."".$_SESSION['sem'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' EMAIL    :     '."".$_SESSION['email'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' AGE    :     '."".$_SESSION['age'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' GENDER    :     '."".$_SESSION['gender'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' STATE    :     '."".$_SESSION['state'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' TEN    :     '."".$_SESSION['ten'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' TWELVE    :     '."".$_SESSION['Twelve'];?></h3>
  </div>
    <div class="details">
<h3><?php echo' USN    :     '."".$_SESSION['usn'];?></h3>
  </div>

  </div>
  <div class="but">
  <a href="http://localhost/studentnsb/details.php"><button type="button" class="btn btn-primary btn">submit</button></a>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    -->
  </body>
</html>