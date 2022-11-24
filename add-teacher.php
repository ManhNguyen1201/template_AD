<?php 
session_start();
include('connect.php');
?>
<!DOCTYPE php>
<php lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Teachers</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>

        <div class="page-wrapper">
         <?php include('header.php') ?>
         <?php include('main_menu.php') ?>
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Teachers</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="">Teachers</a></li>
                           <li class="breadcrumb-item active">Add Teachers</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="" method="POST" enctype="multipart/from-data">
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Teacher Information</span></h5>
                                 </div>
                                 <form>
                          
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>User-Name</label>
                                       <input type="text" class="form-control" name="username">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>PassWord</label>
                                       <input type="password" class="form-control" name="password">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>FullName</label>
                                       <input type="text" class="form-control" name="fullname">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <div>
                                          <input type="text" class="form-control" name="email">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Dob</label>
                                       <input type="date" class="form-control" name = "dob">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control" name="gender" >
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <div>
                                          <input type="text" class="form-control" name = "address">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mobile Number</label>
                                       <input type="text" class="form-control" name ="phonenumber">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>User_Imgae</label>
                                        <input type="file" name="userimage">
                                    </div>
                                 </div>
                                                                                            
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name ="add_teachers">Submit</button>
                                 </div>
                                 </div>
                               </form>
                               </div>
                               </div>
                               </div>
                             </div>

                           <?php
                           include 'connect.php';
                           if (isset($_POST['add_teachers'])) {
                               $username = $_POST['username'];
                               $password = $_POST['password'];
                               $fullname = $_POST['fullname'];
                               $email = $_POST['email'];
                               $dob = $_POST['dob'];
                               $gender = $_POST['gender'];
                               $address = $_POST['address'];
                               $phonenumber = $_POST['phonenumber'];
                              
                               //upload file
                              if (isset($_FILES['userimage'])) {
                              $file_image= $_FILES['userimage'];
                              $name_image= $file_image['name'];
                              move_uploaded_file($file_image['tmp_name'],'assets/img/user/' .$name_image);
                            

                               }   
                              $sql = "INSERT INTO user VALUES(NULL,' $username','$password','$fullname','$email','$dob','$gender','$address','$phonenumber','$name_image',2)";
                               $insert_user = mysqli_query($conn, $sql);
                               if ($insert_user) {
                                echo $insert_user;
                                 // header('location:teachers.php');
                                 // echo "<script>window.open('teachers.php','_self')</script>";
                                 //   echo "<script>alert('Teacher Has Been inserted successfully!')</script>";
                                   
                               } else {
                                   echo 'lỗi';
                               }
                           }
                           ?>
        
               
            </div>
         </div>
   
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</php>