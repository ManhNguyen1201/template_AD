<?php
session_start();
include 'connect.php';
$teacher = mysqli_query($conn, 'SELECT * FROM user WHERE roleid = 2');
?>
<?php
$id= $_GET["id"];
$sql = "SELECT * FROM user JOIN subject ON user.userid = subject.userid WHERE subjectid = $id";
$result = mysqli_query($conn,$sql);
//tra ket qua 1 mang
while($row =mysqli_fetch_assoc($result)){
   $subjectid= $row['subjectid'];
   $subjectname= $row['subjectname'];
   $subjectdes= $row['subjectdes'];
   $userid= $row['userid'];
   $fullname= $row['fullname'];


    $fullname = $row['fullname'];
}
if (isset($_POST['update_subject'])) {
    $Sname = $_POST['Sname'];
    $Sdes = $_POST['Sdes'];
    $Suerid = $_POST['Suserid'];

    if ($_POST['Sname']=='') {

		$Sname=$subjectname;
	}
	if ($_POST['Sdes']=='') {
		$Sdes=$subjectdes;
	}
	if ($_POST['Suserid']=='') {
		$Suerid=$userid;
	}
    $sql_up = " UPDATE subject SET subjectname = '$Sname',subjectdes= '$Sdes',userid='$Suerid' WHERE subjectid = $subjectid";
	$update_subject = mysqli_query($conn, $sql_up);

	if($update_subject){
		header('location:subjects.php');
		echo "<script>alert('Subject Has Been updated successfully!')</script>";
	}
   else{
		echo "loi";
		echo "$subjectname||";


   }

}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preschool.dreamguystech.com/html-template/edit-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

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
                            <h3 class="page-title">Edit Subject</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subjects.html">Subject</a></li>
                                <li class="breadcrumb-item active">Edit Subject</li>
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
                                                <input type="text" class="form-control" name="Sname"
                                                    value="<?php echo $subjectname ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Subject Description</label>
                                                <input type="text" class="form-control" name="Sdes"
                                                    value="<?php echo $subjectdes ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Teacher</label>

                                                <select class="form-control" name="Suserid" required
                                                    value="<?php echo $userid ?>">
                                                    <option value="<?php echo $userid ?>"><?php echo $fullname ?>
                                                    </option>
                                                    <!-- <option value="<?php echo $userid ?>"><?php echo $fullname ?></option> -->
                                                    <?php foreach ($teacher as $key => $value) { ?>
                                                    <option value="<?php echo $value['userid'] ?>">
                                                        <?php echo $value['fullname'] ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="update_subject"
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
<!-- Mirrored from preschool.dreamguystech.com/html-template/edit-subject.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->


</html>