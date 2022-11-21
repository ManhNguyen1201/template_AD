<?php 
session_start();
include('connect.php');
$topic=mysqli_query($conn,"SELECT * FROM topic");
if(isset($_POST['insert_class'])){
	$Cname = $_POST['Cname'];
	$Cdes = $_POST['Cdes'];
	$Ctopicid = $_POST['Ctopicid'];   
	

	$sql = " INSERT INTO class VALUES (NULL,'$Cname','$Cdes','$Ctopicid') ";
	$insert_class = mysqli_query($conn, $sql);

	if($insert_class){
      // header('location:subjects.php');
		echo "<script>alert('Class Has Been inserted successfully!')</script>";
		// echo "<script>window.open('add_music.php','_self')</script>";
      echo "<script>window.open('class.php','_self')</script>";
	}
	else{
		echo "hahahahaha";

	}

} 
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Class</title>

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
                            <h3 class="page-title">Add Class</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="class.php">Class</a></li>
                                <li class="breadcrumb-item active">Add Class</li>
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
                                            <h5 class="form-title"><span>Class Details</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Class Name</label>
                                                <input type="text" name="Cname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Class Description</label>
                                                <input type="text" name="Cdes" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Class Topic</label>
                                                <select class="form-control" name="Ctopicid" required value="">
                                                    <?php foreach ($topic as $key => $value) { ?>
                                                    <option value="<?php echo $value['topicid'] ?>">
                                                        <?php echo $value['topicname'] ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="insert_class"
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

<!-- Mirrored from preschool.dreamguystech.com/html-template/add-department.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>