<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Panitia</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Panitia</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="panitia_pro_add.php">
                <div class="row">
                    <div class="col-lg-4">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Nama Panitia</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Semester</label>
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
                    </div><label>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Kelas</label>
                        <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas" required>
                            <option value="0">--Pilih--</option>
                            <option value="Pagi">Pagi</option>
                            <option value="Malam">Malam</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-lg-4">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="panitia.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>