<?php
session_start();
echo 'I satish'.$_SESSION[username]
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="\studentnsb\favicon-32x32.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <style>
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

    <title>welcome</title>
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

<!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> -->
  
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
<hr>
<h1 class="text-center"> STUDENTS SCHOLARSHIPS </h1>
<hr>
<div class="card-group">
    <div class="card my-2 mx-2" style="width: 18rem; ">
    <a href="https://ssp.karnataka.gov.in/"><img src="\STUDENTNSB\photo\ssp.jpg"  class="card-img-top" alt="..."></a>
 
    <div class="card-body">
      <hr>
    <p class="card-text text-center"><a href="https://ssp.karnataka.gov.in/">SSP</a></p>
    </div>
  </div>
    <div class="card my-2 mx-2" style="width: 18rem;">
    <a href="https://scholarships.gov.in/"><img src="\STUDENTNSB\photo\nsp.jpg"  class="card-img-top" alt="..."></a>
 
    <div class="card-body">
      <hr>
    <p class="card-text text-center"><a href="https://scholarships.gov.in/">NSP</a></p>
    </div>
  </div>

  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://sw.kar.nic.in/swprizemoney/Home.aspx"><img src="\STUDENTNSB\photo\prize.jpg"  class="card-img-top" alt="..."></a>
 
  <div class="card-body">
    <hr>
    <p class="card-text text-center"><a href="https://sw.kar.nic.in/swprizemoney/Home.aspx">PRIZE SCHOLARSHIPS</a></p>
  </div>
</div>
  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://www.freeconvert.com/compress-jpeg"><img src="\STUDENTNSB\photo\reduce.jpg"  class="card-img-top" alt="..."></a>
 
  <div class="card-body">
    <hr>
    <p class="card-text text-center"><a href="https://www.freeconvert.com/compress-jpeg">Compress JPG</a></p>
  </div>
</div>
</div>
<hr>
<h1 class="text-center">STUDENTS BUSPASS</h1>
<hr>
<div class="card-group">
    <div class="card my-2 mx-2" style="width: 18rem; ">
    <a href="http://student.mybmtc.com:8280/bmtc/login/secure"><img src="\STUDENTNSB\photo\bmtc.jpg"  class="card-img-top" alt="..."></a>
 
    <div class="card-body">
      <hr>
    <p class="card-text text-center"><a href="http://student.mybmtc.com:8280/bmtc/login/secure">BMTC PASS</a></p>
    </div>
  </div>
    <div class="card my-2 mx-2" style="width: 18rem;">
    <a href="https://sevasindhu.karnataka.gov.in/sevasindhu/English"><img src="\STUDENTNSB\photo\seva.jpg"  class="card-img-top" alt="..."></a>
 
    <div class="card-body">
      <hr>
    <p class="card-text text-center"><a href="https://sevasindhu.karnataka.gov.in/sevasindhu/English">KSTRC BUSPASS</a></p>
    </div>
  </div>

  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://calc.takeiteasyengineers.com/"><img src="\STUDENTNSB\photo\cgp.jpg"  class="card-img-top" alt="..."></a>
 
  <div class="card-body">
    <hr>
    <p class="card-text text-center"><a href="https://calc.takeiteasyengineers.com/">CALCULATE CGP & SSGP</a></p>
  </div>
</div>
  <div class="card my-2 mx-2" style="width: 18rem;">
  <a href="https://onecompiler.com/"><img src="\STUDENTNSB\photo\online.jpg"  class="card-img-top" alt="..."></a>
 
  <div class="card-body">
    <hr>
    <p class="card-text text-center"><a href="https://onecompiler.com/">Online Compiler</a></p>
  </div>
</div>
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