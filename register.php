<?php
                            //Check If form submitted, insert form data into users table. 
                if(isset($_POST['Submit'])) {
                    $namas= $_POST['nama'];
                    $usernames = $_POST['username'];
                    $passwords = md5($_POST['password']);
                    $levels=$_POST["level"];
                    //echo($judul);
                    // include database connection file
                    include_once("KONEKSI.php");

                    // Insert user data into table
                    $result = mysqli_query($mysqli,
                    "INSERT INTO user(nama,username,password,level) VALUES ('$namas','$usernames', '$passwords','$levels')");


                    // Show message when user added
                    // echo "Data added successfully. <a href='index.php'>View Data Teknologi Pangan</a>";
                    header("location:index1.php");

                }
                ?>