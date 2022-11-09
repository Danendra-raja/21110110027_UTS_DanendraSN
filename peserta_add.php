<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Peserta Baru !</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="peserta_pro_add.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>NIM</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="number" name="nim" class="form-control" placeholder="NIM" required></td>
                        </tr>
                        <tr>
                            <td>NAMA</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" required></td>
                        </tr>
                        <tr>
                            <td>PROGRAM STUDI</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <select class="form-control" Placeholder="Program Studi" name="prodi" required>
                                    <option value="0">--Pilih--</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>SEMESTER</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <select class="form-control form-control-user" Placeholder="Semester" name="semester" required>
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
                            </td>
                        </tr>
                        <tr>
                            <td>KELAS</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas" required>
                                    <option value="0">--Pilih--</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Malam">Malam</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>TEMPAT LAHIR</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" class="form-control" placeholder="cth : Jakarta" name="tempat_lahir" required></td>
                        </tr>
                        <tr>
                            <td>TANGGAL LAHIR</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="date" class="form-control" name="tanggal_lahir" required></td>
                        </tr>
                        <tr>
                            <td>NO. HP</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="number" class="form-control form-control-user" placeholder="08XXXXXXXXX" name="no_hp" required></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="email" class="form-control form-control-user" placeholder="cth : abcd@123.com" name="email" required></td>
                        </tr>
                        <tr>
                            <td>JENIS KELAMIN</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <select class="form-control form-control-user" Placeholder="Jenis Kelamin" name="jenis_kelamin" required>
                                    <option value="0">--Pilih--</option>
                                    <option value="Laki - Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>AGAMA</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <select class="form-control form-control-user" data-placeholder="Agama" name="agama" required>
                                    <option value="0">--Pilih--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>ALAMAT</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><textarea name="alamat" placeholder="Alamat Asli" required></textarea></td>
                        </tr>
                        <tr>
                            <td>FOTO</td>
                            <td>&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</td>
                            <td><input type="file" placeholder="Foto" name="foto" required></td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="peserta.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>