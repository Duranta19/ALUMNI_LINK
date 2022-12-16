<?php
    include("components/dbconnect.php");
    $acc_id = $_GET['acc_id'];
    
if(isset($_POST['submit'])){
    $about_me = $_POST['story'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phn_num = $_POST['phnNum'];

    $pic_name = $_FILES['profileImg']['name'];
    $pic_loc = $_FILES['profileImg']['tmp_name'];
    $upload_loc = 'img/'.$pic_name;

    $sch_name = $_POST['sch_name'];
    $clg_name = $_POST['clg_name'];
    $ug_u_name = $_POST['ug_u_name'];
    $g_u_name = $_POST['g_u_name'];
    $pg_u_name = $_POST['pg_u_name'];
    
    $sch_year = $_POST['sch_year'];
    $clg_year = $_POST['clg_year'];
    $ug_u_year = $_POST['ug_u_year'];
    $g_u_year = $_POST['g_u_year'];
    $pg_u_year = $_POST['pg_u_year'];
    
    $sch_result = $_POST['sch_result'];
    $clg_result = $_POST['clg_result'];
    $ug_u_result = $_POST['ug_u_result'];
    $g_u_result = $_POST['g_u_result'];
    
    $skills = $_POST['skill'];
    
    $languages = $_POST['language'];
    
    $fb_link = $_POST['fb'];
    $msg_link = $_POST['msgr'];
    $wa_link = $_POST['wa'];


    // insertIntoDatabase
    $sql = "INSERT INTO `user_info` (`acc_id`, `about_me`, `address`, `email`, `phone_num`, `photo_loc`, `school`, `college`, `uni_ug`, `uni_gr`, `uni_pg`, `ssc_year`, `hsc_year`, `ug_year`, `gr_year`, `pg_year`, `ssc_result`, `hsc_result`, `ug_result`, `pg_result`, `skills`, `language`, `facebook`, `massenger`, `whatsapp`) 
                            VALUES ('$acc_id', '$about_me', '$address', '$email', '$phn_num', '$pic_name', '$sch_name', '$clg_name', '$ug_u_name', '$g_u_name', '$pg_u_name', '$sch_year', '$clg_year', '$ug_u_year', '$g_u_year', '$pg_u_year', '$sch_result', '$clg_result', '$ug_u_result', '$g_u_result', '$skills', '$languages', '$fb_link', '$msg_link', '$wa_link');";
    $result = mysqli_query($conn,$sql);
    if($result){
        move_uploaded_file($pic_loc, $upload_loc);
        header("Location: userprofile.php");
        echo $pic_name;
    }
    else{
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
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
        .textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }
    </style>
  </head>
  <body>

    <section class="" style="justify-content:center;">
        <div class="container-fluid w-75 h-75 my-5 shadow p-3 mb-5 rounded" style="background:White;">
        <form action="editprofile.php?acc_id=<?php echo $acc_id;?>" method="post" enctype="multipart/form-data">
            <div class="row g-0">
                <div class="col-md-3 ">
                    <div class="text-ceenter"><img src="https://www.w3schools.com/howto/img_avatar.png" class="" alt="..." style="height:150px; width:150px; border-radius: 50%;"></div>
                    <div class="mb-3">
  
                            <label for="formFile" class="form-label">Upload Profile Picture</label>
                            <input type="file" class="form-control" name="profileImg">

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile Information.</h5>
                        <form action="editProfile.php?acc_id=<?php echo $acc_id;?>" method="post">

                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">About Me</label> <br>
                                <textarea id="story" name="story"rows="5" cols="40"></textarea> <br>
                                <label for="formGroupExampleInput" class="form-label">Address</label> <br>
                                <input type="text" class="form-control" name="address" id="formGroupExampleInput" placeholder="">
                            </div>

                            <!-- email&phone -->
                            <div class="row">
                                <div class="col">
                                    <label for="formGroupExampleInput" class="form-label">E-mail</label> 
                                    <input type="email" class="form-control" name="email"placeholder="e-mail" >
                                </div>
                                <div class="col">
                                    <label for="formGroupExampleInput" class="form-label">Phone Number</label> 
                                    <input type="text" class="form-control" name="phnNum" placeholder="Phone Number">
                                </div>
                            </div>
                            <hr>

                            <!-- education -->
                            <h5>Education</h5>
                            <!-- ssc -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">SSC</label> 
                                    <input type="text" class="form-control" name="sch_name" placeholder="Institution Name" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Year</label> 
                                            <input type="text" class="form-control" name="sch_year"  placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Result</label> 
                                            <input type="text" class="form-control" name="sch_result" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- hsc -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">HSC</label> 
                                    <input type="text" class="form-control" name="clg_name"placeholder="Institution Name" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Year</label> 
                                            <input type="text" class="form-control"name="clg_year" placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Result</label> 
                                            <input type="text" class="form-control"name="clg_result" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- bsc -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">B.Sc/BBA</label> 
                                    <input type="text" class="form-control" name="ug_u_name" placeholder="Institution Name" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Year</label> 
                                            <input type="text" class="form-control" name="ug_u_year" placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Result</label> 
                                            <input type="text" class="form-control" name="ug_u_result" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- msc -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">M.Sc/MBA(If Any)</label> 
                                    <input type="text" class="form-control" name="g_u_name" placeholder="Institution Name" >
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Year</label> 
                                            <input type="text" class="form-control" name="g_u_year" placeholder="" >
                                        </div>
                                        <div class="col">
                                            <label for="formGroupExampleInput" class="form-label">Result</label> 
                                            <input type="text" class="form-control" name="g_u_result" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- doct -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">Phd(If Any)</label> 
                                    <input type="text" class="form-control"name="pg_u_name" placeholder="Institution Name" >
                                </div>
                                <div class="col-sm-6">
                                    <label for="formGroupExampleInput" class="form-label">Year</label> 
                                    <input type="text" class="form-control"name="pg_u_year" placeholder="" >
                                </div>
                            </div>

                            <!-- skills -->
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><h4>Skills</h4></label>
                                <input type="text" class="form-control" name="skill" id="formGroupExampleInput">
                            </div>
                            <!-- Language -->
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label"><h4>Language</h4></label>
                                <input type="text" class="form-control" name="language" id="formGroupExampleInput">
                            </div>

                            <!-- Social -->
                            <div class="mb-3">
                                <h4>Social Links</h4>
                                <label for="formGroupExampleInput" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="fb" id="formGroupExampleInput">
                                <label for="formGroupExampleInput" class="form-label">Massenger</label>
                                <input type="text" class="form-control" name="msgr" id="formGroupExampleInput">
                                <label for="formGroupExampleInput" class="form-label">Whats App</label>
                                <input type="text" class="form-control" name="wa" id="formGroupExampleInput">
                            </div>

                            <br>
                            <input type="submit" class="btn btn-dark bb" name="submit" value="SUBMIT" style="border-radius: 20px;">
                       
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>





    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
