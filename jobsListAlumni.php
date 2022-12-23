<?php
include('components/dbconnect.php');
$searchCheck = false;
$result4="";
session_start();
$category = $_SESSION['cat'] ?? 'not set';
// echo $category;
$c =0;
$sql3 = "SELECT * FROM `jobs_alumni` WHERE 1 ORDER BY jobs_alumni.post_date DESC;";
$result3 = mysqli_query($conn, $sql3);
while($row2 = mysqli_fetch_assoc($result3)){
    $c += 1; 
}
if (isset($_POST['submit'])) {
    include('components/dbconnect.php');
    $com_name = $_POST['com_name'];
    $job_title = $_POST['job_title'];
    $vacency = $_POST['vacency'];
    $exp = $_POST['exp'];
    $dl = $_POST['deadline'];
    $job_descp = $_POST['job_descp'];
    $edu = $_POST['edu'];
    $skill = $_POST['skill'];
    $job_req = $_POST['job_req'];
    $job_type = $_POST['job_type'];
    $sallary = $_POST['sallary'];
    $job_loc = $_POST['job_loc'];
    $ap_lnk = $_POST['apply_link'];

    // echo $com_name . '<br>' . $job_title. '<br>';
    $sql = "INSERT INTO `jobs_alumni` (`company`, `job_title`, `deadline`, `vacency`, `experiance`, `job_description`, `education`, `skills`, `job_requirements`, `job_type`, `sallary`, `location`, `post_date`, `apply_link`) 
                                        VALUES('$com_name', '$job_title', '$dl', '$vacency', '$exp', '$job_descp', '$edu' ,'$skill', '$job_req', '$job_type', '$sallary', '$job_loc', current_timestamp(), '$ap_lnk')";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
}
if(isset($_GET['search'])){
    $searchCheck = true;
    $key = $_GET['key'];
    $sql4 = "SELECT * FROM `jobs_alumni` WHERE company LIKE '%$key%' or location LIKE '%$key%' or job_requirements like '%$key%' or job_type like '%$key%' OR job_title like '%$key%';";
    $result4 = mysqli_query($conn,$sql4);
}
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
    <style>
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

        .card {
            margin: 5px;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Job
                    Preparation</a>
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
    <br>
    <br>

    <section>
        <ul class="nav justify-content-end">
            <li class="nav-item" style=" margin:10px;">
                <form action="jobsListAlumni.php" method="GET" class="d-flex" id="form1">
                    <input class="form-control me-2" name="key" type="text" placeholder="Search"  style="border-radius: 30px">
                    <button class="btn btn-dark" type="submit" name="search" style="background: #063146; border-radius:20px;">Search</button>
                </form>
            </li>
        </ul>

        <div class="container" style="top: -20px;">
            <img src="img/people-group-different-occupation-profession-set-international-labor-day-flat-banner_180264-14.jpg" class="img-fluid" alt="...">
        </div>
        <div class="container">

            <h5>Job Information</h5>
            <p><?php echo $c ?> Result Found</p>
            <?php
            if ($category == 'Alumni') { ?>

                <div class="container text-center">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background: #063146; border-radius:10px;">
                        Post Job Information
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Post Job Information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="jobsListAlumni.php" method="post" id="form2">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Company Name" name="com_name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Job Title" name="job_title">
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Vacancy:" name="vacency">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Experience:" name="exp">
                                            </div>
                                            <div class="col">
                                                <input type="date" class="form-control" placeholder="Deadline:" name="deadline">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Job Description(Key
                                                Accountabilities: )</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="job_descp"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Educational
                                                Requirement:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="edu"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Skills Requirement:
                                            </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="skill"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Job
                                                Requirements</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="job_req"></textarea>
                                        </div>

                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Job Type" name="job_type"><br>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Sallary:" name="sallary">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Job Location:" name="job_loc">
                                            </div>
                                        </div>
                                        <div class="my-3">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Apply Link" name="apply_link">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <hr>
        <br>

        <div class="container">
            <div class="row">
                <?php
                if(!$searchCheck){
                include('components/dbconnect.php');
                $sql2 = "SELECT * FROM `jobs_alumni` WHERE 1 ORDER BY jobs_alumni.post_date DESC;";
                $result2 = mysqli_query($conn, $sql2);

                while ($row = mysqli_fetch_assoc($result2)) { ?>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['job_title'] ?></h5>
                                <p class="card-text">Vacancy : <?php echo $row['vacency'] ?></p>
                                <p class="card-text">Experience : <?php echo $row['experiance'] ?></p>
                                <p class="card-text">Deadline : <?php echo $row['deadline'] ?></p>
                                <a href="jobDetailsAlumni.php ? sl=<?php echo $row['sl'];?>" class="btn btn-primary" style="background: #063146; border-radius:20px;">Details</a>
                            </div>
                        </div>
                    </div>

                <?php }} else{
                    while ($row = mysqli_fetch_assoc($result4)) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['job_title'] ?></h5>
                                <p class="card-text">Vacancy : <?php echo $row['vacency'] ?></p>
                                <p class="card-text">Experience : <?php echo $row['experiance'] ?></p>
                                <p class="card-text">Deadline : <?php echo $row['deadline'] ?></p>
                                <a href="jobDetailsAlumni.php ? sl=<?php echo $row['sl'];?>" class="btn btn-primary" style="background: #063146; border-radius:20px;">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                
            </div>
        </div>
        <br>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>