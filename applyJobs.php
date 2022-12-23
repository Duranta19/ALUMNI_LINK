<?php
session_start();
$user_name = $_SESSION['username'];
$acc_id = $_SESSION['userID'];
$com_id = $_GET['com_id'];
if (!$_SESSION['loggedin']) {
  header("Location: login.php");
}
include('components/dbconnect.php');
$sql = "SELECT * FROM `job_info` WHERE job_info.company_id = '$com_id';";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$numOfRows = mysqli_num_rows($result);

$sql2 = "SELECT * FROM `companyinfo` WHERE companyinfo.com_id = '$com_id';";
$result2 = mysqli_query($conn, $sql2);
$data2 = mysqli_fetch_assoc($result2);

$sql3 = "SELECT * FROM `user_info` WHERE user_info.acc_id = '$acc_id';";
$result3 = mysqli_query($conn, $sql3);
$data3 = mysqli_fetch_assoc($result3);
$photo = $data3['photo_loc'];
?>
<?php
if (isset($_POST['submit'])) {

  include('components/dbConnect.php');

  $applicantName = $_POST['applicantName'];
  $applicantEmail = $_POST['applicantEmail'];
  $applicantPhone = $_POST['applicantPhone'];
  $applicantDes = $_POST['applicantDes'];
  $websiteLink = $_POST['websiteLink'];
  $applicantCV = $_POST['applicantCV'];

  $pic_name = $_FILES['applicantCV']['name'];
  $pic_loc = $_FILES['applicantCV']['tmp_name'];
  $upload_loc = 'img/' . $pic_name;

  $sql = "INSERT INTO `job_applicant`(`acc_id`, `com_id`,`photo`, `applicantName`, `applicantEmail`, `applicantPhone`, `applicantDes`, `websiteLink`, `applicantCV`) 
  VALUES ('$acc_id','$com_id','$photo','$applicantName','$applicantEmail','$applicantPhone','$applicantDes','$websiteLink','$pic_name')";
  $result = mysqli_query($conn, $sql);
  // $resultRows = mysqli_num_rows($result);

  if ($result) {
    move_uploaded_file($pic_loc, $upload_loc);
    header("Location: comjob.php");
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
    <title>Job</title>
    <!-- <link rel="stylesheet" href="components/navstyle.css" /> -->
    <link rel="stylesheet" href="components/navstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>

</head>

<body class="mainBody">
    <!-- sidenav -->
    <input type="checkbox" id="check" />
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
          <a href="jobsListAlumni.php">
            <i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 30px"></i>
            Jobs
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>Job Preparation</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="blog.php">Blogs</a></li>
            <li><a class="dropdown-item" href="quizList.php">Quiz</a></li>
          </ul>
        </li>
        <li>
          <a href="comjob.php">
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

    <!-- event -->
    <section>
        <ul class="nav justify-content-end">
            <li class="nav-item" style=" margin:10px;">
                <form action="alumniList.php" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" name="search" type="search" value="<?php if (isset($_GET['search'])) {
                                                                                            echo $_GET['search'];
                                                                                        } ?>" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                    <button class="btn btn-dark" type="submit" style="background: #063146; border-radius:20px;">Search</button>
                </form>
            </li>
        </ul>
        <div class="container">
           
                <div class="row">

                    <div class="col-md-6">
                        <center><img src="img/<?php echo $data2['photo_loc']; ?>" alt="" style="height: 100%; width:100%" class="py-2"></center>
                        <h5><?php echo $data['job_title'] ?></h5>
                        <h5><?php echo $data2['companyName'] ?> </h5>
                        <p> <?php echo $data2['websiteLink'] ?></p>
                        <label for="text"> Location: <?php echo $data['job_loc']; ?> </label><br>
                        <label for="text"> Vacancy: <?php echo $data['vacancy']; ?> </label><br>
                        <label for="text"> Experience: <?php echo $data['experience']; ?> Years </label><br>
                        <label for="text"> Salary: <?php echo $data['salary']; ?> </label> <br>
                        <label for="text"> Deadline: <?php echo $data['deadline']; ?> </label><br>
                    </div>
                    <div class="col-md-6">

                        <br>
                        <h6>Description</h6>
                        <p class="text-muted"><?php echo $data['job_des']  ?></p>
                        <h6>Required Education</h6>
                        <p class="text-muted"><?php echo $data['edu_req']  ?></p>
                        <h6>Required Skill</h6>
                        <p class="text-muted"><?php echo $data['skill_req']  ?></p>
                        <h6>Job Requirement</h6>
                        <p class="text-muted"><?php echo $data['job_requirement']  ?></p>
                    </div>
                </div>

            <form action="applyJobs.php?com_id=<?php echo $com_id ?>" method="post" class="d-flex py-2" enctype="multipart/form-data">
                <li>
                    <!-- Button trigger modal -->
                    <div class="container">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Apply
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fill up the form</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- eventfrom -->
                                    <!-- <form action="event.php" method="post" enctype="multipart/form-data"> -->
                                    <div class="container" style="height: 100%; width: 70%">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="applicantName" placeholder="Full Name" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="applicantEmail" placeholder="Email" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" name="applicantPhone" placeholder="Contact Number" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">About me</label>
                                            <textarea class="form-control" name="applicantDes" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Website (if any)</label>
                                            <input type="text" class="form-control" name="websiteLink" placeholder="Website" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Drop your CV</label>
                                            <input type="file" class="form-control" name="applicantCV">
                                        </div>
                                        <div class="d-grid gap-2 my-4 col-6 mx-auto">
                                            <button class="btn btn-outline-success" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </form>
            </div>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>