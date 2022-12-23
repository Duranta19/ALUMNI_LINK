<?php
session_start();
include('components/dbconnect.php');
$catagory = $_SESSION['cat'];
$acc_id = $_SESSION['userID'];
if (isset($_POST['deleteEvent'])) {
    $eid = $_POST['evIdToDelete'];
    // echo $eid;
    $sql5 = "DELETE FROM `event_info` WHERE event_id = '$eid';";
    $result5 = mysqli_query($conn, $sql5);
}

if (isset($_POST['deletePost'])) {
    $pid = $_POST['pIdToDelete'];
    // echo $pid;
    $sql6 = "DELETE FROM `communitypost` WHERE post_id= '$pid';";
    $result6 = mysqli_query($conn, $sql6);
}
if (isset($_POST['deleteCmnt'])) {
    $cid = $_POST['cIdToDelete'];
    // echo $cid;
    $sql7 = "DELETE FROM `communitycomment` WHERE comment_id = '$cid';";
    $result7 = mysqli_query($conn, $sql7);
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
    <link rel="stylesheet" href="components/navstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>

    <style>
        .logo {
            width: 180px;
            height: 180px;
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

    <?php
    if ($catagory == 'Student' or $catagory == 'Alumni') { ?>
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
    <?php } ?>
    <section>
        <!-- cover -->
        <div class="contayiner" style="height: 300px; width:100%; background-color: #D5DEEB;border-radius: 0px 0px 43px 43px;">
            <div>
                <img src="img/R.54cd6d754c85e71ad31f2fbbfd8f238c.png" class="img logo" alt="...">
            </div>
        </div>
        <br>

        <div class="container">

            <div class="container">
                <h6>Events</h6>
                <table class="table caption-top">
                    <caption>Event</caption>
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('components/dbconnect.php');
                        $sql1 = "SELECT * FROM `event_info` WHERE acc_id='$acc_id'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                        ?>
                            <tr>
                                <td><?php echo $row1['event_title']; ?></td>
                                <td><?php echo $row1['date']; ?></td>
                                <td>
                                    <form action="controllPanel.php" method="post">
                                        <input type="hidden" name="evIdToDelete" value="<?php echo $row1['event_id']; ?>">
                                        <button type="submit" name="deleteEvent" class="btn btn-dark btn-sm">Delete
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <br><br>
            <hr>

            <div class="container">
                <h6>Post</h6>
                <table class="table caption-top">
                    <caption>Post</caption>
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('components/dbconnect.php');
                        $sql2 = "SELECT * FROM `communitypost` WHERE acc_id='$acc_id'";
                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                            <tr>
                                <td><?php echo $row2['communityPost_titel']; ?></td>
                                <td><?php echo $row2['communityPost_details']; ?></td>
                                <td>
                                    <form action="controllPanel.php" method="post">
                                        <input type="hidden" name="pIdToDelete" value="<?php echo $row2['post_id']; ?>">
                                        <button type="submit" name="deletePost" class="btn btn-dark btn-sm">Delete
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <br><br>
            <hr>

            <div class="container">
                <h6>Comment</h6>
                <table class="table caption-top">
                    <caption>Comment</caption>
                    <thead>
                        <tr>
                            <th scope="col">Post Title</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('components/dbconnect.php');
                        $sql3 = "SELECT * FROM `communitycomment` INNER JOIN communitypost on communitypost.post_id=communitycomment.post_id
                        and communitycomment.acc_id =$acc_id";
                        $result3 = mysqli_query($conn, $sql3);
                        while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                            <tr>
                                <td><?php echo $row3['communityPost_titel']; ?></td>
                                <td><?php echo $row3['comment']; ?></td>
                                <td>
                                    <form action="controllPanel.php" method="post">
                                        <input type="hidden" name="cIdToDelete" value="<?php echo $row3['comment_id']; ?>">
                                        <button type="submit" name="deleteCmnt" class="btn btn-dark btn-sm">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>