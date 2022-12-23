<?php
// include('components/dbConnect.php');

if (isset($_POST['submit'])) {

    include('components/dbConnect.php');
    $eventtitle = $_POST['eventtitle'];
    $eventshortdes = $_POST['esd'];
    $eventdes = $_POST['ed'];
    $registrationlink = $_POST['reglink'];
    $location = $_POST['loc'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $pic_name = $_FILES['eventImg']['name'];
    $pic_loc = $_FILES['eventImg']['tmp_name'];
    $upload_loc = 'img/' . $pic_name;

    $sql = "INSERT INTO `event_info` (`event_title`, `date`, `time`, `location`, `event_details`, `event_short_details`, `registration_link`, `event_img`) VALUES ('$eventtitle', '$date', '$time', '$location', '$eventdes', '$eventshortdes', '$registrationlink', '$pic_name')";
    $result = mysqli_query($conn, $sql);
    // $resultRows = mysqli_num_rows($result);

    if ($result) {
        move_uploaded_file($pic_loc, $upload_loc);
        header("Location: event.php");
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
            background-color: rgba(222, 233, 230, 0.516);
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
                <a href="event.html">
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
                <a href="#" class="signout">
                    <i class="fa-sharp fa-solid fa-right-from-bracket" style="font-size: 25px; margin-right: 30px"></i>
                    Sign Out
                </a>
            </li>
        </ul>
    </div>

    <ul class="nav justify-content-center">
        <li class="nav-item" style=" margin:10px;">
            <form action=" " method="GET" class="d-flex" role="search">
                <input class="form-control me-2" name="search" type="search" value="" placeholder="Search" aria-label="Search" style="border-radius: 30px">
                <button class="btn btn-dark" type="submit" style="background: #063146; border-radius:20px;">Search</button>
            </form>
        </li>
    </ul>

    <section>


        <div class="card w-75">
            <div class="card-body">
                <div class="image">
                    <img src="https://1000logos.net/wp-content/uploads/2020/11/Grameenphone-Logo.jpg" alt="">

                    <div class="row align-items-center">
                        <div class="col">
                            <b>Location</b>
                            <p class="card-text1">65 office locations</p>
                        </div>
                        <div class="col">
                            <b>Global Company Size</b>
                            <p class="card-text">10000+ Employees</p>
                        </div>
                        <div class="col">
                            <b>Industry</b>
                            <p class="card-text">Internet & Web Services</p>
                        </div>
                    </div>
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">All Amazon teams and businesses, from Prime delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking. All Amazon teams and businesses, from Prime
                        delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking.All Amazon teams and.......</p>
                </div>
            </div>
        </div>

        <div class="card w-75">
            <div class="card-body">
                <div class="image">
                <img src="https://www.webdesignerdepot.com/cdn-origin/uploads/2018/09/uber_logo.png" alt="">
                    <div class="row align-items-center">
                        <div class="col">
                            <b>Location</b>
                            <p class="card-text2">34 office locations</p>
                        </div>
                        <div class="col">
                            <b>Global Company Size</b>
                            <p class="card-text">10000+ Employees</p>
                        </div>
                        <div class="col">
                            <b>Industry</b>
                            <p class="card-text">Accounting & Tax</p>
                        </div>
                    </div>
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">Think a professional services career is nothing but spreadsheets, gray suits,
                        and corporate profits? Think again. From professional growth to pursuing your passions, careers
                        at Deloitte come with plenty of opportunities. All Amazon teams and businesses, from Prime
                        delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking.All Amazon teams and.......</p>
                </div>
            </div>
        </div>

        <div class="card w-75">
            <div class="card-body">
                <div class="image">
                <img src="https://www.yellow.ug/img/ug/h/1603300421-65-unilever.png" alt="">
                    <div class="row align-items-center">
                        <div class="col">
                            <b>Location</b>
                            <p class="card-text3">5 office locations</p>
                        </div>
                        <div class="col">
                            <b>Global Company Size</b>
                            <p class="card-text">10000+ Employees</p>
                        </div>
                        <div class="col">
                            <b>Industry</b>
                            <p class="card-text">General Merchandise & Superstores</p>
                        </div>
                    </div>
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">All Amazon teams and businesses, from Prime delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking. All Amazon teams and businesses, from Prime
                        delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking.All Amazon teams and.......</p>
                </div>
            </div>
        </div>

        <div class="card w-75">
            <div class="card-body">
                <div class="image">
                <img src="https://www.bing.com/th?id=OIP.k_MJeLBvQ2V-37mA4aNFngHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.6&pid=3.1&rm=2" alt="">
                    <div class="row align-items-center">
                        <div class="col">
                            <b>Location</b>
                            <p class="card-text4">30 office locations</p>
                        </div>
                        <div class="col">
                            <b>Global Company Size</b>
                            <p class="card-text">10000+ Employees</p>
                        </div>
                        <div class="col">
                            <b>Industry</b>
                            <p class="card-text">Information Technology Support Services</p>
                        </div>
                    </div>
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">Think a professional services career is nothing but spreadsheets, gray suits,
                        and corporate profits? Think again. From professional growth to pursuing your passions, careers
                        at Deloitte come with plenty of opportunities. All Amazon teams and businesses, from Prime
                        delivery to AWS, are guided by four
                        key
                        tenets: customer obsession rather than competitor focus, passion for invention, commitment to
                        operational excellence, and long-term thinking.All Amazon teams and.......</p>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>