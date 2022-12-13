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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
    <header>
      <img src="https://th.bing.com/th/id/R.54cd6d754c85e71ad31f2fbbfd8f238c?rik=ls%2bf7J5ZgkkaIQ&pid=ImgRaw&r=0" alt=""
        style="height: 45px; width: 45px" />
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
        <a href="#">
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
        <a href="#">
          <i class="fa-sharp fa-solid fa-file-circle-question" style="font-size: 25px; margin-right: 20px"></i>
          Job Preparation
        </a>
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
        <a href="logout.php" class="signout">
          <i class="fa-sharp fa-solid fa-right-from-bracket" style="font-size: 25px; margin-right: 30px"></i>
          Sign Out
        </a>
      </li>
    </ul>
  </div>

  <!-- event -->
  <section>
    <div class="container">
      <div class="row g-0">
        <div class="card mb-3">
          <img src="https://th.bing.com/th/id/OIP.fVtJLs1fL_bWCPibRdYhQQHaEK?pid=ImgDet&rs=1" class="card-img-top"
            alt="..." align="middle" style="width: 600px; height: 300px" />
          <div class="card-body">
            <h5 class="card-title">Events</h5>
            <label for="number" class="col-sm-2 col-form-label">Date: 12.10.2022</label>
            <br />
            <label for="number" class="col-sm-2 col-form-label">Time: 12:00</label>
            <div class="card-body">
              <h5 class="card-title">Description</h5>
              This is some text within a card body.
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-center" style="text-align: center">
            <button class="btn btn-outline-success me-md-2" type="button">
              Registration
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>