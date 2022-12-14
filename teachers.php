<?php 
session_start();
include('connect.php');
?>
<!DOCTYPE php>
<php lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/php-template/students.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:43 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Teacher</title>
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
                        <h3 class="page-title">Teachers</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Teachers</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <!-- <a href="#" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download</a> -->
                        <a href="add-teacher.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    <th>User_img</th>
                                       <th>User_ID</th>
                                       <th>User_Name</th>
                                       <th>PassWord</th>
                                       <th>FullName</th>
                                       <th>Email</th>
                                       <th>Dob</th>
                                       <th>Gender</th>
                                       <th>Address</th>                                    
                                       <th>Mobile Number</th>                                      
                                       <th>Role_id</th>
                                       <th class="text-right">Action

                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>  
                                    <?php
                                    include 'connect.php';
                                    $sql = 'SELECT * FROM user where roleid=2';
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {

                                        $userid = $row['userid'];
                                        $username = $row['username'];
                                        $password = $row['password'];
                                        $fullname = $row['fullname'];
                                        $email = $row['email'];
                                        $dob = $row['dob'];
                                        $gender = $row['gender'];
                                        $address = $row['address'];
                                        $phonenumber = $row['phonenumber'];
                                        $userimage = $row['userimage'];
                                        $roleid = $row['roleid'];
                                        ?>
                              
                                      <tr>                                     
                                       <td>
                                          <h2 class='table-avatar'>
                                             <a href='teacher-details.php' class='avatar avatar-sm mr-2'><img class='avatar-img rounded-circle' src='assets/img/user/<?php echo $userimage?>'alt='User Image'></a>
                                           
                                          </h2>
                                       </td>
                                       <td><?php echo $userid; ?> </td>
                                       <td><?php echo $username; ?> </td>
                                       <td><?php echo $password; ?></td>
                                       <td><?php echo $fullname; ?></td>
                                       <td><?php echo $email; ?></td>
                                       <td><?php echo $dob; ?></td>
                                       <td><?php echo $gender; ?></td>
                                       <td><?php echo $address; ?></td>
                                       <td><?php echo $phonenumber; ?></td>

                                       <td><?php echo $roleid; ?></td>

                                       <td class='text-right'>
                                       <div class='actions'>
                                         <a href="edit-teacher.php?userid=<?php echo $userid ?>" class="btn btn-sm bg-success-light mr-2">
                                             <i class="fas fa-pen"></i>
                                             </a>
                                             <a href="?userid=<?php echo $userid ?>" class="btn btn-sm bg-danger-light">
                                             <i class="fas fa-trash"></i>  
                                             </a>                                
                                       </div>
                                    </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                   <?php
                                   if(isset($_GET["userid"])){
                                      $userid = $_GET["userid"];
                                      $sql="DELETE FROM user where userid= $userid";
                                      $result=mysqli_query($conn,$sql);
                                      if($result) {
                                         echo "<script> alert ('X??a th??nh c??ng!')</script>";echo "<script>window.open('teachers.php','_self')</script>";
                                   
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
               <p>Copyright ?? 2020 Dreamguys.</p>
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
   <!-- Mirrored from preschool.dreamguystech.com/php-template/students.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->
</php>

