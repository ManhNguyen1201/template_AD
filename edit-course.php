<?php
session_start();
include 'connect.php';
?>
<?php
$id= $_GET["id"];
$sql = "SELECT * FROM course WHERE courseid = $id";
$result = mysqli_query($conn,$sql);
//tra ket qua 1 mang
while($row =mysqli_fetch_assoc($result)){
   $courseid= $row['courseid'];
   $coursename= $row['coursename'];
   $coursedes= $row['coursedes'];
}
if (isset($_POST['update_course'])) {
    $Sname = $_POST['Sname'];
    $Sdes = $_POST['Sdes'];
    $Scourseid = $_POST['Scourseid'];

    if ($_POST['Sname']=='') {
        $Sname=$coursename;
    }
    if ($_POST['Sdes']=='') {
        $Sdes=$coursedes;
    }
    if ($_POST['Scourseid']=='') {
        $Scourseid=$courseid;
    }
    $sql_up = " UPDATE course SET coursename = '$Sname',coursedes= '$Sdes' WHERE courseid = $courseid";
    $update_course = mysqli_query($conn, $sql_up);

    if($update_course){
        header('location:course.php');
        echo "<script>alert('Course Has Been updated successfully!')</script>";
    }
   else{
        echo "loi";
        echo "$coursename||";

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
                            <h3 class="page-title">Edit Course</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="course.php">Course</a></li>
                                <li class="breadcrumb-item active">Edit Course</li>
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
                                            <h5 class="form-title"><span>Course Information</span></h5>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                <input type="text" class="form-control" name="Sname"
                                                    value="<?php echo $coursename ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Course Description</label>
                                                <input type="text" class="form-control" name="Sdes"
                                                    value="<?php echo $coursedes ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" name="update_course"
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