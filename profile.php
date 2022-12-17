<?php
session_start();
$user_name = $_SESSION['username'];
$acc_id = $_GET['acc_id'];
if (!$_SESSION['loggedin']) {
  header("Location: login.php");
}
include('components/dbconnect.php');
$sql = "SELECT * FROM `user_info` WHERE user_info.acc_id = '$acc_id';";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$sql2 = "SELECT * FROM `accounts` WHERE accounts.acc_id = '$acc_id';";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);

$skill_arr = explode(",", $data['skills']);
$lng_arr = explode(",", $data['language']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="components/navstyle.css" />
  <!-- <link rel="stylesheet" href="nav2style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
  <style>
    .mainBody {
      background: #ffffff;
    }
  </style>
</head>

<body class="mainBody">
  <!-- sidenav -->
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar">
    <header><img src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0" alt="" style="height:45px; width:45px;" />
      Alumni_Linked</header>
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
        <a href="#">
          <i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>
          Job Preparation
        </a>
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


  <section>
    <!-- topnav -->
    <ul class="nav justify-content-end">
      <li class="nav-item" style=" margin:5px;">
        <form action="userProfile.php" method="post" class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 30px">
          <button class="btn btn-dark" type="submit" style="background: #063146; border-radius:20px;">Search</button>
        </form>
      </li>
      <!-- <li class="nav-item">
                <a class="btn btn-primary" href="#" role="button" style="margin-left:5px; margin-right:5px; border-radius:50px;">Edit Profile</a>
            </li> -->
    </ul>
    <div class="row">
      <!-- left -->
      <div class="col-sm-3" style="margin: 10px;">
        <div class="card">
          <div class="card-body">
            <a href="editProfile.php?acc_id=<?php echo $acc_id; ?>" class="btn btn-light"><i class="fa-solid fa-user-pen"></i></a>
            <div class="text-center">
              <img src="img/<?php echo $data['photo_loc']; ?>" class="" alt="..." style="height:150px; width:150px; border-radius: 50%;">
            </div>
            <h5 class="card-title text-center"><b><?php echo $data2['user_name']; ?></b></h5>
            <p class="text-center">loo : 21+</p>
            <p class="text-center"><?php echo $data['address']; ?></p>
            <hr>
            <p class="text-center"><?php echo $data['email']; ?></p>
            <p class="text-center"><?php echo $data['phone_num']; ?></p>
            <hr>
            <h5 class="card-title"> Skills</h5>
            <!-- <button type="button" class="btn btn-outline-primary">Primary</button> -->
            <?php
            for ($i = 0; $i < sizeof($skill_arr); $i++) {
              echo '<button type="button" class="btn btn-outline-dark" style="margin:2px;">' . $skill_arr[$i] . '</button>';
            }
            ?>
            <hr>
            <h5 class="card-title"> Language</h5>
            <?php
            for ($i = 0; $i < sizeof($lng_arr); $i++) {
              echo '<button type="button" class="btn btn-outline-dark" style="margin:2px;">' . $lng_arr[$i] . '</button>';
            }
            ?>
            <hr>
            <br>
            <dev class="text-center">
              <a href="<?php echo $data['facebook']; ?>" target="_blank"><i class="fa-brands fa-facebook" style="font-size:32px; margin:3px; color:#042331"></i></a>
              <a href="<?php echo $data['massenger']; ?>" target="_blank"><i class="fa-brands fa-facebook-messenger" style="font-size:32px; margin:3px; color:#042331"></i></a>
              <a href="<?php echo $data['whatsapp']; ?>" target="_blank"><i class="fa-brands fa-whatsapp" style="font-size:32px; margin:3px; color:#042331"></i></a>
            </dev>


          </div>
        </div>
      </div>
      <!-- right -->
      <div class="col-sm-8" style="margin-top: 10px;">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">About me</h5>
            <p class="card-text"><?php echo $data['about_me']; ?></p>
            <hr>
            <br>
            <!-- <p><button class="btn btn-outline-dark btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Education</button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <hr> -->
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" style="color: #042331;" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Education</button>
                <button class="nav-link" id="nav-profile-tab" style="color: #042331;" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Experience</button>
                <button class="nav-link" id="nav-contact-tab" style="color: #042331;" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Achivements</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Degree</th>
                      <th scope="col">Institution</th>
                      <th scope="col">Passing year</th>
                      <th scope="col">Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">SSC</th>
                      <td><?php echo $data['school']; ?></td>
                      <td><?php echo $data['ssc_year']; ?></td>
                      <td><?php echo $data['ssc_result']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">HSC</th>
                      <td><?php echo $data['college']; ?></td>
                      <td><?php echo $data['hsc_year']; ?></td>
                      <td><?php echo $data['hsc_result']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">B.Sc/BBA</th>
                      <td><?php echo $data['uni_ug']; ?></td>
                      <td><?php echo $data['ug_year']; ?></td>
                      <td><?php echo $data['ug_result']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">M.Sc/MBA</th>
                      <td><?php echo $data['uni_gr']; ?></td>
                      <td><?php echo $data['gr_year']; ?></td>
                      <td><?php echo $data['pg_result']; ?></td>
                    </tr>
                    <tr>
                      <th scope="row">Post Graduation</th>
                      <td><?php echo $data['uni_pg']; ?></td>
                      <td colspan="2"><?php echo $data['pg_year']; ?></td>

                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="container">
                  <?php
                  include('components/dbconnect.php');
                  $acc_id = $_GET['acc_id'];
                  if (isset($_POST['experiences'])) {
                    $position = $_POST['position'];
                    $company = $_POST['company'];
                    $joinDate = $_POST['joinDate'];
                    $leaveDate = $_POST['leaveDate'];
                    $experience = $_POST['experience'];
                    $result = mysqli_query($conn, $sql);
                    $sql = "INSERT INTO `user_experience`(`acc_id`, `position`, `company`, `joinDate`, `leaveDate`, `description`) 
                          VALUES ('$acc_id','$position','$company','$joinDate','$leaveDate','$experience');";
                    $result = mysqli_query($conn, $sql);
                  }
                  ?>
                  <?php
                  include('components/dbconnect.php');
                  $sql2 = "SELECT * FROM `user_experience` WHERE acc_id= '$acc_id' ;";
                   $result2 = mysqli_query($conn, $sql2);
                  while ($row = mysqli_fetch_assoc($result2)) {
                  ?>
                    <main class="py-4 container">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title"><?php echo $row['position'] ?></h4>
                          <h6 class="card-subtitle mb-2"><?php echo  $row['company'] ?></h6>
                          <p class="card-subtitle mb-2 text-muted"><?php echo "From: ". $row['joinDate']?></p>
                          <p class="card-subtitle mb-2 text-muted"><?php echo "To: ".$row['leaveDate']?></p>
                        </div>
                        <div class="card-footer"><?php echo $row['description'] ?></div>
                      </div>
                    </main>
                  <?php } ?>
                </div>
              </div>

              <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="container">
                  <?php
                  include('components/dbconnect.php');
                  $acc_id = $_GET['acc_id'];
                  if (isset($_POST['achievement'])) {
                    $achievement_titel = $_POST['achievement_titel'];
                    $achievement = $_POST['achievements'];
                    $result = mysqli_query($conn, $sql);
                    $sql = "INSERT INTO `user_achievement` (`acc_id`,`achievement`,`achievement_titel`) 
                          VALUES ('$acc_id','$achievement','$achievement_titel');";
                    $result = mysqli_query($conn, $sql);
                  }
                  ?>
                  <?php
                  include('components/dbconnect.php');
                  $sql2 = "SELECT * FROM `user_achievement` WHERE acc_id= '$acc_id' ;";
                  $result2 = mysqli_query($conn, $sql2);
                  while ($row = mysqli_fetch_assoc($result2)) {
                  ?>
                    <main class="py-4 container">
                      <div class="card">
                        <img src="img/achievement.jpg" class="card-img-top" style="height: 50px; width:50px;">
                        <div class="card-body">
                          <h5><?php echo $row['achievement_titel'] ?></h5>
                        </div>
                        <div class="card-footer"><?php echo $row['achievement'] ?></div>
                      </div>
                    </main>
                  <?php } ?>
                </div>
              </div>
            </div>
            <br>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>