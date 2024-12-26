<?php  
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
?>
<?php
$showAlert = false;
$showError = false;
$notes = "More_inf ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials\_dbconnect.php';
    $comments = $_POST["comments"];
    // Check whether this username exists
    $existSql = "SELECT * FROM `comments` WHERE comments = '$comments'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    // $hash = password_hash($usn, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `comments` ( `departments`,`comments`, `dt`) VALUES ('notes','$comments', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result){
                $showAlert = true;
      }
          
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <style>
      .comments{
        margin: 4px 100px;
        border: 4px solid grey;
        border-radius: 20px;
      }
      .card-group{
        height="1050px"
      }
    .card{
      border: 2px solid black;
    }
    header{
      position: sticky;
      top: 0;
      z-index: 10;

    }
    .notes{
      background-color: BlanchedAlmond;
      z-index: 1;
    }
    </style>
    <title>Other</title>
  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Students Spot</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/studentnsb/signup.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/studentnsb/login.php">Login</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="http://localhost/studentnsb/logout.php">Logout</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
</header>
<?php
if($showAlert){
echo '<div class="alert alert-primary" role="alert" id="alert">
Thanks For commenting
</div>';
}
?>
    <!-- <h1 class="text-center">welcome to SCHOLARSHIPS Department</h1> -->
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><?php echo 'Welcome' . "  " .$_SESSION['username']  ?></h4>
  <p></p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>




<div class="notes">
<h1 class="text-center"> VTU NOTES</h1>
<hr>
<div class="card-group">
    <div class="card my-2 mx-2" style="width: 18rem; ">
    <a  href="https://www.azdocuments.in/"> <img src="\STUDENTNSB\photo\az.jpg" width="4833px";height="3217px"  class="card-img-top" alt="..."></a>
    <div class="card-body">
      <hr>
    <p class="card-text text-center"><a  href="https://www.azdocuments.in/">AZ Notes</a></p>
    </div>
    
  </div>
    <div class="card my-2 mx-4" style="width: 18rem;">
    <a href="https://takeiteasyengineers.com/"><img src="\STUDENTNSB\photo\take.jpg" width="4833px";height="3217px" class="card-img-top" alt="..."></a>
   
  <div class="card-body">
  <hr>
    <p class="card-text text-center"> <a href="https://takeiteasyengineers.com/">TAKEIT EASY Notes</a></p>
    </div>
  </div>

  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://www.vtupulse.com/vtu-notes/computer-science-and-engineering-notes/"><img src="\STUDENTNSB\photo\vtuplus.jpg"  class="card-img-top" alt="..."></a>

  <div class="card-body">
    <hr>
    <p class="card-text text-center"><a href="https://www.vtupulse.com/vtu-notes/computer-science-and-engineering-notes/">VTU PLUS</a></p>
  </div>
</div>
  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://www.notes4free.in/vtu-notes.html"><img src="\STUDENTNSB\photo\vtunotes.jpg"  class="card-img-top" alt="..."></a>
 
  <div class="card-body">
<hr>
    <p class="card-text text-center"><a href="https://www.notes4free.in/vtu-notes.html">VTU NOTES</a></p>
  </div>
</div>
  </div>
  <div class="container my-4">

  <form action="\studentnsb\notes.php" method="post">
<div class="comments">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="comments" id="comments" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
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