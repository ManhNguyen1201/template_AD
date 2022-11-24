<?php 
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/subjects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Subjects</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
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
                        <h3 class="page-title">Course</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Course</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                       
                        <a href="add-course.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-table">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-hover table-center mb-0 datatable">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Course Name</th>
                                       <th>Description</th>
                                       <th class="text-right">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "select * from  course WHERE courseid ";
                                    $result = mysqli_query($conn,$sql);
                                    //tra ket qua 1 mang
                                    while($row=mysqli_fetch_array($result)){
                                       $courseid= $row['courseid'];
                                       $coursename= $row['coursename'];
                                       $coursedes= $row['coursedes'];
                                       
                                    ?>
                                    <tr>
                                       <td><?php echo $courseid ?></td>
                                       <td>
                                          <h2>
                                             <a><?php echo $coursename ?></a>
                                          </h2>
                                       </td>
                                        <td><?php echo $coursedes ?></td>
                                     
                                       <td class="text-right">
                                          <div class="actions">
                                             <a href="edit-course.php?id=<?php echo $courseid ?>" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="?id=<?php echo $courseid ?>" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>
                                             </a>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                    <?php
                                    if(isset($_GET["id"])){
                                       $id = $_GET["id"];
                                       $sql="DELETE FROM course where courseid= $id";
                                       $result=mysqli_query($conn,$sql);
                                       if($result) {
                                          echo "<script> alert ('Xóa thành công!')</script>";echo "<script>window.open('course.php','_self')</script>";
                  
                                       }
                                    } 
                                    ?>
                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <footer>
               <p>Copyright © 2020 Dreamguys.</p>
            </footer>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/plugins/datatables/datatables.min.js"></script>
      <script src="assets/js/script.js"></script>
      
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/subjects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>