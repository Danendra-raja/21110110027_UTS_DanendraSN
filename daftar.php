<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Paswa</title>
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
    <style>
        .margin {
            margin-top: 7px;
        }
        body {
            background-color: orangered;
        }
        .ti{
            text-align: center;
        }
        h2{
            font-family: nunito;
            color: black;
            margin-top: -5%;
        }
        .container{
            margin-top: -30px;
        }
        label {
            color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
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
                            <div class="col-lg- d-none d-lg-block text-center"><img src="assets/paswir.png" width="250px" height="250px"></div>
                            <div class="col-lg-15 text-center">
                                <div class="p-5"> 
                                    <div class="text-center">
                                        <h2>DAFTAR PASWA</h2>
                                    </div>
                                    <form method="post" action="pro_daftar.php" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>NIM</label>
                                        <input type="number" class="form-control form-control-user" placeholder="NIM" name="nim" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Nama</label>
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Lengkap" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Program Studi</label>
                                        <select class="form-control form-control-user" Placeholder="Program Studi" name="prodi" required>
                                            <option value="0">--Pilih--</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Semester</label>
                                        <select class="form-control form-control-user" Placeholder="Semester" name="semester" required >
                                            <option value="0">--Pilih--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Kelas</label>
                                        <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas" required>
                                            <option value="0">--Pilih--</option>
                                            <option value="Pagi">Pagi</option>
                                            <option value="Malam">Malam</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control form-control-user" placeholder="Tempat Lahir" name="tempat_lahir" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-user" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Program Studi</label>
                                        <select class="form-control form-control-user" Placeholder="Program Studi" name="prodi">
                                            <option value="0">--Pilih--</option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Semester</label>
                                        <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                                            <option value="0">--Pilih--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <label>Kelas</label>
                                        <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas">
                                            <option value="0">--Pilih--</option>
                                            <option value="Pagi">Pagi</option>
                                            <option value="Malam">Malam</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <option value="Minggu">Minggu</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>No. HP</label>
                                        <input type="number" class="form-control form-control-user" placeholder="No. HP" name="no_hp" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control form-control-user" placeholder="Email" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control form-control-user" Placeholder="Jenis Kelamin" name="jenis_kelamin" required>
                                            <option value="0">--Pilih--</option>
                                            <option value="Laki - Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Agama</label>
                                        <select class="form-control form-control-user" data-placeholder="Agama" name="agama" required>
                                            <option value="0">--Pilih--</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label>Alamat</label>
                                    <textarea name="alamat" placeholder="Alamat Asli" required></textarea>
                                    <!-- <input type="text" placeholder="Alamat" name="alamat"> -->
                                </div>

                                <div class="form-group row">
                                    <label>Foto</label>
                                    <input type="file" placeholder="Foto" name="foto" required>
                                </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block">
                                <div class="margin">
                                    <a href="index.php"><input type="button" value="Return" class="btn btn-primary btn-user btn-block"></a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">Already have an account? Login!</a>
                                </div>
                            </form>
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