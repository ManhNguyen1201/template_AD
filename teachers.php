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
      <title>Preskool - Teachers</title>
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
         <div class="header">
            <div class="header-left">
               <a href="index.php" class="logo">
               <img src="assets/img/logo.png" alt="Logo">
               </a>
               <a href="index.php" class="logo logo-small">
               <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul c`lass="nav user-menu">
               <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                       <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                       <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                       <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown has-arrow">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                           <h6>Ryan Taylor</h6>
                           <p class="text-muted mb-0">Administrator</p>
                        </div>
                     </div>
                     <a class="dropdown-item" href="profile.php">My Profile</a>
                     <a class="dropdown-item" href="inbox.php">Inbox</a>
                     <a class="dropdown-item" href="login.php">Logout</a>
                  </div>
               </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.php">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.php">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.php">Student Dashboard</a></li>
                        </ul>
                     </li>
                     <li class="submenu active">
                        <a href="students.php"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.php" class="active">Student List</a></li>
                           <li><a href="student-details.php">Student View</a></li>
                           <li><a href="add-student.php">Student Add</a></li>
                           <li><a href="edit-students.php">Student Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.php">Teacher List</a></li>
                           <li><a href="teacher-details.php">Teacher View</a></li>
                           <li><a href="add-teacher.php">Teacher Add</a></li>
                           <li><a href="edit-teacher.php">Teacher Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.php">Department List</a></li>
                           <li><a href="add-department.php">Department Add</a></li>
                           <li><a href="edit-department.php">Department Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subjects.php">Subject List</a></li>
                           <li><a href="add-subject.php">Subject Add</a></li>
                           <li><a href="edit-subjects.php">Subject Edit</a></li>
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="fees-collections.php">Fees Collection</a></li>
                           <li><a href="expenses.php">Expenses</a></li>
                           <li><a href="salary.php">Salary</a></li>
                           <li><a href="add-fees-collection.php">Add Fees</a></li>
                           <li><a href="add-expenses.php">Add Expenses</a></li>
                           <li><a href="add-salary.php">Add Salary</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="holiday.php"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                     </li>
                     <li>
                        <a href="fees.php"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                     </li>
                     <li>
                        <a href="exam.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                     </li>
                     <li>
                        <a href="event.php"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                     </li>
                     <li>
                        <a href="time-table.php"><i class="fas fa-table"></i> <span>Time Table</span></a>
                     </li>
                     <li>
                        <a href="library.php"><i class="fas fa-book"></i> <span>Library</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.php">Login</a></li>
                           <li><a href="register.php">Register</a></li>
                           <li><a href="forgot-password.php">Forgot Password</a></li>
                           <li><a href="error-404.php">Error Page</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="blank-page.php"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Others</span>
                     </li>
                     <li>
                        <a href="sports.php"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                     </li>
                     <li>
                        <a href="hostel.php"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                     </li>
                     <li>
                        <a href="transport.php"><i class="fas fa-bus"></i> <span>Transport</span></a>
                     </li>
                     <li class="menu-title">
                        <span>UI Interface</span>
                     </li>
                     <li>
                        <a href="components.php"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="form-basic-inputs.php">Basic Inputs </a></li>
                           <li><a href="form-input-groups.php">Input Groups </a></li>
                           <li><a href="form-horizontal.php">Horizontal Form </a></li>
                           <li><a href="form-vertical.php"> Vertical Form </a></li>
                           <li><a href="form-mask.php"> Form Mask </a></li>
                           <li><a href="form-validation.php"> Form Validation </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="tables-basic.php">Basic Tables </a></li>
                           <li><a href="data-tables.php">Data Table </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li class="submenu">
                              <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                              <ul>
                                 <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0);"> <span>Level 1</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
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
                        <a href="add-student.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                    $sql = 'SELECT * FROM user ';
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
                                             <a href='student-details.php' class='avatar avatar-sm mr-2'><img class='avatar-img rounded-circle' src='assets/img/profiles/$userimage' alt='User Image'></a>
                                           
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
                                           <a href="edit-teacher.php?userid=<?php echo $userid; ?>">Edit </a>
                                           <a href="deletetudents.php?userid=<?php echo $userid; ?>">Xóa </a>                                    
                                       </div>
                                    </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    <?php  ?>
                                    
                                   
                                   
                                    
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
   <!-- Mirrored from preschool.dreamguystech.com/php-template/students.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->
</php>

