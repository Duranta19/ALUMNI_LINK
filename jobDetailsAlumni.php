<?php
$post_id = $_GET['sl'];
include('components/dbconnect.php');
$sql = "SELECT * FROM `jobs_alumni` WHERE sl = '$post_id';";
$res = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="components/navstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
        <header><img
                src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0"
                alt="" style="height:45px; width:45px;" />
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
                </li>
            </ul>
    </div>
    <br>
    <br>
    <section>
        <img src="https://as2.ftcdn.net/v2/jpg/04/96/27/97/1000_F_496279754_N7gxd0CWlsLn952lCWHnss3TrA1s90b2.jpg"
            class="img" alt="..." style="width: 100%; height: 50%; margin-top: -50px;">
        <br>
        <br>
        <div class="container p-3"
            style="border: 1px solid rgba(0, 0, 0, 0.13); background-color: rgba(247, 247, 247, 0.61);">
            <h5><?php echo $data['job_title']; ?></h5>
            <p>Vacancy: <?php echo $data['vacency']; ?></p>
            <p>Experience: <?php echo $data['experiance']; ?></p>
            <p>Deadline: <?php echo $data['deadline']; ?></p>
        </div>
        <div class="container p-3"
            style="border: 1px solid rgba(0, 0, 0, 0.13); background-color: rgba(247, 247, 247, 0.61);">
            <h5>Job Description</h5>
            <p><?php echo $data['job_description']; ?></p>

            <h5>Educational Requirement:</h5>
            <p><?php echo $data['education']; ?></p>
            <h5>Skills Requirement:</h5>
            <ul>
                <li><?php echo $data['skills']; ?></li>
            </ul>
            <h5>Job Requirements</h5>
            <p><?php echo $data['job_requirements']; ?></p>
            <h5>Employment Status</h5>
            <p><?php echo $data['job_type']; ?></p>
            <h5>Job Location</h5>
            <p><?php echo $data['location']; ?></p>
            <h5>Salary</h5>
            <p><?php echo $data['sallary']; ?></p>
        </div>
        <br>
        <div class="container text-center">
            <a href="<?php echo $data['apply_link']; ?>" target="_blank" class="btn btn-warning" style="border-radius: 20px; padding: 5px 15px;">Apply</a>
        </div>
        <br>
        <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,165.3C384,171,480,181,576,197.3C672,213,768,235,864,256C960,277,1056,299,1152,288C1248,277,1344,235,1392,213.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </footer>
    </section>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>

