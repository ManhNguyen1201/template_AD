<?php
session_start();
   
include('connect.php');

if(isset($_POST['login'])){
 // Lấy dữ liệu được nhập từ form , kiểm tra so với dữ liệu ở database
	$email = $_POST['Uemail'];
	$password = $_POST['Upassword'];
 // chọn trong bảng users, dòng nào có username = $username và password = $password
	$sql="SELECT * FROM user WHERE email ='$email' AND password ='$password' ";
// Dùng hàm mysqli_query để thực thi truy vấn từ cơ sở dữ liệu và trả về kết quả
	$result = mysqli_query($conn, $sql);
 // Trả kết quả các hàng trong bảng được truy vấn --> dùng hàm //mysqli_num_row($result)
	$data = mysqli_fetch_array($result);
	$check_login = mysqli_num_rows($result);
 // Nếu tìm thấy kết quả, tức là tìm thấy trong các hàng có username = $username và password = $password ---> check_login > 0
	if (is_array($data)) {

		$_SESSION["username"] = $data ['username'];
		$_SESSION["password"] = $data ['password'];
		$_SESSION["fullname"] = $data ['fullname'];
      $_SESSION["userimage"] = $data ['userimage'];
      $_SESSION["roleid"] = $data ['roleid'];
	}
	else{
		echo"<script>alert('Incorrect account or password!')</script>";
	}
}


if (isset($_SESSION["roleid"])) {
	if ($_SESSION["roleid"]=="1") {
		header('location:home.php');
	}
	else{
	header("location:home.php");
	$_SESSION["userid"] = $data ['userid'];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Login</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     <img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form action="" method="POST">
                           <div class="form-group">
                              <input class="form-control" name="Uemail" type="text" placeholder="Email">
                           </div>
                           <div class="form-group">
                              <input class="form-control" name="Upassword" type="password" placeholder="Password">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                           </div>
                        </form>
                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="login-or">
                           <span class="or-line"></span>
                           <span class="span-or">or</span>
                        </div>
                        <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:40 GMT -->
</html>
