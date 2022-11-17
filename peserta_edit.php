<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Peserta</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Peserta</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="peserta_pro_edit.php">
                    <?php
                    include_once("connection.php");
                    $nim = $_GET['nim'];
                    $result_data = mysqli_query($mysqli, "SELECT * FROM tab_peserta WHERE nim= '$nim' ");

                    $res = mysqli_fetch_array($result_data);
                    $nim = $res['nim'];
                    $nama = $res['nama'];
                    $prodi = $res['prodi'];
                    $semester = $res['semester'];
                    $kelas = $res['kelas'];
                    $no_hp = $res['no_hp'];
                    $email = $res['email'];
                    $alamat = $res['alamat'];
                    $jenis_kelamin = $res['jenis_kelamin'];
                    $foto = $res['foto'];
                    $agama = $res['agama'];
                    $tempat_lahir = $res['tempat_lahir'];
                    $tanggal_lahir = $res['tanggal_lahir'];

                    ?>
                    <input type="hidden" name="id" class="form-control" required value="<?php echo $nim; ?>">
                    <table>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>NIM</label>
                                <input type="text" class="form-control form-control-user" placeholder="NIM" name="nim" value="<?= $nim; ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Nama</label>
                                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Lengkap" name="nama" value="<?= $nama; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control form-control-user" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= $tempat_lahir; ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-user" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?= $tanggal_lahir; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label>Program Studi</label>
                                <select class="form-control form-control-user" Placeholder="Program Studi" name="prodi">
                                    <option value="0">--Pilih--</option>
                                    <option value="Teknik Informatika" <?= $prodi == 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
                                    <option value="Sistem Informasi" <?= $prodi == 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
                                </select>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label>Semester</label>
                                <select class="form-control form-control-user" Placeholder="Semester" name="semester">
                                    <option value="0">--Pilih--</option>
                                    <?php
                                    $no = 1;
                                    while ($no <= 8) {
                                    ?>
                                        <option value="<?= $no . '" ' . ($no == $semester ? "selected>" : '>') . $no; ?></option>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class=" col-sm-4 mb-3 mb-sm-0">
                                            <label>Kelas</label>
                                            <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas">
                                                <option value="0">--Pilih--</option>
                                                <option value="Pagi" <?= $kelas == 'Pagi' ? 'selected' : ''; ?>>Pagi</option>
                                                <option value="Malam" <?= $kelas == 'Malam' ? 'selected' : ''; ?>>Malam</option>
                                                <option value="Sabtu" <?= $kelas == 'Sabtu' ? 'selected' : ''; ?>>Sabtu</option>
                                                <option value="Minggu" <?= $kelas == 'Minggu' ? 'selected' : ''; ?>>Minggu</option>
                                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>No. HP</label>
                                <input type="text" class="form-control form-control-user" placeholder="No. HP" name="no_hp" value="<?= $no_hp; ?>">
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="email" class="form-control form-control-user" placeholder="Email" name="email" value="<?= $email; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Jenis Kelamin</label>
                                <select class="form-control form-control-user" Placeholder="Jenis Kelamin" name="jenis_kelamin">
                                    <option value="0">--Pilih--</option>
                                    <option value="Laki - Laki" <?= $jenis_kelamin == 'Laki - Laki' ? 'selected' : ''; ?> >Laki - Laki</option>
                                    <option value="Perempuan" <?= $jenis_kelamin == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Agama</label>
                                <select class="form-control form-control-user" data-placeholder="Agama" name="agama">
                                    <option value="0">--Pilih--</option>
                                    <option value="Islam" <?= $agama == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= $agama == 'Kristen' ? 'selected' : ''; ?>>Kristen</option>
                                    <option value="Katolik" <?= $agama == 'Katolik' ? 'selected' : ''; ?>>Katolik</option>
                                    <option value="Protestan" <?= $agama == 'Protestan' ? 'selected' : ''; ?>>Protestan</option>
                                    <option value="Budha" <?= $agama == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                                    <option value="Hindu" <?= $agama == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input maxlength="50" class="form-control" type="text" placeholder="Alamat" name="alamat" value="<?= $alamat ?>">
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" placeholder="Foto" name="foto">
                        </div>
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