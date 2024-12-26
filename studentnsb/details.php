

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
 <style>
     .ind{
        /* position: fixed; */
        margin: 5px 400px;
         /* width: 600px; */
        height: 600px;
        /* border: 4px solid grey;
        border-radius: 20px; */
       }
       
       </style>
    <title>Details</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


  <!-- program start -->
   <div class="con">
    <h1 class="text-center">Welcome To Student Spot</h1>
    <form action="\student\details.php" method="post">
  <div class="ind">
  <div class="button">
  <a href="http://localhost/studentnsb/edit.php"><button type="button"  class="btn btn-primary btn-my-2px">Check Application Form</button></a>
</div>
<div class="card mb-2" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <a href="\studentnsb\notesTable.php"><img src="\studentnsb\photo\importnotes.jpg" class="img-fluid rounded-start" alt="notes"></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Student Notes</h5>
        <p class="card-text">Click the image or link to visit the notes  of the following: 
          take it easy notes, A-Z notes, VTU notes, VTU Plus etc....
        </p>
        <p class="card-text-center"><a href="http://localhost/studentnsb/notesTable.php"> click to visit our Notes  </a></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-2" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
     <a href="\studentnsb\scholarshipTable.php"> <img src="\studentnsb\photo\logo1.jpg" class="img-fluid rounded-start" alt="..."></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Student Scholarship</h5>
        <p class="card-text">Click the image or link to visit the Scholarship of the following: 
          SSP , NSP , Prize Scholarship, Compress JPG....
        </p>
        <p class="card-text"><small class="text-muted"><a href="http://localhost/studentnsb/scholarshipTable.php"> click to visit our Scholarship  </a></small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-2" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
     <a href="\studentnsb\buspassTable.php"> <img src="\studentnsb\photo\buspass.jpg" class="img-fluid rounded-start" alt="..."></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">BUS PASS</h5>
        <p class="card-text">Click the image or link to visit the Buspass of the following: 
            BMTC, SEVA SINDHU, CGPA CALCULATOR .....
        </p>
        <p class="card-text"><small class="text-muted"><a href="http://localhost/studentnsb/scholarshipTable.php"> click to visit our BusPass  </a></small></p>
      </div>
    </div>
  </div>
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