<?php
session_start();
include("connect.php");
$teacher=mysqli_query($conn,"SELECT * FROM user WHERE roleid= 2");
if(isset($_POST['insert_subject'])){

   $subjectname = $_POST['Sname'];
   $subjectdes = $_POST['Sdes'];
   $userid = $_POST['Suserid'];   
   // Getting the image, audio from the field
/* $music_image  = $_FILES['music_image']['name'];
   $music_image_tmp = $_FILES['music_image']['tmp_name'];
   $music_audio  = $_FILES['music_audio']['name'];
   $music_audio_tmp = $_FILE*/      
   

   $sql = " INSERT INTO subject VALUES (NULL,'$subjectname','$subjectname','$userid') ";
   $insert_subject = mysqli_query($conn, $sql);

   if($insert_subject){
      // header('location:subjects.php');
      echo "<script>alert('Subject Has Been inserted successfully!')</script>";
      // echo "<script>window.open('add_music.php','_self')</script>";
      echo "<script>window.open('subjects.php','_self')</script>";
   }
   else{
      echo "loi";

   }


} 
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preschool.dreamguystech.com/html-template/add-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Subject</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <?php include('header.php') ?>
        <?php include('main_menu.php') ?>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Subject</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
                                <li class="breadcrumb-item active">Add Subject</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Subject Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Subject Name</label>
                                                <input type="text" name="Sname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Subject Description</label>
                                                <input type="text" name="Sdes" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Teacher</label>
                                                <select class="form-control" name="Suserid" required value="">
                                                    <?php foreach ($teacher as $key => $value) { ?>
                                                    <option value="<?php echo $value['userid'] ?>">
                                                        <?php echo $value['fullname'] ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="insert_subject"
                                                class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
<!-- Mirrored from preschool.dreamguystech.com/html-template/add-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>