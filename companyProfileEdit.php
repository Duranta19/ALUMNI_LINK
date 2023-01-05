<<<<<<< HEAD
<?php
$acc_id = $_GET['acc_id'];
session_start();
if(!$_SESSION['loggedin'] and $_SESSION['cat'] != 'Organization'){
    header("Location: login.php");
}
if (isset($_POST['submit'])) {

    $pic_name = $_FILES['profileImg']['name'];
    $pic_loc = $_FILES['profileImg']['tmp_name'];
    $upload_loc = 'img/' . $pic_name;

    $companyName = $_POST['companyName'];
    $companyDetails = $_POST['companyDetails'];
    $companyLocation = $_POST['companyLocation'];
    $websiteLink = $_POST['websiteLink'];
    $founded = $_POST['founded'];

    include("components/dbconnect.php");
    $sql = "INSERT INTO `companyinfo` (`acc_id`, `companyName`, `companyDetails`, `companyLocation`, `websiteLink`, `photo_loc`, `founded`) 
                            VALUES ('$acc_id', '$companyName', '$companyDetails', '$companyLocation', '$websiteLink', '$pic_name', '$founded');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        move_uploaded_file($pic_loc, $upload_loc);
        header("Location: company.php");
        echo $pic_name;
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
    <title>Company Details</title>
    <!-- <link rel="stylesheet" href="components/navstyle.css" /> -->
    <link rel="stylesheet" href="components/navstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
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
                <ul class="dropdown-menu dropdown-menu-dark">
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
        <form action="companyProfileEdit.php?acc_id=<?php echo $acc_id; ?>" method="post" enctype="multipart/form-data">
            <div class="card m-auto w-75">
                <div class="card-body">
                    <div class="container w-75">
                        <div class="col-md-3 ">
                            <div class="text-ceenter"><img src="https://cdn4.vectorstock.com/i/1000x1000/91/33/company-profile-icon-flat-design-vector-6269133.jpg" class="" alt="..." style="height:150px; width:150px; border-radius: 50%;"></div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">
                                    <h6> Upload Cover </h6>
                                </label>
                                <input type="file" class="form-control" name="profileImg">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Company Details</label>
                            <textarea class="form-control" name="companyDetails" id="companyDetails" rows="3" placeholder="Company Details"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Company Location</label>
                            <input type="text" class="form-control" name="companyLocation" id="companyLocation" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Website Link</label>
                            <input type="text" class="form-control" name="websiteLink" id="websiteLink" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Founded</label>
                            <input type="date" class="form-control" name="founded" id="founded" placeholder="Founded">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
                </div>
            </div>
        </form>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

=======
<?php
$acc_id = $_GET['acc_id'];

if (isset($_POST['submit'])) {

    $pic_name = $_FILES['profileImg']['name'];
    $pic_loc = $_FILES['profileImg']['tmp_name'];
    $upload_loc = 'img/' . $pic_name;

    $companyName = $_POST['companyName'];
    $companyDetails = $_POST['companyDetails'];
    $companyLocation = $_POST['companyLocation'];
    $websiteLink = $_POST['websiteLink'];
    $founded = $_POST['founded'];

    include("components/dbconnect.php");
    $sql = "INSERT INTO `companyinfo` (`acc_id`, `companyName`, `companyDetails`, `companyLocation`, `websiteLink`, `photo_loc`, `founded`) 
                            VALUES ('$acc_id', '$companyName', '$companyDetails', '$companyLocation', '$websiteLink', '$pic_name', '$founded');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        move_uploaded_file($pic_loc, $upload_loc);
        header("Location: company.php");
        echo $pic_name;
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
    <title>Company Details</title>
    <!-- <link rel="stylesheet" href="components/navstyle.css" /> -->
    <link rel="stylesheet" href="components/navstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
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
                <ul class="dropdown-menu dropdown-menu-dark">
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
        <form action="companyProfileEdit.php?acc_id=<?php echo $acc_id; ?>" method="post" enctype="multipart/form-data">
            <div class="card m-auto w-75">
                <div class="card-body">
                    <div class="container w-75">
                        <div class="col-md-3 ">
                            <div class="text-ceenter"><img src="https://cdn4.vectorstock.com/i/1000x1000/91/33/company-profile-icon-flat-design-vector-6269133.jpg" class="" alt="..." style="height:150px; width:150px; border-radius: 50%;"></div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">
                                    <h6> Upload Cover </h6>
                                </label>
                                <input type="file" class="form-control" name="profileImg">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Company Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Company Details</label>
                            <textarea class="form-control" name="companyDetails" id="companyDetails" rows="3" placeholder="Company Details"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Company Location</label>
                            <input type="text" class="form-control" name="companyLocation" id="companyLocation" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Website Link</label>
                            <input type="text" class="form-control" name="websiteLink" id="websiteLink" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Founded</label>
                            <input type="date" class="form-control" name="founded" id="founded" placeholder="Founded">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
                </div>
            </div>
        </form>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

>>>>>>> main
</html>