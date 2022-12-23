<?php
$category = '';
$login = false;
$login_error = false;

if(isset($_POST['submit'])){
  include ('components/dbconnect.php');
  $userId = $_POST['userId'];
  $password = $_POST['password'];
  if($userId == "" or $password == ""){
    $login_error = "Please Enter Username and Password";
    header("Location: login.php");
  }
  // echo $userId;
  // echo $password;
  $sql = "SELECT * FROM `accounts` WHERE user_id = '$userId'";
  $result = mysqli_query($conn,$sql);
  $numRows = mysqli_num_rows($result);
  if($numRows == 1){
    while ($row = mysqli_fetch_assoc($result)) {
      if($password == $row['user_password']){
        $login = true;
        session_start();
        $_SESSION['username'] = $row['user_name'];
        $_SESSION['userID'] = $row['acc_id'];
        $_SESSION['loggedin']= true;
        $category = $row['category'];
      }
      else{
        $login_error = "Invalid Username or Password";
      }
    }
    
  }
  else {
    $login_error = "Invalid Credentials";
  }
  if($category == 'Alumni' or $category == 'Student'){
    header("Location: userProfile.php");
  }else if($category == 'Organizati'){
    header("Location: company.php");
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    .header {
      background-color: rgb(23, 27, 104);
      /* */
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 100vh;
      position: relative;
    }

    :root {
      --main-color: #7ddbb6;
    }

    .bb:hover {
      /* color: var(--main-color) !important;
      border-bottom: 1px solid var(--main-color); */
      background-color : rgb(0, 101, 253) !important;
      
    }
    .img-fluid {
    max-width: 100%;
    height: 100%;
}
  </style>


</head>

<body class="header">
<?php
  if ($login) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Login Successfull!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
  }
  if ($login_error) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $login_error . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  }
  ?>
  <br>
  <br>
  <br>
  <section class="login" style="justify-content:center;">

    <form action="login.php" method="post" style="position:relativ;">
      <div class="container-fluid w-50 h-75 my-5 shadow p-0 mb-5 rounded" style="background:White;">
        <div class="row g-0 ">
          <div class="col-md-7 ">
            <img
              src="https://www.joomshaper.com/images/2021/05/26/How-to-Redirect-and-Customize-Login-on-Joomla-Site.jpg"
              class="img-fluid" alt="..." stylr="height:100px">
          </div>
          <div class="col-md-5">
            <div class="card-body" >
              <h1 class="card-title">Alumni Link</h1>
              <div class="from-group" style="margin:auto ;">
                <label for="Username" style="color:#000000;" class="form-label">User ID</label>
                <input type="Username" class="form-control" id="Username" name="userId">
              </div>
              <div class="from-group  my-1" style="margin:auto ;">
                <label for="Password" style="color:#000000;" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password">
              </div>
              <div class="d-grid gap-2 col-md-6 mx-auto my-3 lbtn">
                <input type="submit" class="btn btn-dark bb" name="submit" value="Login" style="border-radius: 20px;">
                <a href="signup.php" class="btn btn-dark bb"  style="border-radius: 20px;">Sign Up </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </from>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>