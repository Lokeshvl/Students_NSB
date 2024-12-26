<?php
$showAlert = false;
$showError= false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials\_dbconnect.php';
    $email = $_POST["email"];
    $usn = $_POST["usn"];
    $sql = "DELETE FROM `student` where email = '$email' AND usn='$usn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'Deleted Successfully';
        header("location: edit.php");

    }
    else{
        $err= mysli_error($conn);
        echo "not Delete successfully due to this error";
    }

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
      .img1{
            width: 100%;
            position: absolute;
            /* z-index: -1;
            opcity: -0.4; */
        }
      .container{
        position: fixed;
        margin: 100px 450px;
        /* margin-right:auto;
        margin-left:auto; */
        width: 600px;
        height: 300px;
        border: 4px solid grey;
        border-radius:10px;
      }
      h4{
        color:sky-blue;
      }
      h1,h2{
        color:white;
      }
     </style>
    <title>welcome</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- <nav class="navbar bg-body-tertiary "> -->
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/DEEPA_PROJ/welcome.php/"><button type="button" class="btn btn-primary">Welcome</button>
</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- <img src="https://source.unsplash.com/1600x725/?train" class="img-fluid" alt="..."> -->
<img src="https://source.unsplash.com/1600x725/?train" alt="train" class="img1">
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>        
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>

<div class="container">
<form action="\studentnsb\delete.php" method="post">
  <b><h1 class="text-center mt-4 mb-7">login to Delete Page</h1></b>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email id" name="email" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter Your USN" name="usn" id="usn">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
  

</form>
<!-- <button type="submit" class="btn btn-primary">NEXT</button> -->
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