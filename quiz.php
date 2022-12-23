<?php
$i = 0;
$j = 0;
$score = 0;
$qusCode = $_GET['quiz_code'];
include("components/dbconnect.php");
$sql2 = "SELECT * FROM `qus_details` WHERE qus_code='$qusCode';";
$result2 = mysqli_query($conn, $sql2);
if (isset($_POST['submit'])) {
    $selected = $_POST['ans'];
    $attemp = count($selected);
    // print_r($selected);
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo $row2['corr_option'] . " " . $selected[$j] . " ";
        if ($row2['corr_option'] == $selected[$j]) {
            $score = $score + 1;
        }
        $j += 1;
    }
    echo "Your Score" . $score;
    
    header("Location: quizResult.php?atmp=".$attemp."& score=".$score."& totalQuestion=".$j);
    $score = 0;
    $j = 0;
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="components/navstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/e06a26c5f2.js" crossorigin="anonymous"></script>
</head>

<body>

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
<<<<<<< HEAD
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
=======
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
                <a href="#">
                    <i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 30px"></i>
                    Jobs
                </a>
            </li>
            <li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Job Preparation</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Blogs</a></li>
                    <li><a class="dropdown-item" href="quizList.php">Quiz</a></li>
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
                <br>
            </li>
            <li>
                <br>
            </li>
        </ul>
>>>>>>> main
    </div>
    <br>
    <br>
    <section>
        <!-- <div class="progress">
            <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div> -->
        <br>
        <?php
        include("components/dbconnect.php");
        $sql = "SELECT * FROM `qus_details` WHERE qus_code='$qusCode';";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card w-75 m-auto">
                <div class="card-header">
                    Question No. <?php echo $i + 1 ?>
                </div>
                <div class="card-body">
                    <h3><?php echo $row['ques']; ?></h3>
                    <form action="quiz.php?quiz_code=<?php echo $row['qus_code'] ?>" method="post">
                        <input class="form-check-input" type="radio" name="ans[<?php echo $i; ?>]" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $row['option1']; ?>
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="ans[<?php echo $i; ?>]" value="2">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $row['option2']; ?>
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="ans[<?php echo $i; ?>]" value="3">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $row['option3']; ?>
                        </label>
                        <br>
                        <input class="form-check-input" type="radio" name="ans[<?php echo $i; ?>]" value="4">
                        <label class="form-check-label" for="flexRadioDefault1">
                            <?php echo $row['option4']; ?>
                        </label>

                </div>
            </div>
        <?php $i = $i + 1;
        } ?>
        <input type="submit" name="submit" class="btn btn-success" value="Submit">
        </form>
        <!-- <div class="card w-75 m-auto">
            <div class="card-header">
                Question Title
            </div>
            <div class="card-body">
                <h3>Question</h3>
                <form action="quiz.html" method="post">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Option 1
                    </label>
                    <br>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Option 2
                    </label>
                    <br>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Option 3
                    </label>
                    <br>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Option 4
                    </label>
                </form>
            </div>
        </div> -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>