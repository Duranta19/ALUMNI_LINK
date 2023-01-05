<?php
<<<<<<< HEAD
$rateing = 0.0;
=======
>>>>>>> main
session_start();
$user_name = $_SESSION['username'];
$acc_id = $_SESSION['userID'];
$com_id = $_GET['com_id'];
<<<<<<< HEAD
if (!$_SESSION['loggedin'] and $_SESSION['loggedin'] != 'Organization') {
=======
if (!$_SESSION['loggedin']) {
>>>>>>> main
    header("Location: login.php");
}
include('components/dbconnect.php');
$sql = "SELECT * FROM `companyinfo` WHERE companyinfo.com_id = '$com_id';";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
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


    <section>
<<<<<<< HEAD
        <div style="background-color: #063146; color:#ffffff;">
            <div class="profile-card" style="background-color: #063146; color:#ffffff;">
                <img src="img/<?php echo $data['photo_loc']; ?>" style="height: 300px; width:auto;" alt="" class="mt-5">
                <br>
                <a style="color: #ffffff;" target="_blank" href="https://<?php echo $data['websiteLink'] ?>" class="btn btn-outline-info mt-4">
                    <h2> <?php echo $data['companyName'] ?> </h4>
                </a>

                <div class="container mt-2 justify-content-center" style="background-color: #063146; color:#ffffff;">
                    <h6><?php echo $data['companyDetails']; ?></h6>
                </div>
                <hr>
=======
        <div class="">
            <div class="profile-card">
                <img src="img/<?php echo $data['photo_loc']; ?>" style="height: 300px; width:auto;" alt="" class="cover-pic">
                <br>
                <a target="_blank" href="https://<?php echo $data['websiteLink'] ?>" class="btn btn-outline-dark">
                    <h2> <?php echo $data['companyName'] ?> </h4>
                </a>

                <div class="container py-4 mt-2 justify-content-center">
                    <h6><?php echo $data['companyDetails']; ?></h6>
                </div>
>>>>>>> main
            </div>
        </div>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-8">
<<<<<<< HEAD
                    <div class="container mt-4 justify-content-center" style="color:#063146;">
=======
                    <div class="container mt-4 justify-content-center" style="color:darkred;">
>>>>>>> main
                        <h5>Available jobs </h5>
                    </div>
                    <?php
                    $com_id = $_GET['com_id'];
                    include('components/dbconnect.php');
                    $sql2 = "SELECT * FROM `job_info` , `companyinfo` where job_info.company_id = '$com_id' AND companyinfo.com_id = '$com_id';";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row = mysqli_fetch_assoc($result2)) { ?>
                        <div class="col-md-6">
                            <div class="card" style="width: 100%; border-radius: 20px; height: 510px;">
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

                                </div>
                                <div class="mb-2 justify-content-center" style="text-align: center">
                                    <a href="applyJobs.php?com_id=<?php echo $row['com_id']; ?>" target="_blank" class="btn btn-outline-success" href="">View Description</a>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    if (isset($_POST['submit'])) {

                        include('components/dbConnect.php');

                        $review = $_POST['review'];
                        $rating = $_POST['rating'];
                        $sql = "INSERT INTO `comreview`(`acc_id`, `com_id`,`rating`, `review`) VALUES ('$acc_id','$com_id','$rating','$review')";
                        $result = mysqli_query($conn, $sql);
                    }

                    ?>
<<<<<<< HEAD
                    <div class="container mt-4 justify-content-center" style="color:#063146;">
=======
                    <div class="container mt-4 justify-content-center" style="color:darkred;">
>>>>>>> main
                        <h5> Rating & Review </h5>
                    </div>
                    <div class="container">
                        <?php
                        include('components/dbconnect.php');
                        $sql = "SELECT AVG(rating) AS AverageRating FROM comreview WHERE com_id = '$com_id';";
                        $result = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($result);
                        ?>
                        <i class="fas fa-star" style=" color: #fd4; font-size: 30px;"></i>
<<<<<<< HEAD
                        <h2> <?php $rateing = round((float)$data['AverageRating'],1); echo $rateing;  ?></h2>
                        <p>Out of 5</p>
                    </div>

                    <div class="card md-2" style="background-color:#063146;  border-radius: 20px;">
=======
                        <h2> <?php echo $data['AverageRating']  ?></h2>
                        <p>Out of 5</p>
                    </div>

                    <div class="card md-2" style="background-color:#212529;  border-radius: 20px;">
>>>>>>> main
                        <form action="companyProfile.php?com_id=<?php echo $com_id ?>" method="post">
                            <div class="form-check card-header px-5">
                                <div class="row">
                                    <div class="col">
<<<<<<< HEAD
                                        <!-- <label for="rating1" class="fas fa-star" style="font-size: 20px; color: #fd4;"></label> -->
                                        <input class="form-check-input fas fa-star" style=" color: #fd4; font-size: 30px; margin:auto;" value="1" type="radio" name="rating" id="rating1">
                                    </div>
                                    <div class="col">
                                        <!-- <label for="rating2" class="fas fa-star" style=" font-size: 20px;color: #fd4;"></label> -->
                                        <input class="form-check-input fas fa-star" style=" color: #fd4; font-size: 30px; margin:auto;" value="2" type="radio" name="rating" id="rating2">
                                    </div>
                                    <div class="col">
                                        <!-- <label for="rating3" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label> -->
                                        <input class="form-check-input fas fa-star" style=" color: #fd4; font-size: 30px; margin:auto;" value="3" type="radio" name="rating" id="rating3">
                                    </div>
                                    <div class="col">
                                        <!-- <label for="rating4" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label> -->
                                        <input class="form-check-input fas fa-star" style=" color: #fd4; font-size: 30px; margin:auto;" value="4" type="radio" name="rating" id="rating4">
                                    </div>
                                    <div class="col">
                                        <!-- <label for="rating5" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label> -->
                                        <input class="form-check-input fas fa-star" style=" color: #fd4; font-size: 30px; margin:auto;" value="5" type="radio" name="rating" id="rating5">
=======
                                        <label for="rating1" class="fas fa-star" style="font-size: 20px; color: #fd4;"></label>
                                        <input class="form-check-input" style=" color: #fd4;" value="1" type="radio" name="rating" id="rating1">
                                    </div>
                                    <div class="col">
                                        <label for="rating2" class="fas fa-star" style=" font-size: 20px;color: #fd4;"></label>
                                        <input class="form-check-input" value="2" type="radio" name="rating" id="rating2">
                                    </div>
                                    <div class="col">
                                        <label for="rating3" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label>
                                        <input class="form-check-input" value="3" type="radio" name="rating" id="rating3">
                                    </div>
                                    <div class="col">
                                        <label for="rating4" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label>
                                        <input class="form-check-input" value="4" type="radio" name="rating" id="rating4">
                                    </div>
                                    <div class="col">
                                        <label for="rating5" class="fas fa-star" style="font-size: 20px;color: #fd4;"></label>
                                        <input class="form-check-input" value="5" type="radio" name="rating" id="rating5">
>>>>>>> main
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control" name="review" id="review" rows="3" placeholder="Write a review"></textarea>
                            </div>
                            <div class="card-footer" style="text-align: center;">
<<<<<<< HEAD
                                <button type="submit" style="width: 40%;" class="btn btn-outline-info" id="submit" name="submit">Post</button>
=======
                                <button type="submit" style="width: 40%;" class="btn btn-secondary" id="submit" name="submit">Post</button>
>>>>>>> main
                            </div>
                        </form>
                    </div>
                    <hr>
                    <p class="mt-4" style="text-align: center;"> <b>What People are saying</b> </p>
                    <?php
                    include('components/dbconnect.php');
                    $sql2 = "SELECT * FROM `comreview` WHERE com_id = '$com_id';";
                    $result2 = mysqli_query($conn, $sql2);
                    while ($row = mysqli_fetch_assoc($result2)) {
                    ?>
                        <div class="card mt-2" style=" margin: auto; background-color:#ffffff ; border-radius: 15px;">
                            <div class="card-body">
                                <h6 class="card-title"><i class="fas fa-user-alt"></i> Anonymous User &nbsp; <i class="fas fa-star" style=" font-size: 20px; color: #fd4;"> </i> <?php echo $row['rating'] ?></h6>
                                <p class="card-text"> <?php echo $row['review'] ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>



    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>