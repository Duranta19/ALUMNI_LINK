<?php
include('components/dbconnect.php');
session_start();
$acc_id = $_SESSION['userID'];
$qCode = $_GET['qCode'];
$att = (int)$_GET['atmp'];
$score = $_GET['score'];
$score = (int)$score;
$totalQ = (int)$_GET['totalQuestion'];
$wrong = (int) $att - $score;
$acc = (int) (100 - ($wrong * 100) / $totalQ);

$sql1 = "SELECT  `Catagory` FROM `qus_info` WHERE qus_code = '$qCode';";
$result1 = mysqli_query($conn, $sql1);
$dataCat = mysqli_fetch_assoc($result1);
$category = $dataCat['Catagory'];
// echo $category;
$sql2 = "INSERT INTO `quiz_result`(`acc_id`, `score`, `category`) VALUES ('$acc_id','$acc','$category')";
$result2 = mysqli_query($conn, $sql2);
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
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container shadow mb-3 w-50 p-3 m-auto">
            <div class="card text-center">
                <div class="card-header">
                    Quiz Result
                </div>
                <div class="card-body">
                    <h5 class="card-title">Score</h5>
                    <p class="card-text">You Have Attemp <?php echo $att; ?> Questions</p>
                    <p class="card-text">Correct <?php echo $score; ?> </p>
                    <p class="card-text">Wrong <?php echo $wrong; ?></p>
                    <a href="quizList.php" class="btn btn-primary">Close</a>
                </div>
                <div class="card-footer text-muted">
                    Alumni-Linked
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>