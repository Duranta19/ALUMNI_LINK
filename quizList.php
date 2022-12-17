<?php

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Sider Menu Bar CSS</title>
  <link rel="stylesheet" href="components/navstyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
</head>

<body>

  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
    <header>My App</header>
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
        <a href="#">
          <i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 30px"></i>
          Jobs
        </a>
      </li>
      <li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Job Preparation</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Blogs</a></li>
          <li><a class="dropdown-item" href="quizList.php">Quiz</a></li>
        </ul>
      </li>

      </li>
      <li>
        <a href="#">
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
        <a href="#">
          <i class="fa-sharp fa-solid fa-comments" style="font-size: 25px; margin-right: 20px"></i>
          Forum
        </a>
      </li>
      <li>
        <a href="logout.php" class="signout">
          <i class="fa-sharp fa-solid fa-right-from-bracket" style="font-size: 25px; margin-right: 30px"></i>
          Sign Out
        </a>
        <br>
      </li>
      <li>
        <br>
      </li>
    </ul>
  </div>
  <br>
  <br>
  <section>
    <?php
    include("components/dbconnect.php");
    $sql = "SELECT * FROM `qus_info` WHERE 1;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <div class="card w-75 m-auto shadow mb-3" style="border-radius: 25px;">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-10">
              <h5 class="card-title"><?php echo $row['qus_title']; ?> (<?php echo $row['qus_code']; ?>)</h5>
              <p class="card-text"><?php echo $row['qus_des']; ?></p>
              <p class="card-text">Total Questions : <?php echo $row['total_qus']; ?></p>
            </div>
            <div class="col-sm-2">
              <a href="quiz.php?quiz_code=<?php echo $row['qus_code'] ?>" class="btn btn-primary m-auto ">Attemp</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>