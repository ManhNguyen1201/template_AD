                           
                              <?php
                              include 'connect.php';
                              if (isset($_POST['edit_students'])) {
                               
                                  $username = $_POST['username'];
                                  $password = $_POST['password'];
                                  $fullname = $_POST['fullname'];
                                  $email = $_POST['email'];
                                  $dob = $_POST['dob'];
                                  $gender = $_POST['gender'];
                                  $address = $_POST['address'];
                                  $phonenumber = $_POST['phonenumber'];
                                
                              }
                             
                              $sql = "UPDATE `user` SET `username`='[username]',`password`='[password]',`fullname`='[fullname]',`email`='[email]',`dob`='[dob]',`gender`='[gender]',`address`='[address]',`phonenumber`='[phonenumber]',`roleid`='[roleid]' WHERE userid = '$userid'";
                              if (mysqli_query($connect, $sql)) {
                                  header('location: students.php');
                              } else {
                                  $result =
                                      ' Update unsuccesfull' .
                                      mysqli_error($conn);
                              }


?>