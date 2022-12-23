<?php
session_start();
$user_name = $_SESSION['username'];
$acc_id = $_SESSION['userID'];
if (!$_SESSION['loggedin']) {
  header("Location: login.php");
}
include('components/dbconnect.php');
$sql = "SELECT * FROM `companyinfo` WHERE companyinfo.acc_id = '$acc_id';";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$com_id=$data['com_id'];
$numOfRows = mysqli_num_rows($result);
if ($numOfRows == 0) {
  header("Location: companyProfile.php?acc_id=" . $acc_id);
}
?>   
<?php
include('components/dbConnect.php');

if (isset($_POST['postjobs'])) {
  $jobtitle = $_POST['jobtitle'];
  $vacancy = $_POST['vacancy'];
  $experience = $_POST['experience'];
  $deadline = $_POST['dedlin'];
  $jobdes = $_POST['jobdes'];
  $edureq = $_POST['edureq'];
  $skillreq = $_POST['skillreq'];
  $jobreq = $_POST['jobreq'];
  $employeestat = $_POST['empstat'];
  $salary = $_POST['salary'];
  $jobloc = $_POST['jobloc'];

  $sql = "INSERT INTO `job_info` (`job_title`, `company_id`, `vacancy`, `experience`, `job_des`, `edu_req`, `job_requirement`, `employment_status`, `salary`, `job_loc`, `skill_req`, `deadline`) 
  VALUES ('$jobtitle','$com_id', '$vacancy', '$experience', '$jobdes', '$edureq', '$jobreq', '$employeestat', '$salary', '$jobloc', '$skillreq', '$deadline')";
  $result = mysqli_query($conn, $sql);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- <link rel="stylesheet" href="components/navstyle.css" /> -->
  <link rel="stylesheet" href="components/navstyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
  <style>
    .mainBody {
      background: #ffffff;
    }
  </style>
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



    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      box-sizing: border-box;
    }

    .container {
      padding: 2px 16px;
      width: 100%;
      min-height: auto;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .profile-card {
      width: 100%;
      max-width: 100%;
      text-align: center;
      background-color: #fff;
      color: #333;
    }

    .cover-pic {
      display: block;
      width: 90%;
      height: auto;
      margin: auto;
    }

    .profile-pic {
      width: 200px;
      border-radius: 50%;
      margin-top: -70px;
    }
  </style>
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

  <!-- company -->
  <section>


    <div class="container">
      <div class="profile-card">
        <img src="img/<?php echo $data['photo_loc']; ?>" alt="" class="cover-pic">
        <!-- <img src="https://logodix.com/logo/2119897.jpg" alt="" class="profile-pic"> -->
        <br>
        <p><?php echo $data['companyDetails']; ?></p>
      </div>
    </div>

    <!-- about -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mx-2" style="width: 23rem;  border-radius: 20px;">
            <div class="card-body">
              <div class="container">
                <img src="https://th.bing.com/th/id/R.4b13259d328874d47ccb6b761cd49a52?rik=kEp5YzgQd%2bf%2fUQ&pid=ImgRaw&r=0" alt="" style="height: 50%; width: 50%">
              </div>
              <div class="container">
                <label for="floatingTextarea2">
                </label>
              </div>
              <div class="container">
                <!-- <button type="button" class="btn btn-link">Post a new job</button> -->

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: #063146; border-radius:30px;">
                  Post a Job
                </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Post Job Information</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="company.php" method="post">
                          <div class="mb-3">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Job Title" name="jobtitle">
                          </div>

                          <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Vacancy:" name="vacancy">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Experience:" name="experience">
                            </div>
                            <div class="col">
                              <input type="date" class="form-control" placeholder="Deadline:" name="dedlin">
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Job Description(Key
                              Accountabilities: )</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="jobdes"></textarea>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Educational Requirement:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="edureq"></textarea>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Skills Requirement: </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="skillreq"></textarea>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Job Requirements</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="jobreq"></textarea>
                          </div>

                          <div class="mb-3">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Employment Status" name="empstat"><br>
                          </div>
                          <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Sallary:" name="salary">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Job Location:" name="jobloc">
                            </div>
                          </div>

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="postjobs" id="postjobs" value="postjobs">Post</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mx-2" style="width: 23rem;  border-radius: 20px;">
            <div class="card-body">
              <div class="container">
                <img src="https://img.freepik.com/premium-vector/web-concept-people-creating-web-application-content-text-place-illustration_138260-628.jpg" alt="" style="height: 25%; width: 50%">
              </div>
              <div class="container">
                <label for="floatingTextarea2">
                </label>
              </div>
              <div class="container">
                <a href="comjob.php" class="btn btn-info" style="border-radius: 30px;">View existing job</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mx-2" style="width: 23rem;  border-radius: 20px;">
            <div class="card-body">
              <div class="container">
                <img src="https://media.istockphoto.com/id/1159790535/vector/hr-specialist-has-interview-with-job-applicant.jpg?s=612x612&w=0&k=20&c=8XS3zyWJJyFo43Lt8m6Pk0DO-cnDkbndchdGs0tEKf0=" alt="" style="height: 50%; width: 50%">
              </div>
              <div class="container">
                <label for="floatingTextarea2">
                </label>
              </div>
              <div class="container">
                <a href="job_applicant.php?com_id=<?php echo $com_id ?>" type="button" class="btn btn-danger" style="border-radius: 30px;">View Applicants</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>