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
        <?php
        session_start();
        $user_name = $_SESSION['username'];
        $acc_id = $_SESSION['userID'];
        $p_id = $_GET['post_id'];
        include('components/dbconnect.php');
        $sql = "SELECT * FROM `communitypost` WHERE communitypost.post_id = '$p_id';";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        $numOfRows = mysqli_num_rows($result);
        $post_by = $data['acc_id'];
        $auth_name = $data['userName'];
        ?>
        <div class="container">
            <div class="row ">
                <div class="col-md-1">
                    <img src="img/<?php echo $data['userPic'] ?>" style="border-radius: 50%;" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                </div>
                <div class="col-md-4 mt-5">
                    <h5><?php echo $data['userName'] ?></h5>
                </div>
                <div class="col-5">
                </div>
                <div class="col-md-2">
                    <p><?php echo "Date & Time <br>" . $data['dateTime'] ?> </p>
                </div>
            </div>

            <div class="card" style="width: 90%; margin: auto; background-color: rgba(221, 227, 231, 0.751); border-radius: 20px;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['communityPost_titel'] ?> </h5>
                    <p class="card-text"><?php echo $data['communityPost_details'] ?></p>
                </div>
            </div>

            <br>
            <h5 class="card-title">Comments</h5>
            <hr>
            <div>

                <form action="comment.php?post_id=<?php echo $data['post_id'] ?>" method="post">
                    <textarea class="form-control mb-2" id="comments" name="comments" placeholder="Place Your Comment" style="width: 50%" rows="2"></textarea>
                    <button type="submit" class="btn btn-dark" name="comment">Post</button>
                </form>
                <?php
                include('components/dbconnect.php');
                $sql4 = ("SELECT `photo_loc` FROM user_info WHERE acc_id = '$acc_id';");
                $result4 = mysqli_query($conn, $sql4);
                while ($row2 = mysqli_fetch_assoc($result4)) {
                ?>
                    <?php $userPic =  $row2['photo_loc'] ?>
                <?php
                }
                if (isset($_POST['comment'])) {
                    $comment = $_POST['comments'];
                    $sql2 = "INSERT INTO `communitycomment` (`acc_id`,`userName`, `userPic`, `post_id`, `comment`) 
                          VALUES ('$acc_id','$user_name','$userPic','$p_id','$comment');";
                    $result2 = mysqli_query($conn, $sql2);
                    $str = $auth_name . ' Comment on your post.';
                    $sql5 = "INSERT INTO `cmnt_notification` (`post_id`, `post_by`, `text`, `cmnt_by`, `status`) VALUES ('$p_id', '$post_by', '$str', '$acc_id', '0');";
                    $result5 = mysqli_query($conn, $sql5);
                }
                ?>
                <?php
                include('components/dbconnect.php');
                $sql3 = "SELECT * FROM `communitycomment` where post_id = '$p_id' order by comment_id DESC;";
                $result3 = mysqli_query($conn, $sql3);
                while ($row = mysqli_fetch_assoc($result3)) {
                ?>
                    <div class="card mt-2" style="width: 70%; margin: auto; background-color: rgba(221, 227, 231, 0.751); border-radius: 30px;">
                        <div class="card-body">
                            <img src="img/<?php echo $row['userPic'] ?>" style="border-radius: 50%;" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <h6 class="card-title"><?php echo $row['userName'] ?> </h6>
                            <p class="card-text"> <?php echo $row['comment'] ?></p>
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