

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
    <style>
        .mainBody {
            background: #ffffff;
        }
    </style>
    <style>
        .mainBody {
            background: #ffffff;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(138, 169, 171, 0.5);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(138, 169, 171, 1);
        }

        .container {
            padding: 2px 16px;

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
                <a href="#">
                    <i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 30px"></i>
                    Jobs
                </a>
            </li>
            <li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>
                    Job Preparation
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Quizz</a></li>
                    <li><a class="dropdown-item" href="blog.php">Blogs</a></li>
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
                <?php
                include('components/dbconnect.php');
                $sql2 = "SELECT * FROM `companyinfo`
                INNER JOIN `job_info`
                ON job_info.company_id = companyinfo.com_id";
                $result2 = mysqli_query($conn, $sql2);
                // $x = mysqli_num_rows($result2);
                // echo $x;
                while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 100%; border-radius: 20px; height: 510px;">
                            <center><img src="img/<?php echo $row['photo_loc']; ?>" alt="" style="height: 150px; width:200px" class="py-2"></center>
                            <div class="card-body">
                                <h5>Job Title: <?php echo $row['job_title'] ?></h5>
                                <h6>Company name: <?php echo $row['companyName'] ?></h6>
                                <label for="text"> Vacancy: <?php echo $row['vacancy']; ?> </label><br>
                                <label for="text"> Experience: <?php echo $row['experience']; ?> </label><br>
                                <label for="text"> Deadline: <?php echo $row['deadline']; ?> </label>
                                <p class="card-text">
                                <h6>Required Skill</h6>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted"><?php echo $row['skill_req']  ?></small>
                                </p>
                                <div class="d-grid gap-2 d-md-flex justify-content-center" style="text-align: center">
                                    <a href="applyJobs.php?com_id=<?php echo $row['com_id']; ?>" target="_blank" class="btn btn-outline-success me-md-2" href="">View Description</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>



    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>