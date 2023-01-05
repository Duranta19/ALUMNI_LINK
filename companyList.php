<?php
session_start();
if (!$_SESSION['loggedin']) {
    header("Location: login.php");
}
$comId = "";
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

        .card {
            box-shadow: 0 4px 8px 0 rgba(138, 169, 171, 0.2);
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(138, 169, 171, 0.5);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .body {
            background-color: cyan;
        }

        .card {
            margin: 50px;
        }

        .container {
            background-color: rgb(229, 229, 240);
            border: 3px solid rgb(59 61 110);
            padding: 34px 19px;
            margin: 14px 19px;
            border-radius: 30px;
        }

        .col {
            margin: 10px;
        }

        .col2 {
            width: 20%;
            align-content: center;
        }


        .mainBody {
            margin-top: 50px;
        }

        .boxContainer {
            margin: auto;
            margin-top: 1%;
            position: relative;
            width: 300px;
            height: 42px;
            border: 4px solid #2980b9;
            padding: 0px 10px;
            border-radius: 50px;
        }

        .elementsContainer {
            width: 100%;
            height: 100%;
            vertical-align: middle;
        }

        .search {
            border: none;
            height: 100%;
            width: 100%;
            padding: 0px 5px;
            border-radius: 50px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            color: #424242;
            font-weight: 500;

        }

        .search:focus {
            outline: none;
        }

        .material-icons {
            font-size: 26;
            color: #2980b9;
        }

        .image {
            margin: auto;
            padding: 10px;
        }

        img {
            height: 70px;
            width: 90px;
            margin: auto;
            padding: 1px;
        }

        .card-text1 {
            color: #2980b9;
        }

        .card-text2 {
            color: #2980b9;
        }

        .card-text3 {
            color: #2980b9;
        }

        .card-text4 {
            color: #2980b9;
        }

        .card {
            background-color: rgba(222, 233, 230, 0.2);
            border-radius: 5px;
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
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 20px"></i>Jobs</a>
                <ul class="dropdown-menu" style="background-color: #063146;">
                    <li><a class="dropdown-item" href="jobList.php">Jobs</a></li>
                    <li><a class="dropdown-item" href="jobsListAlumni.php">Jobs Information</a></li>
                </ul>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>Job Preparation</a>
                <ul class="dropdown-menu" style="background-color: #063146;">
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

    <ul class="nav justify-content-end" style=" margin-top:-30px;">
        <li class="nav-item" style=" margin:10px;">
            <form action="companyList.php" method="GET" class="d-flex" role="search">
                <input class="form-control me-2" name="search" type="search" value="<?php if (isset($_GET['search'])) {
                                                                                        echo $_GET['search'];
                                                                                    }
                                                                                    $chk = true; ?>" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                <button class="btn btn-dark" type="submit" style="background: #063146; border-radius:20px;">Search</button>
            </form>
        </li>
    </ul>

    <section>

        <?php
        include('components/dbconnect.php');
        if (isset($_GET['search']) && $chk != false) {
            $search = $_GET['search'];
            $sql2 = "SELECT * FROM `companyinfo` WHERE companyLocation LIKE '%$search%' or companyDetails LIKE '%$search%' or companyName LIKE '%$search%'";
            $result2 = mysqli_query($conn, $sql2);
            while ($row = mysqli_fetch_assoc($result2)) { ?>
                <div class="card w-75 mx-auto">
                    <div class="card-body">
                        <div class="image">
                            <div class="row">
                                <div class="col-1">
                                    <img src="img/<?php echo $row['photo_loc']; ?>" alt="">

                                </div>
                                <div class="col">
                                    <a href="companyProfile.php?com_id=<?php echo $row['com_id'] ?>" style="text-decoration:none; color: #063146;">
                                        <h4> <?php echo $row['companyName'] ?> </h4>
                                    </a>

                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col">
                                    <b>Location</b>
                                    <p class="card-text1"><?php echo $row['companyLocation'] ?></p>
                                </div>
                                <div class="col">
                                    <?php
                                    $sql3 = "SELECT * FROM `comreview` WHERE com_id = '$comId';";
                                    $result3 = mysqli_query($conn, $sql3);
                                    $rate = mysqli_fetch_assoc($result3);
                                    $rating = $rate['rating'] ?? 'N/A';
                                    ?>
                                    <b>Rating</b>
                                    <p class="card-text"><?php echo $rating; ?></p>
                                </div>
                                <div class="col">
                                    <b>Company Founded</b>
                                    <p class="card-text"><?php echo $row['founded'] ?></p>
                                </div>
                                <div class="col">
                                    <b>Industry</b>
                                    <p class="card-text"><?php echo $row['websiteLink'] ?></p>
                                </div>
                            </div>
                            <h5 class="card-title">Description</h5>
                            <p class="card-text"><?php echo $row['companyDetails'] ?></p>
                        </div>
                    </div>
                </div>

            <?php }
        } else {
            $sql2 = "SELECT * FROM `companyinfo` WHERE 1;";
            $result2 = mysqli_query($conn, $sql2);
            while ($row = mysqli_fetch_assoc($result2)) {
                $comId = $row['com_id']; ?>
                <div class="card w-75 mx-auto">
                    <div class="card-body">
                        <div class="image">
                            <div class="row">
                                <div class="col-1">
                                    <img src="img/<?php echo $row['photo_loc']; ?>" alt="">

                                </div>
                                <div class="col">
                                    <a href="companyProfile.php?com_id=<?php echo $row['com_id'] ?>" style="text-decoration:none; color: #063146;">
                                        <h4> <?php echo $row['companyName'] ?> </h4>
                                    </a>

                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col">
                                    <b>Location</b>
                                    <p class="card-text1"><?php echo $row['companyLocation'] ?></p>
                                </div>
                                <div class="col">
                                    <?php
                                    $sql3 = "SELECT * FROM `comreview` WHERE com_id = '$comId';";
                                    $result3 = mysqli_query($conn, $sql3);
                                    $rate = mysqli_fetch_assoc($result3);
                                    $rating = $rate['rating'] ?? 'N/A';
                                    ?>
                                    <b>Rating</b>
                                    <p class="card-text"><?php echo $rating; ?></p>
                                </div>
                                <div class="col">
                                    <b>Company Founded</b>
                                    <p class="card-text"><?php echo $row['founded'] ?></p>
                                </div>
                                <div class="col">
                                    <b>Industry</b>
                                    <p class="card-text"><?php echo $row['websiteLink'] ?></p>
                                </div>
                            </div>
                            <h5 class="card-title">Description</h5>
                            <p class="card-text"><?php echo $row['companyDetails'] ?></p>
                        </div>
                    </div>
                </div>

        <?php }
        }
        ?>

    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>