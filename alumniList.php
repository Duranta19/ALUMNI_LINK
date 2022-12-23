<?php
$chk = false;
?>

<!DOCTYPE html>
<html lang="en">

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni List</title>
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

    <section>

        <ul class="nav justify-content-end">
            <li class="nav-item" style=" margin:10px;">
                <form action="alumniList.php" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" name="search" type="search" value="<?php if (isset($_GET['search'])) {
                                                                                            echo $_GET['search'];
                                                                                        }
                                                                                        $chk = true; ?>" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                    <button class="btn btn-dark" type="submit" style="background: #063146; border-radius:20px;">Search</button>
                </form>
            </li>
            <!-- <li class="nav-item">
                <a class="btn btn-primary" href="#" role="button" style="margin-left:5px; margin-right:5px; border-radius:50px;">Edit Profile</a>
            </li> -->
        </ul>

        <div class="container">
            <?php
            include('components/dbconnect.php');
            if (isset($_GET['search']) && $chk != false) {
                $search = $_GET['search'];
                $sql2 = "SELECT * FROM `accounts` INNER JOIN `user_info` ON accounts.category like 'Alumni' and accounts.acc_id = user_info.acc_id 
            WHERE  accounts.user_name LIKE '%$search%' OR user_info.skills LIKE '%$search%' OR user_info.about_me LIKE '%$search%' or user_info.address LIKE '%$search%';";
                $result2 = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_assoc($result2)) {
            ?>
                    <div class="container">
                        <main class="container">
                            <div class="card" style="border-radius: 5px; border-color:aquamarine;  background-color:#f7f7f7;">
                                <div class="row align-items-center">
                                    <div class="col-md-2 align-self-center">
                                        <img class="py-2 px-2" style="height: auto; width:100%; border-radius: 50%;" src="img/<?php echo $row['photo_loc'] ?>" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body" style="text-align: center;">
                                            <a style="text-decoration:none; color:#063146;" href="profile.php?acc_id= <?php echo $row['acc_id']; ?>">
                                                <h5 class="card-title"> <?php echo $row['user_name'] ?></h5>
                                            </a>
                                            <p class="card-text">Skills: <?php echo $row['skills'] ?></p>
                                            <p class="card-text">Address: <?php echo $row['address'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h6>About</h6>
                                            <p class="card-text"><?php echo $row['about_me'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>

                <?php }
            } else {
                include('components/dbconnect.php');
                $sql3 = "SELECT * FROM `accounts` INNER JOIN `user_info` ON accounts.category like 'Alumni' and accounts.acc_id = user_info.acc_id 
                WHERE  1;";
                $result3 = mysqli_query($conn, $sql3);
                while ($row = mysqli_fetch_assoc($result3)) {
                ?>
                    <div class="container">
                        <main class="container">
                            <div class="card" style="border-radius: 5px; border-color:aquamarine;  background-color:#f7f7f7;">
                                <div class="row align-items-center">
                                    <div class="col-md-2 align-self-center">
                                        <img class="py-2 px-2" style="height: auto; width:100%; border-radius: 50%;" src="img/<?php echo $row['photo_loc'] ?>" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card-body" style="text-align: center;">
                                            <a style="text-decoration:none; color:#063146;" href="profile.php?acc_id= <?php echo $row['acc_id']; ?>">
                                                <h5 class="card-title"> <?php echo $row['user_name'] ?></h5>
                                            </a>
                                            <p class="card-text">Skills: <?php echo $row['skills'] ?></p>
                                            <p class="card-text">Address: <?php echo $row['address'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h6>About</h6>
                                            <p class="card-text"><?php echo $row['about_me'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
            <?php }
            } ?>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>