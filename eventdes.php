<?php
session_start();
$catagory = $_SESSION['cat'];
$user_name = $_SESSION['username'];
$acc_id = $_SESSION['userID'];
$eid = $_GET['e_id'];
if (!$_SESSION['loggedin']) {
  header("Location: login.php");
}
include('components/dbconnect.php');
$sql = "SELECT * FROM `event_info` WHERE event_info.event_id = '$eid';";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$numOfRows = mysqli_num_rows($result);

if (isset($_POST['submit'])) {
  $pic_name = $_FILES['event_photo']['name'];
  $pic_loc = $_FILES['event_photo']['tmp_name'];
  $upload_loc = 'img/' . $pic_name;
  $sql3 = "INSERT INTO `event_photo`(`event_id`, `pic`) VALUES ('$eid','$pic_name')";
  $result3 = mysqli_query($conn, $sql3);
  if ($result3) {
    move_uploaded_file($pic_loc, $upload_loc);
    header("Location: eventdes.php?e_id=" . $eid);
    echo $pic_name;
  } else {
    echo "Failed";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Details</title>
  <!-- <link rel="stylesheet" href="components/navstyle.css" /> -->
  <link rel="stylesheet" href="components/navstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
  <style>
    .mainBody {
      background: #ffffff;
    }

    .dropdown-menu {
      position: absolute;
      z-index: 1000;
      display: none;
      min-width: 10rem;
      padding: .5rem 0;
      margin: 0;
      font-size: 1rem;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #063146;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, .15);
      border-radius: .25rem;
    }
  </style>
</head>

<body class="mainBody">
  <!-- sidenav -->
  <?php
  if ($catagory == 'Student' or $catagory == 'Alumni') { ?>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>
        <img src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0" alt="" style="height: 45px; width: 45px" />
        Alumni_Linked
      </header>
      <ul>
        <li>
          <a href="userProfile.php">
            <i class="fa-sharp fa-solid fa-user" style="font-size: 25px; margin-right: 30px"></i>
            Profile
          </a>
        </li>
        <li>
          <a href="alumniList.php">
            <i class="fa-sharp fa-solid fa-users" style="font-size: 25px; margin-right: 25px"></i>
            Alumni
          </a>
        </li>
        <li>
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 20px"></i>Jobs</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="jobList.php">Jobs</a></li>
            <li><a class="dropdown-item" href="jobsListAlumni.php">Jobs Information</a></li>
          </ul>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>Job Preparation</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="blog.php">Blogs</a></li>
            <li><a class="dropdown-item" href="quizList.php">Quiz</a></li>
          </ul>
        </li>
        <li>
          <a href="companyList.php">
            <i class="fa-sharp fa-solid fa-building" style="font-size: 25px; margin-right: 30px"></i>
            Company
          </a>
        </li>
        <li>
          <a href="event.php">
            <i class="fa-sharp fa-solid fa-calendar-check" style="font-size: 25px; margin-right: 30px"></i>
            Events
          </a>
        </li>
        <li>
          <a href="communityPost.php">
            <i class="fa-sharp fa-solid fa-comments" style="font-size: 25px; margin-right: 20px"></i>
            Forum
          </a>
        </li>
        <li>
          <a href="controllPanel.php">
            <i class="fa-sharp fa-solid fa-comments" style="font-size: 25px; margin-right: 20px"></i>
            Controll Panel
          </a>
        </li>
        <li>
          <a href="logout.php" class="signout">
            <i class="fa-sharp fa-solid fa-right-from-bracket" style="font-size: 25px; margin-right: 30px"></i>
            Sign Out
          </a>
        </li>
      </ul>
    </div>
  <?php } ?>
  <!-- event -->
  <section>

    <div class="container">
      <center> <img src="eventImg/<?php echo $data['event_img']; ?>" style="border-radius: 15px; width: 50%" class="img-fluid" alt="...">
      </center>
    </div>

    <div class="container py-2 justify-content-center" style="text-align: center">
      <a href="<?php echo $data['registration_link']; ?>" target="_blank" class="btn btn-outline-dark "> Registration</a>
    </div>
    <div class="container">
      <div class="row g-0">
        <div class="card mb-3">
          <div class=" card-body">
            <h5 class="card-title"><?php echo $data['event_title']; ?></h5>
            <label for="number" class="col-sm-2 col-form-label">Date: <?php echo $data['date']; ?></label>
            <br />
            <label for="number" class="col-sm-2 col-form-label">Time: <?php echo $data['time']; ?></label>
            <div class="card-body">
              <h5 class="card-title">Description</h5>
              <?php echo $data['event_details']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br><br><br>
    <?php
    if ($data['acc_id'] == $acc_id) { ?>
      <div class="container">
        <h6>Add Photo</h6>
        <form action="eventdes.php?e_id=<?php echo $eid; ?>" method="post" enctype="multipart/form-data">
          <div class="row m-3">
            <div class="col"><input class="form-control" type="file" id="formFile" name="event_photo"></div>
            <div class="col"><input type="submit" class="btn btn-dark bb" name="submit" value="Add" style="border-radius: 5px;"></div>
          </div>
        </form>
      </div>
    <?php } ?>
    <hr>
    <br>

    <div class="container" style=" height: 300px; width:auto;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <?php
          include('components/dbconnect.php');
          $sql2 = "SELECT * FROM `event_photo` WHERE event_id = '$eid';";
          $result2 = mysqli_query($conn, $sql2);
          for ($i = 1; $i <= mysqli_num_rows($result2); $i++) {
            $row = mysqli_fetch_array($result2);

            if ($i == 1) {?>
              <div class="carousel-item active">
                <img src="img/<?php echo $row['pic']; ?>" class="d-block w-100" alt="..." width="100%" height="400px">
              </div>

            <?php } else {
            ?>
              <div class="carousel-item">
                <img src="img/<?php echo $row['pic']; ?>" class="d-block w-100" alt="..." width="100%" height="400px">
              </div><?php } ?>
          <?php }  ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <br><br>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>