<?php
include("components/dbconnect.php");
$qus_code = $_GET['q_code'];
$qus_num = $_GET['q_num'];
echo $qus_num;
$msgg = "";
if(isset($_POST['set'])){

    $qus = $_POST['qus'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $corrOption = $_POST['corrOption'];
    echo $qus;
    if($qus != "" && $option1 != "" && $option2 != "" && $option3 != "" && $option4 != "" && $corrOption != ""){
        $sql = "INSERT INTO `qus_details` (`qus_code`, `ques`, `option1`, `option2`, `option3`, `option4`, `corr_option`) 
                VALUES ('$qus_code', '$qus', '$option1', '$option2', '$option3', '$option4', '$corrOption');";
        $result = mysqli_query($conn,$sql);
        if($result){
            $qus_num = (int)$qus_num +1;
            header("Location: setQuiz.php?q_code=" . $qus_code."& q_num= ". $qus_num);
        }
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

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header><img src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0" alt="" style="height:45px; width:45px;" />
            Alumni_Linked</header>
        <ul>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="#"><i class="fas fa-link"></i>Set Question</a></li>
            <li><a href="#"><i class="fas fa-stream"></i>Post Event</a></li>
            <li><a href="#"><i class="fas fa-calendar-week"></i>Post Job</a></li>
            <li><a href="#"><i class="far fa-question-circle"></i>Jobs</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Post Blog</a></li>
            <li><a href="#"><i class="far fa-envelope"></i>Blogs</a></li>
        </ul>
    </div>
    <br>
    <br>
    <section>
        <form action="setQuiz.php?q_code=<?php echo $qus_code; ?> & q_num=<?php echo $qus_num; ?>" method="post">
            <div class="card m-auto w-75">
                <h5 class="card-header"><?php echo $qus_code; ?></h5>
                <div class="card-body">
                    <p>
                        <label for="formGroupExampleInput" class="form-label">Question No.</label>
                        <input type="text" class="form-control" Value="<?php echo $qus_num;?>" style="height: 25px; width: 100px;">
                    </p>

                    <div class="container w-75">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Question</label>
                            <input type="text" class="form-control" name="qus" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Option 1</label>
                            <input type="text" class="form-control" name="option1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Option 2</label>
                            <input type="text" class="form-control" name="option2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Option 3</label>
                            <input type="text" class="form-control" name="option3" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Option 4</label>
                            <input type="text" class="form-control" name="option4" placeholder="">
                        </div>
                    </div>

                    <label for="formGroupExampleInput" class="form-label">Correct Option Number</label>
                    <input type="number" class="form-control"  name="corrOption" style="height: 25px; width: 60px;">
                    <br>

                    <input type="submit" class="btn btn-primary" name="set" value="Set">
                </div>
            </div>
        </form>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>