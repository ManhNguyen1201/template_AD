<?php include('header.php') ?>
<div class="sidebar" id="sidebar">

            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu ">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="home.php" class="">Admin Dashboard</a></li>
                           <li><a href="teachers.php">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.php">Student Dashboard</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.php">Student List</a></li>
                           <li><a href="student-details.php">Student View</a></li>
                           <li><a href="add-student.php">Student Add</a></li>
                           
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="Teacher-list.php">Teacher List</a></li>
                           <li><a href="teacher-details.php">Teacher View</a></li>
                           <li><a href="add-teacher.php">Teacher Add</a></li>
                        
                        </ul>
                     </li>
                   <!--   <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.php">Department List</a></li>
                           <li><a href="add-department.php">Department Add</a></li>
                           <li><a href="edit-department.php">Department Edit</a></li>
                        </ul>
                     </li> -->
                     <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subjects.php">Subject List</a></li>
                           <li><a href="add-subject.php">Subject Add</a></li>
                         
                        </ul>
                     </li>
                       <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Course </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="course.php">Score List</a></li>
                           <!-- <li><a href="course-details.php">Course View</a></li> -->
                           <li><a href="add-course.php">Course Add</a></li>
                        
                        </ul>
                     </li>
                        <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Class </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="class.php">Class List</a></li>
                           <!-- <li><a href="course-details.php">Course View</a></li> -->
                           <li><a href="add-class.php">Class Add</a></li>
                        
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     <!-- <li class="submenu">
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="fees-collections.php">Fees Collection</a></li>
                           <li><a href="expenses.php">Expenses</a></li>
                           <li><a href="salary.php">Salary</a></li>
                           <li><a href="add-fees-collection.php">Add Fees</a></li>
                           <li><a href="add-expenses.php">Add Expenses</a></li>
                           <li><a href="add-salary.php">Add Salary</a></li>
                        </ul>
                     </li> -->
                     <li>
                        <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                     </li>
                     <li>
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                     </li>
                     <li>
                        <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                     </li>
                     <li>
                        <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                     </li>
                     <li>
                        <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                     </li>
                     <li>
                        <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="forgot-password.html">Forgot Password</a></li>
                           <li><a href="error-404.html">Error Page</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Others</span>
                     </li>
                     <li>
                        <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                     </li>
                     <li>
                        <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                     </li>
                     <li>
                        <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                     </li>
                     <li class="menu-title">
                        <span>UI Interface</span>
                     </li>
                     <li>
                        <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                           <li><a href="form-input-groups.html">Input Groups </a></li>
                           <li><a href="form-horizontal.html">Horizontal Form </a></li>
                           <li><a href="form-vertical.html"> Vertical Form </a></li>
                           <li><a href="form-mask.html"> Form Mask </a></li>
                           <li><a href="form-validation.html"> Form Validation </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="tables-basic.html">Basic Tables </a></li>
                           <li><a href="data-tables.html">Data Table </a></li>
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