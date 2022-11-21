
<?php 
session_start();
include('connect.php');
?>
<?php

                        include 'connect.php';
                        $userid = $_GET['userid'];
                        $sql = "SELECT * FROM user WHERE userid = $userid ";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
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
                        }

                              if (isset($_POST['edit'])) {
                                  $Tuserid = $_POST['Tuserid'];
                                  $Tusername = $_POST['Tusername'];
                                  $Tpassword = $_POST['Tpassword'];
                                  $Tfullname = $_POST['Tfullname'];
                                  $Temail = $_POST['Temail'];
                                  $Tdob = $_POST['Tdob'];
                                  $Tgender = $_POST['Tgender'];
                                  $Taddress = $_POST['Taddress'];
                                  $Tphonenumber = $_POST['Tphonenumber'];
                                  // $roleid = $_POST['roleid'];
                                  if ($_POST['Tusername']=='') {
									$Tusername=$username;
									}
									if ($_POST['Tpassword']=='') {
									$Tpassword=$password;
									}
									if ($_POST['Tfullname']=='') {
									$Tfullname=$fullname;
									}
									if ($_POST['Temail']=='') {
									$Temail=$email;
									}
									if ($_POST['Tdob']=='') {
									$Tdob=$dob;
									}
									if ($_POST['Tgender']=='') {
									$Tgender=$gender;
									}
									if ($_POST['Taddress']=='') {
									$Taddress=$address;
									}
									if ($_POST['Tphonenumber']=='') {
									$Tphonenumber=$phonenumber;
									}
                              
                             
                              $sql = "UPDATE user SET username='$Tusername',password='$Tpassword',fullname='$Tfullname',email='$Temail',dob='$Tdob',gender='$Tgender',address='$Taddress',phonenumber='$Tphonenumber',roleid=2 WHERE userid = '$userid'";
                              if (mysqli_query($conn, $sql)) {
                                  header('location: teachers.php');
                              } else {
                                  $result =
                                      ' Update unsuccesfull' .
                                      mysqli_error($conn);
                              }

}
?>
<!DOCTYPE php>
<php lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Edit-Teachers</title>
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
                        <h3 class="page-title">Edit Teachers</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="teachers.php">Teachers</a></li>
                           <li class="breadcrumb-item active">Edit Teachers</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                        
                           <form action="" method="POST">
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Teacher Information</span></h5>
                                 </div>
                                                           
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>UserName</label>
                                       <input type="text" class="form-control" name="Tusername" value="<?php echo $username; ?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>PassWord</label>
                                       <input type="password" class="form-control" name="Tpassword" value="<?php echo $password; ?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>FullName</label>
                                       <input type="text" class="form-control" name="Tfullname" value = "<?php echo $fullname; ?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <div>
                                          <input type="text" class="form-control" name="Temail" value = "<?php echo $email; ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Dob</label>
                                       <input type="date" class="form-control" name = "Tdob" value = "<?php echo $dob; ?>">
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control" name="Tgender" required value="<?php echo $gender ?>">
										<option value="Nam">Nam</option>
										<option value="Nu">Nu</option>
									</select>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <div>
                                          <input type="text" class="form-control" name = "Taddress" value = "<?php echo $address; ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mobile Number</label>
                                       <input type="text" class="form-control" name ="Tphonenumber" value = "<?php echo $phonenumber; ?>">
                                    </div>
                                 </div>
                                 <!-- <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>User_Imgae</label>
                                       <input type="file" class="form-control" name = "userimage">
                                    </div>
                                 </div> -->
                                 <!-- <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Role</label>
                                       <input type="text" class="form-control" name = "roleid" value = "<?php echo $roleid; ?>">
                                    </div>
                                 </div>    -->                                                          
                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name ="edit">SAVE</button>
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
   <!-- Mirrored from preschool.dreamguystech.com/php-template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</php>

