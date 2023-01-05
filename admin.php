<?php
session_start();
if (!$_SESSION['loggedin'] and $_SESSION['cat'] != 'Alumni') {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <style>
        .logo {
            width: 240px;
            height: 240px;
            left: 10px;
            top: 25px;
            margin: 15px;
        }

        .card {
            background-color:
                #EEF4F5;
            border-radius: 25px;
        }
    </style>
</head>

<body>

    <ul class="nav justify-content-end">

        <li class="nav-item">
            <a class="btn btn-outline-danger m-3" href="logout.php">Logout</a>
        </li>

    </ul>
    <section>
        <!-- cover -->
        <div class="contayiner" style="height: 340px; width:100%; background-color: #D5DEEB;border-radius: 0px 0px 43px 43px;">
            <div>
                <img src="img/R.54cd6d754c85e71ad31f2fbbfd8f238c.png" class="img logo" alt="...">
            </div>
        </div>

        <!-- 4col -->
        <div class="container ">
            <div class="row align-items-start mb-3" style="margin-top: -25px;">
                <div class="col">
                    <div class="container " style="background-color:#EAFFF1; border-radius:26px;width: 509px;
                        height: 100px; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15);">
                        <div class="row">
                            <div class="col-3"><img src="https://icons-for-free.com/iconfiles/png/512/edit+pencil+post+icon-1320166592711956016.png" class="img" style="border-radius: 50%; width:100px; height:100px;"></div>
                            <div class="col-9 m-auto">
                                <a href="jobsListAlumni.php">
                                    <h6> View Job</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="container " style="background-color:#FFF7F7; border-radius:26px;width: 509px;
                    height: 100px; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15);">
                        <div class="row">
                            <div class="col-3"><img src="https://www.clipartmax.com/png/middle/304-3045658_add-event-icon-png.png" class="img" style="border-radius: 50%; width:80px; height:80px;"></div>
                            <div class="col-9 m-auto">
                                <a href="event.php">
                                <h6>Post an Event</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-start">
                <div class="col">
                    <div class="container " style="background-color:#F8F0FF; border-radius:26px;width: 509px;
                height: 100px; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15);">
                        <div class="row">
                            <div class="col-3"><img src="https://www.clipartmax.com/png/middle/255-2551791_blog-posts-white-blog-icon.png" class="img" style="border-radius: 50%; width:70px; height:70px;">
                            </div>
                            <div class="col-9 m-auto">
                                <a href="blog.php">
                                    <h6>Post Blog</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="container " style="background-color:#EEFCFF; border-radius:26px;width: 509px;
                    height: 100px; box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.15);">
                        <div class="row">
                            <div class="col-3"><img src="https://t3.ftcdn.net/jpg/03/13/59/90/360_F_313599068_q6K16qPR2iD0NQHyMNHuwaMVCgx5XY9E.jpg" class="img" style="border-radius: 50%; width:80px; height:80px;"></div>
                            <div class="col-9 m-auto">
                                <a href="postQuiz.php">
                                    <h6>Set Quiz</h6>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <!-- card -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Student</h5>
                            <img src="https://png.pngtree.com/png-vector/20190324/ourlarge/pngtree-vector-male-student-icon-png-image_862310.jpg" class="img mx-auto" style="border-radius: 50%; width:150px; height:150px;">
                            <h5>
                                <p class="card-text"></p>
                            </h5>
                            <a href="studentList.php" class="btn btn-outline-dark">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Alumni</h5>
                            <img src="https://us.123rf.com/450wm/jovanas/jovanas2008/jovanas200801122/jovanas200801122.jpg?ver=6" class="img mx-auto" style="border-radius: 50%; width:150px; height:150px;">
                            <h5>
                                <p class="card-text"></p>
                            </h5>
                            <a href="alumniList.php" class="btn btn-outline-dark">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Organization</h5>
                            <img src="https://e7.pngegg.com/pngimages/784/809/png-clipart-building-small-business-company-office-corporation-office-icon-insharepics-miscellaneous-blue.png" class="img mx-auto" style="border-radius: 50%; width:150px; height:150px;">
                            <h5>

                            </h5>
                            <a href="companyList.php" class="btn btn-outline-dark">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>