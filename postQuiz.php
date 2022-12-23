<?php
include("components/dbconnect.php");
$error = false;
$result ="";
$q_num = 1;
if (isset($_POST['submit'])) {
    $qTitle = $_POST['qusTitle'];
    $qCode = $_POST['qusCode'];
    $qDes = $_POST['qusDesc'];
    $totalQus = $_POST['totalQus'];

    $sql2 ="SELECT * FROM `qus_info` WHERE qus_code = '$qCode';";
    $result2 = mysqli_query($conn,$sql2);
    $checkCode = mysqli_num_rows($result2);
    if($checkCode > 0){
        $error = "This Question Code Already Exist";
    }
    else{
        if ($qCode != "" && $qTitle != "") {
            $sql = "INSERT INTO `qus_info` (`qus_code`,`qus_title`, `qus_des`, `total_qus`) VALUES ('$qCode', '$qTitle', '$qDes', '$totalQus');";
            $result = mysqli_query($conn, $sql);
        } else {
            $error = "Please Enter Question Code";
        }
    }
    if ($result) {
        header("Location: setQuiz.php?q_code=" . $qCode."& q_num= ". $q_num);
    }
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
</head>

<body>
    <?php
    if (!$error) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Post Successfull!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
    } else {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $error . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>




    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header><img src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0" alt="" style="height:45px; width:45px;" />
            Alumni_Linked</header>
            <ul>
            <li><a href="admin.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="quizList.php"><i class="fas fa-link"></i>Quiz</a></li>
            <!-- <li><a href="#"><i class="fas fa-stream"></i>Post Event</a></li>
            <li><a href="#"><i class="fas fa-calendar-week"></i>Post Job</a></li>
            <li><a href="#"><i class="far fa-question-circle"></i>Jobs</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Post Blog</a></li>
            <li><a href="#"><i class="far fa-envelope"></i>Blogs</a></li> -->
        </ul>
    </div>
    <br>
    <br>
    <section>
        <form action="postQuiz.php" method="post">
            <div class="card text-center m-auto w-75">
                <div class="card-header">
                    Set Question
                </div>
                <div class="card-body">

                    <h5 class="card-title">Question Title</h5>
                    <input class="form-control form-control-lg" type="text" placeholder="" name="qusTitle">
                    <br>
                    <P>Question Description</P>
                    <input class="form-control form-control-md" type="text" placeholder="Question Description" name="qusDesc">
                    <p class="card-text">Question Code and Number Of Question. </p>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Question Code" name="qusCode">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Number of Question" name="totalQus">
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Go"></a>

                    <br>
                </div>
                <div class="card-footer text-muted">
                    Alumni-Linked
                </div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>