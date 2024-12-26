<?php
$showAlert = false;
$showError= false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials\_dbconnect.php';
    $username = $_POST["username"];
    $usn = $_POST["usn"];
    $sql = "Select * from student where usn = '$usn' AND username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num==1){
                $showAlert = true;
                header("location: details.php");
    
    }
    else{
        $showError = "invalid Credentials";
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    /* .form-control{
            border: 2px solid black;
       } */
       .img1{
        width: 100%;
        position: absolute;
       }
       .con1{
        position: fixed;
        margin: 100px 450px;
        width: 600px;
        height: 300px;
        border: 4px solid grey;
        border-radius: 20px;
       }
       h2,b{
        color: white ;
       }
  </style>
    <title>Login</title>
  </head>
  <body>
    <?php require 'partials\_nav.php'?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</ strong> Your account is now created and you can login
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

<!-- <img src="https://source.unsplash.com/1600x400/?library" class="img-fluid" alt="..."> -->
<img src="https://source.unsplash.com/1319x600/?library?bus?students" class="img1"alt="img">
<div class="con1">
<h2 class="text-center my-2">Login to our website</h2>
<div class="container my-3">
     <form action="\studentnsb\login.php" method="post">
        <div class="form-group">
            <label for="username"><b>USER NAME</b></label>
            <input type="text" maxlength="23" placeholder="Enter Your Name " class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="usn"><b>USN</b></label>
            <input type="password" maxlength="23" placeholder="Enter Your Password or Usn" class="form-control" id="usn" name="usn">
        </div>

        <button type="submit" class="btn btn-primary">login</button>
     </form>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>