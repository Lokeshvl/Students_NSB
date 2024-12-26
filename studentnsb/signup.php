<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials\_dbconnect.php';
    $username = $_POST["username"];
    $cname = $_POST["cname"];
    $branch = $_POST["branch"];
    $sem = $_POST["sem"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $state = $_POST["state"];
    $ten = $_POST["ten"];
    $Twelve = $_POST["Twelve"];
    $usn = $_POST["usn"];
    $cusn = $_POST["cusn"];
    // Check whether this username exists
    $existSql = "SELECT * FROM `student` WHERE usn = '$usn'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "USN Already Exists";
    }
    else{
    


        if(($usn == $cusn)){
        
            $sql = "INSERT INTO `student` ( `username`, `collegename`, `branch`, `sem`, `Email`, `DOBirth`, `Age`, `Gender`, `State`, `ten`, `twelve`, `usn`, `dt`) VALUES ('$username', '$cname', '$branch', '$sem', '$email', '$dob', '$age', '$gender', '$state', '$ten', '$Twelve', '$usn', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION["username"] = $username;
                $_SESSION["cname"] = $cname;
                $_SESSION["branch"] = $branch;
                $_SESSION["sem"] = $sem;
                $_SESSION["email"] = $email;
                $_SESSION["dob"] = $dob;
                $_SESSION["age"] = $age;
                $_SESSION["gender"] =$gender;
                $_SESSION["state"] =$state ;
                $_SESSION["ten"] = $ten ;
                $_SESSION["Twelve"] =$Twelve ;
                $_SESSION["usn"] =$usn ;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        .img1{
            width: 100%;
            /* height: 91%; */
            position: absolute;
            z-index: -1;
            opcity: -0.8;
        }
        .box{
            /* border: 1px solid red; */
            height: 400px;
            width: 800px;
            margin-left:250px;
            margin-right:250px;
        }
        .form-control{
            border: 1px solid black;
            
        }
        h2{
            background-color: grey;
            color: white;
            margin: 2px 188px 2px 188px;
            border-radius: 20px;
        }
        .form-group{
            position: scroll; 
            z-index: -1;
        }
        b{
            color:rgb(0,121,107) ;
        }
    </style>
    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials\_nav.php'?>
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
<img class="img1 " src="\STUDENTNSB\oxf.jpg" alt="oxford" >

<div class="box mt-4">
    <h2 class="text-center">Signup To Our Website</h2>
    
    <div class="container my-4">
     <form action="\studentnsb\signup.php" method="post">
        <div class="form-group">
            <!-- <label for="username">Username</label> -->
            <input type="text" maxlength="11" class="form-control" placeholder="Enter Your name" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
       <div class="form-group">
            <!-- <label for="collegename"><b>CollegeName</b></label> -->
            <input type="text" maxlength="50" placeholder="Enter Your College Name" class="form-control" id="cname" name="cname" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <!-- <label for="branch"><b>Branch</b></label> -->
            <input type="text" maxlength="11" placeholder="Name of Branch" class="form-control" id="branch" name="branch" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <!-- <label for="sem"><b>Semister</b></label> -->
            <input type="text" maxlength="11" placeholder="Enter Your Semister" class="form-control" id="sem" name="sem" aria-describedby="emailHelp">
            
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" id="email">
            <!-- <label for="floatingInput">Email address</label> -->
        </div>
        <div class="row g-3 mb-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Date Of Birth"  name="dob" id="dob" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Age" name="age" id="age" aria-label="Last name">
  </div>
  <label for="floatingInput"></label>
</div>
        <div class="row g-3 mb-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Gender" name="gender" id="gender" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="State" name="state" id="state" aria-label="Last name">
  </div>
  <label for="floatingInput"></label>
</div>

<div class="row g-3 mb-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="10th_Register Number" name="ten" name="ten" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="12th_Register Numbe" name="Twelve" id="Twelve" aria-label="Last name">
  </div>
  <label for="floatingInput"></label>
</div>
        <div class="form-group">
            <!-- <label for="usn"><b>USN</b></label> -->
            <input type="password" placeholder="Enter Usn or Password" maxlength="23" class="form-control" id="usn" name="usn">
        </div>

        <div class="form-group">
            <!-- <label for="cusn"><b>Confirm USN</b></label> -->
            <input type="password" class="form-control" id="cusn" name="cusn" placeholder="Make sure to type the same usn or password">
            <!-- <small id="emailHelp" class="form-text text-muted">Make sure to type the same usn</small> -->
        </div>
  
        <button type="submit" class="btn btn-primary">SignUp</button>
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