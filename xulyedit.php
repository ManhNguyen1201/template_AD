
                              <?php
                              include 'connect.php';
                              if (isset($_POST['edit'])) {
                                  $ma_user = $_POST['txt_userid'];
                                  $username = $_POST['txt_username'];
                                  $password = $_POST['txt_password'];
                                  $fullname = $_POST['txt_fullname'];
                                  $email = $_POST['txt_email'];
                                  $dob = $_POST['txt_dob'];
                                  $gender = $_POST['txt_gender'];
                                  $address = $_POST['txt_address'];
                                  $phonenumber = $_POST['txt_phonenumber'];
                                  //$userimage = $_FILES['userimage'];
                                  $roleid = $_POST['txt_roleid'];
                              }
                              //   $sql = "UPDATE user SET username ='$username', password = '$password', fullname = '$fullname',email ='$email',dob = '$dob', gender = '$gender', address = '$address', phonenumber = '$phonenumber', roleid = '$roleid' WHERE userid = '$ma_user' ";
                              $sql = "UPDATE `user` SET `username`='[username]',`password`='[password]',`fullname`='[fullname]',`email`='[email]',`dob`='[dob]',`gender`='[gender]',`address`='[address]',`phonenumber`='[phonenumber]',`roleid`='[roleid]' WHERE userid = '$ma_user'";
                              if (mysqli_query($conn, $sql)) {
                                  header('location: students.php');
                              } else {
                                  $result =
                                      ' Update unsuccesfull' .
                                      mysqli_error($conn);
                              }


?>
