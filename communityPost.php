<?php
session_start();
$num = 0;
$acc_id = $_SESSION['userID'];
include('components/dbconnect.php');
$sql4 = "SELECT * FROM `cmnt_notification` WHERE post_by = '15' and status ='0' ORDER BY cmnt_notification.date DESC LIMIT 10;";
$result4 = mysqli_query($conn, $sql4);
$num = mysqli_num_rows($result4);
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

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .body {
      background-color: cyan;
    }

    .container {
      background-color: rgba(221, 227, 231, 0.751);
      /* border: 1px solid rgb(0 0 110); */
      padding: 34px 19px;
      margin: 5px auto;
      border-radius: 30px;
    }

    .nav-link {
      color: #ffffff;
    }

    .nav-link:hover {
      color: #ffffff;
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
        <a href="jobsListAlumni.php">
          <i class="fa-sharp fa-solid fa-briefcase" style="font-size: 25px; margin-right: 30px"></i>
          Jobs
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Job Preparation</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Blogs</a></li>
          <li><a class="dropdown-item" href="quizList.php">Quiz</a></li>
        </ul>
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

  <ul class="nav justify-content-end">
    <li class="nav-item dropdown mb-3">
      <?php include('components/dbconnect.php');
      $sql4 = "SELECT * FROM `cmnt_notification` WHERE post_by = '$acc_id' and status ='0' ORDER BY cmnt_notification.date DESC LIMIT 10;";
      $result4 = mysqli_query($conn, $sql4);
      $num = mysqli_num_rows($result4);
      $p_id = $acc_id;
      ?>
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" id="notifications">
        <i class="fa-regular fa-bell" style="font-size: 35px; color: black; margin-right: -15px;"></i> <span class="count" style="color: #000000; font-size:14px; background:red; padding: 0px 5px; margin-right: 68px; border-radius: 50%;"><?php echo $num; ?></span></a>
      <ul class="dropdown-menu">
        <?php

        while ($row3 = mysqli_fetch_assoc($result4)) { ?>
          <li><?php echo $row3['text']; ?><a class="" href="comment.php?post_id=<?php echo $row3['post_id'] ?>">Show</a></li>

        <?php } ?>
      </ul>
    </li>
  </ul>



  <section>
    <div class="container" style="background-color: transparent; border:transparent;">
      <form action="communityPost.php" method="post">
        <label class="mt-4" for="communityPost">
          <h5>Share Your Thoughts</h5>
        </label>
        <input type="text" class="form-control mb-2" id="communityPost_titel" placeholder="Titel" name="communityPost_titel" style="width: 40%">
        <textarea class="form-control mb-2" id="communityPost_details" name="communityPost_details" placeholder="Your Post" style="width: 60%" rows="3"></textarea>
        <button type="submit" class="btn btn-dark" name="communityPost">Post</button>
      </form>

      <?php
      include('components/dbconnect.php');


      $sql3 = ("SELECT accounts.user_name , user_info.photo_loc FROM accounts, user_info WHERE accounts.acc_id= user_info.acc_id and accounts.acc_id = '$acc_id';");
      $result3 = mysqli_query($conn, $sql3);
      while ($row2 = mysqli_fetch_assoc($result3)) {
      ?>
        <?php $userName =  $row2['user_name'] ?>
        <?php $userPic =  $row2['photo_loc'] ?>
      <?php
      }

      if (isset($_POST['communityPost'])) {
        $communityPost_titel = $_POST['communityPost_titel'];
        $communityPost_details = $_POST['communityPost_details'];
        $sql = "INSERT INTO `communitypost` (`acc_id`,`userName`,`userPic`,`communityPost_details`,`communityPost_titel`) 
                          VALUES ('$acc_id','$userName','$userPic','$communityPost_details','$communityPost_titel');";
        $result = mysqli_query($conn, $sql);
      }
      ?>
      <?php
      include('components/dbconnect.php');
      $sql2 = "SELECT * FROM `communityPost` WHERE '1';";
      $result2 = mysqli_query($conn, $sql2);
      while ($row = mysqli_fetch_assoc($result2)) {
      ?>

        <div class="container">
          <div class="row ">
            <div class="col-md-1">
              <img src="img/<?php echo $row['userPic'] ?>" width="60" height="60" style="border-radius: 50%;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            </div>
            <div class="col-md-4 mt-3">
              <h5><?php echo $row['userName'] ?></h6>
            </div>
            <div class="col-5">
            </div>
            <div class="col-md-2">
              <p><?php echo "Date & Time <br>" . $row['dateTime'] ?> </p>
            </div>
          </div>
          <h2 class="mt-4"><?php echo $row['communityPost_titel'] ?></h2>
          <p><?php echo $row['communityPost_details'] ?></p>
          <div class="d-grid gap-2 d-md-flex justify-content-end" style="text-align: center">
            <a href="comment.php?post_id=<?php echo $row['post_id'] ?>" class="btn btn-dark">Details</a>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#notifications").on("click", function() {
        // console.log("Success");
        var val = "<?php echo $p_id;?>";
        $.ajax({
          url: "components/readNotifications.php",
          data: { val : val },
          success: function(result4) {
            console.log(result4);
          }
        });
      });
    });
  </script>
</body>

</html>