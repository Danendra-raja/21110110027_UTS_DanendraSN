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
            <h6 class="m-0 font-weight-bold text-primary">Edit Panitia</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="panitia_pro_edit.php">
                <?php
                include_once("connection.php");
                $nim = $_GET['nim'];
                $result_data = mysqli_query($mysqli, "SELECT * FROM tab_panitia WHERE nim= '$nim' ");

                while ($res = mysqli_fetch_array($result_data)) {
                    $nama = $res['nama'];
                    $semester = $res['semester'];
                    $kelas = $res['kelas'];
                    $email = $res['email'];
                    $no_hp = $res['no_hp'];
                    $jabatan = $res['jabatan'];
                }
                ?>
                <div class="row">
                    <div class="col-lg-4">
                        <label>NIM</label>
                        <input type="text" name="nim" class="form-control" readonly required value="<?php echo $nim; ?>">
                    </div>

                    <div class="col-lg-4">
                        <label>Nama Panitia</label>
                        <input type="text" name="nama" class="form-control" required value="<?php echo $nama; ?>">
                    </div>

                    <div class="col-lg-4">
                        <label>Semester</label>
                        <select class="form-control form-control-user" Placeholder="Semester" name="semester" required>
                            <option value="0">--Pilih--</option>
                            <option value="1" <?php if ($semester == "1") {
                                                    echo "selected=selected";
                                                } ?>>1</option>
                            <option value="2" <?php if ($semester == "2") {
                                                    echo "selected=selected";
                                                } ?>>2</option>
                            <option value="3" <?php if ($semester == "3") {
                                                    echo "selected=selected";
                                                } ?>>3</option>
                            <option value="4" <?php if ($semester == "4") {
                                                    echo "selected=selected";
                                                } ?>>4</option>
                            <option value="5" <?php if ($semester == "5") {
                                                    echo "selected=selected";
                                                } ?>>5</option>
                            <option value="6" <?php if ($semester == "6") {
                                                    echo "selected=selected";
                                                } ?>>6</option>
                            <option value="7" <?php if ($semester == "7") {
                                                    echo "selected=selected";
                                                } ?>>7</option>
                            <option value="8" <?php if ($semester == "8") {
                                                    echo "selected=selected";
                                                } ?>>8</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Kelas</label>
                        <select class="form-control form-control-user" data-placeholder="Kelas" name="kelas" required>
                            <option value="0">--Pilih--</option>
                            <option value="Pagi" <?php if ($kelas == "Pagi") {
                                                        echo "selected=selected";
                                                    } ?>>Pagi</option>
                            <option value="Malam" <?php if ($kelas == "Malam") {
                                                        echo "selected=selected";
                                                    } ?>>Malam</option>
                            <option value="Sabtu" <?php if ($kelas == "Sabtu") {
                                                        echo "selected=selected";
                                                    } ?>>Sabtu</option>
                            <option value="Minggu" <?php if ($kelas == "Minggu") {
                                                        echo "selected=selected";
                                                    } ?>>Minggu</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" required value="<?= $email; ?>">
                    </div>
                    <div class="col-lg-4">
                        <label>No. HP</label>
                        <input type="text" name="no_hp" class="form-control" required value="<?php echo $no_hp; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required value="<?php echo $jabatan; ?>">
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