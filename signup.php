<?php
include('components/dbconnect.php');


if (isset($_POST['signup'])) {

  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $category = $_POST['category'];
  $name = $_POST['name'];

  $existSql = "select * from accounts where user_name = '$username' ";
  $result = mysqli_query($conn, $existSql);
  $existRows = mysqli_num_rows($result);
  if ($existRows > 0) {
    $showError = "Username already exists";
  } else {
    if ($pass == $cpass && $username != "" && $category != "" && $name != "") {
      $sql = "INSERT INTO `accounts` (`user_id`, `user_password`, `category`, `user_name`) 
  VALUES ('$username', '$pass', '$category', '$name')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlret = true;
      }
    } else {
      $showError = 'password do not match';
    }
  }
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SignUP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body class="header" style="background-color:#dcf3e3">
<?php
global $showAlret;
global $showError;
  if ($showAlret) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Account Has Been Created Successfully</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
  }
  if ($showError) {
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Something Wrong!</strong> ' . $showError . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  <div class="container"  style="background-color:#ffffff">
    <div class="row">
      <div class="column" style="width: 50% ;">
        <img src="components/SignUp.png"style="width: 100%;margin: 15%;"  ></img>
      </div>
      <div class="column" style="width: 50%; ">
        <form action="signup.php" method="post" style="margin: 15%;">
          <div class="mb-3">
          <h3>Create Account</h3>
            <select name="category" class="form-select"style="border-radius:12px;">
              <option value =" " disabled selected>Category</option>
              <option value="Alumni">Alumni</option>
              <option value="Student">Student</option>
              <option value="Organization">Organization</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name" class="form-label"> Full Name</label>
            <input type="name" class="form-control" id="name" name="name" style="border-radius:12px;">
          </div>
          <div class="form-group">
            <label for="username" class="form-label">Student ID/User Name </label>
            <input type="name" class="form-control" id="username" name="username"style="border-radius:12px;">
          </div>
          <div class="form-group">
            <label for="pass" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass"name="pass"style="border-radius:12px;">
          </div>
          <div class="form-group">
            <label for="cpass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cpass" name="cpass"style="border-radius:12px;">
          </div>
          <br><button type="submit" class="btn " style="background-color:#7ddbb6; color:Black;" name="signup">Sign In</button></br>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>