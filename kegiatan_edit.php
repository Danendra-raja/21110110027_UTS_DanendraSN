<?php include('header.php'); ?>
<?php include('sidemenu.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kegiatan</h1>
    <p class="mb-4"> </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kegiatan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kegiatan_pro_edit.php">
                <?php
                
                $id = $_GET['id'];
                include 'connection.php';
                $result = mysqli_query($mysqli, "SELECT * FROM tab_kegiatan WHERE id=$id");

                $res = mysqli_fetch_array($result);
                $tanggal = $res['tanggal'];
                $jam_mulai = $res['jam_mulai'];
                $jam_selesai = $res['jam_selesai'];
                $nama_kegiatan = $res['nama_kegiatan'];
                $narasumber = $res['narasumber'];
                $foto = $res['pic'];

                ?>
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?=$tanggal?>" required>
                    </div>

                    <div class="col-lg-4">
                        <label>Jam Mulai</label>
                        <input type="time" name="jam_mulai" class="form-control" value="<?=$jam_mulai?>" required>
                    </div>

                    <div class="col-lg-4">
                    <label>Jam Selesai</label>
                        <input type="time" name="jam_selesai" class="form-control" value="<?=$jam_selesai?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <label>Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" value="<?= $nama_kegiatan?>" required>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Narasumber</label>
                        <input type="text" name="narasumber" class="form-control" value="<?=$narasumber?>" required>
                    </div>
                    <div class="col-lg-4">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control-file" value="<?=$foto?>" required>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="kegiatan.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php'); ?>