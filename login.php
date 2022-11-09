<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    <!-- Custom fonts for this template-->
    <link href="assets1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets1/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/logo-paswa.ico"/>
    <style>
        .margin {
            margin-top: 7px;
        }
        body {
            background-color: orangered;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"><img src="assets/paswir.png"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin - PASWA 2022</h1>
                                    </div>
                                    <?php
                                    include("connection.php");
                                    if (isset($_POST['submit'])) {
                                        $user = mysqli_real_escape_string($mysqli, $_POST['username']);
                                        $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

                                        if ($user == "" || $pass == "") {
                                            echo "<script language=javascript>
                                    alert('Username atau Password Kosong');
                                    window.location='login.php';
                                </script>";
                                        } else {
                                            $result = mysqli_query($mysqli, "SELECT * FROM tab_user 
                                WHERE username='$user' AND password=md5('$pass')")
                                                or die("Instruksi tidak ditemukan");
                                            $row = mysqli_fetch_assoc($result);

                                            if (is_array($row) && !empty($row)) {
                                                $validuser = $row['username'];
                                                $_SESSION['valid'] = $validuser;
                                                $_SESSION['id'] = $row['id'];
                                            } else {
                                                echo "<script language=javascript>
                                            alert('Username atau Password salah');
                                            window.location='login.php';
                                        </script>";
                                            }

                                            if (isset($_SESSION['valid'])) {
                                                header('Location: dashboard.php');
                                            }
                                        }
                                    } else {
                                    ?>
                                        <form class="user" method="POST" action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" aria-describedby="Username" placeholder="Enter Username" name="username">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <button name="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                            <div class="margin">
                                                <a href="index.php" class="btn btn-primary btn-user btn-block">Return</a>
                                            </div>
                                            <!-- <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block"> -->
                                        </form>
                                        <!-- <div class="margin">
                                    <a href="index.php"><button class="btn btn-primary btn-user btn-block">Return</button></a> -->
                                    <?php } ?>
                                    <!-- <div class="margin">
                                    <a href="index.php"><button class="btn btn-primary btn-user btn-block">Return</button></a> -->
                                    <div class="text-center margin">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="daftar.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets1/vendor/jquery/jquery.min.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets1/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets1/js/sb-admin-2.min.js"></script>

</body>

</html>