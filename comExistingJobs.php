<?php
include('components/dbconnect.php');
session_start();
if (!$_SESSION['loggedin']) {
    header("Location: login.php");
}
if(isset($_POST['deleteJob'])){
    $sl = $_POST['jIdToDelete'];
    $sql3 = "DELETE FROM `job_info` WHERE job_id = '$sl';";
    $result3 = mysqli_query($conn, $sql3);
}
?>
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

    <section>
        <ul class="nav justify-content-end">
            <li class="nav-item m-3"><a href="company.php">Home</a></li>
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
                $com_id = $_GET['com_id'];
                include('components/dbconnect.php');
                $sql2 = "SELECT * FROM `job_info` , `companyinfo` where job_info.company_id = '$com_id' AND companyinfo.com_id = '$com_id';";
                $result2 = mysqli_query($conn, $sql2);
                // $x = mysqli_num_rows($result2);
                // echo $x;
                while ($row = mysqli_fetch_assoc($result2)) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 100%; border-radius: 20px; height: 550px;">
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

                            </div>
                            <div class="mb-2 justify-content-center" style="text-align: center">
                                <form action="comExistingJobs.php?com_id=<?php echo $com_id ?>" method="post">
                                    <input type="hidden" name="jIdToDelete" value="<?php echo $row['job_id']; ?>">
                                    <button type="submit" name="deleteJob" class="btn btn-dark btn-sm">Delete</a>
                                </form>
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